<!-- Header 
    ============================================= -->
<header id="home">
    <div class="container">
        <div class="row">
            <!-- Start Navigation -->
            <nav id="mainNav" class="navbar navbar-default navbar-fixed white bootsnav on no-full nav-box no-background">

                <div class="container">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" class="logo" alt="Logo"></a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                            <li class="nav-item">
                                <a class="nav-link <?= @$myresume ?>" aria-current="page" href="<?= $action->helper->url('home') ?>">My resumes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= @$profil ?>" href="#">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= $action->helper->url('login') ?>">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= $action->helper->url('signup') ?>">Sign up</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= $action->helper->url('action/logout') ?>">Logout</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>

                <!-- Start Side Menu -->
                <div class="side">
                    <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                    <div class="widget address">
                        <h4 class="title">Office Location</h4>
                        <ul>
                            <li>
                                <i class="fas fa-phone"></i>
                                +123 456 7890
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                California, TX 70240
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i>
                                info@yourdomain.com
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h4 class="title">Custom Pages</h4>
                        <ul class="link">
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
                            <li><a href="#">Profile</a></li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h4 class="title">Additional Links</h4>
                        <ul class="link">
                            <li><a href="#">Compnay History</a></li>
                            <li><a href="#">Management</a></li>
                            <li><a href="#">Leadership</a></li>
                            <li><a href="#">Shortcode Central</a></li>
                            <li><a href="#">Career</a></li>
                        </ul>
                    </div>
                    <div class="widget social">
                        <h4 class="title">Connect With Us</h4>
                        <ul class="link">
                            <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Side Menu -->
            </nav>
            <!-- End Navigation -->
            <div class="clearfix"></div>

        </div>
    </div>
</header>
<!-- End Header -->