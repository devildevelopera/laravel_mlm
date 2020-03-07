<?php $__env->startSection('site'); ?>
    | Change | Password
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <style>
        /*responsive for user dashboard*/
        @media  only screen and (min-width: 768px) and (max-width: 991px) {
            .input-lg {
                width: 100%!important;
            }
        }

        @media  only screen and (max-width: 480px) {
            .input-lg {
                width: 100%!important;
            }
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="bold"> CHANGE YOUR PASSWORD</h3>
                        </div>
                        <div class="panel-body">

                            <div class="row">

                                    <form method="post" action="<?php echo e(route('change.password.user')); ?>">
                                        <?php echo e(csrf_field()); ?>


                                        <input type="hidden" name="id" value="<?php echo e(Auth::user()->id); ?>">

                                        <div class="col-md-12">
                                            <div class="form-group<?php echo e($errors->has('passwordold') ? ' has-error' : ''); ?>">
                                                <input class="form-control input-lg" placeholder="Current Password"  name="passwordold" type="password" required>
                                                <?php if($errors->has('passwordold')): ?>
                                                    <span class="help-block">
                                                       <strong><?php echo e($errors->first('passwordold')); ?></strong>
                                                       </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                                <input class="form-control input-lg" placeholder="New Password"  name="password" type="password" required>
                                                <?php if($errors->has('password')): ?>
                                                    <span class="help-block">
                                                       <strong><?php echo e($errors->first('password')); ?></strong>
                                                       </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                                                <input class="form-control input-lg" placeholder="Confirm Password" name="password_confirmation"  type="password" required>
                                                <?php if($errors->has('password_confirmation')): ?>
                                                    <span class="help-block">
                                                       <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                                       </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-block">Update </button>
                                        </div>
                                    </form>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('fonts.layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>