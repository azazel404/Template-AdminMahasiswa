<?php
require_once "../models/database.php";
require_once "../models/Input.php";

if (Input::get('id')) {
$getdata = database::getInstance();
  $getdata->setTable('jurusan');
  $delete_jurusan = $getdata->where('id','=',Input::get('id'))->deleteData();
  header('Location: ../form.php?page=jurusan');
}
 ?>
