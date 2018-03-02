<?php

class database{

  //untuk instance design pattern
  private static $instance = null;
  //variable koneksi ,table ,kolom , fungsi query , statement prepared , atribute prepare , parameter prepared , nampung data atribute
  private $conn ,$table,$column ="*", $query, $stmt,$attr,$param = [] ,$attr_data = [];
  //koneksi database
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

    //fungsi design pattern
    public static function getInstance()
    {
      if (!isset(self::$instance)) {
        self::$instance = new database();
      }
      return self::$instance;
    }

    //fungsi agar tidak terjadi object clone / sama
    public function __clone()
    {
      return false;
    }

    //untuk mengeset table
    public function SetTable($table)
    {
      $this->table = $table;
      return $this;
    }

    //untuk megeset data / nama kolom
    public function SetData($column = "*")
    {
      $this->query = "SELECT $column FROM $this->table ";
      $this->column = $column;
      return $this;
    }

    // untuk ngeluarin fungsi dari kolom / table dengan keseluruhan
    public function all(){
      $this->run();
      return $this->stmt->fetchall(PDO::FETCH_OBJ);
    }

    //untuk ngeluarin fungsi dari kolom / table dengan 1 persatu
    public function first(){
      $this->run();
      return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    //fungsi mengeluarkan where / AND
    public function where($cols,$sign,$data,$bridge = ' AND ')
    {
      //jika attribute data cuma 1 , bridge tidak di gunakan / AND tidak digunakan
      if (count($this->attr_data) == 0) {
        $bridge = "";
      }
      //fungsi query
      $this->query = "SELECT $this->column FROM $this->table WHERE";
      //attribute data dibikin array
      $this->attr_data[] = array(
          "cols" => $cols,
          "sign" => $sign,
          "data" => $data,
          "bridge" => $bridge
      );
      //untuk menjalankan fungsi dari where dengan jembatan nya yaitu AND/ OR
      $this->getWhere($bridge);
      return $this;
    }
    //fungsi untuk menjalankan OR
    public function orWhere($cols,$sign,$data,$bridge = " OR"){
      $this->where($cols,$sign,$data,$bridge = " OR ");
      return $this;
    }

    //menjalankan fungsi jembatan nya
    public function getWhere($bridge)
    {
      //jika attribute data where yang di tampung lebih besar dari 1
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
      //mengambil keys dari array assoc
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
      //membuat array dari belakang menjadi kedepan
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
        // // die($this->attr);
        $this->stmt = $this->conn->prepare($this->query .' '.$this->attr);
        $this->stmt->execute($this->param);
        $this->endflush();
      } catch (PDOexception $e) {
        die($e->getMessage());
      }

    }

}

 ?>
