<!DOCTYPE html>
<html lang="en" class="no-js">
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
<link rel="icon" type="image/png" href="<?php echo base_url()."bg/logofavicon.png"; ?>">
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

    <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>


<script>

$(document).ready(function(){

    $("#hapus1").click(function(){
        $("#panelanggota1").hide(500);
        $("#tambah1").show(500);
        $("#tambah2").hide(500);

        $('#namaanggota1').val('');
        $('#emailanggota1').val('');
        $('#nohpanggota1').val('');
        $('#alamatanggota1').val('');
        $('#fotoktmanggota1').val('');
    });
    $("#hapus2").click(function(){
        $("#panelanggota2").hide(500);
        $("#tambah2").show(500);
        $("#tambah3").hide(500);
        $("#hapus1").show();

        $('#namaanggota2').val('');
        $('#emailanggota2').val('');
        $('#nohpanggota2').val('');
        $('#alamatanggota2').val('');
        $('#fotoktmanggota2').val('');
    });
    $("#hapus3").click(function(){
        $("#panelanggota3").hide(500);
        $("#tambah3").show(500);
        $("#hapus2").show();
        $(".green").show();

        $('#namaanggota3').val('');
        $('#emailanggota3').val('');
        $('#nohpanggota3').val('');
        $('#alamatanggota3').val('');
        $('#fotoktmanggota3').val('');
    });


    $("#tambah1").click(function(){
        $("#panelanggota1").show(500);
        $("#tambah1").hide(500);
        $("#tambah2").show(500);
         $("html,body").animate({scrollTop:$(document).height()});
          // e.preventDefault();
    });

    $("#tambah2").click(function(){
        $("#panelanggota2").show(500);
        $("#tambah2").hide(500);
        $("#tambah3").show(500);
        $("#hapus1").hide();
          $("html,body").animate({scrollTop:$(document).height()});
    });

    $("#tambah3").click(function(){
        $("#panelanggota3").show(500);
        $("#tambah3").hide(500);
        $("#hapus2").hide();
          $("html,body").animate({scrollTop:$(document).height()}); //untuk scroll
    });

  // $('#nohp').on('change keyup', function() {
  //   var sanitized = $(this).val().replace(/[^0-9]/, '');
  //   $(this).val(sanitized);
  // });
//untuk number type
  $(function() {
    $("#nohpketua").keypress(function(event) {
        if (event.which != 8 && event.which != 0 && (event.which < 48 || event.which > 57)) {
            $(".alert").html("Enter only digits!").show().fadeOut(2000);
            return false;
        }
    });

    $("#nohpanggota1").keypress(function(event) {
        if (event.which != 8 && event.which != 0 && (event.which < 48 || event.which > 57)) {
            $(".alert").html("Enter only digits!").show().fadeOut(2000);
            return false;
        }
    });

    $("#nohpanggota2").keypress(function(event) {
        if (event.which != 8 && event.which != 0 && (event.which < 48 || event.which > 57)) {
            $(".alert").html("Enter only digits!").show().fadeOut(2000);
            return false;
        }
    });

    $("#nohpanggota3").keypress(function(event) {
        if (event.which != 8 && event.which != 0 && (event.which < 48 || event.which > 57)) {
            $(".alert").html("Enter only digits!").show().fadeOut(2000);
            return false;
        }
    });

    });


});


</script>


<style type="text/css">
.uploader {
  display: block;
  clear: both;
  margin: 0 auto;
  width: 100%;
  /*max-width: 400px;*/

}
.uploader label {
  float: left;
  clear: both;
  width: 100%;
  padding: 10px 10px;
  text-align: center;
  background: #414562;
  border-radius: 7px;
  border: 3px solid #778284;
  -webkit-transition: all .2s ease;
  transition: all .2s ease;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
.uploader label:hover {
  border-color: #454cad;
}
.uploader label.hover {
  border: 3px solid #454cad;
  box-shadow: inset 0 0 0 6px #eee;
}
.uploader label.hover #start i.fa {
  -webkit-transform: scale(0.8);
          transform: scale(0.8);
  opacity: 0.3;
}
.uploader #start {
  float: left;
  clear: both;
  width: 100%;
}
.uploader #start.hidden {
  display: none;
}
.uploader #start i.fa {
  font-size: 50px;
  margin-bottom: 2px;
  -webkit-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
}
.uploader #response {
  float: left;
  clear: both;
  width: 100%;
}
.uploader #response.hidden {
  display: none;
}
.uploader #response #messages {
  margin-bottom: .5px;
}
.uploader #file-image {
  display: inline;
  margin: 0 auto .5rem auto;
  width: auto;
  height: auto;
  max-width: 180px;
}
.uploader #file-image.hidden {
  display: none;
}
.uploader #notimage {
  display: block;
  float: left;
  clear: both;
  width: 100%;
}
.uploader #notimage.hidden {
  display: none;
}
.uploader progress,
.uploader .progress {
  display: inline;
  clear: both;
  margin: 0 auto;
  width: 100%;
  max-width: 180px;
  height: 8px;
  border: 0;
  border-radius: 4px;
  background-color: #eee;
  overflow: hidden;
}
.uploader .progress[value]::-webkit-progress-bar {
  border-radius: 4px;
  background-color: #eee;
}
.uploader .progress[value]::-webkit-progress-value {
  background: -webkit-linear-gradient(left, #393f90 0%, #454cad 50%);
  background: linear-gradient(to right, #393f90 0%, #454cad 50%);
  border-radius: 4px;
}
.uploader .progress[value]::-moz-progress-bar {
  background: linear-gradient(to right, #393f90 0%, #454cad 50%);
  border-radius: 4px;
}
.uploader input[type="file"] {
  display: none;
}
.uploader div {
  margin: 0 0 .5rem 0;
  color: #5f6982;
}
.uploader .btn {
  display: inline-block;
  margin: .1px .1px 1px .1px;
  clear: both;
  font-family: inherit;
  font-weight: 700;
  font-size: 14px;
  text-decoration: none;
  text-transform: initial;
  border: none;
  border-radius: .2rem;
  outline: none;
  padding: 0 1rem;
  height: 36px;
  line-height: 36px;
  color: #fff;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  box-sizing: border-box;
  background: #454cad;
  border-color: #454cad;
  cursor: pointer;
}

@media screen and (max-width: 960px) {

  .header {
    position:inherit;
  }

  .wrap {
    width: 90%;
    margin:25px auto;
  }
  .sidebar {
    width:100%;
    margin:25px 0 0;
    float:right;
  }

  .sidebar .widget {
    padding:5%;
  }

  nav.menu ul {
    width: 100%;
  }

  nav.menu ul {
    float:inherit;
  }

  nav.menu ul li {
    float:inherit;
    margin:0;
  }

  nav.menu ul a {
    padding:15px;
    font-size: 16px;
    border-top:1px solid #1abf9f;
    border-bottom:1px solid #16a085;
  }

  .blog {
    width:90%;
  }

  .conteudo {
    float:inherit;
    margin:0 auto 25px;
    width:101%;
    border:1px solid #dedede;
    padding:5%;
    background: #fff;
  }

  .conteudo img {
    max-width: 110%;
    margin:0 0 25px -5%;
    min-width: 110%;
  }

  .conteudo .continue-lendo:hover {
    margin-left:0;
  }


}

@media screen and (max-width: 460px) {

  .left {
    background-position:center;
  }
}


    #panelanggota1{
        display: none;
    }
    #panelanggota2{
        display: none;
    }
    #panelanggota3{
        display: none;
    }


    </style>



</head>
<body class="hold-transition skin-blue layout-boxed sidebar-mini">

<div class="container">
<!-- <div class="content"> -->
<form id="file-upload-form" class="form-horizontal" method="post" action="" enctype="multipart/form-data">


    <h2 class="left" style="padding: 15px; color: #414562; border-radius: 4px; background-size:100% background-color: #FCE3C4; background-image: url(<?php echo base_url()."bg/judul.jpg"; ?>);" >
      <b>Pendaftaran Peserta</b>
    </h2><br>

    <div class="panel-group">
    <div class="panel panel-default" style="background-color: #414562; border: 3px solid #FCE3C4; color: #f0edff;" id="panelketua">
      <div class="panel-heading" style="background-color: #FCE3C4; color: #414562;">Ketua</div>
      <div class="panel-body">

            <div class="form-group">
              <label class="control-label col-sm-2">Nama Lengkap:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="namaketua" name="namaketua" required="">
                </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Email:</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="emailketua" name="emailketua" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Nomor Handphone:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nohpketua" name="nohpketua" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Alamat:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="alamatketua" name="alamatketua" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Asal Perguruan Tinggi:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="ptasal" name="ptasal" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Alamat Perguruan Tinggi:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="ptalamat"  name="ptalamat" required="">
                </div>
            </div>
             <div class="form-group">
                <label class="control-label col-sm-2">Foto Kartu Tanda Mahasiswa (KTM):</label>
                <div class="col-sm-10">
                  <br><input type="file"  id="file" placeholder="" name="attachment">
                </div>
            </div>

      </div>
    </div><br>
    <a class="btn btn-block btn-social btn-vk" id="tambah1" style="max-width: 200px; width: 100%"><i class="fa fa-user"></i>&nbsp &nbsp &nbsp Tambah Anggota 1</center></a></i></a>
    <!-- <a class="btn btn-primary" id="tambah1" style="float: left">Tambah Anggota 1</a> -->

    <div class="panel panel-default boxl" id="panelanggota1" style="background-color: #E2CAB0; background-image: url(<?php echo base_url()."bg/newanggota1.png"; ?>); color: #f0edff; background-size:auto background-repeat:no-repeat; ">
      <button type="button" class="close" id="hapus1" style="padding: 5px;">&times; </button>
      <div class="panel-heading" style="background-color: #FCE3C4; color: #414562; ">Anggota 1</div>
      <div class="panel-body">
        <div class="form-group">
              <label class="control-label col-sm-2">Nama Lengkap:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="namaanggota1" name="namaanggota1">
                </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Email:</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="emailanggota1"  name="emailanggota1">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Nomor Handphone:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nohpanggota1" name="nohpanggota1">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Alamat:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="alamatanggota1" name="alamatanggota1">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Foto Kartu tanda Mahasiswa (KTM):</label>
                <div class="col-sm-10">
                  <br><input type="file"  id="fotoktmanggota1" name="fotoktmanggota1">
                </div>
            </div>
      </div>
    </div><br>
     <a class="btn btn-block btn-social btn-vk" id="tambah2" style="display: none; max-width: 200px; width: 100%"><i class="fa fa-user"></i>&nbsp &nbsp &nbsp Tambah Anggota 2</center></a></i></a>

    <div class="panel panel-default" id="panelanggota2" style="background-color: #5c576b; background-image: url(<?php echo base_url()."bg/newanggota2.png" ?>); color: #f0edff; background-size:auto background-repeat:no-repeat;">
      <button type="button" class="close" id="hapus2" style="padding: 5px;">&times;</button>
      <div class="panel-heading" style="background-color: #FCE3C4; color: #414562;">Anggota 2</div>
      <div class="panel-body">
        <div class="form-group">
              <label class="control-label col-sm-2">Nama Lengkap:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="namaanggota2" name="namaanggota2">
                </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Email:</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="emailanggota2" name="emailanggota2">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Nomor Handphone:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nohpanggota2" name="nohpanggota2">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Alamat:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="alamatanggota2" name="alamatanggota2">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Foto Kartu Tanda Mahasiswa (KTM):</label>
                <div class="col-sm-10">
                  <br><input type="file"  id="fotoktmanggota2" name="fotoktmanggota2">
                </div>
            </div>
      </div>
    </div><br>
     <a class="btn btn-block btn-social btn-vk" id="tambah3" style="display: none; max-width: 200px; width: 100%"><i class="fa fa-user"></i>&nbsp &nbsp &nbsp Tambah Anggota 3</center></a></i></a>

    <div class="panel panel-default" id="panelanggota3" style="background-color: #5c576b; background-image: url(<?php echo base_url()."bg/newanggota1.png"; ?>); color: #f0edff; background-size:auto background-repeat:no-repeat;">
      <button type="button" class="close" id="hapus3" style="padding: 5px;">&times;</button>
      <div class="panel-heading" style="background-color: #FCE3C4; color: #414562;">Anggota 3</div>
      <div class="panel-body">
        <div class="form-group">
              <label class="control-label col-sm-2">Nama Lengkap:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="namaanggota3" name="namaanggota3">
                </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Email:</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="emailanggota3" name="emailanggota3">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Nomor Handphone:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nohpanggota3" name="nohpanggota3">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Alamat:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="alamatanggota3" name="alamatanggota3">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Foto Kartu Tanda Mahasiswa (KTM):</label>
                <div class="col-sm-10">
                  <br><input type="file"  id="fotoktmanggota3"  name="fotoktmanggota3">
                </div>
            </div>
      </div>

    </div>
  </div>
   <div class="uploader">
  <input id="file-upload" type="file" name="bukti" required=""/>

  <label for="file-upload" id="file-drag">
    <img id="file-image" src="#" alt="Preview" class="hidden">
    <div id="start">
      <i class="fa fa-download" aria-hidden="true"></i>
      <div style="color: #f0edfc">Upload Bukti Pembayaran disini</div>
      <div id="notimage" class="hidden">Please select an image</div>
      <!-- <span id="file-upload-btn" class="btn btn-primary">Pilih file</span> -->
    </div>
    <div id="response" class="hidden">
      <div id="messages"></div>
      <progress class="progress" id="file-progress" value="0">
        <span>0</span>%
      </progress>
    </div>
  </label>
  </div>


 <br><br><br><br><br>
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()."asset/plugins/jQuery/jquery-2.2.3.min.js"; ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()."asset/bootstrap/js/bootstrap.min.js"; ?>"></script>






    </center>
  <br>
  <div>
    <button type="submit" class="btn btn-block btn-primary btn-lg" name = "reg">Daftar</button>
  </div>
  <div>
    <a href="<?php echo base_url('test'); ?>">Continue</a>
  </div>
</div>
  <div><br><br></div>
</form>
</div>
<!-- </div> -->

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

    <script src="<?php echo base_url()."assetinput/js/index.js"; ?>"></script>
</body>
</html>
