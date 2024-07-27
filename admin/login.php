<?php

session_start();
if(isset($_SESSION["uid"]) && !empty($_SESSION["uid"]) && $_SESSION["role"] == 'Admin'){
  header("Location: index.php");
}
if(isset($_POST["logIn"])){
  $login = $_POST["login"];
  $_password = $_POST["password"];
  $role = $_POST["role"];

  require_once('../db_users.php');
  $query = "Select * from users where login = '$login';";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result)>0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION["uid"] = $row['id'];
    $_SESSION["username"] = $row["username"];
    $_SESSION["role"] = $row["role"];

    if($_SESSION["role"]=="Admin"){
      header('Location:index.php');
    }
    if($_SESSION["role"]=="User"){
      header('Location: ../books.php');
    }
  //  header('Location:index.php');
  }else{
    ?>
    <div class="alert alert-danger" >Incorrect login or password</div>
    <?php
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="/admin/login.php" class="h1"><b>LitHub</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

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
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="logIn" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->
      <p class="mb-0">
        <a href="register.php" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
