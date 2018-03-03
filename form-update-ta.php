<?php
require __DIR__.'/view/admin-header.php';
require __DIR__.'/models/database.php';
$getdata = database::getInstance();
 ?>
 <?php if (@$_GET['id']) { ?>

   <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
     <h1>Edit Form tahun angkatan</h1>
     <?php $thn_angkatan= $getdata->setTable('tahun_angkatan')->SetData()->first(); ?>
   <form class=" offset-md-1 pt-3" action="crud/update-ta.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $thn_angkatan->id ?>" />
   <div class="form-row">
     <div class="form-group col-md-6">
       <label for="tahun_angkatan">Tahun Angkatan</label>
       <input type="text" class="form-control" id="tahun_angkatan" placeholder="" name="tahun_angkatan" value="<?= $thn_angkatan->tahun_angkatan ?>">
     </div>
     <div class="form-group col-md-6">
       <label for="kode_nama">Kode Nama</label>
       <input type="text" class="form-control" id="kode_nama" placeholder="" name="kode_nama" value="<?= $thn_angkatan->kode_nama ?>">
     </div>
   </div>
   <div class="form-row">
     <div class="form-group col-md-6">
       <label for="email">Email</label>
       <input type="text" class="form-control" id="email" name="email" value="<?= $thn_angkatan->email ?>">
     </div>
   <!-- <button type="submit" class="btn btn-primary  col-md-6" name="createta">Create Data</button> -->
   <input type="submit" name="updatethn" value="Update" class="btn btn-primary col-md-6">
 </form>
 </main>
 <?php } ?>
