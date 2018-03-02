<?php
require __DIR__.'/view/header.php';
require __DIR__.'/core/init.php';
 ?>
 <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
   <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <a class="navbar-brand" href="#">Dashboard</a>

   <div class="collapse navbar-collapse" id="navbarsExampleDefault">
     <ul class="navbar-nav ml-auto">
       <form class="form-inline mt-2 mt-md-0">
         <input class="form-control mr-sm-2" type="text" placeholder="Search">
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
       </form>
   </div>
 </nav>

 <div class="container-fluid">
   <div class="row">
     <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar sidebar-color">
       <div id="sidebar-wrapper">
         <div class="sidebar-title"><h2>Mahasiswa</h2><span>adminPanel</span></div>
         <ul class="sidebar-nav">
           <li class="sidebar-close"><a href="admin.php"><i class="fa fa-fw fa-close"></i></a></li>
           <li class="active"><a href="admin.php"><i class="fa fa-fw fa-home"></i><span class="nav-label">Dashboard</span></a></li>
           <li>
             <a href="#nav-dokumen" data-toggle="collapse" aria-controls="nav-dokumen"><i class="fa fa-fw fa-archive"></i><span class="nav-label">Create Data</span></a>
             <ul class="sidebar-nav-child collapse collapseable" id="nav-dokumen">
               <li><a href="form-create.php?mahasiswa=add"><i class="fa fa-fw fa-user"></i><span class="nav-label">Mahasiswa</span></a></li>
                 <li><a href="form-create.php?jurusan=add"><i class="fa fa-fw fa-user"></i><span class="nav-label">Jurusan</span></a></li>
                   <li><a href="form-create.php?ta=add"><i class="fa fa-fw fa-user"></i><span class="nav-label">Thn Angkatan</span></a></li>

             </ul>
           </li>
           <li>
             <a href="#nav-pegawai" data-toggle="collapse" aria-controls="nav-dokumen"><i class="fa fa-fw fa-archive"></i><span class="nav-label">Data List</span></a>
             <ul class="sidebar-nav-child collapse collapseable" id="nav-pegawai">
               <li><a href="form.php?page=mahasiswa"><i class="fa fa-fw fa-user"></i><span class="nav-label">Mahasiswa</span></a></li>
                 <li><a href="form.php?page=jurusan"><i class="fa fa-fw fa-user"></i><span class="nav-label">Jurusan</span></a></li>
                   <li><a href="form.php?page=ta"><i class="fa fa-fw fa-user"></i><span class="nav-label">Thn Angkatan</span></a></li>

             </ul>
           <!-- </li>
           <li><a href="#"><i class="fa fa-fw fa-cog"></i><span class="nav-label">Pengaturan</span></a></li> -->
         </ul>
         <div class="sidebar-footer">
           <button class="btn btn-default btn-block"><i class="fa fa-fw fa-power-off"><a href="logout.php"></i><span class="nav-label">logout</span></a></button>
         </div>
       </div>
       </div>
       </ul>

     </nav>

<?php if (@$_GET['page'] == "mahasiswa") { ?>

      <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
        <h1>Dashboard</h1>
      </section>
        <div class="table-responsive col-sm-9 offset-sm- col-md-10 offset-md-1 pt-5">
          <table class="table table-striped">
            <thead class="thead-inverse">
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th colspan="2" class="text-center text-nowrap">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1,001</td>
                <td>Lorem</td>
                <td>ipsum</td>
                <td>ggwp</td>
                <td class="text-center text-nowrap">
                  <button type="button" class="btn btn-primary btn btn-default btn-xs"><span class="fa fa-pencil-square-o "></span>
                  </button>
                <button type="button" class="btn btn-primary btn btn-default btn-xs"><span class="fa fa-trash"></span>
                </button>
                </td>
              </tr>
              <tr>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>
<?php } ?>
<?php if (@$_GET['page'] == "jurusan") { ?>

      <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
        <h1>Dashboard</h1>
      </section>
        <div class="table-responsive col-sm-9 offset-sm- col-md-10 offset-md-1 pt-5">
          <table class="table table-striped">
            <thead class="thead-inverse">
              <tr>
                <th>No</th>
                <th>Jurusan</th>
                <th>Hobby</th>
                <th>Ektrakulikuler</th>
                <th colspan="2" class="text-center text-nowrap">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1,001</td>
                <td>Lorem</td>
                <td>ipsum</td>
                <td>ggwp</td>
                <td class="text-center text-nowrap">
                  <button type="button" class="btn btn-primary btn btn-default btn-xs"><span class="fa fa-pencil-square-o "></span>
                  </button>
                <button type="button" class="btn btn-primary btn btn-default btn-xs"><span class="fa fa-trash"></span>
                </button>
                </td>
              </tr>
              <tr>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>
<?php } ?>
<?php if (@$_GET['page'] == "ta") { ?>

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
                <td>1,001</td>
                <td>Lorem</td>
                <td>ipsum</td>
                <td>ggwp</td>
                <td class="text-center text-nowrap">
                  <button type="button" class="btn btn-primary btn btn-default btn-xs"><span class="fa fa-pencil-square-o "></span>
                  </button>
                <button type="button" class="btn btn-primary btn btn-default btn-xs"><span class="fa fa-trash"></span>
                </button>
                </td>
              </tr>
              <tr>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>
<?php } ?>

<?php require __DIR__.'/view/footer.php' ?>
