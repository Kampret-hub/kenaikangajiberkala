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
    <link rel="stylesheet" href="<?php echo base_url() ?>css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="<?php echo base_url() ?>https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/app-light.css" id="lightTheme" disabled>
    <link rel="stylesheet" href="<?php echo base_url() ?>css/app-dark.css" id="darkTheme">
  </head>
  <body class="bg-gradient-primary" >
      <div class="container">
        <?php echo form_open('auth/login'); ?>
        <!-- Outer Row -->
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                  <div class="col-lg-12">
                    <div class="p-5">
                      <?php echo $this->session->flashdata('msg')?>
                      <div class="text-center">
                        <div class=""><img src="<?= base_url() ?>assets/img/logo2.png" alt="" title="" /></div>
                          <span style="font-size: 20px;">SIMPEG POLRI KARAWANG </span>
                          <hr>
                          <br>
                        <h1 class="h4 text-gray-900 mb-4">Login Page !</h1>
                      </div>
                        <form class="user" method="post" action="<?= base_url ('auth'); ?>">    
                          <div class="form-group">
                              <span><label>Username</label></span>
                              <span><input class="form-control form-control-user" type="text" name="nrp" class="" id="active" placeholder="Username"></span>
                              <!--<?= form_error ('email', '<small class="text-danger pl-3">','</small>')?>-->
                          </div>  
                          <div class="form-group">
                               <span><label>Password</label></span>
                              <input class="form-control form-control-user" type="password" name="password" class="" placeholder="Password">
                          </div>
                          <div class="form-group">
                             <input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" onclick="myFunction()" value="LOGIN" >
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
    <script src="<?php echo base_url() ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>js/moment.min.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>js/simplebar.min.js"></script>
    <script src='<?php echo base_url() ?>js/daterangepicker.js'></script>
    <script src='<?php echo base_url() ?>js/jquery.stickOnScroll.js'></script>
    <script src="<?php echo base_url() ?>js/tinycolor-min.js"></script>
    <script src="<?php echo base_url() ?>js/config.js"></script>
    <script src="<?php echo base_url() ?>js/apps.js"></script>
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