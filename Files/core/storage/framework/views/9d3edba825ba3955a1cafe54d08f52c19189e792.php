<?php $__env->startSection('site'); ?>
    | DashBoard
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <style>
        .visual{
            color: #f7f6ff;
        }
        .pranto{
            margin-bottom: 10px;
        }

        .dashboard-stat .details .desc {
            text-align: right;
            font-size: 16px !important;
            letter-spacing: 0;
            font-weight: 300;
        }

        rect:nth-child(even){
            fill: #2980b9;

        }
        rect:nth-child(odd){
            fill: #8e44ad;
        }

        @media  only screen and (max-width: 480px) {
            .input-lg {
                width: 100%!important;
            }
        }

    </style>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="page-content-wrapper">
        <div class="page-content">
            <?php if(count($errors) > 0): ?>
                <div class="row">
                    <div class="col-md-06">
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h3><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Alert!</h3>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

                <?php if(Session::has('success')): ?>
                    <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
                <?php endif; ?>
            <div class="row">
                <?php if(Auth::user()->paid_status == 0): ?>
                <div class="col-md-12">
                    <div class="m-heading-1 border-dark m-bordered">
                        <p><?php echo $charge->update_text; ?> </p>
                        <p> For more info please check out
                            <a class="btn purple btn-outline"  href="#upgradeModal" data-toggle="modal">Upgrade Now</a>
                        </p>
                    </div>

                    <div id="upgradeModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title text-center" style="color: #00B356" id="exampleModalLabel">UPGRADE ACCOUNT INFORMATION</h3>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-info" role="alert">
                                    <h3 class="alert-heading text-center">You will Be Charged <?php echo e($general->symbol); ?> <?php echo e($charge->update_charge); ?> <?php echo e($general->currency); ?> To Upgrade Account</h3>
                                    <p style="text-align: center">You will Get <?php echo e($general->symbol); ?> <?php echo e($charge->update_commision_sponsor); ?> <?php echo e($general->currency); ?> When any of Your Referral Upgrade To Premium Account. </p>
                                    <p  style="text-align: center">You will Get <?php echo e($general->symbol); ?> <?php echo e($charge->update_commision_tree); ?> <?php echo e($general->currency); ?> When any of Your Below Tree Member Upgrade To Premium Account. </p>
                                    <hr>
                                    <h3 class="mb-0 text-center">YOUR BALANCE <?php echo e($general->symbol); ?> <?php echo e(Auth::user()->balance); ?> <?php echo e($general->currency); ?></h3>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Latter</button>
                                <?php if(Auth::user()->balance > $charge->update_charge): ?>
                                    <a href="<?php echo e(route('update.to.pro' )); ?>"  class="btn btn-success">Upgrade</a>
                                <?php else: ?>
                                    <a href="<?php echo e(route('add.fund.index')); ?>" class="btn btn-primary">Add Fund</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                </div>
                <?php else: ?>
                    <div class="col-md-12">
                        <div class="alert alert-success" role="alert" style="color: black">
                            <marquee>
                                    You will Get <?php echo e($charge->update_commision_sponsor); ?> <?php echo e($general->currency); ?> When any of Your Referral Upgrade To Premium Account.
                                You will Get <?php echo e($charge->update_commision_tree); ?> <?php echo e($general->currency); ?> When any of Your Below Tree Member Upgrade To Premium Account.
                            </marquee>
                        </div>
                    </div>
                <?php endif; ?>

                    <div class="col-md-12">
                        <div class="portlet box " style="background: #1289a7">
                            <div class="portlet-title">
                                <div class="caption uppercase bold"><i class="fas fa-chart-bar"></i> My Last Transaction Chart</div>
                            </div>
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="myfirstchart" style="height: 250px;"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                <div class="col-md-12">
                    <div class="portlet box " style="background: #1289a7">
                        <div class="portlet-title">
                            <div class="caption uppercase bold"><i class="fas fa-sort-amount-down"></i> Short - Cut</div>
                        </div>
                        <div class="portlet-body">
                            <div class="row">

                                <div class="pranto pranto col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <a href="<?php echo e(route('tree.index')); ?>">
                                    <div class="dashboard-stat blue">
                                        <div class="visual">
                                            <div class="service-icon"  style="color: white">
                                                <i class="fa fa-tree"></i>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <div class="number">
                                            </div>
                                            <div class="desc"> Binary Tree </div>
                                        </div>
                                        <a class="more" href="<?php echo e(route('tree.index')); ?>"> View more
                                            <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                    </a>
                                </div>

                                <div class="pranto pranto col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <a href="<?php echo e(route('binary.summery.index')); ?>">
                                    <div class="dashboard-stat green-meadow">
                                        <div class="visual">
                                            <div class="service-icon"  style="color: white">
                                                <i class="fa fa-th"></i>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <div class="number">
                                            </div>
                                            <div class="desc"> Binary Summery </div>
                                        </div>
                                        <a class="more" href="<?php echo e(route('binary.summery.index')); ?>"> View more
                                            <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                    </a>
                                </div>

                                <div class="pranto pranto col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <a href="<?php echo e(route('profile.index')); ?>">
                                    <div class="dashboard-stat red-intense">
                                        <div class="visual">
                                            <div class="service-icon"  style="color: white">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <div class="number">
                                            </div>
                                            <div class="desc"> My Profile </div>
                                        </div>
                                        <a class="more" href="<?php echo e(route('profile.index')); ?>"> View more
                                            <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                    </a>
                                </div>

                                <div class="pranto pranto col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <a href="<?php echo e(route('request.users_management.index')); ?>">
                                        <div class="dashboard-stat blue-madison">
                                            <div class="visual">
                                                <div class="service-icon"  style="color: white">
                                                    <i class="fas fa-sync"></i>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <div class="number">
                                                </div>
                                                <div class="desc"> Withdraw Fund </div>
                                            </div>
                                            <a class="more" href="<?php echo e(route('request.users_management.index')); ?>"> View more
                                                <i class="m-icon-swapright m-icon-white"></i>
                                            </a>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="row">

                                <div class="pranto pranto col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <a href="<?php echo e(route('ref.commision.index')); ?>">
                                        <div class="dashboard-stat purple">
                                            <div class="visual">
                                                <div class="service-icon"  style="color: white">
                                                    <i class="far fa-money-bill-alt"></i>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <div class="number">
                                                </div>
                                                <div class="desc"> Referral Commission </div>
                                            </div>
                                            <a class="more" href="<?php echo e(route('ref.commision.index')); ?>"> View more
                                                <i class="m-icon-swapright m-icon-white"></i>
                                            </a>
                                        </div>
                                    </a>
                                </div>

                                <div class="pranto pranto col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <a href="<?php echo e(route('bin.commision.index')); ?>">
                                        <div class="dashboard-stat blue-ebonyclay">
                                            <div class="visual">
                                                <div class="service-icon"  style="color: white">
                                                    <i class="fas fa-dollar-sign"></i>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <div class="number">
                                                </div>
                                                <div class="desc"> Binary Commission </div>
                                            </div>
                                            <a class="more" href="<?php echo e(route('bin.commision.index')); ?>"> View more
                                                <i class="m-icon-swapright m-icon-white"></i>
                                            </a>
                                        </div>
                                    </a>
                                </div>

                                <div class="pranto pranto col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <a href="<?php echo e(route('add.fund.index')); ?>">
                                        <div class="dashboard-stat green-jungle">
                                            <div class="visual">
                                                <div class="service-icon"  style="color: white">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <div class="number">
                                                </div>
                                                <div class="desc"> Add Fund </div>
                                            </div>
                                            <a class="more" href="<?php echo e(route('add.fund.index')); ?>"> View more
                                                <i class="m-icon-swapright m-icon-white"></i>
                                            </a>
                                        </div>
                                    </a>
                                </div>

                                <div class="pranto pranto col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <a href="<?php echo e(route('transaction.history')); ?>">
                                        <div class="dashboard-stat dark">
                                            <div class="visual">
                                                <div class="service-icon"  style="color: white">
                                                    <i class="fa fa-arrow-circle-down"></i>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <div class="number">
                                                </div>
                                                <div class="desc"> Transaction History </div>
                                            </div>
                                            <a class="more" href="<?php echo e(route('transaction.history')); ?>"> View more
                                                <i class="m-icon-swapright m-icon-white"></i>
                                            </a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <?php
        $main_chart_data = "[";


        $trans = \App\Transaction::where('user_id',Auth::user()->id)
        ->orderBy('id', 'desc')->take(8)->get();

            foreach ($trans as $data){
             $main_chart_data .= "{ year: '".date('Y-m-d', strtotime($data->time))."' , value:  ".abs($data->amount)."  }".",";
            }

        $main_chart_data .= "]";

    ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script>
        $(document).ready(function () {
            new Morris.Bar({
                element: 'myfirstchart',
                data: <?php echo $main_chart_data  ?>,
                xkey: 'year',
                ykeys: ['value'],
                // chart.
                labels: ['Value']
            });
        });
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('fonts.layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>