<?php $__env->startSection('site'); ?>
    | Referral | Commission
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
            <h3 class="bold">Referral Commission
            </h3>
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
                                        <th width="10%"> SL </th>
                                        <th> Amount </th>
                                        <th> Description </th>
                                        <th> Time </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $ref_income; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key+1); ?></td>
                                        <td><?php echo e($data->amount); ?>  <?php echo e($general->symbol); ?></td>
                                        <td><?php echo e($data->description); ?></td>
                                        <td><?php echo e(\Carbon\Carbon::parse($data->created_at)->format('F dS, Y - h:i A')); ?></td>
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