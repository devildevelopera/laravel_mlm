
<?php $__env->startSection('site-title'); ?>
    Packages
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="page-content-wrapper">
        <div class="page-content">
            <h3 class="page-title bold">PTC Packages
                <a class="btn dark btn-md pull-right" data-toggle="modal" href="#basic">
                    <i class="fa fa-plus"></i>  Add New Packages
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
                    <div class="portlet box dark">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-th"></i> Packages List
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="row">
                                <?php $__currentLoopData = $pack; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-3">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading text-center">
                                                <?php echo e($data->title); ?>

                                            </div>
                                            <div class="panel-body">
                                                <?php $__currentLoopData = $data->detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <p><?php echo e($value->detail); ?></p>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <h3 class="text-center"> <?php echo e($data->price); ?> <?php echo e($general->symbol); ?></h3>
                                                <ul class="list-group">
                                                    <li class="list-group-item"><h4  class="btn btn-block btn-<?php echo e($data->status == 1 ? 'success' : 'danger'); ?>"><?php echo e($data->status == 1 ? 'Active' : 'Deactive'); ?></h4></li>
                                                </ul>

                                            </div>
                                            <div class="panel-footer">
                                                <a class="btn btn-primary" href="<?php echo e(route('package.edit', $data->id)); ?>">
                                                    <i class="fa fa-edit"></i>
                                                    Edit
                                                </a>
                                                <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?php echo e($data->id); ?>">
                                                    <i class="fa fa-trash"></i>
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="deleteModal<?php echo e($data->id); ?>" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                                        <div class="modal-content">
                                            <form method="post" action="<?php echo e(route('package.delete', $data->id)); ?>">
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
                    <h4 class="modal-title">Create New Package for PTC Plan</h4>
                </div>
                <form class="form-horizontal" role="form" method="post" action="<?php echo e(route('create.package')); ?>">
                    <?php echo e(csrf_field()); ?>


                    <div class="form-group">
                        <div class="col-md-12">
                            <strong class="col-md-12">Title</strong>
                            <div class="col-md-12">
                                <input class="form-control" placeholder="Package Title" type="text" required name="title">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <strong class="col-md-12">Price</strong>
                            <div class="col-md-12">
                                <div class="input-group">

                                    <input type="text" class="form-control" name="price" required placeholder="Package Price">
                                    <span class="input-group-addon"><?php echo e($general->symbol); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <strong class="col-md-12">Quantity Of Clicks</strong>
                            <div class="col-md-12">
                                <input class="form-control" placeholder="Example: 10, 25, 50" type="text" required name="click">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="description" style="width: 100%;border: 1px solid #ddd;padding: 10px;border-radius: 5px" >
                                <div class="col-md-12" id="planDescriptionContainer">
                                    <div class="input-group">
                                        <input name="detail[]" class="form-control margin-top-10" type="text" required placeholder="Package Detail">
                                        <span class="input-group-btn">
                                                        <button class="btn btn-danger margin-top-10 delete_desc" type="button"><i class='fa fa-times'></i></button></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-right margin-top-10">
                                        <button id="btnAddDescription" type="button" class="btn btn-sm grey-mint pullri">Add Package Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                        <button type="submit" class="btn dark">Create</button>
                    </div>
                </form>
            </div>

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        var max = 1;
        $(document).ready(function () {
            $("#btnAddDescription").on('click', function () {
                appendPlanDescField($("#planDescriptionContainer"));
            });

            $(document).on('click', '.delete_desc', function () {
                $(this).closest('.input-group').remove();
            });
        });

        function appendPlanDescField(container) {
            max++;
            container.append(
                '<div class="input-group">' +
                '<input name="detail[]'+max+'" value="" class="form-control margin-top-10" type="text" required placeholder="Package Detail">\n' +
                '<span class="input-group-btn">'+
                '<button class="btn btn-danger margin-top-10 delete_desc" type="button"><i class="fa fa-times"></i></button>' +
                '</span>' +
                '</div>'
            );
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>