<?php
session_start();
include "../inc/koneksi.php";

if(isset($_POST['login'])){
  $user = $_POST['user'];
  $pass = md5($_POST['pass']);

	if(mysqli_num_rows(mysqli_query($con,"select * from login where username='$user' and password='$pass'")))
    {
        $tipe=mysqli_fetch_row(mysqli_query($con,"select id from login where username='$user' and password='$pass'"));
		    $_SESSION['login']='admin';
        header("location:./");
	}
	else
        $ps="
            <div class='alert alert-warning alert-dismissable' style='margin-top:20px'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
            <h4><i class='icon glyphicon glyphicon-remove'></i> Login Gagal !</h4> Salah Username atau Password :(
            </div>
        ";
		echo $ps;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
          <a href="#"><b>Login Administrator</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Silahkan Login</p>
        <form method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Username" name="user" />
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="pass" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <input type="submit" class="btn btn-primary btn-block btn-flat pull-right" value="Login" name="login"/>
              <br><br><a href="../index.php" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
            </div><!-- /.col -->
          </div>
        </form>

      </div><!-- /.login-box-body -->     
    </div><!-- /.login-box -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>
