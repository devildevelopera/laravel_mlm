<?php $__env->startSection('site'); ?>
    | Advertises
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row">

                <div class="col-md-12">
                    <div class="portlet box blue-ebonyclay">
                        <div class="portlet-title">
                            <div class="caption uppercase bold"> <i class="fas fa-mouse-pointer"></i> Click & Earn</div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th width="10%"> SL# </th>
                                    <th> Title & Link </th>
                                    <th> Price Per Click</th>
                                    <th>Click</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $add; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key+1); ?></td>
                                        <td><b><?php echo e($data->advertise->title); ?></b></td>
                                        <td><?php echo e($data->advertise->price); ?> <?php echo e($general->symbol); ?></td>
                                        <td><?php if($data->status == 0): ?><p class="text text-danger">Already Viewed</p> <?php else: ?>  <a target="_blank" href="<?php echo e(route('iframe.open', $data->advertise->token)); ?>">Click Here</a>  <?php endif; ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        var vis = (function(){
            var stateKey, eventKey, keys = {
                hidden: "visibilitychange",
                webkitHidden: "webkitvisibilitychange",
                mozHidden: "mozvisibilitychange",
                msHidden: "msvisibilitychange"
            };
            for (stateKey in keys) {
                if (stateKey in document) {
                    eventKey = keys[stateKey];
                    break;
                }
            }
            return function(c) {
                if (c) document.addEventListener(eventKey, c);
                return !document[stateKey];
            }
        })();

        vis(function(){
            location.reload();
        });
        var msg = localStorage.getItem("message");
        if(msg){
            $('#res').addClass('alert alert-success');
        }
        document.getElementById("res").innerHTML = msg;
        $(document).ready(function () {
            $("#res").fadeOut(10000);
            localStorage.removeItem("message");
            //$('.resrmv').html('');
        });

    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('fonts.layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>