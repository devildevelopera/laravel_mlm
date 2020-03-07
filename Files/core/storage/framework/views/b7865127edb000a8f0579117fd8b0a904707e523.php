<?php $__env->startSection('site'); ?>
    | Support
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
  <style>
      .panel-primary>.panel-heading.has-btn {
          position:  relative;
      }

      .panel-primary>.panel-heading.has-btn .the-btn {
          position:  absolute;
          right: 20px;
          top: 50%;
          transform: translateY(-50%);
      }
      .panel-heading {
          padding: 2px 15px;
      }
  </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="page-content-wrapper">
        <div class="page-content">
            <h3 class="bold">Open A New Ticket</h3>
            <div class="row">

                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading has-btn"> 
                            <h3 class="bold"> My Tickets </h3>
                            <a href="<?php echo e(route('add.new.ticket')); ?>" class="btn btn-warning the-btn" style="color: black ;"><b>New Ticket</b></a>
                         </div>
                        <div class="panel-body table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th> Ticket Id </th>
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
                                            <a class="btn btn-primary" href="<?php echo e(route('ticket.customer.reply', $data->ticket )); ?>"><b>View</b></a>
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
                </div>

            </div>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('fonts.layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>