<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url() ?>favicon.ico">
    <title>E-KGB</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="<?php echo base_url() ?>https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
    <!-- App CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/app-light.css" id="lightTheme" disabled>
    <link rel="stylesheet" href="<?php echo base_url() ?>css/app-dark.css" id="darkTheme">
  </head>
<?php if($this->session->userdata('role_id')=== '2'):?>
  <body class="vertical  dark  ">
    <div class="wrapper">
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
          <li class="nav-item">
            <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
              <span class="fe fe-grid fe-16"></span>
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
      </nav>
      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
          <!-- nav bar -->
          <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./pembeli">
              <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                  <polygon class="st0" points="78,105 15,105 24,87 87,87  " />
                  <polygon class="st0" points="96,69 33,69 42,51 105,51   " />
                  <polygon class="st0" points="78,33 15,33 24,15 87,15  " />
                </g>
              </svg>
            </a>
          </div>
         
         <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link" href="">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">Home</span>
              </a>
            </li>          
          </ul>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link" href="">
                <i class="fe fe-user fe-16"></i>
                <span class="ml-3 item-text">Profil</span>
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
            <div class="row align-items-center my-4">
                <div class="col">
                  <h2 class="h3 mb-0 page-title">Contacts</h2>
                </div>
                <div class="col-auto">
                  <button type="button" class="btn btn-secondary"><span class="fe fe-trash fe-12 mr-2"></span>Delete</button>
                  <button type="button" class="btn btn-primary"><span class="fe fe-filter fe-12 mr-2"></span>Create</button>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="card shadow mb-4">
                    <div class="card-body text-center">
                      <div class="avatar avatar-lg mt-4">
                        <a href="<?php echo base_url() ?>">
                          <img src="./assets/avatars/face-4.jpg" alt="..." class="avatar-img rounded-circle">
                        </a>
                      </div>
                      <div class="card-text my-2">
                        <strong class="card-title my-0">Bass Wendy </strong>
                        <p class="small text-muted mb-0">Accumsan Consulting</p>
                        <p class="small"><span class="badge badge-light text-muted">New York, USA</span></p>
                      </div>
                    </div> <!-- ./card-text -->
                    <div class="card-footer">
                      <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                          <small>
                            <span class="dot dot-lg bg-success mr-1"></span> Online </small>
                        </div>
                        <div class="col-auto">
                          <div class="file-action">
                            <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu m-2">
                              <a class="dropdown-item" href="<?php echo base_url() ?>#"><i class="fe fe-meh fe-12 mr-4"></i>Profile</a>
                              <a class="dropdown-item" href="<?php echo base_url() ?>#"><i class="fe fe-message-circle fe-12 mr-4"></i>Chat</a>
                              <a class="dropdown-item" href="<?php echo base_url() ?>#"><i class="fe fe-mail fe-12 mr-4"></i>Contact</a>
                              <a class="dropdown-item" href="<?php echo base_url() ?>#"><i class="fe fe-delete fe-12 mr-4"></i>Delete</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> <!-- /.card-footer -->
                  </div>
                </div> <!-- .col -->
               
         
      <!-- End Content-->

                    <!-- ShortCut end -->      
                    <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body px-5">
                          <div class="row align-items-center">
                            <div class="col-6 text-center">
                              <div class="squircle bg-success justify-content-center">
                                <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                              </div>
                              <p>Control area</p>
                            </div>
                            <div class="col-6 text-center">
                              <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                              </div>
                              <p>Activity</p>
                            </div>
                          </div>
                          <div class="row align-items-center">
                            <div class="col-6 text-center">
                              <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                              </div>
                              <p>Droplet</p>
                            </div>
                            <div class="col-6 text-center">
                              <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                              </div>
                              <p>Upload</p>
                            </div>
                          </div>
                          <div class="row align-items-center">
                            <div class="col-6 text-center">
                              <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-users fe-32 align-self-center text-white"></i>
                              </div>
                              <p>Users</p>
                            </div>
                            <div class="col-6 text-center">
                              <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                              </div>
                              <p>Settings</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </main> <!-- main -->
              </div> <!-- ShortCut end -->

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

    <script  src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script  src="<?php echo base_url(); ?>js/popper.min.js"></script>
    <script  src="<?php echo base_url(); ?>js/moment.min.js"></script>
    <script  src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script  src="<?php echo base_url(); ?>js/simplebar.min.js"></script>
    <script  src='<?php echo base_url(); ?>js/daterangepicker.js'></script>
    <script  src='<?php echo base_url(); ?>js/jquery.stickOnScroll.js'></script>
    <script  src="<?php echo base_url(); ?>js/tinycolor-min.js"></script>
    <script  src="<?php echo base_url(); ?>js/config.js"></script>
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
          format: 'MM/DD/YYYY'
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
    <script  src="<?php echo base_url(); ?>js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async  src="<?php echo base_url(); ?>https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
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