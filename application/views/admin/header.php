<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">

    <meta http-equiv=”X-UA-Compatible” content=”IE=EmulateIE9”>
    <meta http-equiv=”X-UA-Compatible” content=”IE=9”>

    <link rel="shortcut icon" href="images/favicon.png">
    <title>Admin</title>
    <!--Core CSS -->
    <link href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/css/bootstrap-reset.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/css/font-awesome.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/DT_bootstrap.css" />

      <!-- //step forms css -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/jquery.steps.css?1">

      <!-- fileupload drop box css -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/dropzone.css">
<!-- data css -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">

<!-- end -->
      <!-- fileuplaod css -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/css/bootstrap-fileupload.css" />

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/admin/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/css/style-responsive.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style>
    section#wizard-p-0 {
        overflow-y: scroll;
    }
    .panel-body {

    overflow: auto;
}

.form-control {

    color: #110000;
}
    </style>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="index.html" class="logo">
        <img src="aassets/admin/images/logo.png" alt="">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->


    <!--  notification start -->

    <!--  notification end -->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="aassets/admin/images/avatar1_small.jpg">
                <span class="username">Admin</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
        <!-- <li>
            <div class="toggle-right-box">
                <div class="fa fa-bars"></div>
            </div>
        </li> -->
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-laptop"></i>
                        <span>Home Page</span>
                    </a>
                    <ul class="sub">


                        <li><a href="<?php echo base_url()?>view_proj">Project Partners</a></li>
                        <li><a href="<?php echo base_url()?>emergency_contact">Emergency Contact</a></li>
                        <li><a href="<?php echo base_url()?>background">Background Image</a></li>
                    </ul>
                </li>


                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-laptop"></i>
                        <span>Categorie Management</span>
                    </a>
                    <ul class="sub">

                        <li><a href="<?php echo base_url();?>categories_tbl">Categories</a></li>

                    </ul>
                </li>




                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Emergency Contact Management</span>
                    </a>
                    <ul class="sub">

                        <li><a href="<?php echo base_url();?>create_categories_tbl">Create Database Tables</a></li>
                        <!-- <li><a href="<?php echo base_url();?>view_cat_tables">View Categories Data Tables</a></li> -->

                    </ul>
                </li>


                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Report Management</span>
                    </a>
                    <ul class="sub">

                        <!-- <li><a href="<?php echo base_url();?>create_categories_tbl">Create Database Tables</a></li>
                        <li><a href="<?php echo base_url();?>view_cat_tables">View Categories Data Tables</a></li> -->

                    </ul>
                </li>


                  <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Publication Management</span>
                    </a>
                    <ul class="sub">

                        <!-- <li><a href="<?php echo base_url();?>create_categories_tbl">Create Database Tables</a></li>
                        <li><a href="<?php echo base_url();?>view_cat_tables">View Categories Data Tables</a></li> -->

                    </ul>
                </li>


                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Datasets</span>
                    </a>
                    <ul class="sub">

                        <!-- <li><a href="<?php echo base_url();?>create_categories_tbl">Create Database Tables</a></li>
                        <li><a href="<?php echo base_url();?>view_cat_tables">View Categories Data Tables</a></li> -->

                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Municipal Map</span>
                    </a>
                    <ul class="sub">

                        <!-- <li><a href="<?php echo base_url();?>create_categories_tbl">Create Database Tables</a></li>
                        <li><a href="<?php echo base_url();?>view_cat_tables">View Categories Data Tables</a></li> -->

                    </ul>
                </li>



                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>About Us</span>
                    </a>
                    <ul class="sub">

                        <!-- <li><a href="<?php echo base_url();?>create_categories_tbl">Create Database Tables</a></li>
                        <li><a href="<?php echo base_url();?>view_cat_tables">View Categories Data Tables</a></li> -->

                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Layers</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo base_url();?>layers_view">Layers</a></li>
                        <!-- <li><a href="chartjs.html">Chartjs</a></li>
                        <li><a href="flot_chart.html">Flot Charts</a></li>
                        <li><a href="c3_chart.html">C3 Chart</a></li> -->
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="sub">
                        <li><a href="google_map.html">Google Map</a></li>
                        <li><a href="vector_map.html">Vector Map</a></li>
                    </ul>
                </li>


            </ul>
          </div>
        <!-- sidebar menu end-->
    </div>
</aside>
