<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/fav.png" src="">
    <title>SIMPEG POLRES KARAWANG</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/simplebar.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">

    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Icons CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/feather.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/uppy.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.timepicker.css">

    <!-- Autocomplete -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/daterangepicker.css">
    <link rel="stylesheet" href="http://cdn.datatables.net/plug-ins/a5734b29083/integration/bootstrap/3/dataTables.bootstrap.css"/>
    <link rel="stylesheet" href="http://cdn.datatables.net/responsive/1.0.2/css/dataTables.responsive.css"/>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"/>

    <!-- App CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/app-light.css" id="lightTheme" disabled>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/app-dark.css" id="darkTheme">

    <!-- Sweat AlertS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
    <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />

    <style>
      #load{
        width: 100%;
        height: 100%;
        position: fixed;
        text-indent: 100%;
        background: #e0e0e0 url('./assets/img/loader.gif') no-repeat center;
        z-index: 1;
        opacity: 0.6;
        background-size: 8%;
      }
    </style>
  </head>

  <div id="load"></div>
  <!--Admin page-->
  <?php if($this->session->userdata('role_id')=== '1'):?>
  <body class="vertical  dark  ">
    <div class="wrapper">
      <a href="#" id="scroll"><span></span></a>
      <!-- Header -->
      <nav class="topnav navbar navbar-light">
        <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
          <i class="fe fe-menu navbar-toggler-icon"></i>
        </button>
        <!--<form class="form-inline mr-auto searchform text-muted">
          <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
        </form>-->
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="dark">
              <i class="fe fe-sun fe-16"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="avatar avatar-sm mt-2">
                <img  src="<?php echo base_url(); ?>./assets/avatars/face.png" alt="..." class="avatar-img rounded-circle">
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item"  style="text-transform: uppercase;" href="<?php echo base_url().'admin/profile' ?>"><?= $akun['nama_lengkap']; ?></a>
              <a class="dropdown-item" href="<?php echo base_url().'admin/profile' ?>">Profile</a>
              <a class="dropdown-item" href="<?php echo base_url().'admin/profile/ganti_password'?>">Ganti Password</a>
              <a class="dropdown-item" href="<?php echo base_url().'auth/logout'?>">Logout</a>
            </div>
          </li>
        </ul>
      </nav>
    </div><!-- End Header -->
 
      <!-- nav bar -->
    <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
      <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
      </a>
        <nav class="vertnav navbar navbar-light">
          <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="">
             <img src="<?= base_url() ?>assets/img/logo2.png" alt="" title="" /><p>
              <p class="flex-fill text-center small text-muted nav-heading mb-1">SISTEM INFORMASI PEGAWAI</p><br>
              <p class="flex-fill text-center small text-muted nav-heading mb-1" style="font-size:12px">KENAIKAN GAJI BERKALA</p>
            </a>
          </div>
            <span class="text-muted nav-heading mb-1">Navigator</span>
              </ul>
            </li>
          </ul>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link" href="<?= base_url('admin/c_admin') ?>">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">Dashboard</span>
                <span class="badge badge-pill badge-primary  " style="margin-top: 2px ; padding-top: 5px;">Home</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a href="#anggota" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-user fe-16"></i>
                <span class="ml-3 item-text">Anggota</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="anggota">
                <a class="nav-link pl-3" href="<?php echo base_url().'anggota/index/'?>aktif"><span class="ml-1">Anggota Aktif</span></a>
                <!--<a class="nav-link pl-3" href="<?php echo base_url().'anggota_masuk'?>"><span class="ml-1">Anggota Masuk</span></a>-->
                <a class="nav-link pl-3" href="<?php echo base_url().'anggota/index/'?>keluar"><span class="ml-1">Anggota Keluar</span></a>
                <a class="nav-link pl-3" href="<?php echo base_url().'anggota/index/'?>pensiun"><span class="ml-1">Anggota Pensiun</span></a>
                <a class="nav-link pl-3" href="<?php echo base_url().'anggota/index/'?>meninggal"><span class="ml-1">Anggota Meninggal</span></a>
              </ul>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="<?php echo base_url().'kgb'?>">
                <i class="fe fe-mail fe-16"></i>
                <span class="ml-3 item-text">KGB</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a href="#report" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-folder fe-16"></i>
                <span class="ml-3 item-text">Report</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="report">
                <a class="nav-link pl-3" href="<?php echo base_url().'report'?>"><span class="ml-1">Cetak Surat KGB</span></a>
               <!-- <a class="nav-link pl-3" href=""><span class="ml-1">Report Excel Anggota</span></a>-->
              </ul>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="<?php echo base_url().'user'?>">
                <i class="fe fe-users fe-16"></i>
                <span class="ml-3 item-text">User Setup</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a href="#fileman" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-settings fe-16"></i>
                <span class="ml-3 item-text">Kepagawaian</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="fileman">
                <a class="nav-link pl-3" href="<?php echo base_url().'pangkat'?>"><span class="ml-1">Pangkat</span></a>
                <a class="nav-link pl-3" href="<?php echo base_url().'jabatan'?>"><span class="ml-1">Jabatan</span></a>
                <a class="nav-link pl-3" href="<?php echo base_url().'bagian'?>"><span class="ml-1">Bagian</span></a>
                <a class="nav-link pl-3" href="<?php echo base_url().'golongan'?>"><span class="ml-1">Golongan</span></a>
                <a class="nav-link pl-3" href="<?php echo base_url().'gaji_pokok'?>"><span class="ml-1">Gaji Pokok</span></a>
              </ul>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="<?php echo base_url().'kontak'?>">
                <i class="fe fe-settings fe-16"></i>
                <span class="ml-3 item-text">Kontak BAGSUMDA</span>
              </a>
            </li>
          </ul>
          <div class="btn-box w-100 mt-4 mb-1">
            <a href="<?php echo base_url().'auth/logout'?>" class="btn mb-2 btn-primary btn-lg btn-block">
              <i class="fe fe-log-out fe-16 small"></i>
              <span class="ml-2 item-text small">Logout</span>
            </a>
          </div>
        </nav>
      </aside><!-- Endnav bar-->

      <!-- Content-->
        <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
                    <div id="page-wrapper">
                     <div id="page-inner">
                         <?php echo $contents; ?>
                       </div>
                    </div>
               </div> 
            </div>
          </div>
        </main>
      <!-- End Content-->
       
      <!-- Footer -->      
            <div class="d-flex flex-column min-vh-100">
              <main class="flex-fill"></main>
              <footer>
                <div class="card shadow footer-copyright text-center py-3" >© 2021 Copyright SIMPEG POLRES KARAWANG
                </div>
              </footer>
            </div><!-- End Footer -->
  <!--End Admin page-->

  <!--member page-->
  <?php elseif($this->session->userdata('role_id')=== '2'):?>
  <body class="vertical  dark  ">
    <div class="wrapper">
      <a href="#" id="scroll" style="display: none;"><span></span></a>
      <!-- Header -->
      <nav class="topnav navbar navbar-light">
        <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
          <i class="fe fe-menu navbar-toggler-icon"></i>
        </button>
        <!--<form class="form-inline mr-auto searchform text-muted">
          <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
        </form>-->
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="dark">
              <i class="fe fe-sun fe-16"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="avatar avatar-sm mt-2">
                <img  src="<?php echo base_url(); ?>./assets/avatars/face.png" alt="..." class="avatar-img rounded-circle">
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item"   style="text-transform: uppercase;" href="<?php echo base_url().'member/profile' ?>"><?= $akun['nama_lengkap']; ?></a>
              <a class="dropdown-item" href="<?php echo base_url().'member/profile'?>">Profile</a>
              <a class="dropdown-item" href="<?php echo base_url().'member/profile/ganti_password'?>">Ganti Password</a>
              <a class="dropdown-item" href="<?php echo base_url().'auth/logout'?>">Logout</a>
            </div>
          </li>
        </ul>
      </nav><!-- End Header -->
      
      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
          <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="">
             <img src="<?= base_url() ?>assets/img/logo2.png" alt="" title="" /><p>
              <p class="flex-fill text-center small text-muted nav-heading mb-1">SISTEM INFORMASI PEGAWAI</p><br>
              <p class="flex-fill text-center small text-muted nav-heading mb-1" style="font-size:12px">KENAIKAN GAJI BERKALA</p>
            </a>
          </div>
         
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link" href="<?php echo base_url().'member/profile' ?>">
                <i class="fe fe-user fe-16"></i>
                <span class="ml-3 item-text">Profil Saya</span>
                <span class="badge badge-pill badge-primary  " style="margin-top: 2px ; padding-top: 3px;">Home</span>
              </a>
            </li>          
          </ul>
         <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link" href="<?php echo base_url().'member/kontak' ?>">
                <i class="fe fe-phone fe-16"></i>
                <span class="ml-3 item-text">Kontak</span>
              </a>
            </li>          
          </ul>
          <div class="btn-box w-100 mt-4 mb-1">
            <a href="<?php echo base_url().'auth/logout'?>" class="btn mb-2 btn-primary btn-lg btn-block">
              <i class=""></i><span class="small">Logout</span>
            </a>
          </div>
        </nav>
      </aside>

        <!-- Content-->
        <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
                    <div id="page-wrapper"   >
                     <div id="page-inner">
                         <?php echo $contents; ?>
                       </div>
                    </div>
               </div> 
            </div>
          </div>
        </main>
      <!-- End Content-->

      <!-- Footer -->      
            <div class="d-flex flex-column min-vh-100">
              <main class="flex-fill"></main>
              <footer>
                <div class="card shadow footer-copyright text-center py-3">© 2021 Copyright SIMPEG POLRES KARAWANG
                </div>
              </footer>
            </div><!-- End Footer -->
            <?php endif?>
  <!--End member page-->

    <!--Datatable-->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/simplebar.min.js"></script>
    <script src='<?php echo base_url(); ?>/assets/js/daterangepicker.js'></script>
    <script src='<?php echo base_url(); ?>/assets/js/jquery.stickOnScroll.js'></script>
    <script src="<?php echo base_url(); ?>/assets/js/tinycolor-min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/config.js"></script>
    <script src='<?php echo base_url(); ?>/assets/js/jquery.dataTables.min.js'></script>
    <script src='<?php echo base_url(); ?>/assets/js/dataTables.bootstrap4.min.js'></script>
    
    <!-- Chart Js -->
    <script  src="<?php echo base_url(); ?>assets/js/Chart.min.js"></script>
    
    <!-- Autocomplete -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- App Dark Light -->
    <script  src="<?php echo base_url(); ?>assets/js/apps.js"></script>

    <script>
      /* defind global options */
      Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
      Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag()
        {
          dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script>
    <script>
    $(window).scroll(function(){ 
            if ($(this).scrollTop() > 350) { 
                $('#scroll').fadeIn(); 
            } else { 
                $('#scroll').fadeOut(); 
            } 
        }); 
        $('#scroll').click(function(){ 
            $("html, body").animate({ scrollTop: 0 }, 600); 
            return false; 
        }); 
  
    $(document).ready( function () {
      $("#load").fadeOut(300);
      $('#dataTable-1').dataTable(
      {
        autoWidth: true,
        "lengthMenu": [
          [10, 20, 50, -1],
          [10, 20, 50, "All"]
        ]
      });
    });
    </script>
  </body>
</html>