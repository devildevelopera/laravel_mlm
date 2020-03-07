
<?php $__env->startSection('site-title'); ?>
    Advertise
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="page-content-wrapper">
        <div class="page-content">
            <h3 class="page-title bold">PTC Advertise
                <a class="btn blue-ebonyclay btn-md pull-right" data-toggle="modal" href="#basic">
                    <i class="fa fa-plus"></i>  Add New Advertise
                </a>
            </h3>
        <?php if(count($errors) > 0): ?>
            <div class="row">
                <div class="col-md-010">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h12><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Alert!</h12>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
            <div class="row">

                <div class="col-md-12">
                    <div class="portlet box blue-ebonyclay">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-th"></i> Add New Advertise
                            </div>
                        </div>
                        <div class="portlet-body table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th> Sl</th>
                                    <th> Advertise Title </th>
                                    <th>Token Code</th>
                                    <th>Advertise Price </th>
                                    <th>Advertise Quantity</th>
                                    <th>Cliked </th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $add; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key+1); ?></td>
                                        <td><a href="<?php echo e($data->link); ?>" target="_blank"><b><?php echo e($data->title); ?></b></a> </td>
                                        <td><?php echo e($data->token); ?></td>
                                        <td><?php echo e($data->price); ?> <?php echo e($general->symbol); ?></td>
                                        <td><?php echo e($data->quantity); ?></td>
                                        <td><?php echo e($data->remain); ?></td>
                                        <td>
                                            <a class="btn blue-ebonyclay" href="<?php echo e(route('add.view.admin', $data->id)); ?>"><i class="fas fa-edit"></i></a>
                                            <a class="btn red" data-toggle="modal" href="#deleteModal<?php echo e($data->id); ?>"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <div id="deleteModal<?php echo e($data->id); ?>" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                                        <div class="modal-content">
                                            <form method="post" action="<?php echo e(route('add.delete', $data->id)); ?>">
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
                                <div class="col-md-12 text-center"><?php echo e($add->links()); ?></div>
                            </div>

                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>

            </div>
        </div>
    </div>


    <div id="basic" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title bold">Create New Advertise for PTC</h4>
            </div>
            <form class="form-horizontal" role="form" method="post" action="<?php echo e(route('create.addvertise')); ?>">
                <?php echo e(csrf_field()); ?>

                <input type="hidden" name="token" value="<?php echo e(str_random()); ?>">
                <div class="form-group">
                    <div class="col-md-12">
                        <strong class="col-md-12">Title</strong>
                        <div class="col-md-12">
                            <input class="form-control" placeholder="Advertisement Title" type="text" required name="title">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <strong class="col-md-12">Link/URL</strong>
                        <div class="col-md-12">
                            <input class="form-control" placeholder="Advertisement Link" type="text" required name="link">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <strong class="col-md-12">Price</strong>
                        <div class="col-md-12">
                        <div class="input-group">

                            <input type="text" class="form-control" name="price" placeholder="Advertisement Price">
                            <span class="input-group-addon"><?php echo e($general->symbol); ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <strong class="col-md-12">Quantity</strong>
                        <div class="col-md-12">
                            <input class="form-control" placeholder="Example: 10, 25, 50" type="text" required name="quantity">
                        </div>
                    </div>
                </div>



                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                    <button type="submit" class="btn blue-ebonyclay">Create</button>
                </div>
            </form>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>