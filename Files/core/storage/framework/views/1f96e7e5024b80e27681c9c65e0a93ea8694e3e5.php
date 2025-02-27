
<?php $__env->startSection('site-title'); ?>
    Gateway
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="page-content-wrapper">
        <div class="page-content">
            <?php if(count($errors) > 0): ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong class="col-md-12"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Alert!</strong>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>


                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption font-red-sunglo">
                                    <i class="icon-settings font-red-sunglo"></i>
                                    <span class="caption-subject bold uppercase">Payment Gateways</span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row">
                                    <?php $__currentLoopData = $gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <div class="col-md-3">
                                            <div class="panel panel-primary">
                                                <div class="panel-heading text-center">
                                                    <?php echo e($gateway->name); ?>

                                                </div>
                                                <div class="panel-body">
                                                    <ul class="list-group">
                                                        <li class="list-group-item"><img src="<?php echo e(asset('assets/images/gateway')); ?>/<?php echo e($gateway->gateimg); ?>" style="width: 100%;">
                                                        </li>


                                                        <li class="list-group-item"><h4  class="btn btn-block btn-<?php echo e($gateway->status == 1 ? 'success' : 'danger'); ?>"><?php echo e($gateway->status == 1 ? 'Active' : 'Deactive'); ?></h4></li>
                                                    </ul>
                                                </div>
                                                <div class="panel-footer">
                                                    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal<?php echo e($gateway->id); ?>">
                                                        <i class="fa fa-edit"></i>
                                                        Edit
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="myModal<?php echo e($gateway->id); ?>" class="modal fade" role="dialog">
                                                <!-- Modal content-->
                                            <form role="form" method="POST" action="<?php echo e(url('admin/gateway')); ?>/<?php echo e($gateway->id); ?>" enctype="multipart/form-data">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <strong class="col-md-12" class="modal-title">Edit <?php echo e($gateway->name); ?></strong>
                                                    </div>
                                                    <div class="modal-body">

                                                            <?php echo e(csrf_field()); ?>

                                                            <?php echo e(method_field('put')); ?>

                                                            <div class="modal-body">

                                                                   <div class="form-group">
                                                                       <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                           <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                               <img src="<?php echo e(asset('assets/images/gateway')); ?>/<?php echo e($gateway->gateimg); ?>" alt="" /> </div>
                                                                           <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 100px; max-height: 150px;"> </div>
                                                                           <div>
                                                                        <span class="btn btn-success btn-file">
                                                                            <span class="fileinput-new"> Change Logo </span>
                                                                            <span class="fileinput-exists"> Change </span>
                                                                            <input type="file" name="gateimg"> </span>
                                                                               <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                           </div>
                                                                       </div>
                                                                   </div>


                                                                    <div class="form-group">
                                                                        <strong class="col-md-12">Name of Gateway</strong>
                                                                        <input type="text" value="<?php echo e($gateway->name); ?>" class="form-control" id="name" name="name" >
                                                                    </div>



                                                                    <div class="form-group">
                                                                        <strong class="col-md-12" >Fixed Charge</strong>
                                                                        <div class="input-group mb15">
                                                                            <input type="text" value="<?php echo e($gateway->chargefx); ?>" class="form-control" id="chargefx" name="chargefx" >
                                                                            <span class="input-group-addon"><?php echo e($general->currency); ?></span>
                                                                        </div>

                                                                      </div>

                                                                <div class="form-group">
                                                                    <strong class="col-md-12">Charge in Percentage</strong>

                                                                    <div class="input-group">
                                                                        <input type="text" value="<?php echo e($gateway->chargepc); ?>" class="form-control" id="chargepc" name="chargepc" >
                                                                        <span class="input-group-addon"> %</span>
                                                                    </div>

                                                                </div>

                                                                <div class="form-group">
                                                                    <strong class="col-md-12" >Minimum Amount</strong>
                                                                    <div class="input-group">
                                                                        <input type="text" value="<?php echo e($gateway->minamo); ?>" class="form-control" id="minamo" name="minamo" >
                                                                        <span class="input-group-addon"> <?php echo e($general->currency); ?></span>
                                                                    </div>


                                                                </div>

                                                                <div class="form-group">
                                                                    <strong class="col-md-12" >Maximum Amount</strong>

                                                                    <div class="input-group">
                                                                        <input type="text" value="<?php echo e($gateway->maxamo); ?>" class="form-control" id="maxamo" name="maxamo" >
                                                                        <span class="input-group-addon"> <?php echo e($general->currency); ?></span>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <strong class="col-md-12">Conversion rate</strong>

                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">1 USD = </span>
                                                                        <input type="text" value="<?php echo e($gateway->rate); ?>" class="form-control" id="rate" name="rate" >
                                                                        <span class="input-group-addon"> <?php echo e($general->currency); ?></span>
                                                                    </div>

                                                                </div>


                                                                <?php if($gateway->id==1): ?>
                                                                    <div class="form-group">
                                                                        <strong class="col-md-12" for="val1">PAYPAL BUSINESS EMAIL</strong>
                                                                        <input type="text" value="<?php echo e($gateway->val1); ?>" class="form-control" id="val1" name="val1" >
                                                                    </div>
                                                                <?php elseif($gateway->id==2): ?>
                                                                    <div class="form-group">
                                                                        <strong class="col-md-12" for="val1">PM USD ACCOUNT</strong>
                                                                        <input type="text" value="<?php echo e($gateway->val1); ?>" class="form-control" id="val1" name="val1" >
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <strong class="col-md-12" for="val2">ALTERNATE PASSPHRASE</strong>
                                                                        <input type="text" value="<?php echo e($gateway->val2); ?>" class="form-control" id="val2" name="val2" >
                                                                    </div>
                                                                <?php elseif($gateway->id==3): ?>
                                                                    <div class="form-group">
                                                                        <strong class="col-md-12" for="val1">API Secret</strong>
                                                                        <input type="text" value="<?php echo e($gateway->val1); ?>" class="form-control" id="val1" name="val1" >
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <strong class="col-md-12" for="val2">XPUB CODE</strong>
                                                                        <input type="text" value="<?php echo e($gateway->val2); ?>" class="form-control" id="val2" name="val2" >
                                                                    </div>
                                                                <?php elseif($gateway->id==4): ?>
                                                                    <div class="form-group">
                                                                        <strong class="col-md-12" for="val1">SECRET KEY</strong>
                                                                        <input type="text" value="<?php echo e($gateway->val1); ?>" class="form-control" id="val1" name="val1" >
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <strong class="col-md-12" for="val2">PUBLISHABLE KEY</strong>
                                                                        <input type="text" value="<?php echo e($gateway->val2); ?>" class="form-control" id="val2" name="val2" >
                                                                    </div>
                                                                <?php elseif($gateway->id==5): ?>
                                                                    <div class="form-group">
                                                                        <strong class="col-md-12" for="val1">Marchant Email</strong>
                                                                        <input type="text" value="<?php echo e($gateway->val1); ?>" class="form-control" id="val1" name="val1" >
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <strong class="col-md-12" for="val2">Secret KEY</strong>
                                                                        <input type="text" value="<?php echo e($gateway->val2); ?>" class="form-control" id="val2" name="val2" >
                                                                    </div>
                                                                <?php elseif($gateway->id==6): ?>
                                                                    <div class="form-group">
                                                                        <strong class="col-md-12" for="val1">Merchant Id</strong>
                                                                        <input type="text" value="<?php echo e($gateway->val1); ?>" class="form-control" id="val1" name="val1" >
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <strong class="col-md-12" for="val2">API Secret</strong>
                                                                        <input type="text" value="<?php echo e($gateway->val2); ?>" class="form-control" id="val2" name="val2" >
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <strong class="col-md-12" for="val3">API Secret</strong>
                                                                        <input type="text" value="<?php echo e($gateway->val3); ?>" class="form-control" id="val3" name="val3" >
                                                                    </div>
                                                                <?php elseif($gateway->id==7): ?>
                                                                    <div class="form-group">
                                                                        <strong class="col-md-12" for="val1">API Secret</strong>
                                                                        <input type="text" value="<?php echo e($gateway->val1); ?>" class="form-control" id="val1" name="val1" >
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <strong class="col-md-12" for="val2">Merchant Id</strong>
                                                                        <input type="text" value="<?php echo e($gateway->val2); ?>" class="form-control" id="val2" name="val2" >
                                                                    </div>
                                                                <?php elseif($gateway->id==8): ?>
                                                                    <div class="form-group">
                                                                        <strong class="col-md-12" for="val1">API Secret</strong>
                                                                        <input type="text" value="<?php echo e($gateway->val1); ?>" class="form-control" id="val1" name="val1" >
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <strong class="col-md-12" for="val2">API PIN</strong>
                                                                        <input type="text" value="<?php echo e($gateway->val2); ?>" class="form-control" id="val2" name="val2" >
                                                                    </div>
                                                                <?php else: ?>
                                                                    <div class="form-group">
                                                                        <strong class="col-md-12" for="val1">Payment Details</strong>
                                                                        <input type="text" value="<?php echo e($gateway->val1); ?>" class="form-control" id="val1" name="val1" >
                                                                    </div>
                                                                <?php endif; ?>
                                                                <hr/>
                                                                <div class="form-group">
                                                                    <strong class="col-md-12" for="status">Status</strong>
                                                                    <select class="form-control" name="status">
                                                                        <option value="1" <?php echo e($gateway->status == "1" ? 'selected' : ''); ?>>Active</option>
                                                                        <option value="0" <?php echo e($gateway->status == "0" ? 'selected' : ''); ?>>Deactive</option>
                                                                    </select>

                                                                </div>
                                                            </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-success">Update</button>
                                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>