<?php $__env->startSection('site'); ?>
    | Paypal
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form action="https://secure.paypal.com/cgi-bin/webscr" method="post" id="myform">
                        <!--<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="myform">-->
                        <input type="hidden" name="cmd" value="_xclick" />
                        <input type="hidden" name="business" value="<?php echo e($paypal['sendto']); ?>" />
                        <input type="hidden" name="cbt" value="<?php echo e($general->title); ?>" />
                        <input type="hidden" name="currency_code" value="USD" />
                        <input type="hidden" name="quantity" value="1" />
                        <input type="hidden" name="item_name" value="Add Money To <?php echo e($general->title); ?> Account" />
                        <input type="hidden" name="custom" value="<?php echo e($paypal['track']); ?>" />
                        <input type="hidden" name="amount"  value="<?php echo e($paypal['amount']); ?>" />
                        <input type="hidden" name="return" value="<?php echo e(route('home')); ?>"/>
                        <input type="hidden" name="cancel_return" value="<?php echo e(route('home')); ?>" />
                        <input type="hidden" name="notify_url" value="<?php echo e(route('ipn.paypal')); ?>" />

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("myform").submit();
    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('fonts.layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>