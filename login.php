<?php require_once "view/header.php";
  require_once "control/ctn-login.php";

 ?>

  <div class="content-header">
    <div class="container">
    <form class="form-horizontal" role="form" method="POST" action="login.php">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2>Please Login</h2>
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
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
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
                    <label class="sr-only" for="password">Password</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                        <input type="password" name="password" class="form-control" id="password"
                               placeholder="Password" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="padding-top: 1rem">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <input type="hidden" name="token" value="<?php echo token::generate(); ?>">
              <input type="submit" name="login" value="Login" class="btn btn-primary btn-block">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="padding-top: .35rem">
                <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                    <a class="btn btn-link" href="register.php">Register Here</a>
                    <span>or</span>
                    <a class="btn btn-link" href="">Forgot Your Password?</a>
                </div>
            </div>
        </div>
    </form>
</div>

  </div>
  <?php require_once "view/footer.php" ?>
