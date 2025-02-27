
<?php $__env->startSection('site-title'); ?>
    Terms And Policies
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="page-content-wrapper">
        <div class="page-content">
        <?php if(count($errors) > 0): ?>
            <div class="row">
                <div class="col-md-010">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Alert!</h4>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
            <div class="row">
                <div class="col-md-12">

                    <div class="portlet box blue-dark">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-cogs"></i> Edit Terms & Policy Settings
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form method="POST" action="<?php echo e(route('terms.update', $terms->id)); ?>" class="form-horizontal form-bordered" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('put')); ?>

                                <div class="form-body">


                                    <div class="form-group">
                                        <strong class="col-md-12 ">Privacy Policy:
                                        </strong>
                                        <div class="col-md-12">
                                            <textarea class="form-control" rows="10" name="policy"><?php echo $terms->policy; ?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <strong class="col-md-12 ">Terms of Service:
                                        </strong>
                                        <div class="col-md-12">
                                            <textarea class="form-control" rows="10" name="terms"><?php echo $terms->terms; ?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn-block btn blue-dark"><i class="fa fa-check"></i> Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>