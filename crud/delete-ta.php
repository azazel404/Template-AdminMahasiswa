<?php
require_once "../models/database.php";
require_once "../models/Input.php";

if (Input::get('id')) {
$getdata = database::getInstance();
  $getdata->setTable('tahun_angkatan');
  $delete_tahun_angkatan = $getdata->where('id','=',Input::get('id'))->deleteData();
  header('Location: ../form.php?page=ta');
}
 ?>
