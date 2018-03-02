<?php
require_once "core/init.php";

$getdata = database::getInstance();

if (Input::get('createmahasiswa')) {

  $getdata->setTable('mahasiswa');
  $data_mahasiswa = $getdata->createData([
      'nama_depan'    => Input::get('namadepan'),
      'nama_belakang' => Input::get('namabelakang'),
      'alamat'        => Input::get('alamat'),
      'tgl_lahir'     => Input::get('tgl_lahir'),
      'kota'          => Input::get('kota'),
      'provinsi'      => Input::get('provinsi')
  ]);
  header('Location: form.php?page=mahasiswa');


}
if (Input::get('createjurusan')) {

  $getdata->setTable('jurusan');
  $data_jurusan = $getdata->createData([
      'agama'    => Input::get('agama'),
      'jurusan' => Input::get('jurusan'),
      'hobby'        => Input::get('hobby'),
      'eskul'     => Input::get('eskul')
  ]);
    header('Location: form.php?page=mahasiswa');
}

if (Input::get('createta')) {
  $error = [];
  $validation = new validation();
    $validation = $validation->checked(array(
      'email' => array(
                  'required' => true,
                   'email'   => true,
                   'max'     => 20
                )
    ));

    if ($validation->getPassed()) {

        $getdata->setTable('tahun_angkatan');
        $data_jurusan = $getdata->createData([
            'tahun_angkatan'    => Input::get('tahun_angkatan'),
            'kode_nama' => Input::get('kode_nama'),
            'email'        => Input::get('email')
        ]);
        var_dump($data_jurusan);
        exit();
        header('Location: form.php?page=mahasiswa');
    }
    else{
      $error[] = "failed input email";
    }
}
 ?>
