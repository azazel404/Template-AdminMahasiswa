<?php


require_once "database.php";



// pemanggilan Database
$test = database::getInstance();

// mengeset table tersebut
$test->setTable('users');


// // menampilkan isi data dari suatu table dan kolom tersebut
// $user = $test->selectData()->first();
// foreach ($user as $value) {
//   echo "$value->username"."<br>";
//
// }

// // menampilkan isi data dari suatu table dan kolom tersebut dengan 1 kolom
// $user = $test->selectData('username, id')->first();
// echo $user->username;
// echo $user->id;
$user = $test->setData()->where('username','=','hendraganteng')->first();
//pemanggilan menggunakan select id where kolom secara fleksible AND
// $user = $test->selectData()->where('username','=','hendraganteng')->where('id','=','56')->all();
// foreach ($user as  $value) {
//   echo $value->username;
// }

//pemanggilan menggunakan select id where kolom secara fleksible OR
// $user = $test->selectData()->where('username','=','hendraganteng')->orWhere('id','=','56')->all();
// foreach ($user as  $value) {
//   echo $value->username;3
// }


//gabungan OR DAN AND
// $user = $test->selectData()->where('username','=','hendraganteng')->where('username','=','hendraganteng')->orWhere('id','=','56')->all();
// // foreach ($user as  $value) {
// //   echo $value->username;
// // }

//memanggil fungsi untuk membuat data
// $test->createData([
//     "username" => "tololololololol",
//     "password" => "kok kagak kebikin",
// ]);


//memanggil untuk update database
// $test->where("username","=","golan12gzzzzz112")->update([
//     "username" => "gogolalangasdas123123123",
//     "password" => "kok kagak berubah",
// ]);

//memanggil untuk mendelete database
// $user = $test->where("password","=","kok kagak berubah")->delete();


//memanggil untuk mengurutkan data dari databases
// $user = $test->selectData()->orderBy('id','DESC')->all();
//   var_dump($user);



 ?>
