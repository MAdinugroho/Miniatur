<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Miniatur</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url()."asset/bootstrap/css/bootstrap.min.css"; ?>" type="text/css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue layout-boxed sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>MIN</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>MiniaturUndip</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">Selamat Datang, <?php echo $this->session->userdata('login', 11); ?></span>
            </a>
          </li>

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="<?php echo site_url('hal_admin/'); ?>">
            <i class="fa fa-dashboard"></i> <span>Peserta Lomba</span>
          </a>
          </li>
        <li class="treeview">
          <a href="<?php echo site_url('seminar/'); ?>">
            <i class="fa fa-users"></i> <span>Peserta Seminar</span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo site_url('ee37972869ce2f950182a9300df04995/'); ?>">
            <i class="fa fa-share"></i> <span>Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section class="content">
    <div class="row">
      <div class="col-xs-12">
      <h2 class="text-muted text-center">Tim <?php echo $peserta->ptasal; ?></h2>
      <p class="text-muted text-center">Mendaftar pada tanggal <?php echo $peserta->tanggal_daftar; ?></p>
      <br>
      <div class="col-md-6">

          
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ketua</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Nama Lengkap</strong>

              <p class="text-muted">
                <?php echo $peserta->nama ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>

              <p class="text-muted"><?php echo $peserta->alamat ?></p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Nomor Handphone</strong>
              <p class="text-muted"><?php echo $peserta->nohp ?></p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Email</strong>

              <p class="text-muted"><?php echo $peserta->email ?></p>
            </div>
            <!-- /.box-body -->
          </div>



          <?php if($peserta2->nama !== ""){ ?> 
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Anggota 2</h3>
            </div>
          <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Nama Lengkap</strong>

              <p class="text-muted">
                <?php echo $peserta2->nama ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>

              <p class="text-muted"><?php echo $peserta2->alamat ?></p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Nomor Handphone</strong>
              <p class="text-muted"><?php echo $peserta2->nohp ?></p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Email</strong>

              <p class="text-muted"><?php echo $peserta2->email ?></p>
            </div>
            <!-- /.box-body -->
          </div> <?php } ?>

          <!-- /.box -->
        </div>      <!-- /.box-header -->
            
          

        <div class="col-md-6">
        <?php if($peserta1->nama !== ""){ ?>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Anggota 1</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Nama Lengkap</strong>

              <p class="text-muted">
                <?php echo $peserta1->nama ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>

              <p class="text-muted"><?php echo $peserta1->alamat ?></p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Nomor Handphone</strong>
              <p class="text-muted"><?php echo $peserta1->nohp ?></p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Email</strong>

              <p class="text-muted"><?php echo $peserta1->email ?></p>
            </div>
            <!-- /.box-body -->
          </div> <?php } ?>



          <?php if($peserta3->nama !== ""){ ?>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Anggota 3</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Nama Lengkap</strong>

              <p class="text-muted">
                <?php echo $peserta3->nama ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>

              <p class="text-muted"><?php echo $peserta3->alamat ?></p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Nomor Handphone</strong>
              <p class="text-muted"><?php echo $peserta3->nohp ?></p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Email</strong>

              <p class="text-muted"><?php echo $peserta3->email ?></p>
            </div>
            <!-- /.box-body -->
          </div> <?php } ?>
          
          <!-- /.box -->
        </div>    

                          
            
              </table></div></div>
                <!-- <label>*Klik 'lihat anggota' untuk melihat anggota tim yang lain</label> -->

              
        </body>

         </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
   
    <strong>Copyright &copy; 2014-2016 <a>Miniatur Undip 2017</a>.</strong> 
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()."asset/plugins/jQuery/jquery-2.2.3.min.js"; ?>" ></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()."asset/bootstrap/js/bootstrap.min.js"; ?>" ></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url()."asset/plugins/morris/morris.min.js"; ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()."asset/plugins/sparkline/jquery.sparkline.min.js"; ?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url()."asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"; ?>" ></script>
<script src="<?php echo base_url()."asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"; ?>" ></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()."asset/plugins/knob/jquery.knob.js"; ?>"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url()."asset/plugins/daterangepicker/daterangepicker.js"; ?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url()."asset/plugins/datepicker/bootstrap-datepicker.js"; ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()."asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"; ?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url()."asset/plugins/slimScroll/jquery.slimscroll.min.js"; ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url()."asset/plugins/fastclick/fastclick.js"; ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."asset/dist/js/app.min.js"; ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()."asset/dist/js/pages/dashboard.js"; ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()."asset/dist/js/demo.js"; ?>"></script>
</body>
</html>
