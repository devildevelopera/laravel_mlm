
<?php $__env->startSection('style'); ?>
    <link href="<?php echo e(url('/')); ?>/assets/fonts/register.css" rel="stylesheet">
    <style>
        #page-content{
            background-image: url(<?php echo e(asset('assets/fonts/img/forget_password.jpg')); ?>);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        @media  only screen and (max-width : 480px) {
            input[type=submit] {
                padding: 15px 55px!important;
            }
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!--Start Page Content-->
    <section id="page-content">
        <!--Start Page Title-->
        <div class="page-title bg-cover">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-content text-center">
                            <h1 class="white-color m-0">Reset Password</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Title-->

        <!--Start Blog Wrap-->
        <div class="blog-single-wrap">
            <!--Start Container-->
            <div class="container">
                <!--Start Row-->

                <div class="wrapper fadeInDown">
                    <div id="formContent">
                        <!-- Tabs Titles -->
                        <h2 class="active"> Forgot Password </h2>

                        <?php if(Session::has('alert')): ?>
                            <div class="alert alert-danger"><?php echo e(Session::get('alert')); ?></div>
                        <?php endif; ?>
                        <?php if(Session::has('message')): ?>
                            <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
                        <?php endif; ?>

                        <form method="post" action="<?php echo e(route('forget.password.user')); ?>" >
                            <?php echo e(csrf_field()); ?>

                            <input type="email" id="email" class="fadeIn second"  name="email" placeholder="Enter Your Email">
                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                            <?php endif; ?>

                            <input type="submit" class="fadeIn fourth" value="Reset Password">
                        </form>

                    </div>
                </div>

                <!--End Row-->
            </div>
            <!--End Container-->
        </div>
        <!--End Blog Wrap-->

    </section>
    <!--End Page Content-->
<?php $__env->stopSection(); ?>



<?php echo $__env->make('fonts.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>