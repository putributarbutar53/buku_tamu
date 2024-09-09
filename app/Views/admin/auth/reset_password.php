<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Admin | Reset Password</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url() ?>favicon/site.webmanifest">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <script src="<?php base_url()?>assets/js/config.navbar-vertical.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="<?php base_url()?>assets/lib/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet">
    <link href="<?php base_url()?>assets/css/theme.css" rel="stylesheet">

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">


      <div class="container" data-layout="container">
        <div class="row flex-center min-vh-100 py-6">
          <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4"><a class="d-flex flex-center mb-4" href="<?php base_url()?>"><img class="mr-2" src="<?php base_url()?>assets/img/logos/logo.svg" alt="" width="250" /></a>
            <div class="card">
              <div class="card-body p-4 p-sm-5">
                <h5 class="text-center">Reset new password</h5>
                <form class="mt-3">
                  <div class="form-group">
                    <input class="form-control" type="password" placeholder="New Password" />
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="password" placeholder="Confirm Password" />
                  </div>
                  <button class="btn btn-primary btn-block mt-3" type="submit" name="submit">Set password</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="<?php base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?php base_url()?>assets/js/popper.min.js"></script>
    <script src="<?php base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php base_url()?>assets/lib/@fortawesome/all.min.js"></script>
    <script src="<?php base_url()?>assets/lib/stickyfilljs/stickyfill.min.js"></script>
    <script src="<?php base_url()?>assets/lib/sticky-kit/sticky-kit.min.js"></script>
    <script src="<?php base_url()?>assets/lib/is_js/is.min.js"></script>
    <script src="<?php base_url()?>assets/lib/lodash/lodash.min.js"></script>
    <script src="<?php base_url()?>assets/lib/perfect-scrollbar/perfect-scrollbar.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <script src="<?php base_url()?>assets/js/theme.js"></script>

  </body>

</html>