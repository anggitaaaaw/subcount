<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Subcount Process | PT Indo Seiki Metal Utama</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="<?php  echo base_url() ?>assets/favicon.ico" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="<?php  echo base_url() ?>assets/plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php  echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="<?php  echo base_url() ?>assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="<?php  echo base_url() ?>assets/dist/css/theme.min.css">
        <script src="<?php  echo base_url() ?>assets/src/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <div class="auth-wrapper">
            <div class="container-fluid h-100">
                <div class="row flex-row h-100 bg-white">
                    <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                        <div class="lavalite-bg" style="background-image: url('<?php  echo base_url() ?>assets/img/auth/login-bg.jpg')">
                            <div class="lavalite-overlay"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                        <div class="authentication-form mx-auto">
                            <center>
                                <a href="<?php  echo base_url() ?>"><img src="<?php  echo base_url() ?>assets/ismu-logo.png" alt=""></a>
                            </center>
                            <br><br>
                            <h3>Sign In to Application</h3>
                            <form action="<?php  echo base_url() ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email" required="" value="johndoe@admin.com">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" required="" value="123456">
                                </div>
                                <div class="sign-btn text-center">
                                    <a class="btn btn-theme" href="<?php echo site_url('welcome/link_dashboard') ?>">Sign In</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php  echo base_url() ?>assets/src/js/vendor/jquery-3.3.1.min.js"></script>')</script>
        <script src="<?php  echo base_url() ?>assets/plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="<?php  echo base_url() ?>assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php  echo base_url() ?>assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="<?php  echo base_url() ?>assets/plugins/screenfull/dist/screenfull.js"></script>
        <script src="<?php  echo base_url() ?>assets/dist/js/theme.js"></script>
    </body>
</html>

