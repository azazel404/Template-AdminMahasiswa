<?php
require_once "core/init.php";

$test = database::getInstance();
if (Input::get('register')) {

  $errors = [];
  $test->SetTable('users');
  $validation= new validation();

  $validation = $validation->checked(array(
      'username' => array(
                    'required' => true,
                    'max'      => 20
                  ),
      'email'    => array(
                    'required' => true,
                     'email'   => true,
                     'max'     => 20
                  ),
      'password' => array(
                    'required' => true,
                    'max'      => 20
                  ),
      'repassword' => array(
                    'required' => true,
                    'max'      => 20,
                    'match'    => 'password'
                  )
  ));

  if ($user = $test->setData()->where('username','=',Input::get('username'))->first()) {
    $errors[] = "username has been used";
  }
  else{
    if ($validation->getPassed()) {
      $user = $test->createData([
        'username' => Input::get('username'),
        'email' => Input::get('email'),
        'password' => hash('sha256',Input::get('password'))
      ]);
      header('Location: login.php');
    }
    else{
      $errors = $validation->getError();
    }
  }
}


 ?>
