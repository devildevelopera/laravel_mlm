
<?php $__env->startSection('site-title'); ?>
    Manage Limitation
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="page-content-wrapper">
        <div class="page-content">
        <?php if(count($errors) > 0): ?>
            <div class="row">
                <div class="col-md-010">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h12><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Alert!</h12>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
            <div class="row">

                <div class="col-md-12">
                    <div class="portlet box dark">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-th"></i> Manage Limitation
                            </div>
                        </div>
                        <div class="portlet-body">

                            <div class="row">
                                <form method="POST" action="<?php echo e(route('manage.limit', $general->id)); ?>">
                                    <?php echo e(csrf_field()); ?>

                                    <?php echo e(method_field('put')); ?>


                                    <div class="form-group col-md-6">
                                        <div class="col-md-12">
                                            <strong class="col-md-12">Advertise Showing Limit</strong>
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <input type="number" class="form-control" name="add_show"  value="<?php echo e($general->add_show); ?>">
                                                    <span class="input-group-addon">Seconds</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <div class="col-md-12">
                                            <strong class="col-md-12">Display Advertise On User Panel Limit</strong>
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <input type="number" class="form-control" name="add_show_limit"  value="<?php echo e($general->add_show_limit); ?>">
                                                    <span class="input-group-addon"><i class="fas fa-eye"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            <div class="form-actions">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn-block btn dark"><i class="fa fa-check"></i> Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>