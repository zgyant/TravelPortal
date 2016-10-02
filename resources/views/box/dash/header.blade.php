<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/jquery.dataTables.css')?>">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo asset('css/bootstrap.css')?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo asset('css/sb-admin.css')?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo asset('css/plugins/morris.css')?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo asset('font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Home</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo Session::get('email'); ?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>

                    <li class="divider"></li>
                    <li>
                        <a href="logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">

                <?php
                if (Session::get('type') == 'user') {
                ?>
                <li>
                    <a href="?page=stories"><i class="fa fa-fw fa-plus"></i> Add Stories</a>
                </li> <li>
                    <a href="?page=list-booking"><i class="fa fa-fw fa-list"></i> List Bookings</a>
                </li>
                <?php }
                ?>
                <?php
                if (Session::get('type') == 'admin') {
                ?>

                <li>
                    <a href="?page=list-booking"><i class="fa fa-fw fa-list"></i> List Bookings</a>
                </li>
                    <li>
                        <a href="?page=add-package"><i class="fa fa-fw fa-plus"></i> Add Packages</a>
                    </li><li>
                    <a href="?page=list-packages"><i class="fa fa-fw fa-gift"></i> List Packages</a>
                </li>
                <?php }
                ?>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper" style="min-height: 630px;">

        <div class="container-fluid">
