<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Subcount Process | PT Indo Seiki Metal Utama</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="<?php echo base_url() ?>assets/favicon.ico" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/weather-icons/css/weather-icons.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/c3/c3.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/owl.carousel/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/owl.carousel/dist/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/theme.min.css">

        <!-- Combobox -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2/dist/css/select2.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/summernote/dist/summernote-bs4.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/mohithg-switchery/dist/switchery.min.css">

        <script src="<?php echo base_url() ?>assets/src/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>

        <div class="wrapper">
            <header class="header-top" header-theme="light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <div class="top-menu d-flex align-items-center">
                            <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                            <div class="header-search">
                                <div class="input-group">
                                    <img src="<?php echo base_url() ?>assets/ismu-logo.png" width="100" class="header-brand-img" alt="lavalite">
                                </div>
                            </div>
                            <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
                            <span style="padding-left: 20px; font-size: 16px;">Welcome <b>John Snow</b> in Application Subcount Process your are login by <b>Administrator</b> on <b>29 November 2019 12:56:34</b> Lets Work!! </span>
                        </div>
                        <div class="top-menu d-flex align-items-center">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="<?php echo base_url() ?>assets/#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="<?php echo base_url() ?>assets/img/user.jpg" alt=""></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="<?php echo base_url() ?>assets/#"><i class="ik ik-settings dropdown-icon"></i> Change Password</a>
                                    <a class="dropdown-item" href="<?php echo base_url() ?>assets/login.html"><i class="ik ik-power dropdown-icon"></i> Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="page-wrap">
                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="#">
                            <span class="text">Subcount</span>
                        </a>
                        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>
                    
                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-lavel">Menu List</div>
                                <div class="nav-item">
                                    <a href="<?php echo site_url('welcome/link_dashboard') ?>"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>
                                <div class="nav-item has-sub">
                                    <a><i class="ik ik-settings"></i><span>Administrator</span></a>
                                    <div class="submenu-content">
                                        <a href="<?php echo site_url('welcome/adm_setting_menu') ?>" class="menu-item"><i class="ik ik-file-text"></i>Setting menu</a>
                                        <a href="<?php echo site_url('welcome/adm_setting_user') ?>" class="menu-item"><i class="ik ik-users"></i>Setting User</a>
                                        <a href="<?php echo site_url('welcome/adm_master_user') ?>" class="menu-item"><i class="ik ik-user"></i>Master User</a>
                                        <a href="<?php echo site_url('welcome/adm_historical_akses') ?>" class="menu-item"><i class="ik ik-users"></i>Historical Access</a>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <a href="<?php echo site_url('welcome/create_label_batch') ?>" class="menu-item"><i class="ik ik-file-text"></i>Create Label Batch</a>
                                    <a href="<?php echo site_url('welcome/delivery_note') ?>" class="menu-item"><i class="ik ik-file-text"></i>Delivery Note</a>
                                    <a href="<?php echo site_url('welcome/receiving_disubcount') ?>" class="menu-item"><i class="ik ik-file-text"></i>Vendor Receiving</a>
                                </div>
                                <div class="nav-item">
                                    <a href="<?php echo site_url('welcome/vendor_delivery') ?>" class="menu-item"><i class="ik ik-file-text"></i>Vendor Delivery</a>
                                </div>
                                <div class="nav-item has-sub">
                                    <a><i class="ik ik-file-text"></i>Incoming WIP</a>
                                    <div class="submenu-content">
                                        <a href="#" class="menu-item"><i class="ik ik-printer"></i>Print Label Packing</a>
                                        <a href="#" class="menu-item"><i class="ik ik-printer"></i>Print BST</a>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                
                
