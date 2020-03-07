
<?php $__env->startSection('site-title'); ?>
    Get Support
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <?php if(Session::has('msg')): ?>
                <script>
                    $(document).ready(function(){
                        swal("<?php echo e(Session::get('msg')); ?>","", "success");
                    });
                </script>
        <?php endif; ?>
        <!-- BEGIN PAGE TITLE-->
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet box blue-madison">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-th"></i>All Tickets List
                            </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover" id="awards">
                                <thead>
                                <tr>
                                    <th> Ticket Id </th>
                                    <th> Customer Name </th>
                                    <th> Subject </th>
                                    <th> Raised Time </th>
                                    <th> Status </th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $all_ticket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($data->ticket); ?></td>
                                    <td><b><?php echo e($data->user_member->first_name); ?> <?php echo e($data->user_member->last_name); ?></b></td>
                                    <td><b><?php echo e($data->subject); ?></b></td>
                                    <td><?php echo e(\Carbon\Carbon::parse($data->created_at)->format('F dS, Y - h:i A')); ?></td>
                                    <td>
                                        <?php if($data->status == 1): ?>
                                            <button class="btn btn-warning"> Opened</button>
                                        <?php elseif($data->status == 2): ?>
                                            <button type="button" class="btn btn-success">  Answered </button>
                                        <?php elseif($data->status == 3): ?>
                                            <button type="button" class="btn btn-info"> Customer Reply </button>
                                        <?php elseif($data->status == 9): ?>
                                            <button type="button" class="btn btn-danger">  Closed </button>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a class="btn blue-madison" href="<?php echo e(route('ticket.admin.reply', $data->ticket )); ?>">View</a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <?php echo e($all_ticket->links()); ?>

                                </div>
                            </div>

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