<?php
require_once "core/init.php";

$test = database::getInstance();
if (Input::get('login')) {

$errors = [];
  $test->SetTable('users');
  $validation = new validation();

  $validation = $validation->checked(array(
      'username' => array(
                    'required' => true,
                    'max'      => 20
                  ),
      'password' => array(
                    'required' => true,
                    'max'      => 20
                  )
  ));

  //jika saya kluarkan output password  dia kluar
  // $user = $test->setData('password')->first();
  // die($user->password);

if ($validation->getPassed()) {
  if ($user = $test->setData()->where('username','=',Input::get('username'))->first()) {

      $password = hash('sha256',Input::get('password'));
      if ($password == $user->password) {
        header('location: index.php');
      }
      else{
          $errors[] = "Please Input username and password valid";
      }

  }else {
    $errors[] = 'username invalid';
  }
}
else{
  //sengaja asal karna dari tdi lari ke tempat else ini gak tau knpa mungkin grgr if test setdata nya kali , bingung gmna taro nya
  $errors[] = 'saasdasd';
}
}


 ?>
