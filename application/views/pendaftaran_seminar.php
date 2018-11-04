<!DOCTYPE html>
<html>
<head>
  <title>Pendaftaran Miniatur Undip</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- adminlte -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url()."asset/bootstrap/css/bootstrap.min.css"; ?>" type="text/css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="icon" type="image/png" href="<?php echo base_url()."bg/logo.png"; ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."asset/dist/css/AdminLTE.min.css"; ?>" type="text/css" />
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()."asset/dist/css/skins/_all-skins.min.css"; ?>" type="text/css"/>
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()."asset/plugins/iCheck/flat/blue.css"; ?>" type="text/css" />
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url()."asset/plugins/morris/morris.css"; ?>" type="text/css" />
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()."asset/plugins/jvectormap/jquery-jvectormap-1.2.2.css"; ?>"type = "text/css" />
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()."asset/plugins/datepicker/datepicker3.css"; ?>" type="text/css" />
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()."asset/plugins/daterangepicker/daterangepicker.css"; ?>" type="text/css" />
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()."asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"; ?>"type = "text/css" />



    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- input file -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url()."asset/bootstrap/css/bootstrap.min.css"; ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url()."asset/dist/css/AdminLTE.min.css"; ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- <link rel="shortcut icon" href="favicon.ico"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assetinput/css/normalize.css"; ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assetinput/css/component.css"; ?>" />

  <style>
.loginForm input[type=text], 
.loginForm input[type=email] {
  margin-bottom:10px;
  background: transparent;
  border: 0;
  outline: 0;
  border-bottom: 2px solid white;
  padding: 20px 5px;
  font-size: 20px;
  color: white;
  box-shadow: none;
}
.form-control::-webkit-input-placeholder{
  color: white;
}
.loginForm input[type=submit]{
  margin-top: 20px;
  height: 50px;
  color: white;
  border: 2px solid white;
  background: transparent;
  font-size: 20px;
}
  </style>

<script>

$(document).ready(function(){
//untuk number type
  $(function() {
    $("#nohp").keypress(function(event) {
        if (event.which != 8 && event.which != 0 && (event.which < 48 || event.which > 57)) {
            $(".alert").html("Enter only digits!").show().fadeOut(2000);
            return false;
        }
    });

    });


});


</script>



</head>

<body class="hold-transition skin-blue" style="background-image: url(<?php echo base_url()."bg/Seminar2.jpg"; ?>); background-size:cover; height:100% ; padding: 10px 10px">
<div>

  <!-- /.login-logo -->
  <div class="col-md-3">
    <input type="text" hidden>
  </div>
  <div class="col-md-6">
  <div class="box box-primary" id="box" style="background-color: #bbc2b4; opacity:0.96">
<br>
  <div class="login-logo">
    <a href="" style="color: #5c5768"><b>PENDAFTARAN PESERTA SEMINAR </b></a>
  </div>
  <div class="box-body box-profile" style="background-color: #bbc2b4;">


    <form action="" method="post" class="loginForm">
    <div class="form-group has-feedback">
        <input type="text" name="nama" class="form-control" placeholder="Nama" required="" style="border-radius: 0;">
        <span class="glyphicon glyphicon-user form-control-feedback" style="color: #fff9fe;"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email" required="" style="border-radius: 0;"> 
        <span class="glyphicon glyphicon-envelope form-control-feedback" style="color: #fff9fe;"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="nohp" id="nohp" class="form-control" placeholder="Nomor Handphone" required="" style="border-radius: 0;">
        <span class="glyphicon glyphicon-earphone form-control-feedback" style="color: #fff9fe;"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="idline" class="form-control" placeholder="Id Line" required="" style="border-radius: 0;">
        <span class="glyphicon glyphicon-phone form-control-feedback" style="color: #fff9fe;"></span>
      </div><br>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <input name = "daftar" type="submit" id="submit" class="form-control" value="Daftar"></input><br>
        </div>
        <!-- /.col -->
      </div>
        <center><u><b><h4>Alur Pendaftaran Seminar Nasional</h4></b></u></center>
        <ol style="padding: 10px 25 px">
        <li>Isi form registrasi secara online melalui miniaturundip.com
        <li>Tunggu panitia menghubungi kalian untuk mengkonfirmasi ketersediaan tempat
        <li>Setelah menerima konfirmasi, lakukan pembayaran uang pendaftaran yang dapat dilakukan melalui transfer ataupun secara langsung. 
        <li>kirimkan bukti pembayaran kepada panitia.
        <li>Registrasi selesai.
        </ol>

    </form>

  </div> <hr style="width: 95%">
        <div class="form-footer" style="padding-bottom: 15px;">
          <center><img src="<?php echo base_url()."bg/logo.png"; ?>" width="10px"> <a style="color: #fffcf9;"> Seminar Nasional Miniatur Undip 2017 &nbsp </a></center>
        </div>
  <!-- /.login-box-body -->
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

<script src="<?php echo base_url()."assetinput/js/index.js"; ?>"></script>
<!-- jQuery 2.2.3 -->

<script src="<?php echo base_url()."asset/plugins/jQuery/jquery-2.2.3.min.js"; ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()."asset/bootstrap/js/bootstrap.min.js"; ?>"></script>
</body>
</html>