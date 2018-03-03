<?php
require __DIR__.'/view/admin-header.php';
require __DIR__.'/models/database.php';
$getdata = database::getInstance();
 ?>
          <?php if (@$_GET['id']) { ?>

            <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
              <h1>Edit Form Jurusan</h1>
              <?php $jurusan = $getdata->setTable('jurusan')->SetData()->first(); ?>
            <form class=" offset-md-1 pt-3" action="crud/update-jurusan.php" method="POST">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="agama">Agama</label>
                <input type="text" class="form-control" id="agama" placeholder="" name="agama" value="<?= $jurusan->agama ?>">
              </div>
              <div class="form-group col-md-6">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" placeholder="" name="jurusan" value="<?= $jurusan->jurusan ?>">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="hobby">Hobby</label>
                <input type="text" class="form-control" id="tgl_lahir" name="hobby" value="<?= $jurusan->hobby ?>">
              </div>
              <div class="form-group col-md-6">
                <label for="eskul">Esktrakulikuler</label>
                <input type="text" class="form-control" id="eskul" name="eskul" value="<?= $jurusan->eskul?>">
              </div>
            <!-- <button type="submit" class="btn btn-primary  col-md-6" name="createjurusan">Create Data</button> -->
            <input type="submit" name="updatejurusan" value="Update" class="btn btn-primary col-md-6">
          </form>
          </main>
          <?php } ?>
