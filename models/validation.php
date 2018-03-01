<?php

class validation{

  private $_passed = false,
          $errors  = [];


  public function checked($data = [])
  {
      foreach ($data as $kolom => $rules)
      {
        foreach($rules as $colom => $value)
        {
          switch ($colom)
          {
            case "required":
              if(trim(Input::get($kolom)) == false && $value == true)
              {
                $this->adderror("please input $kolom");
              }
              break;
            case "max":
            if (strlen(Input::get($kolom)) > $value) {
              $this->adderror("please min input $kolom $value character");
            }
            break;
            case "match":
            if (Input::get($kolom) != Input::get($value)) {
              $this->adderror("input $kolom not match with $value");
            }
            break;
            case "email":
            if (!filter_var(Input::get($kolom),FILTER_VALIDATE_EMAIL) == true) {
              $this->adderror("$kolom not valid ");
            }
            break;
          }
        }
      }
      if (empty($this->_error)) {
        $this->_passed = true;
      }
      return $this;
  }


  private function adderror($error){
    $this->_error[] = $error;
  }
  public function getError(){
    return $this->_error;
  }
  public function getPassed(){
    return $this->_passed;
  }

}



 ?>
