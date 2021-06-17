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
    <link rel="stylesheet" href="<?php echo base_url() ?>css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/feather.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/select2.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/dropzone.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/uppy.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/jquery.steps.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/jquery.timepicker.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/quill.snow.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/daterangepicker.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/app-light.css" id="lightTheme" disabled>
    <link rel="stylesheet" href="<?php echo base_url() ?>css/app-dark.css" id="darkTheme">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/custom.css">
    <!-- Sweat Alert 2-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
    <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
  </head>

<?php if($this->session->userdata('role_id')=== '1'):?>
  <body class="vertical  dark  ">
    <div class="wrapper">
      <button onclick="topFunction()" id="myBtn" title="Go to top" class="btn btn-primary fe fe-arrow-up"></button>
      <!-- Header -->
      <nav class="topnav navbar navbar-light">
        <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
          <i class="fe fe-menu navbar-toggler-icon"></i>
        </button>
        <form class="form-inline mr-auto searchform text-muted">
          <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
        </form>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="dark">
              <i class="fe fe-sun fe-16"></i>
            </a>
          </li>
          <li class="nav-item nav-notif">
            <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
              <span class="fe fe-bell fe-16"></span>
              <span class="dot dot-md bg-success"></span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="avatar avatar-sm mt-2">

                <img  src="<?php echo base_url(); ?>./assets/avatars/face.png" alt="..." class="avatar-img rounded-circle">
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#"><?= $user['nama_lengkap']; ?></a>
              <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" href="#">Settings</a>
              <a class="dropdown-item" href="#">Activities</a>
              <a class="dropdown-item" href="<?php echo base_url().'auth/logout'?>">Logout</a>
            </div>
          </li>
        </ul>
      </nav><!-- End Header -->

      <!-- nav bar -->
      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
          <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="">
             <img src="<?= base_url() ?>assets/img/logo2.png" alt="" title="" /><p>
              <p class="flex-fill text-center small text-muted nav-heading mb-1">SISTEM INFORMASI PEGAWAI</p>
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
                <a class="nav-link pl-3" href="<?php echo base_url().'anggota'?>"><span class="ml-1">Anggota Aktif</span></a>
                <a class="nav-link pl-3" href="<?php echo base_url().'anggota_masuk'?>"><span class="ml-1">Anggota Masuk</span></a>
                <a class="nav-link pl-3" href=""><span class="ml-1">Anggota Keluar</span></a>
                <a class="nav-link pl-3" href=""><span class="ml-1">Anggota Pensiun</span></a>
                <a class="nav-link pl-3" href=""><span class="ml-1">Anggota Meninggal</span></a>
              </ul>
            </li>
            
            <li class="nav-item w-100">
              <a class="nav-link" href="">
                <i class="fe fe-calendar fe-16"></i>
                <span class="ml-3 item-text">Mutasi</span>
              </a>
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
                <a class="nav-link pl-3" href="./files-list.html"><span class="ml-1">Files List</span></a>
                <a class="nav-link pl-3" href="./files-grid.html"><span class="ml-1">Files Grid</span></a>
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
                <table class="table table-borderless table-striped dataTables">
                    <div id="page-wrapper"   >
                     <div id="page-inner">
                         <?php echo $contents; ?>
                       </div>
                    </div>
                  </table>
               </div> 
            </div>
          </div>

        </main>
      <!-- End Content-->
            
            <div class="d-flex flex-column min-vh-100">
              <main class="flex-fill"></main>
              <footer>
                <div class="card shadow footer-copyright text-center py-3">© 2021 Copyright SIMPEG POLRES KARWANG
                </div>
              </footer>
            </div>
            <!-- main -->
            <!-- ShortCut end -->
            
               
                <!-- Notify -->
                <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="list-group list-group-flush my-n3">
                        <div class="list-group-item bg-transparent">
                          <div class="row align-items-center">
                            <div class="col-auto">
                              <span class="fe fe-box fe-24"></span>
                            </div>
                            <div class="col">
                              <small><strong>Package has uploaded successfull</strong></small>
                              <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                              <small class="badge badge-pill badge-light text-muted">1m ago</small>
                            </div>
                          </div>
                        </div>
                        <div class="list-group-item bg-transparent">
                          <div class="row align-items-center">
                            <div class="col-auto">
                              <span class="fe fe-download fe-24"></span>
                            </div>
                            <div class="col">
                              <small><strong>Widgets are updated successfull</strong></small>
                              <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                              <small class="badge badge-pill badge-light text-muted">2m ago</small>
                            </div>
                          </div>
                        </div>
                        <div class="list-group-item bg-transparent">
                          <div class="row align-items-center">
                            <div class="col-auto">
                              <span class="fe fe-inbox fe-24"></span>
                            </div>
                            <div class="col">
                              <small><strong>Notifications have been sent</strong></small>
                              <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                              <small class="badge badge-pill badge-light text-muted">30m ago</small>
                            </div>
                          </div> <!-- / .row -->
                        </div>
                        <div class="list-group-item bg-transparent">
                          <div class="row align-items-center">
                            <div class="col-auto">
                              <span class="fe fe-link fe-24"></span>
                            </div>
                            <div class="col">
                              <small><strong>Link was attached to menu</strong></small>
                              <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                              <small class="badge badge-pill badge-light text-muted">1h ago</small>
                            </div>
                          </div>
                        </div> <!-- / .row -->
                      </div> <!-- / .list-group -->
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
                    </div>
                  </div>
                </div>
              </div><!-- Notify End -->


            <?php endif?>

    <!--Datatable-->
    <script src="<?php echo base_url() ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>js/moment.min.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>js/simplebar.min.js"></script>
    <script src='<?php echo base_url() ?>js/daterangepicker.js'></script>
    <script src='<?php echo base_url() ?>js/jquery.stickOnScroll.js'></script>
    <script src="<?php echo base_url() ?>js/tinycolor-min.js"></script>
    <script src="<?php echo base_url() ?>js/config.js"></script>
    <script src='<?php echo base_url() ?>js/jquery.dataTables.min.js'></script>
    <script src='<?php echo base_url() ?>js/dataTables.bootstrap4.min.js'></script>
    <script>
      $('#dataTable-1').DataTable(
      {
        autoWidth: true,
        "lengthMenu": [
          [10, 20, 50, -1],
          [10, 20, 50, "All"]
        ]
      });
    </script>

    <script  src="<?php echo base_url(); ?>js/d3.min.js"></script>
    <script  src="<?php echo base_url(); ?>js/topojson.min.js"></script>
    <script  src="<?php echo base_url(); ?>js/datamaps.all.min.js"></script>
    <script  src="<?php echo base_url(); ?>js/datamaps-zoomto.js"></script>
    <script  src="<?php echo base_url(); ?>js/datamaps.custom.js"></script>
    <script  src="<?php echo base_url(); ?>js/Chart.min.js"></script>
    <script>
      /* defind global options */
      Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
      Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script  src="<?php echo base_url(); ?>js/gauge.min.js"></script>
    <script  src="<?php echo base_url(); ?>js/jquery.sparkline.min.js"></script>
    <script  src="<?php echo base_url(); ?>js/apexcharts.min.js"></script>
    <script  src="<?php echo base_url(); ?>js/apexcharts.custom.js"></script>
    <script  src='<?php echo base_url(); ?>js/jquery.mask.min.js'></script>
    <script  src='<?php echo base_url(); ?>js/select2.min.js'></script>
    <script  src='<?php echo base_url(); ?>js/jquery.steps.min.js'></script>
    <script  src='<?php echo base_url(); ?>js/jquery.validate.min.js'></script>
    <script  src='<?php echo base_url(); ?>js/jquery.timepicker.js'></script>
    <script  src='<?php echo base_url(); ?>js/dropzone.min.js'></script>
    <script  src='<?php echo base_url(); ?>js/uppy.min.js'></script>
    <script  src='<?php echo base_url(); ?>js/quill.min.js'></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>


//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
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
    <script  src="<?php echo base_url(); ?>js/apps.js"></script>
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
  </body>
</html>