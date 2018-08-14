<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/admin/assets/images/favicon.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <?php 
    echo link_tag('assets/admin/assets/node_modules/morrisjs/morris.css');
    echo link_tag('assets/admin/assets/node_modules/c3-master/c3.min.css');
    echo link_tag('assets/admin/dist/css/style.css');
    echo link_tag('assets/admin/dist/css/pages/dashboard1.css');
    echo link_tag('assets/admin/dist/css/style_modalka.css');
    ?>
    
    <title>Admin Template</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    </head>

<body class="skin-default-dark fixed-layout">
    
    
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url() ?>assets/admin/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="<?php echo base_url() ?>assets/admin/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="<?php echo base_url() ?>assets/admin/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="<?php echo base_url() ?>assets/admin/assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">                    

                </div>
                <?= user('email');?> &nbsp;&nbsp;
                <a href="logout" style="margin-right: 20px;">logout</a>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
<aside class="left-sidebar">
            <div class="d-flex no-block nav-text-box align-items-center">
                <span><img src="<?php echo base_url() ?>assets/admin/assets/images/logo-icon.png" alt="elegant admin template"></span>
                <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"><i class="ti-menu"></i></a>
                <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            </div>
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li><a class="waves-effect waves-dark" href="<?=base_url()?>admin/reserve" aria-expanded="false"><i class="fa fa-shield"></i><span class="hide-menu">Бронирование</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="<?=base_url()?>admin/profile" aria-expanded="false"><i class="fa fa-user-circle-o"></i><span class="hide-menu">Profile</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="<?=base_url()?>admin/users" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu"></span>Пользователи</a></li>
                        <li> <a class="waves-effect waves-dark" href="icon-fontawesome.html" aria-expanded="false"><i class="fa fa-smile-o"></i><span class="hide-menu"></span>Icon</a></li>
                        <li> <a class="waves-effect waves-dark" href="map-google.html" aria-expanded="false"><i class="fa fa-globe"></i><span class="hide-menu"></span>Map</a></li>
                        <li> <a class="waves-effect waves-dark" href="/admin" aria-expanded="false"><i class="fa fa-bookmark-o"></i><span class="hide-menu"></span>Каталоги</a></li>                       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        