<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php echo e($general->web_title); ?> <?php echo $__env->yieldContent('site'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/css/user-responsive.css')); ?>">
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('assets/images/fontend_logo/icon.png')); ?>"/>
    <?php echo $__env->make('template-part.style', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('style'); ?>
    <style>
        .page-header.navbar {
            background-color: #8e44ad;
        }
        .logo.desktop-logo {
            max-width: 140px;
            max-height: 40px;
            margin-top: 5px;
        }
        a.dt-button.btn.yellow.btn-outline {
            display: none;
        }
    </style>

    <style>
        .page-header.navbar {
            background-color: #1289A7;
        }
        .page-sidebar .page-sidebar-menu>li.active.open>a, .page-sidebar .page-sidebar-menu>li.active>a, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu>li.active.open>a, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu>li.active>a
        ,.page-sidebar:hover .page-sidebar-menu>li.active>a:hover,
        .page-sidebar .page-sidebar-menu>li.open>a, .page-sidebar .page-sidebar-menu>li:hover>a, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu>li.open>a, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu>li:hover>a
        {
            background-color: #1289A7;
            color: #fff;
        }
        .page-header.navbar .top-menu .navbar-nav>li.dropdown-language>.dropdown-toggle>.langname, .page-header.navbar .top-menu .navbar-nav>li.dropdown-user>.dropdown-toggle>.username, .page-header.navbar .top-menu .navbar-nav>li.dropdown-user>.dropdown-toggle>i {
            color: #fff;
        }
        .page-sidebar.navbar-collapse.collapse,
        body{
            background: #0c070f;
        }
        .page-sidebar .page-sidebar-menu>li>a, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu>li>a{
            border-top: 1px solid #1289A7;
            color: #fff;
        }
    </style>
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<!--preloader start-->
<div class="preloader">
    <div class="preloader-wrapper">
        <div class="preloader-img">
            <img style="max-width:150px; " src="<?php echo e(asset('assets/images/Loader.gif')); ?>" alt="Preloader Image">
        </div>
    </div>
</div>
<!--preloader end-->
<div class="page-header navbar navbar-fixed-top">
    <div class="page-header-inner ">

        <div class="page-logo">

            <a href="<?php echo e(route('home')); ?>">
                <img class="logo desktop-logo" src="<?php echo e(asset('assets/images/fontend_logo/logo.png')); ?>">
            </a>
            <div class="menu-toggler sidebar-toggler"></div>
        </div>
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>

        <div class="top-menu">
            <ul class="nav navbar-nav">
                <li style="font-size: 20px; color: white; margin-top: 10px;"><b>Balance: <?php echo e(round(Auth::user()->balance, 4)); ?> <?php echo e($general->symbol); ?> <span>|</span></b></li>
            </ul>
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                     <span class="username username-hide-on-mobile">
                        <b> Welcome,
                            <?php echo e(Auth::user()->first_name); ?>

                            <?php echo e(Auth::user()->last_name); ?></b>
                     </span>
                        <i style="color: white" class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="<?php echo e(route('profile.index')); ?>">
                                <i class="fas fa-user"></i> My Profile
                            </a>
                        </li><li>
                            <a href="<?php echo e(route('security.index')); ?>">
                                <i class="fas fa-key"></i> Change Password
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                    <i class="fas fa-lock"></i> Log Out
                                </form>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="clearfix"> </div>
<div class="page-container">
    <?php echo $__env->make('template-part.user_sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('main-content'); ?>
</div>
<?php echo $__env->make('template-part.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('template-part.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php if(Session::has('message')): ?>
    <script>
        $(document).ready(function(){
            swal("<?php echo e(Session::get('message')); ?>","", "success");

        });
    </script>
<?php endif; ?>
<?php if(Session::has('alert')): ?>
    <script>
        $(document).ready(function(){
            swal("<?php echo e(Session::get('alert')); ?>","", "warning");
        });

    </script>
<?php endif; ?>
<?php echo $__env->yieldContent('script'); ?>
</body>
</html>