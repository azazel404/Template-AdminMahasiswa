<?php

class database{

  private static $instance = null;
  private $conn ,$table,$column ="*", $query, $stmt,$attr,$param = [] ,$attr_data = [];
  private $hostname = 'localhost',
          $username = 'root',
          $password = 'gunawan02',
          $dbname   = 'adminkuliah';


  public function __construct()
  {
    try {
      $this->conn = new PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->username,$this->password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOexception $e) {
      die($e->getMessage());
    }
  }

    public static function getInstance()
    {
      if (!isset(self::$instance)) {
        self::$instance = new database();
      }
      return self::$instance;
    }

    public function __clone()
    {
      return false;
    }

    public function SetTable($table)
    {
      $this->table = $table;
      return $this;
    }

    public function SetData($column = "*")
    {
      $this->query = "SELECT $column FROM $this->table ";
      $this->column = $column;
      return $this;
    }

    public function all(){
      $this->run();
      return $this->stmt->fetchall(PDO::FETCH_OBJ);
    }

    public function first(){
      $this->run();
      return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    public function where($cols,$sign,$data,$bridge = ' AND ')
    {
      if (count($this->attr_data) == 0) {
        $bridge = "";
      }
      $this->query = "SELECT $this->column FROM $this->table WHERE";
      $this->attr_data[] = array(
          "cols" => $cols,
          "sign" => $sign,
          "data" => $data,
          "bridge" => $bridge
      );
      $this->getWhere($bridge);
      return $this;
    }

    public function orWhere($cols,$sign,$data,$bridge = " OR"){
      $this->where($cols,$sign,$data,$bridge = " OR ");
      return $this;
    }

    public function getWhere($bridge)
    {
      if (count($this->attr_data) > 1) {
        $this->attr = '';
        $this->param = [];
      }
      $x =1;
      foreach($this->attr_data as $data){

        if ($x <= count($this->attr_data)) {
          $this->attr .= $data['bridge'];
        }
        $this->attr .= $data['cols']." ".$data['sign']."?";
        $this->param[] = $data['data'];
        $x++;
      }
      return $this;
    }

    public function createData($field = array())
    {
      $kolom = implode(',',array_keys($field));
      $value = '';
      $x = 1;
      foreach ($field as $fields) {
        $this->param[] = $fields;
        $value .= '?';
          if ($x < count($field)) {
            $value .= ', ';
          }
          $x++;
      }
      $this->query = "INSERT INTO $this->table($kolom) VALUES ($value)";
      $this->run();

    }

    public function updateData($field = array())
    {
      $col ='';
      $x = 1;
      $data_count_param = count($this->param);
      foreach ($field as $fields => $data) {
        $this->param[] = $data;
        $col .= $key.'=?';

        if ($x < count($field)) {
          $value = ', ';
        }
        $x++;
      }
      for ($i=0; $i < count($data_count_param) ; $i++) {
        $this->param[] = array_shift($this->param);
      }
      $this->query = "UPDATE $this->table SET $col WHERE";
      $this->run();
    }

    public function deleteData(){
      $this->query = "DELETE FROM $this->table WHERE";
      $this->run();
    }

    public function endflush(){
      $this->attr_data = "";
      $this->param = [];
      $this->query = "";
      $this->attr = "";

    }

    public function run(){
      try {
        // var_dump($this->param);
        // die($this->query ." ". $this->attr);
        $this->stmt = $this->conn->prepare($this->query .' '.$this->attr);
        $this->stmt->execute($this->param);
        $this->endflush();
      } catch (PDOexception $e) {
        die($e->getMessage());
      }

    }

}

 ?>
