<?php $__env->startSection('site'); ?>
   | My | Advertises
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-md-12">
                    <?php if(count($errors) > 0): ?>
                        <div class="row">
                            <div class="col-md-06">
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(Session::has('message')): ?>
                        <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
                    <?php endif; ?>

                    <?php if(Session::has('alert')): ?>
                        <div class="alert alert-danger"><?php echo e(Session::get('alert')); ?></div>
                    <?php endif; ?>

                    <?php $__currentLoopData = $pack; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Buy <?php echo e($data->title); ?></h4>
                                </div>
                                <div class="panel-body"> <h4 class="bold text-center"><?php echo e($general->symbol); ?> <?php echo e($data->price); ?> for <?php echo e($data->click); ?> Clicks</h4></div>
                                <div class="panel-body text-center">
                                    <?php $__currentLoopData = $data->detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <p style="color: darkblue; font-size: 15px; border-bottom:1px solid blue"><?php echo e($value->detail); ?></p>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-success btn-block" data-toggle="modal" data-target="#buyModal<?php echo e($data->id); ?>"> Buy </button>
                                </div>
                            </div>
                        </div>
                        <!--Buy Modal -->
                        <div id="buyModal<?php echo e($data->id); ?>" class="modal fade" role="dialog">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Confirm to Buy <strong><?php echo e($data->title); ?></strong></h4>
                                    </div>
                                    <form method="POST" action="<?php echo e(route('package.buy')); ?>">
                                        <div class="modal-body">
                                            <p style="color: red; text-align:center;"> <?php echo e($general->symbol); ?> <?php echo e($data->price); ?> will charge from your main balance </p>
                                            <?php echo e(csrf_field()); ?>

                                            <input type="hidden" name="package_id" value="<?php echo e($data->id); ?>">
                                        </div>
                                        <div class="modal-footer">
                                            <?php if($data->price > Auth::user()->balance): ?>
                                                <a class="btn btn-info" href="<?php echo e(url('fund')); ?>">Add Fund</a>
                                            <?php else: ?>
                                                <button type="submit" class="btn btn-success">Confirm Buy</button>
                                            <?php endif; ?>
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
<?php $__env->stopSection(); ?>


<?php echo $__env->make('fonts.layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>