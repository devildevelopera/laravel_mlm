<?php $__env->startSection('site-title'); ?>
    Commission Setting
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="page-content-wrapper">
        <div class="page-content">
        <?php if(count($errors) > 0): ?>
            <div class="row">
                <div class="col-md-012">
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
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div id="load">
                    </div>
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-cogs"></i>Commission Settings
                            </div>
                            <div class="tools">
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form method="POST" action="<?php echo e(route('commission.update', $charge->id)); ?>" class="form-horizontal form-bordered" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('put')); ?>

                                <div class="form-body">
                                        <div class="form-group col-md-4">
                                            <strong class="col-md-12 ">Transfer Charge User To User:
                                            </strong>
                                            <div class="input-group">
                                                <input type="text" class="form-control" required name="transfer_charge"  value="<?php echo e($charge->transfer_charge); ?>">
                                                <span class="input-group-addon" id="start-date"><i class="fas fa-percent"></i></span>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <strong class="col-md-12">Withdraw Charge:
                                            </strong>
                                            <div class="input-group">
                                                <input type="text" class="form-control" required name="withdraw_charge"  value="<?php echo e($charge->withdraw_charge); ?>">
                                                <span class="input-group-addon" id="start-date"><i class="fas fa-percent"></i></span>
                                            </div>
                                        </div>
                                   
                                   <div class="form-group col-md-4">
                                        <strong class="col-md-12 ">Matching Bonus:
                                        </strong>
                                        <div class="input-group">
                                            <input type="text" class="form-control" required name="match_bonus"  value="<?php echo e($charge->match_bonus); ?>">
                                            <span class="input-group-addon" id="start-date"><?php echo e($general->symbol); ?></span>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <strong class="col-md-12 ">UPGRADE Charge:
                                        </strong>
                                        <div class="input-group">
                                            <input type="text" class="form-control" required name="update_charge"  value="<?php echo e($charge->update_charge); ?>">
                                            <span class="input-group-addon" id="start-date"><?php echo e($general->symbol); ?></span>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <strong class="col-md-12 ">UPGRADE Commision To TREE:
                                        </strong>
                                        <div class="input-group">
                                            <input type="text" class="form-control" required name="update_commision_tree"  value="<?php echo e($charge->update_commision_tree); ?>">
                                            <span class="input-group-addon" id="start-date"><?php echo e($general->symbol); ?></span>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <strong class="col-md-12 ">UPGRADE Commision To Sponsor:
                                        </strong>
                                        <div class="input-group">
                                            <input type="text" class="form-control" required name="update_commision_sponsor"  value="<?php echo e($charge->update_commision_sponsor); ?>">
                                            <span class="input-group-addon" id="start-date"><?php echo e($general->symbol); ?></span>
                                        </div>
                                    </div>


                                    <div class="form-group col-md-12">
                                        <strong class="col-md-12 ">UPGRADE To Premium Text:
                                        </strong>
                                        <div class="">
                                            <textarea class="form-control" name="update_text" rows="5"><?php echo $charge->update_text; ?></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn-block btn blue"><i class="fa fa-check"></i> Update</button>
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