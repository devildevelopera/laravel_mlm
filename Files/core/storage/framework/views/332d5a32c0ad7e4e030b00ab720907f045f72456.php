
<?php $__env->startSection('site-title'); ?>
    Footer
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
                        <span class="caption-subject font-black bold uppercase">Footer Content</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">

                        <form class="form-horizontal" method="post" action="<?php echo e(route('footer.update')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('put')); ?>

                            <div class="form-group col-md-12">
                                <strong class="col-md-12 ">Footer
                                </strong>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" required name="footer"  value="<?php echo e($general->footer); ?>">
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <strong class="col-md-12 ">Footer Content Link
                                </strong>
                                <div class="col-md-12">
                                    <textarea class="form-control"  rows="5" name="footer_text"><?php echo $general->footer_text; ?></textarea>
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