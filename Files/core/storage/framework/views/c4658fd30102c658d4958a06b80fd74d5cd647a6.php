
<?php $__env->startSection('site-title'); ?>
    General Setting
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
                                <i class="fa fa-th"></i> General Settings
                            </div>
                        </div>
                        <div class="portlet-body">

                            <div class="row">
                                <form method="POST" action="<?php echo e(route('general.update', $general->id)); ?>" enctype="multipart/form-data">
                                    <?php echo e(csrf_field()); ?>

                                    <?php echo e(method_field('put')); ?>


                                    <div class="form-group col-md-4">
                                        <strong class="col-md-12 ">Website Title:
                                        </strong>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="web_title" required value="<?php echo e($general->web_title); ?>">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <strong class="col-md-12 ">Currency (Like: USD):
                                        </strong>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="currency" required value="<?php echo e($general->currency); ?>">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <strong class="col-md-12 ">Currency Symbol (Like: $ ):
                                        </strong>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="symbol" required value="<?php echo e($general->symbol); ?>">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <strong class="col-md-12 ">Web Color Code (Without '#')
                                        </strong>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" required name="theme"  value="<?php echo e($general->theme); ?>">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <strong class="col-md-12 ">Web Secondary Color Code (Without '#')
                                        </strong>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" required name="sec_color"  value="<?php echo e($general->sec_color); ?>">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <strong class="col-md-12 ">Working Start Date
                                        </strong>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control datepicker" required name="start_date"  value="<?php echo e($general->start_date); ?>">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <strong class="col-md-12 ">EMAIL VERIFICATION
                                        </strong>
                                        <div class="col-md-12">
                                            <input name="emailver" data-toggle="toggle" <?php echo e($general->emailver == "0" ? 'checked' : ''); ?> data-onstyle="success" data-offstyle="danger" data-on="On" data-off="Off"  data-width="100%" type="checkbox">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <strong class="col-md-12 ">SMS VERIFICATION</strong>
                                        <div class="col-md-12">
                                            <input name="smsver" data-toggle="toggle" <?php echo e($general->smsver == "0" ? 'checked' : ''); ?> data-onstyle="success" data-offstyle="danger" data-on="On" data-off="Off"  data-width="100%" type="checkbox">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <strong class="col-md-12 ">Email Notification</strong>
                                        <div class="col-md-12">
                                            <input name="email_nfy" data-toggle="toggle" <?php echo e($general->email_nfy == "1" ? 'checked' : ''); ?> data-onstyle="success" data-offstyle="danger" data-on="On" data-off="Off"  data-width="100%" type="checkbox">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <strong class="col-md-12 ">Sms Notification</strong>
                                        <div class="col-md-12">
                                            <input name="sms_nfy" data-toggle="toggle" <?php echo e($general->sms_nfy == "1" ? 'checked' : ''); ?> data-onstyle="success" data-offstyle="danger" data-on="On" data-off="Off"  data-width="100%" type="checkbox">
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