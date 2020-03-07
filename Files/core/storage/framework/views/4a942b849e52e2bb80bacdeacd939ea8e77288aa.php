
<?php $__env->startSection('site-title'); ?>
    Contact
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

            <?php if(Session::has('msg')): ?>
                <script>
                    $(document).ready(function() {
                        swal("<?php echo e(Session::get('msg')); ?>", "", "success");
                    });
                </script>
            <?php endif; ?>
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-list font-green"></i>
                        <span class="caption-subject font-black bold uppercase">Contact Page Content</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">

                        <form class="form-horizontal" method="post" action="<?php echo e(route('contact.admin.update')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('put')); ?>

                            <div class="form-group col-md-6">
                                <strong class="col-md-12 ">Address:</strong>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="address" required value="<?php echo e($general->address); ?>">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <strong class="col-md-12 ">Email:</strong>
                                <div class="col-md-12">
                                    <input type="email" class="form-control" name="email" required value="<?php echo e($general->email); ?>">
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <strong class="col-md-12 ">Google Map Address Link (Embed Map < iframe >):</strong>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="google_map_address" required value="<?php echo e($general->google_map_address); ?>">
                                </div>
                            </div>



                            <div class="col-md-12">
                                <button type="submit" class="btn-block btn dark"><i class="fa fa-check"></i> Update</button>
                            </div>
                        </form>

                      </div>
                     </div>
                 </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>