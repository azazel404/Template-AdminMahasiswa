<?php
require_once "../models/database.php";
require_once "../models/Input.php";

if (Input::get('updatejurusan')) {
  $id = Input::get('id');
  $getdata = database::getInstance();
  $getdata->setTable('jurusan');
  $update_jurusan = $getdata->where('id','=',$id)->updateData([
    'agama'    => Input::get('agama'),
    'jurusan' => Input::get('jurusan'),
    'hobby'        => Input::get('hobby'),
    'eskul'     => Input::get('eskul')
  ]);
  header('Location: ../form.php?page=jurusan');
}
 ?>
