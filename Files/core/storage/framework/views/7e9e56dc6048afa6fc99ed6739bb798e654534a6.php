<?php $__env->startSection('site'); ?>
    | Transaction History
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <style>
        @media  only screen and (max-width: 480px) {
            .col-md-12{
                position: relative;
                min-height: 1px;
                padding-left: 12px!important;
                padding-right: 15px;
            }

        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="page-content-wrapper">
        <div class="page-content">
            <h3 class="bold">Transaction History</h3>
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-dark">

                            </div>
                            <div class="tools"> </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                                <thead>
                                <tr>
                                    <th width="10%"> SL# </th>
                                    <th> Transaction Number </th>
                                    <th> Transected on </th>
                                    <th> Description </th>
                                    <th> Amount </th>
                                    <th>Charge</th>
                                    <th> Post Balance </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $trans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="<?php if($data->amount <= 0): ?> danger <?php elseif($data->type == 3 ): ?> danger <?php elseif($data->type == 5 ): ?> <?php else: ?> success <?php endif; ?>">
                                        <td><?php echo e($key+1); ?></td>
                                        <td><?php echo e($data->trans_id); ?></td>
                                        <td><?php echo e(date('g:ia \o\n l jS F Y', strtotime($data->created_at))); ?></td>
                                        <td><?php echo e($data->description); ?></td>
                                        <td><?php echo e(abs($data->amount)); ?> <?php echo e($general->symbol); ?></td>
                                        <?php if($data->charge != ''): ?>
                                            <td><?php echo e($data->charge); ?> <?php echo e($general->symbol); ?></td>
                                        <?php else: ?>
                                            <td></td>
                                        <?php endif; ?>
                                        <td><?php echo e(round($data->new_balance,4)); ?> <?php echo e($general->symbol); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('fonts.layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>