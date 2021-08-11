<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url() ?>favicon.ico">
    <title>SIMPEG POLRES KARAWANG</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="<?php echo base_url() ?>https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/app-light.css" id="lightTheme" disabled>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/app-dark.css" id="darkTheme">

    <style type="text/css">
      .special-card{
        opacity: 0.9;
      }

      .bg-login{
         background-image: url('./assets/img/bg.jpg'); 
         background-repeat: no-repeat;
         background-size: 100%;
      }
    </style>
  </head>
  <body class="bg-login">
      <div class="container">
        <?php echo form_open('auth/login'); ?>
        <!-- Outer Row -->
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-12 col-md-9 special-card">
            <div class="card o-hidden shadow-lg my-5">
              <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row" >
                  <div class="col-lg-12">
                    <div class="p-4">
                      <?php echo $this->session->flashdata('msg')?>
                      <div class="text-center">
                        <div class=""><img src="<?= base_url() ?>assets/img/logo.png" alt="" title="" /></div>
                          <h2>SI GABER </h2>
                          <span style="font-size: 12px;">SISTEM GAJI BERKALA</span><br/><br/>
                          <h5 class="">POLRES KARAWANG</h5> 
                          <hr>
                          <br>
                        <h1 class="h4 text-gray-900 mb-4">Login Page !</h1>
                      </div>
                      <br>
                        <form class="user" method="post" action="<?= base_url ('auth'); ?>">
                        <div class="col-12">  
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                               <span class="input-group-text" id="basic-addon1"><i class="fe fe-user"></i></span>
                             </div>  
                              <input class="input form-control" type="text" name="nrp" id="nrp" required="true" aria-label="password" aria-describedby="basic-addon1" placeholder="NRP / NIP Username">
                          </div>
                        </div>
                        <br>
                        <div class="col-12">  
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                               <span class="input-group-text" id="basic-addon1"><i class="fe fe-lock"></i></span>
                             </div>  
                              <input class="input form-control" type="password" name="password" id="password" required="true" aria-label="password" aria-describedby="basic-addon1" placeholder="Password">
                              <div class="input-group-append">
                                <span class="input-group-text" onclick="password_show_hide();">
                                  <i class="fe fe-eye" id="show_eye"></i>
                                  <i class="fe fe-eye-off d-none" id="hide_eye"></i>
                                </span>
                             </div>
                          </div>
                        </div>
                        <br>
                          <div class="col-12">  
                            <div class="input-group mb-3">
                             <input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" onclick="myFunction()" value="LOGIN" >
                           </div>
                         </div>
                             <p class="mt-5 mb-3 text-muted text-center">SIMPEG POLRES KARAWANG © 2021</p>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <script type="text/javascript">
      function password_show_hide(){
        var x = document.getElementById("password");
        var show_eye = document.getElementById("show_eye");
        var hide_eye = document.getElementById("hide_eye");
        hide_eye.classList.remove("d-none");
          if (x.type === "password") {
            x.type = "text";
            show_eye.style.display = "none";
            hide_eye.style.display = "block";
          }else{
            x.type = "password";
            show_eye.style.display = "block";
            hide_eye.style.display = "none";
          }
      }

    </script>
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/simplebar.min.js"></script>
    <script src='<?php echo base_url() ?>assets/js/daterangepicker.js'></script>
    <script src='<?php echo base_url() ?>assets/js/jquery.stickOnScroll.js'></script>
    <script src="<?php echo base_url() ?>assets/js/tinycolor-min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/config.js"></script>
    <script src="<?php echo base_url() ?>assets/js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="<?php echo base_url() ?>https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
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
</body>
</html>