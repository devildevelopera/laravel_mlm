<?php $__env->startSection('content'); ?>
    <!--Start Banner Image Area-->
    <section id="banner-image-area" style="background: url(<?php echo e(asset('assets/images/fontend_slide/'. $slider->image)); ?>); background-size: cover ; background-position:center">
        <div class="overlay"></div>
        <div class="banner-content dp-table">
            <div class="tbl-cell text-center">

                <h1><?php echo e($slider->heading); ?></h1>
                <p>
                    <?php echo e($slider->description); ?>

                </p>
                <a class="pranto" href="<?php echo e(url('login')); ?>">Sign In</a>
                <a class="pranto" href="<?php echo e(url('register')); ?>">Sign Up</a>
            </div>
        </div>
    </section>
    <!--End  Banner Image Area-->

    <!--Start About Area-->
    <section id="about-area">
        <!--Start Container-->
        <div class="container">
            <!--Start Row-->
            <div class="row">
                <!--Start About Content-->
                <div class="col-md-6">
                    <div class="about-content">
                        <h2>About Us</h2>
                        <p><?php echo $general->about_text; ?></p>
                    </div>
                </div>
                <!--End About Content-->

                <!--Start About Image-->
                <div class="col-md-6">
                    <div class="about-img">
                        <img src="<?php echo e(asset('assets/images/about_image/'.$general->image)); ?>" class="img-responsive" alt="Image">
                    </div>
                </div>
                <!--End About Image-->
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End About Area-->

    <!--Start Why Choose Area-->
    <section id="why-choose-us">
        <!--Image Background-->
        <div class="why-choose-img bg-cover"></div>
        <!--Start Container-->
        <div class="container-fluid">
            <!--Start Row-->
            <div class="row">
                <!--Start Content-->
                <div class="col-md-6 col-md-offset-6 p-0">
                    <div class="why-choose-content">
                        <h2 class="white-color">Why Choose Us?</h2>

                        <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!--Start Single Item-->
                        <div class="single-item row">
                            <div class="col-md-2">
                                <div class="single-item-icon">
                                    <i class="fa <?php echo e($data->icon); ?> white-color"></i>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h4 class="white-color"><?php echo e($data->title); ?></h4>
                                <p class="white-color" ><?php echo $data->description; ?></p>
                            </div>
                        </div>
                        <!--End Single Item-->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
                <!--End Content-->
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Why Choose Area-->

    <!--Start Pricing Area-->
    <section id="pricing-area">
        <!--Start Container-->
        <div class="container">
            <!--Start Heading Row-->
            <div class="row">
                <!--Start Section Heading-->
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-heading text-center">
                        <h5>Choose Your Plan</h5>
                        <h2>Our Pricing Plan</h2>
                    </div>
                </div>
                <!--End Section Heading-->
            </div>
            <!--End Heading Row-->

            <!--Start Pricing Row-->
            <div class="row">
            <?php $__currentLoopData = $pack; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!--Start Pricing Table Single-->
                <div class="col-md-4">
                    <div class="pricing-tbl-single <?php if($key+1 == 2): ?> popular <?php endif; ?> text-center">
                        <h3><?php echo e($data->title); ?></h3>
                        <div class="price-amount ">
                            <h1><?php echo e($general->symbol); ?> <?php echo e($data->price); ?></h1>
                            <p><?php echo e($data->click); ?> Click</p>
                        </div>
                        <div class="pricing-content">
                            <ul>
                                <?php $__currentLoopData = $data->detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($value->detail); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <div class="pricing-btn">
                            <a href="<?php echo e(route('my.advertise')); ?>">Get Started</a>
                        </div>
                    </div>
                </div>
                <!--End Pricing Table Single-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!--End Pricing Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Pricing Area-->

    <!--Start Counter Area-->
    <section id="counter-area" class="section-padding bg-cover">
        <div class="overlay"></div>
        <!--Start Container-->
        <div class="container">
            <!--Start Heading Row-->
            <div class="row">
                <!--Start Section Heading-->
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-heading text-center">
                        <h5 class="white-color">We Proud Of</h5>
                        <h2 class="white-color">Our Achievement</h2>
                    </div>
                </div>
                <!--End Section Heading-->
            </div>
            <!--End Heading Row-->

            <!--Start Counter Row-->
            <div class="row">
                <!--Start Counter Single-->
                <div class="col-md-3">
                    <div class="counter-single text-center">
                        <div class="counter-icon">
                            <i class="icofont icofont-files white-color"></i>
                        </div>
                        <h1 class="white-color"><?php echo e(\App\Deposit::where('status', 1)->count('id')); ?></h1>
                        <h4 class="white-color">Total Deposit</h4>
                    </div>
                </div>
                <!--End Counter Single-->

                <!--Start Counter Single-->
                <div class="col-md-3">
                    <div class="counter-single text-center">
                        <div class="counter-icon">
                            <i class="icofont icofont-emo-slightly-smile white-color"></i>
                        </div>
                        <h1 class="white-color"><?php echo e(\App\User::where('status', 1)->count()); ?></h1>
                        <h4 class="white-color">Happy Clients</h4>
                    </div>
                </div>
                <!--End Counter Single-->

                <!--Start Counter Single-->
                <div class="col-md-3">
                    <div class="counter-single text-center">
                        <div class="counter-icon">
                            <i class="icofont icofont-clock-time white-color"></i>
                        </div>
                        <h1 class="white-color"> <?php echo e(\Carbon\Carbon::parse($general->start_date)->diffInDays() * 24); ?></h1>
                        <h4 class="white-color">Won Award</h4>
                    </div>
                </div>
                <!--End Counter Single-->

                <!--Start Counter Single-->
                <div class="col-md-3">
                    <div class="counter-single text-center">
                        <div class="counter-icon">
                            <i class="icofont icofont-money-bag white-color"></i>
                        </div>
                        <h1 class="white-color"><?php echo e(\App\Withdraw::where('status', 1)->count('id')); ?></h1>
                        <h4 class="white-color">Total Withdraw</h4>
                    </div>
                </div>
                <!--End Counter Single-->
            </div>
            <!--End Counter Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Counter Area-->

    <!--Start Team Area-->
    <section id="team-area">
        <!--Start Container-->
        <div class="container">
            <!--Start Heading Row-->
            <div class="row">
                <!--Start Section Heading-->
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-heading text-center">
                        <h5>Support Team</h5>
                        <h2>Our Team Member</h2>
                    </div>
                </div>
                <!--End Section Heading-->
            </div>
            <!--End Heading Row-->

            <!--Start Team Row-->
            <div class="row">

            <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!--Start Team Single-->
                <div class="col-md-3">
                    <div class="team-single text-center">
                        <img src="<?php echo e(asset('assets/images/team/'. $data->image)); ?>" class="img-responsive" alt="Image">
                        <div class="team-social">
                            <ul>
                                <li><a href="<?php echo e($data->facebook); ?>"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="<?php echo e($data->twitter); ?>"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="<?php echo e($data->linkedin); ?>"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-single-info">
                            <h4><?php echo e($data->name); ?></h4>
                            <p><?php echo e($data->designation); ?></p>
                        </div>
                    </div>
                </div>
                <!--End Team Single-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            <!--End Team Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Team Area-->

    <!--Start Testimonial Area-->
    <section id="testimonial-area" class="section-padding bg-cover">
        <div class="overlay"></div>
        <!--Start Container-->
        <div class="container">
            <!--Start Heading Row-->
            <div class="row">
                <!--Start Section Heading-->
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-heading text-center">
                        <h5 class="white-color">Clients Feedback</h5>
                        <h2 class="white-color">Our Client Testimonial</h2>
                    </div>
                </div>
                <!--End Section Heading-->
            </div>
            <!--End Heading Row-->

            <!--Start Testimonial Row-->
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!--Start Testimonial Carousel-->
                    <div class="testimonial-carousel owl-carousel">

                    <?php $__currentLoopData = $testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!--Start Testimonial Single-->
                        <div class="testimonial-single text-center">
                            <div class="testimonial-img">
                                <img src="<?php echo e(asset('assets/images/testimonial/'. $data->image)); ?>" class="img-responsive" alt="Image">
                            </div>
                            <div class="testimonial-content">
                                <p><?php echo e($data->name); ?> , <span><?php echo e($data->company); ?></span> </p>
                                <p><?php echo e($data->comment); ?></p>
                            </div>
                        </div>
                        <!--End Testimonial Single-->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </div>
                    <!--End Testimonial Carousel-->
                </div>
            </div>
            <!--End Testimonial Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Testimonial Area-->

    <section id="latest-blog">
        <div class="container">
            <!--Start Heading Row-->
            <div class="row">
                <!--Start Section Heading-->
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-heading text-center">
                        <h5>Get Up To Date</h5>
                        <h2>Our Latest Blog</h2>
                    </div>
                </div>
                <!--End Section Heading-->
            </div>
            <!--End Heading Row-->

            <!--Start Blog Post Row-->
            <div class="row">

                <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!--Start Blog Post Single-->
                <div class="col-md-4">
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
                            <span><a href="#"><i class="icofont icofont-ui-calendar"></i> <?php echo e(date('d F, Y', strtotime($data->created_at))); ?></a></span>

                        </div>
                        <div class="post-content">
                            <a href="<?php echo e(route('news.show.pranto',['id' => $data->id , 'title' => Replace($data->title)])); ?>">Read More <i class="icofont icofont-rounded-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--End Blog Post Single-->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!--Start Blog Post Single-->
        </div>
    </section>

    <!--Start Newsletter Area-->
    <section id="newsletter-area" class="section-padding bg-cover">
        <div class="overlay"></div>
        <!--Start Container-->
        <div class="container">
            <!--Start Heading Row-->
            <div class="row">
                <!--Start Section Heading-->
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-heading text-center">
                        <h5 class="white-color">Get Up To Date</h5>
                        <h2 class="white-color">Subscribe Our Newsletter</h2>
                    </div>
                </div>
                <!--End Section Heading-->
            </div>
            <!--End Heading Row-->


            <!--Start Newsletter Row-->
            <div class="row">
                <div class="col-md-12">
                    <div id="messsge"></div>
                </div>
                <div class="col-md-6 col-md-offset-2">
                    <div class="subscribe-form">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="subscribe-btn">
                        <button id="post">Subscribe Now</button>
                    </div>
                </div>
            </div>
            <!--End Newsletter Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Newsletter Area-->

    <!--Start Contact Area-->
    <section id="contact-area" class="section-padding bg-cover">
        <!--Start Container-->
        <div class="container">
            <!--Start Heading Row-->
            <div class="row">
                <!--Start Section Heading-->
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-heading text-center">
                        <h5>Have Any Question?</h5>
                        <h2>Contact With Us</h2>
                    </div>
                </div>
                <!--End Section Heading-->
            </div>
            <!--End Heading Row-->

            <!--Start Row-->
            <div class="row">
                <!--Start Contact Info-->
                <div class="contact-info fix">
                    <!--Start Contact Info Single-->
                    <div class="col-md-4">
                        <div class="contact-info-single text-center">
                            <i class="icofont icofont-social-google-map"></i>
                            <p><?php echo e($general->address); ?></p>
                        </div>
                    </div>
                    <!--End Contact Info Single-->

                    <!--Start Contact Info Single-->
                    <div class="col-md-4">
                        <div class="contact-info-single text-center">
                            <i class="icofont icofont-envelope"></i>
                            <p><?php echo e($general->email); ?></p>

                        </div>
                    </div>
                    <!--End Contact Info Single-->

                    <!--Start Contact Info Single-->
                    <div class="col-md-4">
                        <div class="contact-info-single text-center">
                            <i class="icofont icofont-phone"></i>
                            <p><?php echo e($general->mobile); ?></p>
                        </div>
                    </div>
                    <!--End Contact Info Single-->
                </div>
                <!--End Contact Info-->
            </div>
            <!--End Row-->

            <!--Start Row-->
            <div class="row">
                <?php if(Session::has('message')): ?>
                    <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
            <?php endif; ?>
                <!--Start Contact Form-->
                <div class="col-md-8">
                    <div class="contact-form">
                        <form action="<?php echo e(route('contact.us.message')); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <div class="input-box">
                                <div class="contact-icon"><i class="icofont icofont-user-alt-2"></i></div>
                                <input type="text" value="<?php echo e(old('name')); ?>" name="name" class="form-control" placeholder="Name">
                                <?php if($errors->has('name')): ?>
                                    <span class="help-block" style="color: red">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="input-box">
                                <div class="contact-icon"><i class="icofont icofont-email"></i></div>
                                <input type="email" value="<?php echo e(old('email')); ?>" class="form-control"  name="email" placeholder="Email">
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block" style="color: red">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="textarea-box">
                                <div class="contact-icon"><i class="icofont icofont-comment"></i></div>
                                <textarea class="form-control" name="message" rows="10" placeholder="Message"></textarea>
                                <?php if($errors->has('message')): ?>
                                    <span class="help-block" style="color: red">
                                        <strong><?php echo e($errors->first('message')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
                <!--End Contact Form-->

                <!--Start Google Map-->
                <div class="col-md-4">
                    <div class="map">
                        <?php echo $general->google_map_address; ?>

                    </div>
                </div>
                <!--End Google Map-->
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Contact Area-->

    <!--Start Partner Area-->
    <section id="partner-area">
        <!--Start Container-->
        <div class="container">
            <!--Start Heading Row-->
            <div class="row">
                <!--Start Section Heading-->
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-heading text-center">
                        <h2>Our Trusted Payment Methods</h2>

                    </div>
                </div>
                <!--End Section Heading-->
            </div>
            <!--End Heading Row-->

            <div class="row">
                <div class="col-md-12">
                    <!--Start Partner List-->
                    <div class="partner-list owl-carousel">
                        <?php $__currentLoopData = $gateway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img src="<?php echo e(asset('assets/images/gateway')); ?>/<?php echo e($data->gateimg); ?>" class="img-responsive" alt="Image">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <!--End Partner List-->
                </div>
            </div>

        </div>
        <!--End Container-->
    </section>
    <!--End Partner Area-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function(){
            $(document).on('click','#post',function(){
                var email = $("#email").val();

                $.ajax({
                    type:"POST",
                    url:"<?php echo e(route('store.new.letter')); ?>",
                    data:{

                        'email' : email,
                        '_token' : $('input[name=_token]').val()
                    },
                    success:function(data){
                        $('#messsge').html(data);
                        $("#email").val(' ');
                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('fonts.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>