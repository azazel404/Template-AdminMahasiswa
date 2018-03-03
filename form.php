<?php
require __DIR__.'/view/admin-header.php';
require_once "models/database.php";
require_once "models/session.php";
if (!session::exists('username')) {
  header('Location: login.php');
}

$getdata = database::getInstance();
 ?>

<?php if (@$_GET['page'] == "mahasiswa") { ?>
      <?php
        $mahasiswa = $getdata->SetTable('mahasiswa')->SetData()->all();
       ?>
      <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
        <h1>Dashboard</h1>
        <div class="table-responsive col-sm-9 offset-sm-3 col-md-10 offset-md-1 pt-5">
          <table class="table table-striped">
            <thead class="thead-inverse">
              <tr>
                <th>No</th>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Alamat</th>
                <th class="text-center text-nowrap">Tanggal Lahir</th>
                <th>kota</th>
                <th>provinsi</th>
                <th colspan="2" class="text-center text-nowrap">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php foreach ($mahasiswa as $data_mahasiswa): ?>
                <td><?php echo $data_mahasiswa->id ?></td>
                <td><?php echo $data_mahasiswa->nama_depan ?></td>
                <td><?php echo $data_mahasiswa->nama_belakang ?></td>
                <td><?php echo $data_mahasiswa->alamat ?></td>
                <td><?php echo $data_mahasiswa->tgl_lahir ?></td>
                  <td><?php echo $data_mahasiswa->kota ?></td>
                    <td><?php echo $data_mahasiswa->provinsi ?></td>
                <td class="text-center text-nowrap">
                  <button type="button" class="btn btn-primary btn btn-default btn-xs">
                    <a href="form-update-mahasiswa.php?id=<?php echo $data_mahasiswa->id ?>"><span class="fa fa-pencil-square-o"></span></a>
                  </button>
                <button type="button" class="btn btn-primary btn btn-default btn-xs">
                  <a href="crud/delete-mahasiswa.php?id=<?php echo $data_mahasiswa->id ?>"><span class="fa fa-trash"></span></a>
                </button>
                </td>
              </tr>
              <tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>
<?php } ?>
<?php if (@$_GET['page'] == "jurusan") { ?>
      <?php $jurusan = $getdata->SetTable('jurusan')->SetData()->all(); ?>
      <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
        <h1>Dashboard</h1>
      </section>
        <div class="table-responsive col-sm-9 offset-sm- col-md-10 offset-md-1 pt-5">
          <table class="table table-striped">
            <thead class="thead-inverse">
              <tr>
                <th>No</th>
                <th>Agama</th>
                <th>Jurusan</th>
                <th>Hobby</th>
                <th>Ektrakulikuler</th>
                <th colspan="2" class="text-center text-nowrap">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php foreach ($jurusan as $data_jurusan): ?>
                <td><?= $data_jurusan->id ?></td>
                <td><?= $data_jurusan->agama ?></td>
                <td><?= $data_jurusan->jurusan ?></td>
                <td><?= $data_jurusan->hobby ?></td>
                <td><?= $data_jurusan->eskul ?></td>
                <td class="text-center text-nowrap">
                  <button type="button" class="btn btn-primary btn btn-default btn-xs">
                    <a href="form-update-jurusan.php?id=<?php echo $data_jurusan->id ?>"><span class="fa fa-pencil-square-o"></span></a>
                  </button>
                <button type="button" class="btn btn-primary btn btn-default btn-xs">
                  <a href="crud/delete-jurusan.php?id=<?php echo $data_jurusan->id ?>"><span class="fa fa-trash"></span></a>
                </button>
                </td>
              </tr>
              <tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>
<?php } ?>
<?php if (@$_GET['page'] == "ta") { ?>
        <?php $ta = $getdata->setTable('tahun_angkatan')->SetData()->all(); ?>
        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
          <h1>Dashboard</h1>
        </section>
          <div class="table-responsive col-sm-9 offset-sm- col-md-10 offset-md-1 pt-5">
            <table class="table table-striped">
              <thead class="thead-inverse">
                <tr>
                  <th>No</th>
                  <th>tahun Angkatan</th>
                  <th>Kode Nama</th>
                  <th>Email</th>
                  <th colspan="2" class="text-center text-nowrap">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php foreach ($ta as $key => $data_ta): ?>
                  <td><?= $data_ta->id ?></td>
                  <td><?= $data_ta->tahun_angkatan ?></td>
                  <td><?= $data_ta->kode_nama ?></td>
                  <td><?= $data_ta->email ?></td>
                  <td class="text-center text-nowrap">
                    <button type="button" class="btn btn-primary btn btn-default btn-xs">
                    <a href="form-update-ta.php?id=<?php echo $data_ta->id ?>"><span class="fa fa-pencil-square-o"></span></a>
                    </button>
                  <button type="button" class="btn btn-primary btn btn-default btn-xs">
                    <a href="crud/delete-jurusan.php?id=<?php echo $data_ta->id ?>"><span class="fa fa-trash"></span></a>
                  </button>
                  </td>
                </tr>
                <tr>
              <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

<?php } ?>

<?php require __DIR__.'/view/footer.php' ?>
