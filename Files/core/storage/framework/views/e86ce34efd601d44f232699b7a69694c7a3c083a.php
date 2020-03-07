<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler"> </div>
            </li>
            <li class="sidebar-search-wrapper">
            </li>

            <li class="nav-item  <?php echo "active",(request()->path() != 'admin/home')?:"";?>">
                <a href="<?php echo e(url('admin/home')); ?>" class="nav-link nav-toggle">
                    <i class="fas fa-tachometer-alt"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>
            <?php
                $url = Find_fist_int(request()->path());
            ?>

            <li class="nav-item  <?php echo "active",(request()->path() != 'admin/general')?:"";?>
            <?php echo "active",(request()->path() != 'admin/terms')?:"";?>
            <?php echo "active",(request()->path() != 'admin/sms-api')?:"";?>
            <?php echo "active",(request()->path() != 'admin/template')?:"";?>">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fas fa-desktop"></i>
                    <span class="title">Website Settings</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  <?php if( request()->path() == 'admin/general' ): ?> active open <?php endif; ?>">
                        <a href="<?php echo e(route('general.index')); ?>" class="nav-link ">
                            <i class="fas fa-cog"></i>
                            <span class="title">General Settings</span>
                        </a>
                    </li>
                    <li class="nav-item  <?php if( request()->path() == 'admin/terms' ): ?> active open <?php endif; ?>">
                        <a href="<?php echo e(route('terms.polices')); ?>" class="nav-link ">
                            <i class="far fa-sticky-note"></i>
                            <span class="title">Policy And Terms</span>
                        </a>
                    </li>

                    <li class="nav-item  <?php if( request()->path() == 'admin/template' ): ?> active open <?php endif; ?>">
                        <a href="<?php echo e(route('email.index.admin')); ?>" class="nav-link ">
                            <i class="fas fa-envelope-open"></i>
                            <span class="title">Email Template</span>
                        </a>
                    </li>

                    <li class="nav-item  <?php if( request()->path() == 'admin/sms-api' ): ?> active open <?php endif; ?>">
                        <a href="<?php echo e(route('sms.index.admin')); ?>" class="nav-link ">
                            <i class="far fa-comments"></i>
                            <span class="title">SMS Api</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item  <?php if( request()->path() == 'admin/charge/commission' ): ?> active open <?php endif; ?>">
                <a href="<?php echo e(route('charge.commission')); ?>" class="nav-link ">
                    <i class="fas fa-money-bill-alt"></i>
                    <span class="title">Charge And Commision</span>
                </a>
            </li>


            <li class="nav-item   <?php if( request()->path() == 'admin/testimonial' || request()->path() == "admin/testimonial_edit/$url" ): ?> active open <?php endif; ?>
            <?php echo "active",(request()->path() != 'admin/blog')?:"";?>
            <?php echo "active",(request()->path() != 'admin/blog/create')?:"";?>
            <?php echo "active",(request()->path() != 'admin/logo/icon')?:"";?>
            <?php echo "active",(request()->path() != 'admin/service')?:"";?>
            <?php echo "active",(request()->path() != 'admin/team')?:"";?>
            <?php echo "active",(request()->path() != 'admin/about')?:"";?>
            <?php echo "active",(request()->path() != 'admin/social/index')?:"";?>
            <?php echo "active",(request()->path() != 'admin/contact')?:"";?>
            <?php echo "active",(request()->path() != 'admin/footer')?:"";?>
            <?php echo "active",(request()->path() != 'admin/testimonial'  )?:"";?>
            <?php echo "active",(request()->path() != 'admin/footer'  )?:"";?>
            <?php echo "active",(request()->path() != 'admin/background/images'  )?:"";?>
            <?php echo "active",(request()->path() != 'admin/tree/image'  )?:"";?>
            <?php echo "active",(request()->path() != 'admin/slider')?:"";?>">

                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fab fa-internet-explorer"></i>
                    <span class="title">Website Interface </span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  <?php if( request()->path() == 'admin/blog'  ): ?> active open <?php endif; ?>
                    <?php if( request()->path() == 'admin/blog/create' ): ?> active open <?php endif; ?>
                    <?php if( request()->path() == 'admin/blog/create' ): ?> active open <?php endif; ?>
                    <?php if( request()->path() == "admin/menu_edit/$url" ): ?> active open <?php endif; ?>">
                        <a href="<?php echo e(route('menu.index')); ?>" class="nav-link ">
                            <i class="fas fa-bars"></i>
                            <span class="title">News Blog</span>
                        </a>
                    </li>
                    <li class="nav-item  <?php if( request()->path() == 'admin/slider' ): ?> active open <?php endif; ?>">
                        <a href="<?php echo e(route('slide.settings')); ?>" class="nav-link ">
                            <i class="fas fa-images"></i>
                            <span class="title">Slider Image</span>
                        </a>
                    </li>
                    <li class="nav-item  <?php if( request()->path() == 'admin/logo/icon' ): ?> active open <?php endif; ?>">
                        <a href="<?php echo e(route('logo.icon')); ?>" class="nav-link ">
                            <i class="fas fa-file-image"></i>
                            <span class="title">Logo</span>
                        </a>
                    </li>

                    <li class="nav-item  <?php if( request()->path() == 'admin/service' ): ?> active open <?php endif; ?>">
                        <a href="<?php echo e(route('service.index')); ?>" class="nav-link ">
                            <i class="fab fa-servicestack"></i>
                            <span class="title">Service</span>
                        </a>
                    </li>
                    <li class="nav-item  <?php if( request()->path() == 'admin/team' ): ?> active open <?php endif; ?>">
                        <a href="<?php echo e(route('team.index')); ?>" class="nav-link ">
                            <i class="fas fa-sitemap"></i>
                            <span class="title">Team</span>
                        </a>
                    </li>

                    <li class="nav-item  <?php if( request()->path() == 'admin/contact' || request()->path() == "admin/contact" ): ?> active open <?php endif; ?>">
                        <a href="<?php echo e(route('contact.admin.index')); ?>" class="nav-link ">
                            <i class="fab fa-contao"></i>
                            <span class="title">Contact</span>
                        </a>
                    </li>

                    <li class="nav-item  <?php if( request()->path() == 'admin/about' || request()->path() == "admin/about" ): ?> active open <?php endif; ?>">
                        <a href="<?php echo e(route('about.admin.index')); ?>" class="nav-link ">
                            <i class="fab fa-buysellads"></i>
                            <span class="title">About</span>
                        </a>
                    </li>

                    <li class="nav-item  <?php if( request()->path() == 'admin/social/index' || request()->path() == "admin/social/index" ): ?> active open <?php endif; ?>">
                        <a href="<?php echo e(route('social.admin.index')); ?>" class="nav-link ">
                            <i class="fab fa-stripe-s"></i>
                            <span class="title">Social</span>
                        </a>
                    </li>

                    <li class="nav-item  <?php if( request()->path() == 'admin/footer' || request()->path() == "admin/footer" ): ?> active open <?php endif; ?>">
                        <a href="<?php echo e(route('footer.index.admin')); ?>" class="nav-link ">
                            <i class="fab fa-foursquare"></i>
                            <span class="title">Footer</span>
                        </a>
                    </li>

                    <li class="nav-item  <?php if( request()->path() == 'admin/testimonial' || request()->path() == "admin/testimonial_edit/$url" ): ?> active open <?php endif; ?>">
                        <a href="<?php echo e(route('testimonial.index')); ?>" class="nav-link ">
                            <i class="fas fa-comment-alt"></i>
                            <span class="title">Testimonial</span>
                        </a>
                    </li>

                    <li class="nav-item  <?php echo "active",(request()->path() != 'admin/tree/image')?:"";?>">
                        <a href="<?php echo e(route('user.tree.image')); ?>" class="nav-link nav-toggle">
                            <i class="fas fa-user-circle"></i>
                            <span class="title">Users Tree Image</span>
                        </a>
                    </li>

                    <li class="nav-item  <?php echo "active",(request()->path() != 'admin/background/images')?:"";?>">
                        <a href="<?php echo e(route('background.image.index')); ?>" class="nav-link nav-toggle">
                            <i class="far fa-file-image"></i>
                            <span class="title">Background Images</span>
                        </a>
                    </li>
                </ul>
            </li>

            <?php $req = \App\WithdrawTrasection::where('status', 0)->count() ?>

            <li class="nav-item  <?php echo "active",(request()->path() != 'admin/withdraw/method')?:"";?>
            <?php echo "active",(request()->path() != 'admin/withdraw/requests')?:"";?>
            <?php echo "active",(request()->path() != 'admin/withdraw/log')?:"";?>">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="far fa-money-bill-alt"></i>
                    <span class="title">Withdraw <?php if($req == 0): ?>  <?php else: ?><span class="badge badge-danger"><?php echo e($req); ?> <?php endif; ?></span></span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  <?php if( request()->path() == 'admin/withdraw/method' ): ?> active open <?php endif; ?>">
                        <a href="<?php echo e(route('add.withdraw.method')); ?>" class="nav-link ">
                            <i class="fab fa-paypal"></i>
                            <span class="title">Withdraw Methods</span>
                        </a>
                    </li>
                    <li class="nav-item  <?php if( request()->path() == 'admin/withdraw/requests' ): ?> active open <?php endif; ?>">
                        <a href="<?php echo e(route('withdraw.request.index')); ?>" class="nav-link ">
                            <i class="fas fa-spinner"></i>
                            <span class="title">Withdraw Requests <?php if($req == 0): ?>  <?php else: ?><span class="badge badge-danger"><?php echo e($req); ?> <?php endif; ?></span></span>
                        </a>
                    </li>
                    <li class="nav-item  <?php if( request()->path() == 'admin/withdraw/log' ): ?> active open <?php endif; ?>">
                        <a href="<?php echo e(route('withdraw.viewlog.admin')); ?>" class="nav-link ">
                            <i class="fas fa-eye"></i>
                            <span class="title">View Log</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item  <?php if( request()->path() == 'admin/gateway' ): ?> active open <?php endif; ?>">
                <a href="<?php echo e(route('gateway.index')); ?>" class="nav-link ">
                    <i class="far fa-credit-card"></i>
                    <span class="title">Payment Methods</span>
                    <span class="selected"></span>
                </a>
            </li>

            <li class="nav-item  <?php if( request()->path() == 'admin/add/fund/user' ): ?> active open <?php endif; ?>">
                <a href="<?php echo e(route('index.deposit.user')); ?>" class="nav-link ">
                    <i class="fab fa-cc-mastercard"></i>
                    <span class="title">Payment Log</span>
                    <span class="selected"></span>
                </a>
            </li>

            <li class="nav-item  <?php echo "active",(request()->path() != 'admin/users')?:"";?>
            <?php echo "active",(request()->path() != 'admin/paid/user')?:"";?>
            <?php echo "active",(request()->path() != 'admin/deactive/user')?:"";?>
            <?php echo "active",(request()->path() != 'admin/free/user')?:"";?>">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fas fa-users"></i>
                    <span class="title">Users Management</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  <?php if( request()->path() == 'admin/users' ): ?> active open <?php endif; ?>">
                        <a href="<?php echo e(route('user.manage')); ?>" class="nav-link ">
                            <i class="far fa-user-circle"></i>
                            <span class="title">All Users</span>
                        </a>
                    </li>

                    <li class="nav-item  <?php if( request()->path() == 'admin/paid/user' ): ?> active open <?php endif; ?>">
                        <a href="<?php echo e(route('paid.user.index')); ?>" class="nav-link ">
                            <i class="far fa-user"></i>
                            <span class="title">Paid Users</span>
                        </a>
                    </li>

                    <li class="nav-item  <?php if( request()->path() == 'admin/free/user' ): ?> active open <?php endif; ?>">
                        <a href="<?php echo e(route('free.user.index')); ?>" class="nav-link ">
                            <i class="fas fa-user-times"></i>
                            <span class="title">Free Users</span>
                        </a>
                    </li>

                    <li class="nav-item  <?php if( request()->path() == 'admin/deactive/user' ): ?> active open <?php endif; ?>">
                        <a href="<?php echo e(route('index.deactive.user')); ?>" class="nav-link ">
                            <i class="fas fa-ban"></i>
                            <span class="title">Banded Users</span>
                        </a>
                    </li>


                </ul>
            </li>

            <li class="nav-item  <?php echo "active",(request()->path() != 'admin/transfer/balance')?:"";?>">
                <a href="<?php echo e(route('index.transfer.user')); ?>" class="nav-link nav-toggle">
                    <i class="fas fa-download"></i>
                    <span class="title">Admin Income</span>
                    <span class="selected"></span>
                </a>
            </li>

            <li class="nav-item  <?php echo "active",(request()->path() != 'admin/match')?:"";?>">
                <a href="<?php echo e(route('match.index')); ?>" class="nav-link nav-toggle">
                    <i class="far fa-clone"></i>
                    <span class="title">Matching History</span>
                    <span class="selected"></span>
                </a>
            </li>

            <?php $check_count = \App\Ticket::where('status', 1)->get() ?>
            <li class="nav-item  <?php if( request()->path() == 'admin/supports' || request()->path() == 'admin/supports' ): ?> active open <?php endif; ?>
            <?php if( request()->path() == '' || request()->path() == '' ): ?> active open <?php endif; ?>">
                <a href="<?php echo e(route('support.admin.index')); ?>" class="nav-link nav-toggle">
                    <i class="fas fa-ticket-alt"></i>
                    <span class="title">Support <?php if(count($check_count) == 0): ?>  <?php else: ?> <span class="badge badge-danger"> <?php echo e(count($check_count)); ?> <?php endif; ?> </span></span>
                    <span class="selected"></span>
                </a>
            </li>

            <li class="nav-item  <?php if( request()->path() == '' || request()->path() == '' ): ?> active open <?php endif; ?>
            <?php if( request()->path() == '' || request()->path() == '' ): ?> active open <?php endif; ?>">
                <a  data-toggle="modal" href="#basic" class="nav-link nav-toggle">
                    <i class="fas fa-sync-alt"></i>
                    <span class="title">GENERATE MATCHING</span>
                    <span class="selected"></span>
                </a>
            </li>

            <li class="heading">
                <h3 class="uppercase">PTC Management</h3>
            </li>

            <li class="nav-item  <?php echo "active",(request()->path() != 'admin/ptc/limitation')?:"";?>
            <?php echo "active",(request()->path() != '')?:"";?>">
                <a href="<?php echo e(route('ptc.limit')); ?>" class="nav-link nav-toggle">
                    <i class="fas fa-sliders-h"></i>
                    <span class="title">PTC Manage Limitation</span>
                    <span class="selected"></span>
                </a>
            </li>

            <li class="nav-item  <?php echo "active",(request()->path() != 'admin/add/new')?:"";?>
            <?php echo "active",(request()->path() != '')?:"";?>">
                <a href="<?php echo e(route('add.addvertise')); ?>" class="nav-link nav-toggle">
                    <i class="fab fa-adversal"></i>
                    <span class="title">PTC Management</span>
                    <span class="selected"></span>
                </a>
            </li>

            <li class="nav-item  <?php echo "active",(request()->path() != 'admin/ptc/packages')?:"";?>
            <?php echo "active",(request()->path() != '')?:"";?>">
                <a href="<?php echo e(route('package.index')); ?>" class="nav-link nav-toggle">
                    <i class="fas fa-archive"></i>
                    <span class="title">PTC Packages</span>
                    <span class="selected"></span>
                </a>
            </li>
            <?php $ad_req = \App\Advertise::where('package_status', 3)->count()?>
            <li class="nav-item  <?php echo "active",(request()->path() != 'admin/request/advertise')?:"";?>
            <?php echo "active",(request()->path() != 'admin/advertises')?:"";?>
            <?php echo "active",(request()->path() != 'admin/reject/advertise')?:"";?>">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fas fa-spinner"></i>
                    <span class="title">Request Advertises  <?php if($ad_req == 0): ?>  <?php else: ?><span class="badge badge-danger"><?php echo e($ad_req); ?> <?php endif; ?></span> </span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  <?php if( request()->path() == 'admin/request/advertise' ): ?> active open <?php endif; ?>">
                        <a href="<?php echo e(route('req.add.index')); ?>" class="nav-link ">
                            <i class="fas fa-ellipsis-h"></i>
                            <span class="title">Reqests Advertise   <?php if($ad_req == 0): ?>  <?php else: ?><span class="badge badge-danger"><?php echo e($ad_req); ?> <?php endif; ?></span></span>
                        </a>
                    </li>
                    <li class="nav-item  <?php if( request()->path() == 'admin/advertises' ): ?> active open <?php endif; ?>">
                        <a href="<?php echo e(route('all.add.index')); ?>" class="nav-link ">
                            <i class="fas fa-info-circle"></i>
                            <span class="title">Advertise Log</span>
                        </a>
                    </li>
                    <li class="nav-item  <?php if( request()->path() == 'admin/reject/advertise' ): ?> active open <?php endif; ?>">
                        <a href="<?php echo e(route('reject.add.index')); ?>" class="nav-link ">
                            <i class="fas fa-ban"></i>
                            <span class="title">Rejected Advertise</span>
                        </a>
                    </li>

                </ul>
            </li>



        </ul>
    </div>
</div>