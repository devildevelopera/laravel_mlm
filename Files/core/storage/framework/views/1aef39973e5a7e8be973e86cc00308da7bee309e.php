<?php $__env->startSection('site'); ?>
    | Add | Fund
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
                            <div class="caption uppercase bold"><i class="fa fa-plus"></i> Add Fund</div>
                        </div>
                        <div class="portlet-body">
                            <div class="row">


                                <?php $__currentLoopData = $gates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Pay By  <?php echo e($gate->name); ?></h4>
                                            </div>
                                            <div class="panel-body text-center">
                                                <img src="<?php echo e(asset('assets/images/gateway')); ?>/<?php echo e($gate->gateimg); ?>" style="width:100%">
                                            </div>
                                            <div class="panel-footer">
                                                <button class="btn btn-success btn-block" data-toggle="modal" data-target="#buyModal<?php echo e($gate->id); ?>">Select <?php echo e($gate->name); ?> </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Buy Modal -->
                                    <div id="buyModal<?php echo e($gate->id); ?>" class="modal fade" role="dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Add Fund via <strong><?php echo e($gate->name); ?></strong></h4>
                                            </div>
                                            <form method="POST" action="<?php echo e(route('buy.preview')); ?>">
                                                <div class="modal-body">
                                                    <p style="color: red"> Charge : <?php echo e($gate->chargefx); ?> <?php echo e($general->currency); ?> & <?php echo e($gate->chargepc); ?> %</p>
                                                    <div id="resu"></div>
                                                    <?php echo e(csrf_field()); ?>

                                                    <input type="hidden" name="gateway" value="<?php echo e($gate->id); ?>">
                                                    <div class="form-group">
                                                        <strong class="col-md-12"> Deposit Amount ( <?php echo e($gate->minamo); ?> - <?php echo e($gate->maxamo); ?> )</strong>
                                                        <div class="input-group">
                                                            <input type="text" name="amount" class="form-control amount" id="inputAmountAdd" placeholder="Amount of Add your Fund" required>
                                                            <span class="input-group-addon"> <?php echo e($general->currency); ?> </span>
                                                        </div>
                                                        <div id="showMessage">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-info">Preview</button>
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