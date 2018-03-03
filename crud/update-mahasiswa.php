<?php
require_once "../models/database.php";
require_once "../models/Input.php";

if (Input::get('updatemahasiswa')) {
  $id = Input::get('id');
  $getdata = database::getInstance();
  $getdata->setTable('mahasiswa');
  $update_mahasiswa = $getdata->where('id','=',$id)->updateData([
    'nama_depan'    => Input::get('namadepan'),
    'nama_belakang' => Input::get('namabelakang'),
    'alamat'        => Input::get('alamat'),
    'tgl_lahir'     => Input::get('tgl_lahir'),
    'kota'          => Input::get('kota'),
    'provinsi'      => Input::get('provinsi')
  ]);
  header('Location: ../form.php?page=mahasiswa');
}
 ?>
