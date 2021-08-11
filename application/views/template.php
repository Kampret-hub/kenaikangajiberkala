<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/fav.png" src="">
    <title>SI GABER POLRES KARAWANG</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/simplebar.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">

    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Icons CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/feather.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/select2.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/dropzone.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/uppy.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.steps.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.timepicker.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/quill.snow.css">

    <!-- Autocomplete -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/daterangepicker.css">

    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.9/css/fixedHeader.dataTables.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css"/>

    <!-- App CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/app-light.css" id="lightTheme" disabled>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/app-dark.css" id="darkTheme">

    <!-- Sweat Alert -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
    <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css"/>

    <style>
      .preloader {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          z-index: 9999;
          background-color: #e0e0e0;
        }
        .preloader .loading {
          position: absolute;
          left: 50%;
          top: 50%;
          transform: translate(-50%,-50%);
          font: 14px arial;
        }
    </style>
  </head>

  <!-- Loader -->
  <div class="preloader" id="load">
    <div class="loading">
      <img src="<?php echo base_url() ?>assets/img/loader.gif" width="80">
      <p>
      <p style="color: black;">Harap Tunggu...</p>
    </div>
  </div> <!-- End Loader -->
  
  <!--Admin page-->
  <?php if($this->session->userdata('role_id')=== '1'):?>
  <body class="vertical  dark">
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
                <?php if($akun['foto'] == ''){ ?>
                    <img src="<?php echo base_url(); ?>./assets/avatars/face.png" class="avatar-img rounded-circle" style="height: 35px; width:35px;">
                  <?php } else { ?>
                  <img src="<?php echo base_url().'/assets/avatars/'.$akun['foto']  ?>" class="avatar-img rounded-circle" style="height: 35px; width:35px;">
                <?php } ?>
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
             <img src="<?= base_url() ?>assets/img/logo.png" alt="" title="" /><p>
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
                <span class="ml-3 item-text">Kontak BAG SDM</span>
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
                <div class="card shadow footer-copyright text-center py-3" >© 2021 Copyright SIMPEG POLRES KARAWANG<br>KENAIKAN GAJI BERKALA</div>
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
                <?php if($akun['foto'] == ''){ ?>
<<<<<<< HEAD

                    <img src="<?php echo base_url(); ?>./assets/avatars/face.png" class="avatar-img rounded-circle" style="height: 35px; width:35px;">
                  <?php } else { ?>
                  <img src="<?php echo base_url().'/assets/avatars/'.$akun['foto']  ?>" class="avatar-img rounded-circle" style="height: 35px; width:35px;">

=======
                    <img src="<?php echo base_url(); ?>./assets/avatars/face.png" class="avatar-img rounded-circle" style="height: 35px; width:35px;">
                  <?php } else { ?>
                  <img src="<?php echo base_url().'/assets/avatars/'.$akun['foto']  ?>" class="avatar-img rounded-circle" style="height: 35px; width:35px;">
>>>>>>> c8c41777ef0dd3aba87d201e6070bf6b1a37f1d7
                <?php } ?>
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
             <img src="<?= base_url() ?>assets/img/logo.png" alt="" title="" /><p>
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
                <div class="card shadow footer-copyright text-center py-3" >© 2021 Copyright SIMPEG POLRES KARAWANG<br>KENAIKAN GAJI BERKALA</div>
              </footer>
            </div><!-- End Footer -->
            <?php endif?>
  <!--End member page-->

    <!-- Datatable 
    <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
    <script src='<?php echo base_url(); ?>/assets/js/daterangepicker.js'></script>
    <script src='<?php echo base_url(); ?>/assets/js/jquery.dataTables.min.js'></script>
    <script src='<?php echo base_url(); ?>/assets/js/dataTables.bootstrap4.min.js'></script>-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.9/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    
    <!-- Chart Js -->
    <script  src="<?php echo base_url(); ?>assets/js/Chart.min.js"></script>
    
    <!-- Autocomplete -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- App Dark Light -->
    <script src="<?php echo base_url(); ?>assets/js/apps.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/simplebar.min.js"></script>
    <script src='<?php echo base_url(); ?>/assets/js/daterangepicker.js'></script>
    <script src="<?php echo base_url(); ?>/assets/js/tinycolor-min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/config.js"></script>
    <script src='<?php echo base_url(); ?>/assets/js/jquery.mask.min.js'></script>
    <script src='<?php echo base_url(); ?>/assets/js/dropzone.min.js'></script>
    <script src='<?php echo base_url(); ?>/assets/js/uppy.min.js'></script>
    <script src='<?php echo base_url(); ?>/assets/js/quill.min.js'></script>
    <script src='<?php echo base_url(); ?>/assets/js/select2.min.js'></script>
    <script src='<?php echo base_url(); ?>/assets/js/jquery.stickOnScroll.js'></script>
    <script src='<?php echo base_url(); ?>/assets/js/jquery.steps.min.js'></script>
    <script src='<?php echo base_url(); ?>/assets/js/jquery.validate.min.js'></script>
    <script src='<?php echo base_url(); ?>/assets/js/jquery.timepicker.js'></script>
    <script>
      $('.select2').select2(
      {
        theme: 'bootstrap4',
      });
      $('.select2-multi').select2(
      {
        multiple: true,
        theme: 'bootstrap4',
      });
      $('.drgpicker').daterangepicker(
      {
        singleDatePicker: true,
        timePicker: false,
        showDropdowns: true,
        locale:
        {
          format: 'DD/MM/YYYY'
        }
      });
      $('.time-input').timepicker(
      {
        'scrollDefault': 'now',
        'zindex': '9999' /* fix modal open */
      });
      /** date range picker */
      if ($('.datetimes').length)
      {
        $('.datetimes').daterangepicker(
        {
          timePicker: true,
          startDate: moment().startOf('hour'),
          endDate: moment().startOf('hour').add(32, 'hour'),
          locale:
          {
            format: 'M/DD hh:mm A'
          }
        });
      }
      var start = moment().subtract(29, 'days');
      var end = moment();

      function cb(start, end)
      {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }
      $('#reportrange').daterangepicker(
      {
        startDate: start,
        endDate: end,
        ranges:
        {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);
      cb(start, end);
      $('.input-placeholder').mask("00/00/0000",
      {
        placeholder: "__/__/____"
      });
      $('.input-zip').mask('00000-000',
      {
        placeholder: "____-___"
      });
      $('.input-money').mask("#.##0,00",
      {
        reverse: true
      });
      $('.input-phoneus').mask('(000) 000-0000');
      $('.input-mixed').mask('AAA 000-S0S');
      $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ',
      {
        translation:
        {
          'Z':
          {
            pattern: /[0-9]/,
            optional: true
          }
        },
        placeholder: "___.___.___.___"
      });
      // editor
      var editor = document.getElementById('editor');
      if (editor)
      {
        var toolbarOptions = [
          [
          {
            'font': []
          }],
          [
          {
            'header': [1, 2, 3, 4, 5, 6, false]
          }],
          ['bold', 'italic', 'underline', 'strike'],
          ['blockquote', 'code-block'],
          [
          {
            'header': 1
          },
          {
            'header': 2
          }],
          [
          {
            'list': 'ordered'
          },
          {
            'list': 'bullet'
          }],
          [
          {
            'script': 'sub'
          },
          {
            'script': 'super'
          }],
          [
          {
            'indent': '-1'
          },
          {
            'indent': '+1'
          }], // outdent/indent
          [
          {
            'direction': 'rtl'
          }], // text direction
          [
          {
            'color': []
          },
          {
            'background': []
          }], // dropdown with defaults from theme
          [
          {
            'align': []
          }],
          ['clean'] // remove formatting button
        ];
        var quill = new Quill(editor,
        {
          modules:
          {
            toolbar: toolbarOptions
          },
          theme: 'snow'
        });
      }
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function()
      {
        'use strict';
        window.addEventListener('load', function()
        {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form)
          {
            form.addEventListener('submit', function(event)
            {
              if (form.checkValidity() === false)
              {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <script>
      var uptarg = document.getElementById('drag-drop-area');
      if (uptarg)
      {
        var uppy = Uppy.Core().use(Uppy.Dashboard,
        {
          inline: true,
          target: uptarg,
          proudlyDisplayPoweredByUppy: false,
          theme: 'dark',
          width: 770,
          height: 210,
          plugins: ['Webcam']
        }).use(Uppy.Tus,
        {
          endpoint: 'https://master.tus.io/files/'
        });
        uppy.on('complete', (result) =>
        {
          console.log('Upload complete! We’ve uploaded these files:', result.successful)
        });
      }
    </script>

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
      $("#load").fadeOut();
      var table = $('#dataTable-1').DataTable( {
        responsive: true
      });
      new $.fn.dataTable.FixedHeader( table );
      });
    </script>
  </body>
</html>