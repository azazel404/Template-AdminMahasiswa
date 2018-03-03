<?php
require_once "../models/database.php";
require_once "../models/Input.php";

if (Input::get('id')) {
$getdata = database::getInstance();
  $getdata->setTable('mahasiswa');
  $delete_mahasiswa = $getdata->where('id','=',Input::get('id'))->deleteData();
  header('Location: ../form.php?page=mahasiswa');
}
 ?>
