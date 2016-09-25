<?php
$session = Session::get('email');
        $sessiontype=Session::get('type');
        echo $session;
        echo $sessiontype;
?>


        <!DOCTYPE html>
<html>
<head>
    <title><?php echo $title;?></title>
    <meta name=“csrf-token” content=“{!! csrf_token() !!}”/>
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/bootstrap.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/style.css')?>"/>
    <link rel="stylesheet" href="<?php echo asset('css/css/font-awesome.min.css')?>">
    <link href="<?php echo asset('css/ihover.css')?>" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><i class="fa fa-map"> Travel Portal</i></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php  echo url('/');?>"><i class="fa fa-home fa-3"></i> </a></li>
                    <li><a href="?page=activities">Activities</a></li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search Travel Portal">
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="?page=aboutus" title="About us"><i class="fa fa-users fa-3"></i></a></li>
                    <li><a href="?page=contactus" title="Contact us"><i class="fa fa-phone fa-3"></i></a></li>
                    <li>
                        <!-- Button trigger modal -->

                        <?php if(!$session)
                        {
                        ?>
                        <a href="#" type="button" title="Login" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-sign-in fa-3"></i>
                        </a>

                        <!-- Modal -->
                        <div id="jaduumodel">
                    <?php
                            if(Session::get('error'))
                            {
                                $class='modal fade in';
                                $style='display:block';
                                $aria='false';
                            }
                            else{
                                $class='modal fade';
                                $style='display:hidden';
                                $aria='true';
                            }
                            ?>
                        <div class="<?php echo $class?>"  style="<?php echo $style; ?>" aria-hidden="<?php echo $aria?>" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" id="loginModal" role="document">
                                <div class="modal-content" id="jaduumodal-content" style="	border-radius: 0px;">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Login Here!</h4>

                                    </div>

                                    <div class="modal-body">
                                        <div class="row centered-form">
                                            <div class="col-xs-12">
                                                <div class="panel panel-default">

                                                    <div class="panel-body">

                                                        <form role="form" method="post" action="login">
                                                            <div class="row">

                                                                <div class="form-group">
                                                                    <input type="email" name="email" id="email"
                                                                           class="form-control input-sm"
                                                                           placeholder="Email Address">
                                                                </div>
                                                            </div>


                                                            <div class="row">
                                                                <div class="form-group">
                                                                    <input type="password" name="password" id="password"
                                                                           class="form-control input-sm"
                                                                           placeholder="Password">
                                                                </div>
                                                            </div>

                                                            <input type="submit" value="Join"
                                                                   class="btn btn-info btn-block">
                                                        </form>

                                                    </div>
                                                    <?php if(Session::get('error'))
                                                    {?>
                                                    <div class="alert alert-danger">
                                                        <strong>Warning!</strong> Invalid Username/Password
                                                    </div>
                                                    <?php }?>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                        </div>
                    </li>
                    <li><!-- Button trigger modal -->
                        <a href="#" type="button" title="Sign up" data-toggle="modal" data-target="#myModal2">
                            <i class="fa fa-user-plus fa-3"></i>
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content" style="	border-radius: 0px;">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">SignUp Here!</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row centered-form">
                                            <div class="col-xs-12">
                                                <div class="panel panel-default">

                                                    <div class="panel-body">
                                                        <form role="form" method="post" action="register">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <input type="text" name="fname" id="first_name"
                                                                               class="form-control input-sm"
                                                                               placeholder="Full Name">
                                                                    </div>


                                                                    <div class="form-group">
                                                                        <input type="email" name="email" id="email"
                                                                               class="form-control input-sm"
                                                                               placeholder="Email Address">
                                                                    </div>


                                                                    <div class="form-group">
                                                                        <input type="text" name="pnumber"
                                                                               class="form-control input-sm"
                                                                               placeholder="Phone Number">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="text" name="contactaddress"
                                                                               class="form-control input-sm"
                                                                               placeholder="Contact Address">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="password" name="password"
                                                                               id="password"
                                                                               class="form-control input-sm"
                                                                               placeholder="Password">
                                                                    </div>
                                                                    <input type="submit" name="register" value="Join"
                                                                           class="btn btn-info btn-block">

                                                                </div>

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
                        <?php
                        }
                        else {

                            ?>
                        <a href="logout" type="button" title="Logout">
                            <i class="fa fa-sign-out fa-3"></i>
                        </a>
                        <?php


                        }?>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </div>
</nav>
<div id="main">