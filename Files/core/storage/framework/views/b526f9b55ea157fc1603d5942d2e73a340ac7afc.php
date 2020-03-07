<?php $__env->startSection('site'); ?>
    | Dashboard
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
                            <h1 class="white-color m-0"> Authorization </h1>
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
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="main-login main-center" style="overflow: hidden; margin-top: 50px;">
                            <?php if(Session::has('alert')): ?>
                                <div class="alert alert-danger"><?php echo e(Session::get('alert')); ?></div>
                            <?php endif; ?>
                            <?php if(Session::has('message')): ?>
                                <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
                            <?php endif; ?>
                            <?php if(Session::has('success')): ?>
                                <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
                            <?php endif; ?>

                            <div class="col-md-12">
                                <div class="contact-form-wrapper">
                                    <?php if(Auth::user()->status != '1'): ?>
                                        <h3 style="color: #cc0000;" >Your account is Deactivated</h3>

                                    <?php elseif(Auth::user()->emailv != '1'): ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-title text-center">Please verify your Email</div>
                                                    <div class="card-body">
                                                        <p>Your Email address:</p>
                                                        <h3><?php echo e(Auth::user()->email); ?></h3>
                                                        <form action="<?php echo e(route('sendemailver')); ?>" method="POST">
                                                            <?php echo e(csrf_field()); ?>

                                                            <button type="submit" class="btn btn-lg btn-block btn-primary">Send Verification Code</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-title text-center">Verify Code</div>

                                                    <form action="<?php echo e(route('emailverify')); ?>" method="POST">
                                                        <?php echo e(csrf_field()); ?>

                                                        <div class="form-group">
                                                            <input type="text" class="form-control"  name="code" placeholder="Enter Verification Code" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-lg btn-block btn-success">Verify</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    <?php elseif(Auth::user()->smsv != '1'): ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-title text-center">Please verify your Mobile</div>
                                                    <div class="card-body">
                                                        <p>Your Mobile no:</p>
                                                        <h3><?php echo e(Auth::user()->mobile); ?></h3>
                                                        <form action="<?php echo e(route('sendsmsver')); ?>" method="POST">
                                                            <?php echo e(csrf_field()); ?>

                                                            <button type="submit" class="btn btn-lg btn-block btn-primary">Send Verification Code</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-title text-center">Verify Code</div>

                                                    <form action="<?php echo e(route('smsverify')); ?>" method="POST">
                                                        <?php echo e(csrf_field()); ?>

                                                        <div class="form-group">
                                                            <input type="text" class="form-control" required name="code" placeholder="Enter Verification Code">
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-block btn-lg btn-success">Verify</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    <?php elseif(Auth::user()->tfver != '1'): ?>
                                        <div class="col-md-12">

                                            <h2 class="text-center">Verify Google Authenticator Code</h2>
                                            <div class="form-body">
                                                <form action="<?php echo e(route('go2fa.verify')); ?>" method="POST">
                                                    <?php echo e(csrf_field()); ?>

                                                    <div class="form-group col-md-12">
                                                        <input type="text" class="form-control" name="code" required placeholder="Enter Google Authenticator Code">
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-lg btn-success btn-block">Verify</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
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