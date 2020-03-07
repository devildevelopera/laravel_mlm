<?php $__env->startSection('site'); ?>
    | Withdraw | Fund
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="page-content-wrapper">
        <div class="page-content">
            <?php if(count($errors) > 0): ?>
                <div class="row">
                    <div class="col-md-06">
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

            <?php if(Session::has('success')): ?>
                <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
            <?php endif; ?>
            <div class="row">

                <div class="col-md-12">
                    <div class="portlet box dark">
                        <div class="portlet-title">
                            <div class="caption uppercase bold"><i class="fas fa-undo"></i> Withdraw Fund</div>
                        </div>
                        <div class="portlet-body">
                            <div class="row">
                                <?php $__currentLoopData = $gates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <div class="panel-title">Withdraw By <?php echo e($gate->name); ?></div>
                                            </div>
                                            <div class="panel-body text-center">
                                                <img src="<?php echo e(asset('assets/images/withdraw')); ?>/<?php echo e($gate->image); ?>" style="width:100%">
                                            </div>
                                            <div class="panel-footer">
                                                <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#buyModal<?php echo e($gate->id); ?>">Via <?php echo e($gate->name); ?> </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Buy Modal -->
                                    <div id="buyModal<?php echo e($gate->id); ?>" class="modal fade" role="dialog">

                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Withdraw via <strong><?php echo e($gate->name); ?></strong></h4>
                                            </div>
                                            <form method="POST" action="<?php echo e(route('withdraw.preview.user')); ?>">
                                                <div class="modal-body">
                                                    <?php echo e(csrf_field()); ?>

                                                    <div class="text-center">
                                                        <p style="color: red">Charge for withdraw Amount: <?php echo e($gate->chargefx); ?> <?php echo e($general->currency); ?></p>
                                                        <p>Percentage Charge: <?php echo e($gate->chargepc); ?> %</p>
                                                        <p style="color: red">Processing Days (At last) : <?php echo e($gate->processing_day); ?> Days</p>
                                                    </div>
                                                    <input type="hidden" name="gateway" value="<?php echo e($gate->id); ?>">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input type="text" name="amount" class="form-control" id="amount" placeholder="AMOUNT YOU WANT TO WITHDRAW | Minimum <?php echo e($gate->min_amo); ?> <?php echo e($general->currency); ?>" required>
                                                            <span class="input-group-addon"> <?php echo e($general->currency); ?> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Preview</button>
                                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('fonts.layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>