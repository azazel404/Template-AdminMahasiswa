<?php require_once "view/header.php";
  require_once "control/ctn-register.php";

 ?>

  <div class="content-header">
    <div class="container">
    <form class="form-horizontal"  method="POST" action="register.php">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2>Register Here</h2>
                <hr>
            </div>
        </div>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-9">
            <div class="col-md-6">
            <div class="form-control-feedback error-mode">
              <?php if (!empty($errors)): ?>
                  <?php foreach ($errors as $error): ?>
                  <li class="text-danger align-middle" ><?php echo $error; ?></li>
                  <?php endforeach; ?>
              <?php endif; ?>
            </div>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form-group ">
                    <label class="sr-only" for="username">username</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user""></i></div>
                        <input type="text" name="username" class="form-control" id="username"
                               placeholder="username"  autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="sr-only" for="email">Email</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                        <input type="text" name="email" class="form-control" id="email"
                               placeholder="Email" >
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="sr-only" for="password">Password</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                        <input type="password" name="password" class="form-control" id="password"
                               placeholder="Password" >
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="sr-only" for="repassword">Repassword</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                        <input type="password" name="repassword" class="form-control" id="repassword"
                               placeholder="Repassword" >
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="padding-top: 1rem">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <input type="submit" name="register" value="Register" class="btn btn-primary btn-block">
            </div>
        </div>
    </form>
</div>

  </div>
<?php require_once "view/footer.php" ?>
