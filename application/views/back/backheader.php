<!DOCTYPE html>
<html lang="en">
<head>        
    <!-- META SECTION -->
    <title>Brawijaya tour and travel - <?php echo $this->session->userdata('u_name'); ?> page</title>            
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="<?php echo base_url('assets/img/favicon.ico'); ?> " type="image/x-icon" />
    <!-- END META SECTION -->
    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url('assets/css/theme-default.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/summernote.css'); ?>">
    <!-- EOF CSS INCLUDE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/froala_editor.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/froala_style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/code_view.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/image_manager.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/image.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/table.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/video.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">

        <!-- START PAGE SIDEBAR -->
        <div class="page-sidebar">
            <!-- START X-NAVIGATION -->
            <ul class="x-navigation">
                <li class="xn-logo">
                    <a href="<?php echo site_url('admin'); ?>">Brawijaya</a>
                    <a href="#" class="x-navigation-control"></a>
                </li>
                <li class="xn-profile">
                    <a href="#" class="profile-mini">
                        <img src="<?php echo base_url('assets/img/12246598_121391638224969_2264550146514452945_n.jpg');?>" alt="John Doe"/>
                    </a>
                    <div class="profile">
                        <div class="profile-image">
                            <img src="<?php echo base_url('assets/img/12246598_121391638224969_2264550146514452945_n.jpg'); ?>" alt="John Doe"/>
                        </div>
                        <div class="profile-data">
                            <div class="profile-data-name"><?php echo $this->session->userdata('u_name'); ?></div>
                            <div class="profile-data-title">Tour and Travel</div>
                        </div>
                    </div>                                                                        
                </li>
                <li class="xn-title">Navigation</li>
                <li>
                    <a href="<?php echo site_url('admin') ?>"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                </li>
                <li class="xn-openable">
                    <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Pages</span></a>
                    <ul>
                        <li>
                            <a href="<?php echo site_url('admin/newpost'); ?>"><span class="fa fa-pencil"></span> <span class="xn-text">New Post</span></a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/postlist'); ?>"><span class="glyphicon glyphicon-th-list"></span> <span class="xn-text">Post list</span></a>
                        </li>  
                    </ul>
                </li>
                <li class="xn-openable">
                    <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Promo</span></a>
                    <ul>
                        <li>
                            <a href="<?php echo site_url('admin/newpromo'); ?>"><span class="fa fa-pencil"></span> <span class="xn-text">New Post promo</span></a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/listpromo'); ?>"><span class="glyphicon glyphicon-th-list"></span> <span class="xn-text">Promo list</span></a>
                        </li>  
                    </ul>
                </li>
                <li><a href="<?php echo site_url('admin/galery'); ?>"><span class="fa fa-image"></span><span class="xn-text"> Galler</span></a></li>
                <li><a href="<?php echo site_url('admin/file') ?>"><span class="fa fa-floppy-o"></span><span class="xn-text"> File folder</span></a></li>
                <li><a href="<?php echo site_url('admin/contact') ?>"><span class="fa fa-envelope"></span><span class="xn-text"> Pesanan</span></a></li>
                <li><a href="<?php echo site_url('admin/userset'); ?>"><span class="fa fa-user"></span> <span class="xn-text">User Seting</span></a></li>            
            </ul>
            <!-- END X-NAVIGATION -->
        </div>
        <!-- END PAGE SIDEBAR -->
        <!-- PAGE CONTENT -->
        <div class="page-content">

            <!-- START X-NAVIGATION VERTICAL -->
            <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                <!-- TOGGLE NAVIGATION -->
                <li class="xn-icon-button">
                    <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                </li>
                <!-- END TOGGLE NAVIGATION -->
                <!-- SEARCH -->
                <li class="xn-search">
                    <form role="form">
                        <input type="text" name="search" placeholder="Search..."/>
                    </form>
                </li>   
                <!-- END SEARCH -->
                <!-- SIGN OUT -->
                <li class="xn-icon-button pull-right">
                    <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                </li> 
                <!-- END SIGN OUT -->
                <li class="xn-icon-button pull-right">
                    <a href="<?php echo site_url('admin/newpost') ?>"><span class="glyphicon glyphicon-edit"></span></a>                      
                </li>
            </ul>
            <!-- END X-NAVIGATION VERTICAL -->    