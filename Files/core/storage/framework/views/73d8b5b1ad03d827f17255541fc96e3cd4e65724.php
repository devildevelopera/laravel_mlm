<?php $__env->startSection('site'); ?>
    | Transfer | Fund
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <style>
        /*responsive for user dashboard*/
        @media  only screen and (min-width: 768px) and (max-width: 991px) {
            .input-lg{
                width: 100% !important;
            }
        }
        @media  only screen and (max-width: 480px) { 
            .input-lg.responsive,
            .input-lg{
                width: 100% !important;
            }
            .input-group-addon.responsive{
                font-size: 12px;
            }
            
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row">

                <div class="col-md-12">
                    <div class="portlet box blue-ebonyclay">
                        <div class="portlet-title">
                            <div class="caption uppercase bold"><i class="fa fa-th"></i> Fund Transfer</div>
                        </div>
                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <p style="color: darkgreen">Share your Balance with Other User</p>
                                    <p  style="color: darkgreen" >Shared Balance Will Added to Account Balance</p>
                                    <p  style="color: darkgreen" >Minimum 01 <?php echo e($general->currency); ?> Can be Transferred</p>
                                </div>
                            </div>

                            <div class="row">
                                <form action="<?php echo e(route('store.transfer.fund')); ?>" method="post">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="col-md-12 product-service md-margin-bottom-30">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control input-lg " placeholder="USERNAME to Transfer" id="refname" type="text" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div id="resu"></div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon responsive">TRANSFER</span>
                                                        <input class="form-control input-lg responsive" placeholder="AMOUNT YOU WANT TO SHARE" name="amount" type="text" id="inputAmount" required>
                                                        <span class="input-group-addon responsive"><?php echo e($general->currency); ?></span>
                                                    </div>
                                                    <div id="showMessage">

                                                    </div>
                                                    <p style="color:red; font-weight: bold; font-size:20px;"> <?php echo e($comission->transfer_charge); ?>% Transfer Charge will Applied and transferred Fund will go to Secondary Balance.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn blue-ebonyclay btn-block"> Transfer Now</button>
                                            </div>

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


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function () {
            $(document).on('input','#refname',function() {
                var search_name = $('#refname').val();
                var token = "<?php echo e(csrf_token()); ?>";

                $.ajax({
                    type: "POST",
                    url:"<?php echo e(route('get.user')); ?>",
                    data:{
                        'name': search_name ,
                        '_token' : token
                    },
                    success:function(data){
//                      console.log(data);
                        $("#resu").html(data);
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $(document).on('keyup','#inputAmount',function() {
                var inputAmount = parseFloat($('#inputAmount').val());
                var token = "<?php echo e(csrf_token()); ?>";

                $.ajax({
                    type: "POST",
                    url:"<?php echo e(route('get.total.charge')); ?>",
                    data:{
                        'inputAmount': inputAmount ,
                        '_token' : token
                    },
                    success:function(data){
//                        console.log(data);
                        $("#showMessage").html(data);

                    }
                });

                $('#inputAmount').keyup(function(event){
                    var regex = /[0-9]|\./;
                    var text = $('#inputAmount').val();

                    if( !(regex.test(text))) {
                        $("#showMessage").html("<span style='color: red'>Invalid Amount</span>");
                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('fonts.layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>