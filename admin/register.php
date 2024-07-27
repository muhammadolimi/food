<?php
session_start();
if(isset($_SESSION["uid"]) && !empty($_SESSION["uid"])){
  header("Location: register.php");
}
if(isset($_POST["reg"])){
  $_username = $_POST['username'];
  $login = $_POST['login'];
  $_password = $_POST['password'];
  $role = 'User';

  require_once('../db_users.php');

  $query = "Select * from users where login = '$login';";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result)>0) {
    ?>
    <div class="alert alert-danger" >This login is already in use</div>
    <?php
  }else{
    $query = "INSERT INTO users (`username`,`login`,`password`, `role`) VALUES ('$_username','$login','$_password', '$role');";  
    $result = mysqli_query($conn, $query);
    header("Location: login.php");
  }
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>


  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="/admin/register.php" class="h1"><b>LitHub</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

    <form action="" method="post">
      <!-- <div class="input-group mb-3">
      <label for="roles" name="role"  class="form-control">Choose a role:</label>    
      <input list="roles" name="role" class="form-control" placeholder="Role">
          <datalist id="roles">
            <option value="Admin">
            <option value="User">
          </datalist>
      </div> -->
      <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
          <input type="text" name="login" class="form-control" placeholder="Login">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="reg" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <a href="login.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
