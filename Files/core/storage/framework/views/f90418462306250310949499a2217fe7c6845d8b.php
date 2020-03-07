<?php $__env->startSection('site'); ?>
    | Contact
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!--Start Page Content-->
    <section id="page-content">
        <!--Start Page Title-->
        <div class="page-title bg-cover">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-content text-center">
                            <h1 class="white-color m-0">Our News</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Title-->

        <!--Start Blog Wrap-->
        <div class="blog-wrap">
            <!--Start Container-->
            <div class="container">
                <!--Start Row-->
                <div class="row">
                    <!--Start All Blog Post-->
                    <div class="col-md-9 col-sm-8">

                    <?php $__currentLoopData = $news->chunk(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row">
                        <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="col-md-6">
                            <!--Start Blog Post Single-->
                            <div class="blog-post-single">
                                <div class="post-media">
                                    <a href="<?php echo e(route('news.show.pranto',['id' => $data->id , 'title' => Replace($data->title)])); ?>">
                                        <img class="img-responsive" src="<?php echo e(asset('assets/images/blog/'.$data->image)); ?>" alt="image">
                                    </a>
                                </div>
                                <div class="post-meta">
                                    <h2 class="post-title m-0">
                                        <a href="<?php echo e(route('news.show.pranto',['id' => $data->id , 'title' => Replace($data->title)])); ?>"><?php echo e($data->title); ?></a>
                                    </h2>
                                    <span><a href=""><i class="icofont icofont-ui-calendar"></i> <?php echo e(date('d F, Y', strtotime($data->created_at))); ?></a></span>
                                </div>
                                <div class="post-content">
                                    <p><?php echo e(Short_Text($data->description, 0)); ?></p>
                                    <a href="<?php echo e(route('news.show.pranto',['id' => $data->id , 'title' => Replace($data->title)])); ?>">Read More <i class="icofont icofont-rounded-right"></i></a>
                                </div>
                            </div>
                            <!--End Blog Post Single-->
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <!--Start Pagination-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="blog-pagination text-center">
                                    <?php echo e($news->links()); ?>

                                </div>
                            </div>
                        </div>
                        <!--End Pagination-->
                    </div>
                    <!--End All Blog Post-->

                    <!--Start Sidebar-->
                    <div class="col-md-3 col-sm-4">
                        <div class="blog-sidebar">



                            <!--Start Recent Post-->
                            <div class="widget recent-post">
                                <h4>Recent Post</h4>
                                <?php $__currentLoopData = $last_first; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="recent-post-item">
                                        <h5><a href="<?php echo e(route('news.show.pranto',['id' => $data->id , 'title' => Replace($data->title)])); ?>"><?php echo e($data->title); ?></a></h5>
                                        <p><span><?php echo e(date('d F, Y', strtotime($data->created_at))); ?></span></p>
                                        <p><?php echo e(Short_Text($data->description, 20)); ?></p>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                            <!--End Recent Post-->


                            <!--Start Archive Widget-->
                            <div class="widget archive">
                                <h4>Related</h4>
                                <ul>
                                    <?php $__currentLoopData = $first_last; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="<?php echo e(route('news.show.pranto',['id' => $data->id , 'title' => Replace($data->title)])); ?>"><i class="icofont icofont-simple-right"></i> <?php echo e($data->title); ?></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>
                            </div>
                            <!--End Archive Widget-->

                        </div>
                    </div>
                    <!--End Sidebar-->
                </div>
                <!--End Row-->
            </div>
            <!--End Container-->
        </div>
        <!--End Blog Wrap-->

    </section>
    <!--End Page Content-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('fonts.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>