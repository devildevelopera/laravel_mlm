
<?php $__env->startSection('site-title'); ?>
    User Profile
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row">

            <div class="col-md-12">
                <div class="portlet box dark">
                    <div class="portlet-title">
                        <div class="caption uppercase bold"><i class="fa fa-user"></i> PROFILE </div>
                    </div>
                    <div class="portlet-body">
                       <div class="row">
                           <div class="col-md-5">
                               <h2 class="bold"><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?> </h2>
                               <h4><?php echo e($user->email); ?> </h4>
                           </div>
                           <div class="col-md-5">
                               <h3 class="bold">BALANCE : <?php echo e($user->balance); ?> <?php echo e($general->currency); ?></h3>
                               <p class="bold">Joined <?php echo e(\Carbon\Carbon::parse($user->join_date)->diffInDays()); ?> Days Ago</p>
                           </div>
                       </div>

                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet box dark">
                            <div class="portlet-title">
                                <div class="caption uppercase bold">
                                    <i class="fa fa-desktop"></i> Details </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row">
                                    <!-- START -->
                                    <a href="<?php echo e(route('user.total.trans', $user->id)); ?>">
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
                                            <div class="dashboard-stat grey-cascade">
                                                <div class="visual">
                                                    <i style="color: white" class="far fa-money-bill-alt"></i>
                                                </div>
                                                <div class="details">
                                                    <div class="number">
                                                        <span data-counter="counterup" data-value="<?php echo e(\App\Transaction::where('user_id', $user->id)->count()); ?>"></span>
                                                    </div>
                                                    <div class="desc uppercase"> TRANSACTIONS </div>
                                                </div>
                                                <div class="more">
                                                    <div class="desc uppercase bold text-center">
                                                        <?php echo e($general->currency); ?>.
                                                        <span data-counter="counterup" data-value="<?php echo e(\App\Deposit::where('user_id', $user->id)->where('status', 1)->sum('amount') + \App\WithdrawTrasection::where('user_id', $user->id)->sum('amount')); ?>"></span> TRANSACTED
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- END -->
                                    <!-- START -->
                                    <a href="<?php echo e(route('user.total.deposit', $user->id)); ?>">
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
                                            <div class="dashboard-stat blue-chambray">
                                                <div class="visual">
                                                    <i style="color: white" class="fas fa-suitcase"></i>
                                                </div>
                                                <div class="details">
                                                    <div class="number">
                                                        <span data-counter="counterup" data-value="<?php echo e(\App\Deposit::where('user_id', $user->id)->where('status', 1)->count()); ?>"></span>
                                                    </div>
                                                    <div class="desc uppercase"> DEPOSITS </div>
                                                </div>
                                                <div class="more">
                                                    <div class="desc uppercase bold text-center">
                                                        <?php echo e($general->currency); ?>.
                                                        <span data-counter="counterup" data-value="<?php echo e(\App\Deposit::where('user_id', $user->id)->where('status', 1)->sum('amount')); ?>"></span> DEPOSITED
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- END -->
                                    <!-- START -->
                                    <a href="<?php echo e(route('user.total.withdraw', $user->id)); ?>">
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
                                            <div class="dashboard-stat red">
                                                <div class="visual">
                                                    <i  style="color: white" class="fa fa-upload"></i>
                                                </div>
                                                <div class="details">
                                                    <div class="number">
                                                        <span data-counter="counterup" data-value="<?php echo e(\App\WithdrawTrasection::where('user_id', $user->id)->where('status', 1)->count()); ?>"></span>
                                                    </div>
                                                    <div class="desc uppercase">WITHDRAW</div>
                                                </div>
                                                <div class="more">
                                                    <div class="desc uppercase bold text-center">
                                                        <?php echo e($general->currency); ?>.
                                                        <span data-counter="counterup" data-value="<?php echo e(\App\WithdrawTrasection::where('user_id', $user->id)->sum('amount')); ?>"></span> WITHDRAWN
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="<?php echo e(route('user.total.send.money', $user->id)); ?>">
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
                                            <div class="dashboard-stat purple-intense">
                                                <div class="visual">
                                                    <i  style="color:white" class="fas fa-share-square"></i>
                                                </div>
                                                <div class="details">
                                                    <div class="number">
                                                        <span data-counter="counterup" data-value="<?php echo e(\App\Transaction::where('user_id', $user->id)->where('type', 3)->count()); ?>"></span>
                                                    </div>
                                                    <div class="desc uppercase">Send Money</div>
                                                </div>
                                                <div class="more">
                                                    <div class="desc uppercase bold text-center">
                                                        <?php echo e($general->currency); ?>.
                                                        <span data-counter="counterup" data-value="<?php echo e(\App\Transaction::where('user_id', $user->id)->where('type', 3)->sum('amount')); ?>"></span> Transferred
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="portlet box dark">
                            <div class="portlet-title">
                                <div class="caption uppercase bold">
                                    <i style="color: #e6fffa" class="fa fa-cogs"></i> Operations </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-md-6 uppercase">
                                        <a href="<?php echo e(route('add.subs.index', $user->id)); ?>" class="btn blue btn-lg btn-block"> <i class="fas fa-money-bill-alt"></i> add / substruct balance  </a>
                                    </div>

                                    <div class="col-md-6 uppercase">
                                        <a href="<?php echo e(route('user.mail.send', $user->id)); ?>" class="btn btn-info btn-lg btn-block"> <i class="fa fa-envelope"></i> send email  </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="portlet box dark">
                            <div class="portlet-title">
                                <div class="caption uppercase bold"><i class="fa fa-cog"></i> Update Profile </div>
                            </div>
                            <div class="portlet-body">
                                <form action="<?php echo e(route('user.detail.update', $user->id)); ?>" method="post">
                                    <?php echo e(csrf_field()); ?>

                                    <?php echo e(method_field('put')); ?>


                                    <div class="row uppercase">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-md-12"><strong>firstname</strong></label>
                                                <div class="col-md-12">
                                                    <input class="form-control input-lg" name="first_name" value="<?php echo e($user->first_name); ?>" type="text">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-md-12"><strong>lastname</strong></label>
                                                <div class="col-md-12">
                                                    <input class="form-control input-lg" name="last_name" value="<?php echo e($user->last_name); ?>" type="text">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-md-12"><strong>mobile</strong></label>
                                                <div class="col-md-12">
                                                    <input class="form-control input-lg" name="mobile" value="<?php echo e($user->mobile); ?>" type="text">
                                                </div>
                                            </div>
                                        </div>


                                    </div><!-- row -->

                                    <br><br>

                                    <div class="row uppercase">


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-md-12"><strong>Date of birth</strong></label>
                                                <div class="col-md-12">
                                                    <input class="form-control input-lg" data-provide="datepicker"   data-date-format="yyyy-mm-dd" name="birth_day" value="<?php echo e($user->birth_day); ?>" type="text">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-md-12"><strong>City</strong></label>
                                                <div class="col-md-12">
                                                    <input class="form-control input-lg" name="city" value="<?php echo e($user->city); ?>" type="text">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-md-12"><strong>Country</strong></label>
                                                <div class="col-md-12">
                                                    <input class="form-control input-lg" name="country" value="<?php echo e($user->country); ?>" type="text">
                                                </div>
                                            </div>
                                        </div>

                                    </div><!-- row -->

                                    <br><br>

                                    <div class="row uppercase">


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <strong class="col-md-12"><strong>STATUS</strong></strong>
                                                <input name="status" data-toggle="toggle" <?php echo e($user->status == "1" ? 'checked' : ''); ?> data-onstyle="success" data-offstyle="danger" data-on="Active" data-off="Deactive"  data-width="100%" type="checkbox">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-md-12"><strong>EMAIL VERIFICATION</strong></label>

                                                <input name="emailv" data-toggle="toggle" <?php echo e($user->emailv == "0" ? 'checked' : ''); ?> data-onstyle="success" data-offstyle="danger" data-on="On" data-off="Off"  data-width="100%" type="checkbox">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-md-12"><strong>SMS VERIFICATION</strong></label>
                                                <input name="smsv" data-toggle="toggle" <?php echo e($user->smsv == "0" ? 'checked' : ''); ?> data-onstyle="success" data-offstyle="danger" data-on="On" data-off="Off"  data-width="100%" type="checkbox">
                                            </div>
                                        </div>

                                    </div><!-- row -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn green btn-block btn-lg">UPDATE</button>
                                        </div>
                                    </div>

                                </form>

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