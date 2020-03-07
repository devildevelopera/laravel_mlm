<?php $__env->startSection('site'); ?>
    | Preview
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <style>
        li.list-group-item {
            font-size: 18px;
        }
    </style>
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
                    <div class="portlet box blue-ebonyclay">
                        <div class="portlet-title">
                            <div class="caption uppercase bold"><i class="fa fa-th"></i> Preview Add Fund</div>
                        </div>
                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel panel-inverse">
                                        <div class="panel-heading">
                                            <h3 class="text-center bold">Preview of Add Fund</h3>
                                        </div>
                                        <div class="panel-body table-responsive text-center">
                                            <ul class="list-group">
                                                <li class="list-group-item">Request for Add Amount: <strong><?php echo e($amount); ?></strong> <?php echo e($general->currency); ?></li>

                                                <?php
                                                    $one = $amount + $gate->chargefx;
                                                    $two = ($amount * $gate->chargepc)/100;
                                                    $charge = $gate->chargefx + ( $amount *  $gate->chargepc )/100

                                                ?>
                                                <?php if($gate->id == 3 || $gate->id == 6 || $gate->id == 7 || $gate->id == 8): ?>
                                                    <li class="list-group-item" style="color: red">Total Charge: <strong><?php echo e($charge); ?></strong> <?php echo e($general->currency); ?></li>
                                                    <li class="list-group-item">Total Payable Amount: <strong><?php echo e($one + $two); ?></strong> <?php echo e($general->currency); ?></li>
                                                    <li class="list-group-item" style="color: firebrick">In BTC: <strong><?php echo e($payablebtc); ?></strong> BTC</li>
                                                    <li class="list-group-item">Payment Gateway: <strong><?php echo e($gate->name); ?></strong></li>
                                                <?php else: ?>

                                                    <li class="list-group-item" style="color: red">Total Charge: <strong><?php echo e($charge); ?></strong> <?php echo e($general->currency); ?></li>
                                                    <li class="list-group-item">Total Payable Amount: <strong><?php echo e($one + $two); ?></strong> <?php echo e($general->currency); ?></li>
                                                    <li class="list-group-item" style="color: firebrick">In USD: <strong><?php echo e(number_format(($one + $two)/$gate->rate, 2)); ?></strong> USD</li>

                                                    <li class="list-group-item">Payment Gateway: <strong><?php echo e($gate->name); ?></strong></li>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                        <div class="panel-footer">
                                            <a class="btn blue-ebonyclay btn-lg btn-block" href="<?php echo e(route('buy.confirm')); ?>">
                                                Pay Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('fonts.layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>