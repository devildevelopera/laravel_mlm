
<?php $__env->startSection('site-title'); ?>
    Users
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <style>
        #imaginary_container{
            margin-top:20%; /* Don't copy this */
        }
        .stylish-input-group .input-group-addon{
            background: white !important;
        }
        .stylish-input-group .form-control{
            border-right:0;
            box-shadow:0 0 0;
            border-color:#ccc;
        }
        .stylish-input-group button{
            border:0;
            background:transparent;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="page-content-wrapper">
        <div class="page-content">
            <h3 class="bold">
                User's List
            </h3>

            <div class="row">
                <div class="col-md-12">
                    <div class="portlet box dark">
                        <div class="portlet-title">
                            <div class="caption uppercase bold"><i class="fa fa-search"></i> Search Users</div>
                        </div>
                        <div class="portlet-body table-responsive">
                            <div class="row">
                               <div class="col-md-12">
                                   <div class="col-md-6" style="margin-bottom: 5px">
                                       <form class="form-horizontal" method="GET" action="<?php echo e(route('username.search')); ?>">
                                           <div class="input-group stylish-input-group">
                                               <input type="text" class="form-control" name="username" required placeholder="Search By Username" >
                                               <span class="input-group-addon">
                                                <button type="submit">
                                                    <span><i class="fa fa-search"></i></span>
                                                </button>
                                            </span>
                                           </div>
                                       </form>
                                   </div>

                                   <div class="col-md-6">
                                       <form class="form-horizontal" method="GET" action="<?php echo e(route('email.search')); ?>">
                                           <div class="input-group stylish-input-group">
                                               <input type="email" class="form-control" name="email"  placeholder="Search By Email" required >
                                               <span class="input-group-addon">
                                                <button type="submit">
                                                    <span><i class="fa fa-search"></i></span>
                                                </button>
                                            </span>
                                           </div>
                                       </form>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if(Session::has('not_found')): ?>
                    <div class="col-md-12">
                        <div class="portlet box red">
                            <div class="portlet-title">
                                <div class="caption uppercase bold"><i class="fa fa-user"></i> User</div>
                            </div>
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h1 class="bold" style="color: red"><?php echo e(Session::get('not_found')); ?> <i class="fas fa-frown"></i></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php else: ?>

                    <div class="col-md-12">
                        <div class="portlet box dark">
                            <div class="portlet-title">
                                <div class="caption uppercase bold"><i class="fa fa-user"></i> User List</div>
                            </div>
                            <div class="portlet-body table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th> Sl</th>
                                        <th> Name </th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th> Balance </th>
                                        <th> Action </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($key+1); ?></td>
                                            <td><?php echo e($data->first_name); ?> <?php echo e($data->last_name); ?>

                                                <?php if($data->paid_status == 1): ?>
                                                    <span class="badge badge-success">Paid User</span>
                                                <?php else: ?>
                                                    <span class="badge badge-warning">Free User</span>
                                                <?php endif; ?>
                                            </td>
                                            <td><b><?php echo e($data->email); ?></b></td>
                                            <td><?php echo e($data->mobile); ?></td>
                                            <td><?php echo e($general->symbol); ?> <?php echo e($data->balance); ?></td>
                                            <td>
                                                <a class="btn purple" href="<?php echo e(route('user.view', $data->id)); ?>"><i class="fas fa-desktop"></i>  View Detail</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-md-12 text-center"><?php echo e($user->links()); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>