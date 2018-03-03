<?php
require_once "../models/database.php";
require_once "../models/Input.php";

if (Input::get('updatata')) {
  $id = Input::get('id');
  $getdata = database::getInstance();
  $getdata->setTable('tahun_angkatan');
  $update_ta = $getdata->where('id','=',$id)->updateData([
    'tahun_angkatan'    => Input::get('tahun_angkatan'),
    'kode_nama' => Input::get('kode_nama'),
    'email'        => Input::get('email')
  ]);
  header('Location: ../form.php?page=ta');
}
 ?>
