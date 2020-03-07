<?php $__env->startSection('site'); ?>
    | My | Tree
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <style>
        .userInfo {
            display: none;
        }
        .user {
            width: 70px;
            text-align: center;
        }

        /*responsive for user dashboard*/
        @media  only screen and (min-width: 768px) and (max-width: 991px) {
            .input-lg {
                 width: 100%!important;
            }
        }
        @media  only screen and (max-width: 480px) { 
            .user img {
                width: 50px !important;
            }
            .input-lg {
    width: 100%!important;
}
            .portlet.box.dark {
                border: none;
            }
            .popover-content{
                width: 200px;
            }
            .page-content {
                min-height: 980px !important;
            }
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row">

                <div class="col-md-12">
                

            <div class="row">
            <form action="<?php echo e(route('tree.username.search')); ?>" method="get">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 col-md-offset-3">
                            <div class="form-group">
                                <input class="form-control input-lg" placeholder="USERNAME" name="username" type="text" required="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-success btn-lg btn-block"> SEARCH </button>
                        </div>
                    </div>
                </div>
            </form>
            <div style="margin-top:100px;"></div>
            <?php
            $root = \App\User::where('username', $treefor)->first();
            if($root->paid_status == 0){
                $paid = '<b class="btn btn-warning btn-block">FREE</b>';
            }else{
                $paid = '<b class="btn btn-primary btn-block">PAID</b>';
            }

            ?>
            <div class="col-xs-12">
                <!--==================ROOT==================-->
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3" >
                        <div class="user" style="text-align: center; margin: auto;">
                            <?php if($root->paid_status == 0): ?>
                                <img src="<?php echo e(asset('assets/user/user.png')); ?>" alt="**" style="width:100%;">
                            <?php else: ?>
                                <img src="<?php echo e(asset('assets/user/paid_user.png')); ?>" alt="**" style="width:100%;">
                            <?php endif; ?>
                            <?php echo e($root->username); ?>

                            <div class="userInfo">
                                <div class="panel panel-success" style="text-align: center;">
                                    <div class="panel-heading">
                                        <a href="<?php echo e(url('tree/'.$root->username)); ?>">
                                            <h4> <?php echo e($root->username); ?></h4>
                                        </a>
                                    </div>
                                    <div class="panel-body">
                                        <?php
                                        echo "<h5>".strtoupper("$root->first_name $root->last_name")." </h5> $paid";
                                        printBV($root->id);
                                        printBelowMember($root->id);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--==================ROOT==================-->
                <div style="margin-top:100px;"></div>
                <div class="row">
                    <div class="col-xs-5">
                        <?php
                        $countsl = \App\User::where('posid', $root->id)->where('position', 'L')->count();

                        if($countsl == 0){
                        ?>
                        <div class="user" style="text-align: center; margin: auto;">
                            <img src="<?php echo e(asset('assets/user/no_user.png')); ?>" alt="**" style="width:100%;">
                            NO USER
                        </div>
                        <div style="margin-top:100px;"></div>
                        <!--==================3 L==================-->
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="user" style="text-align: center; margin: auto;">
                                    <img src="<?php echo e(asset('assets/user/no_user.png')); ?>" alt="**" style="width:100%;">
                                    NO USER
                                </div>
                            </div>
                            <div class="col-xs-5 col-xs-offset-2">
                                <div class="user" style="text-align: center; margin: auto;">
                                    <img src="<?php echo e(asset('assets/user/no_user.png')); ?>" alt="**" style="width:100%;">
                                    NO USER
                                </div>
                            </div>
                        </div>
                        <!--==================3 L==================-->
                    </div>
                <?php
                }else{

                $sl = \App\User::where('posid', $root->id)->where('position', 'L')->first();
                if($sl->paid_status == 0){
                    $paid = '<b class="btn btn-warning btn-block">FREE</b>';
                }else{
                    $paid = '<b class="btn btn-primary btn-block">PAID</b>';
                }

                ?>
                <!--==================3 L==================-->
                    <div class="user" style="text-align: center; margin: auto;">
                        <?php if($sl->paid_status == 0): ?>
                            <img src="<?php echo e(asset('assets/user/user.png')); ?>" alt="**" style="width:100%;">
                        <?php else: ?>
                            <img src="<?php echo e(asset('assets/user/paid_user.png')); ?>" alt="**" style="width:100%;">
                        <?php endif; ?>
                        
                        <?php echo e($sl->username); ?>

                        <div class="userInfo">
                            <div class="panel panel-success" style="text-align: center;">
                                <div class="panel-heading">
                                    <a href="<?php echo e(url('tree/'.$sl->username)); ?>">
                                        <h4><?php echo e($sl->username); ?></h4>
                                    </a>
                                </div>
                                <div class="panel-body">
                                    <?php
                                    echo "<h5>".strtoupper("$sl->first_name $sl->last_name")." </h5> $paid";

                                    printBV($sl->id);
                                    printBelowMember($sl->id);

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top:100px;"></div>
                    <div class="row">
                        <?php
                        $tllc = \App\User::where('posid', $sl->id)->where('position', 'L')->count();
                        if($tllc == 0){
                        ?>
                        <div class="col-xs-5">
                            <div class="user" style="text-align: center;margin: auto;">
                                <img src="<?php echo e(asset('assets/user/no_user.png')); ?>" alt="**" style="width:100%;">
                                NO USER
                            </div>
                        </div>
                        <?php
                        }else{
                        $tll = \App\User::where('posid', $sl->id)->where('position', 'L')->first();
                        if($tll->paid_status == 0){
                            $paid = '<b class="btn btn-warning btn-block">FREE</b>';
                        }else{
                            $paid = '<b class="btn btn-primary btn-block">PAID</b>';
                        }

                        ?>
                        <div class="col-xs-5">
                            <div class="user" style="text-align: center;margin: auto;">
                                <?php if($tll->paid_status == 0): ?>
                                    <img src="<?php echo e(asset('assets/user/user.png')); ?>" alt="**" style="width:100%;">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('assets/user/paid_user.png')); ?>" alt="**" style="width:100%;">
                                <?php endif; ?>
                                <?php echo e($tll->username); ?>

                                <div class="userInfo">
                                    <div class="panel panel-success" style="text-align: center;">
                                        <div class="panel-heading">
                                            <a href="<?php echo e(url('tree/'.$tll->username)); ?>">
                                                <h4><?php echo $tll->username ?></h4>
                                            </a>
                                        </div>
                                        <div class="panel-body">
                                            <?php
                                            echo "<h5>".strtoupper("$tll->first_name $tll->last_name")." </h5> $paid";
                                            printBV($tll->id);
                                            printBelowMember($tll->id);
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <?php
                        $tlrc = \App\User::where('posid', $sl->id)->where('position', 'R')->count() ;
                        if($tlrc == 0){

                        ?>
                        <div class="col-xs-5 col-xs-offset-1">
                            <div class="user" style="text-align: center;margin: auto;">
                                <img src="<?php echo e(asset('assets/user/no_user.png')); ?>" alt="**" style="width:100%;">
                                NO USER
                            </div>
                        </div>
                        <?php
                        }else{
                        $tlr = \App\User::where('posid', $sl->id)->where('position','R')->first();
                        if($tlr->paid_status ==0){
                            $paid = '<b class="btn btn-warning btn-block">FREE</b>';
                        }else{
                            $paid = '<b class="btn btn-primary btn-block">PAID</b>';
                        }

                        ?>
                        <div class="col-xs-5 col-xs-offset-2">
                            <div class="user" style="text-align: center;margin: auto;">
                                <?php if($tlr->paid_status == 0): ?>
                                    <img src="<?php echo e(asset('assets/user/user.png')); ?>" alt="**" style="width:100%;">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('assets/user/paid_user.png')); ?>" alt="**" style="width:100%;">
                                <?php endif; ?>
                                <?php echo e($tlr->username); ?>

                                <div class="userInfo">
                                    <div class="panel panel-success" style="text-align: center;">
                                        <div class="panel-heading">
                                            <a href="<?php echo e(url('tree/'.$tlr->username)); ?>">
                                                <h4><?php echo e($tlr->username); ?></h4>
                                            </a>
                                        </div>
                                        <div class="panel-body">
                                            <?php
                                            echo "<h5>".strtoupper("$tlr->first_name $tlr->last_name")." </h5> $paid";
                                            printBV($tlr->id);
                                            printBelowMember($tlr->id);
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            <?php
            }
            ?>

            

            <!--==================3 L==================-->
                <!--================================================RIGHT================================================-->
                <div class="col-xs-5 col-xs-offset-1">
                    <?php
                    $countsr =  \App\User::where('posid', $root->id)->where('position', 'R')->count() ;

                    if($countsr == 0){

                    $paid = '<b class="btn btn-danger btn-block">NO USER</b>';
                    ?>
                    <div class="user" style="text-align: center; margin: auto;">
                        <img src="<?php echo e(asset('assets/user/no_user.png')); ?>" alt="**" style="width:100%;">
                        NO USER
                    </div>
                    <div style="margin-top:100px;"></div>
                    <!--==================3 L==================-->
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="user" style="text-align: center; margin: auto;">
                                <img src="<?php echo e(asset('assets/user/no_user.png')); ?>" alt="**" style="width:100%;">
                                NO USER
                            </div>
                        </div>
                        <div class="col-xs-5 col-xs-offset-2">
                            <div class="user" style="text-align: center; margin: auto;">
                                <img src="<?php echo e(asset('assets/user/no_user.png')); ?>" alt="**" style="width:100%;">
                                NO USER
                            </div>
                        </div>
                    </div>
                    <!--==================3 L==================-->
                </div>
                <?php
                //////////////////////////////////////////////////////////
                }else{
                $sr = \App\User::where('posid', $root->id)->where('position', 'R')->first();
                if($sr->paid_status == 0){
                    $paid = '<b class="btn btn-warning btn-block">FREE</b>';
                }else{
                    $paid = '<b class="btn btn-primary btn-block">PAID</b>';
                }

                ?>
                <div class="user" style="text-align: center; margin: auto;">
                    <?php if($sr->paid_status == 0): ?>
                        <img src="<?php echo e(asset('assets/user/user.png')); ?>" alt="**" style="width:100%;">
                    <?php else: ?>
                        <img src="<?php echo e(asset('assets/user/paid_user.png')); ?>" alt="**" style="width:100%;">
                    <?php endif; ?>
                    <?php echo e($sr->username); ?>

                    <div class="userInfo">
                        <div class="panel panel-success" style="text-align: center;">
                            <div class="panel-heading">
                                <a href="<?php echo e(url('tree/'.$sr->username)); ?>">
                                    <h4><?php echo e($sr->username); ?></h4>
                                </a>
                            </div>
                            <div class="panel-body">
                                <?php
                                echo "<h5>".strtoupper("$sr->first_name $sr->last_name")." </h5> $paid";
                                printBV($sr->id);
                                printBelowMember($sr->id);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-top:100px;"></div>
                <!--==================3 L==================-->
                <div class="row">
                    <?php
                    $tllc = \App\User::where('posid', $sr->id)->where('position', 'L')->count();
                    if($tllc == 0){ 
                    ?>
                    <div class="col-xs-5">
                        <div class="user" style="text-align: center; margin: auto;">
                            <img src="<?php echo e(asset('assets/user/no_user.png')); ?>" alt="**" style="width:100%;">
                            NO USER
                        </div>
                    </div>
                    <?php
                    }else{
                    $tll = \App\User::where('posid', $sr->id)->where('position', 'L')->first() ;
                    if($tll->paid_status==0){
                        $paid = '<b class="btn btn-warning btn-block">FREE</b>';
                    }else{
                        $paid = '<b class="btn btn-primary btn-block">PAID</b>';
                    }

                    ?>
                    <div class="col-xs-5 pranto">
                        <div class="user" style="text-align: center; margin: auto;">
                            <?php if($tll->paid_status == 0): ?>
                                <img src="<?php echo e(asset('assets/user/user.png')); ?>" alt="**" style="width:100%;">
                            <?php else: ?>
                                <img src="<?php echo e(asset('assets/user/paid_user.png')); ?>" alt="**" style="width:100%;">
                            <?php endif; ?>
                            
                            <?php echo e($tll->username); ?>

                            <div class="userInfo">
                                <div class="panel panel-success" style="text-align: center;">
                                    <div class="panel-heading">
                                        <a href="<?php echo e(url('tree/'.$tll->username)); ?>">
                                            <h4><?php echo e($tll->username); ?></h4>
                                        </a>
                                    </div>
                                    <div class="panel-body">
                                        <?php
                                        echo "<h5>".strtoupper("$tll->first_name $tll->last_name")." </h5> $paid";
                                        printBV($tll->id);
                                        printBelowMember($tll->id);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                    <?php
                    $tlrc = \App\User::where('posid', $sr->id)->where('position', 'R')->count();
                    if($tlrc == 0){

                    ?>
                    <div class="col-xs-5 col-xs-offset-2 pranto with-offset">
                        <div class="user" style="text-align: center; margin: auto;">
                            <img src="<?php echo e(asset('assets/user/no_user.png')); ?>" alt="**" style="width:100%;">
                            NO USER
                        </div>
                    </div>
                    <?php
                    }else{
                    $tlr = \App\User::where('posid', $sr->id)->where('position', 'R')->first() ;
                    if($tlr->paid_status == 0){
                        $paid = '<b class="btn btn-warning btn-block">FREE</b>';
                    }else{
                        $paid = '<b class="btn btn-primary btn-block">PAID</b>';
                    }

                    ?>
                    <div class="col-xs-5 col-xs-offset-2">
                        <div class="user" style="text-align: center; margin: auto;">
                            <?php if($tlr->paid_status == 0): ?>
                                <img src="<?php echo e(asset('assets/user/user.png')); ?>" alt="**" style="width:100%;">
                            <?php else: ?>
                                <img src="<?php echo e(asset('assets/user/paid_user.png')); ?>" alt="**" style="width:100%;">
                            <?php endif; ?>
                            <?php echo e($tlr->username); ?>

                            <div class="userInfo">
                                <div class="panel panel-success" style="text-align: center;">
                                    <div class="panel-heading">
                                        <a href="<?php echo e(url('tree/'. $tlr->username)); ?>">
                                            <h4><?php echo e($tlr->username); ?></h4>
                                        </a>
                                    </div>
                                    <div class="panel-body">
                                        <?php
                                        echo "<h5>".strtoupper("$tlr->first_name $tlr->last_name")." </h5> $paid";
                                        printBV($tlr->id);
                                        printBelowMember($tlr->id);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                    <?php
                    }
                    ?>

                    <div style="margin-top:100px;"></div>
                </div>
            </div>
        </div>

                </div>
            </div>
        </div>
    </div>





<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        $('.user').each(function() {
            var $this = $(this);
            $this.popover({
                trigger: 'click , hover',
                placement: 'bottom',
                html: true,
                content: $this.find('.userInfo').html()
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('fonts.layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>