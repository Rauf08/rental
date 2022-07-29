<?php
error_reporting(null);
session_start(); 
include ("koneksi.php") ;

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login Form Design</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="assets/dist/css/template.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- style -->
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
<div style="background-color:#4C93E8;color:#fff;">
<div style="text-align:left;padding-left:10px;font-size:75px;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><center><!-- <img src="assets/gambar/logo.jpg" class="img-responsive" width="200px"/>--><font color='gray-500'><b>MANUNGGAL RENT CAR</b></color><center></h3>
                    </div>
                    <div class="panel-body" style="background-color: #0dcaf0;">
						<center>
						<img src="assets/gambar/logo.jpg" class="img-responsive"/>
						<center>
						<br>
                        <form method="post" action="aksi_login.php"  role="form">
						<?php 
						if(isset($_GET['pesan'])){
							if($_GET['pesan'] == "gagal"){
								echo "<div style='margin-bottom:5px' class='alert alert-danger alert-dismissable' role='alert'><span class='glyphicon glyphicon-warning-sign'></span><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>  Username dan Password Salah !!</div>";
							}
						}
						?>
                            <fieldset>
								<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="">
                                </div>
                                <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input class="form-control" placeholder="Password" id="password" name="password" type="password" required="">
                                </div>
								                              
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-hand-o-right"></i> Login <i class="fa fa-hand-o-left"></i></button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/dist/js/template.js"></script>

</body>

</html>
