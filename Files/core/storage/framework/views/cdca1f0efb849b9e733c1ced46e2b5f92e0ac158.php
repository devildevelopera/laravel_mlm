
<?php $__env->startSection('site-title'); ?>
    Blog
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <div class="page-content-wrapper">
        <div class="page-content">
            <h3 class="page-title uppercase bold"> Blog
                <a class="btn blue btn-md pull-right" data-toggle="modal" href="<?php echo e(route('menu.create.admin')); ?>">
                    <i class="fa fa-plus"></i>   ADD NEW BlOG
                </a>
            </h3>
            <hr>
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
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-dark">
                                <i class="icon-settings font-dark"></i>
                                <span class="caption-subject bold uppercase">Blog List</span>
                            </div>
                            <div class="tools"> </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th> Serial </th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key+1); ?></td>

                                        <td><img style="width: 150px" src="<?php echo e(asset('assets/images/blog/'.$data->image)); ?>"></td>
                                        <td><b><?php echo e($data->title); ?></b></td>
                                        <td>
                                            <a class="btn blue" href="<?php echo e(route('edit.menu.admin', $data->id)); ?>"><i class="fas fa-pen-square"></i></a>
                                            <a class="btn red"  data-toggle="modal" href="#deleteModal<?php echo e($data->id); ?>"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <div id="deleteModal<?php echo e($data->id); ?>" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                                        <div class="modal-content">
                                            <form method="post" action="<?php echo e(route('menu.delete', $data->id)); ?>">
                                                <?php echo e(csrf_field()); ?>

                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <h2 class="modal-title" style="color: red;">Are you sure?</h2>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                                                <button type="submit" class="btn red" id="delete"><i class="fa fa-trash"></i> Delete</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="row">

                                <div class="col-md-12">
                                    <?php echo e($menu->links()); ?>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>