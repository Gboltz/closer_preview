<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Boxass - Startup Landing Page Template">

    <!-- ========== Page Title ========== -->
    <title>Boxass - Startup Landing Page Template</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

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
                            <a class="navbar-brand" href="<?= $action->helper->url('/') ?>"><img src="assets/img/logo.png" class="logo" alt="Logo"></a>
                        </div>
                        <!-- End Header Navigation -->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= $action->helper->url('/') ?>">Accueil</a>
                                </li>
                                <li>
                                    <a class="smooth-menu" href="#about">A propos</a>
                                </li>
                                <li>
                                    <a class="smooth-menu" href="#features">Fonctionnalités</a>
                                </li>
                                <li>
                                    <a class="smooth-menu" href="#process">Processus</a>
                                </li>
                                <?php if ($action->is_logged()) : ?>
                                    <li class="nav-item">
                                        <a class="nav-link <?= @$myresume ?>" aria-current="page" href="<?= $action->helper->url('home') ?>">Mes Portfolio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?= @$profil ?>" href="<?= $action->helper->url('profil') ?>">Profil</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= $action->helper->url('action/logout') ?>">Déconnexion</a>
                                    </li>

                                <?php else : ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= $action->helper->url('login') ?>">Connexion</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= $action->helper->url('signup') ?>">S'inscrire</a>
                                    </li>
                                <?php endif; ?>

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

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area content-double box-nav background-move bg-gray" style="background-image: url(assets/img/bg-2.png);">
        <div class="container">
            <div class="row">
                <div class="double-items">
                    <div class="col-md-6 left-info simple-video">
                        <div class="content" data-animation="animated fadeInUpBig">
                            <h1>
                                Nous construisons des
                                <span>Portfolio</span>
                                pour aider les Closers
                            </h1>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum quia nesciunt temporibus veniam rerum quo doloremque sint. Fugiat sint non tempora blanditiis dolore dolor molestias cumque odit nemo. Ab, nam..
                            </p>
                            <?php if ($action->is_logged()) : ?>
                                <a class="btn btn-theme border btn-md" href="<?= $action->helper->url('home') ?>">Générer Portfolio</a>
                            <?php else : ?>
                                <a class="btn btn-theme border btn-md" href="<?= $action->helper->url('signup') ?>">S'inscrire</a>
                                <a class="btn-animation popup-youtube" href="https://www.youtube.com/watch?v=owhuBrGIOsE">
                                    <i class="fa fa-play"></i> Watch Video
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6 right-info">
                        <div class="thumb animated">
                            <img src="assets/img/illustrations/1.png" alt="Thumb">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start About 
    ============================================= -->
    <div id="about" class="about-area border-top default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 info">
                    <h2>Nous construisons un
                        <br>
                        Portfolio moderne
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis exercitationem saepe nostrum, repudiandae reiciendis eveniet nobis cumque! Alias esse doloremque quisquam natus illum? Temporibus, voluptatum mollitia! Voluptate fugit distinctio ex..
                    </p>
                    <ul>
                        <li>Portofilio fonctionnel selon vos informations personnel</li>
                        <li>Visibilité auprès de milliers d'infopreneurs</li>
                        <li>Possibilité d'upload votre CV</li>
                    </ul>
                    <div class="fun-facts">
                        <h3>

                            Des résultats annuels exceptionnels auprès de multiples Closer

                        </h3>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 item">
                                <div class="fun-fact">
                                    <div class="timer" data-to="75" data-speed="5000">75</div>
                                    <span class="medium">Bénéfices plus élevés</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 item">
                                <div class="fun-fact">
                                    <div class="timer" data-to="100" data-speed="5000">100</div>
                                    <span class="medium">Satisfait</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 item">
                                <div class="fun-fact">
                                    <div class="timer" data-to="98" data-speed="5000">98</div>
                                    <span class="medium">

                                        Taux de closing

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 features">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 equal-height">
                            <div class="item">
                                <i class="flaticon-ticket"></i>
                                <h4>Ticket manage</h4>
                                <p>
                                    Downs those still witty an balls so chief so. Moment an little remain no lively
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 equal-height">
                            <div class="item">
                                <i class="flaticon-speech-bubble"></i>
                                <h4>Live messaging</h4>
                                <p>
                                    Downs those still witty an balls so chief so. Moment an little remain no lively
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 equal-height">
                            <div class="item">
                                <i class="flaticon-email"></i>
                                <h4>Email workflow</h4>
                                <p>
                                    Downs those still witty an balls so chief so. Moment an little remain no lively
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 equal-height">
                            <div class="item">
                                <i class="flaticon-file"></i>
                                <h4>File upload</h4>
                                <p>
                                    Downs those still witty an balls so chief so. Moment an little remain no lively
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Features Area 
    ============================================= -->
    <div id="features" class="features-area carousel-shadow default-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>

                            Nos fonctionnalités</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, sapiente voluptatibus qui recusandae obcaecati rerum quisquam dolore quam deserunt quibusdam voluptatem odit enim accusamus atque facilis doloribus perferendis fuga voluptatum..
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="features-items features-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <span>01</span>
                                <i class="flaticon-drag-2"></i>
                            </div>
                            <div class="info">
                                <h4>Drag And Drop</h4>
                                <p>
                                    Situation perpetual allowance offending as principle.
                                </p>
                                <div class="bottom">
                                    <a href="#">View Details
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <span>02</span>
                                <i class="flaticon-software"></i>
                            </div>
                            <div class="info">
                                <h4>App Integration</h4>
                                <p>
                                    Situation perpetual allowance offending as principle.
                                </p>
                                <div class="bottom">
                                    <a href="#">View Details
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <span>03</span>
                                <i class="flaticon-rgb"></i>
                            </div>
                            <div class="info">
                                <h4>Color Schemes</h4>
                                <p>
                                    Situation perpetual allowance offending as principle.
                                </p>
                                <div class="bottom">
                                    <a href="#">View Details
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <span>04</span>
                                <i class="flaticon-video"></i>
                            </div>
                            <div class="info">
                                <h4>High Resolution</h4>
                                <p>
                                    Situation perpetual allowance offending as principle.
                                </p>
                                <div class="bottom">
                                    <a href="#">View Details
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features Area -->

    <!-- Start Work Process Area 
    ============================================= -->
    <div id="process" class="work-process-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Processus de travail</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat sunt necessitatibus pariatur minima fugiat quaerat saepe sapiente a quis, tenetur maiores itaque laborum officiis inventore impedit voluptatem facilis at!.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="process-items">
                    <div class="col-md-6 thumb">
                        <img src="assets/img/illustrations/4.svg" alt="Thumb">
                    </div>
                    <div class="col-md-6 info">
                        <ul>
                            <li>
                                <div class="list">
                                    <h3>
                                        <i class="fas fa-chart-line"></i>
                                    </h3>
                                </div>
                                <div class="content">
                                    <h4>Inscrivez-vous</h4>
                                    <p>
                                        Listening newspaper in advantage frankness to concluded unwilling. projection particular companions
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="list">
                                    <h3>
                                        <i class="fas fa-crosshairs"></i>
                                    </h3>
                                </div>
                                <div class="content">
                                    <h4>Choisissez votre modèle</h4>
                                    <p>
                                        Sentiments projection particular companions interested do at my delightful listening newspaper
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="list">
                                    <h3>
                                        <i class="fas fa-check"></i>
                                    </h3>
                                </div>
                                <div class="content">
                                    <h4>Générez votre portfolio</h4>
                                    <p>
                                        Talking chamber as shewing projection particular companions interested do at my delightful. Particular companions
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Work Process Area -->

    <!-- Start Contact
    ============================================= -->
    <div id="contact" class="contact-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Contactez-nous</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto eius facilis provident ea enim omnis nisi alias quas unde optio? Nihil soluta, libero deleniti quibusdam dolorum dolorem nisi delectus voluptate?.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="contact-items">

                    <!-- End Thumb -->
                    <div class="col-md-4 thumb">
                        <img src="assets/img/illustrations/5.png" alt="Thumb">
                    </div>
                    <!-- End Thumb -->

                    <!-- Contact Form -->
                    <div class="col-md-7 col-md-offset-1 contact-form">
                        <form action="assets/mail/contact.php" method="POST" class="contact-form">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Nom" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Téléphone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Parlez-nous du projet *
													
																																																																																																																																																																																																																																																																																																																																					"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit" name="submit" id="submit">
                                        Envoyer Message
                                        <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-md-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                        <h3>Pour toute question contactez notre 24/7


                            <br>centre d'appel
                            <span>+123 456 7890</span>
                        </h3>
                    </div>
                    <!-- End Contact Form -->
                </div>

                <!-- Address List -->
                <div class="address-list text-center col-md-12">
                    <div class="item-box">
                        <!-- Single Item -->
                        <div class="col-md-4 equal-height single-item">
                            <div class="item">
                                <i class="fas fa-map-marked-alt"></i>
                                <h4>Localisation</h4>
                                <p>
                                    5 Avenue Charles-de-Gaule,Paris, France
                                </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-4 equal-height single-item">
                            <div class="item">
                                <i class="fas fa-phone"></i>
                                <h4>Cas d'urgence</h4>
                                <h2>+123 456 7890</h2>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-4 equal-height single-item">
                            <div class="item">
                                <i class="fas fa-envelope-open"></i>
                                <h4>Email</h4>
                                <p>
                                    Closer@gmail.com<br>
                                </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
                <!-- End Address List -->

            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Footer 
    ============================================= -->
    <footer class="default-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="f-items">
                    <div class="col-md-4 col-sm-6 equal-height item">
                        <div class="f-item">
                            <img src="assets/img/logo.png" alt="Logo">
                            <p>
                                Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address.
                            </p>
                            <p>
                                <i>Please write your email and get our amazing updates, news and support</i>
                            </p>
                            <div class="newsletter">
                                <form action="#">
                                    <div class="input-group stylish-input-group">
                                        <input type="email" name="email" class="form-control" placeholder="Enter your e-mail here">
                                        <button type="submit">
                                            <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 equal-height item">
                        <div class="f-item link">
                            <h4>Quick LInk</h4>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">About us</a>
                                </li>
                                <li>
                                    <a href="#">Compnay History</a>
                                </li>
                                <li>
                                    <a href="#">Management </a>
                                </li>
                                <li>
                                    <a href="#">Features</a>
                                </li>
                                <li>
                                    <a href="#">Blog Page</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 equal-height item">
                        <div class="f-item link">
                            <h4>Community</h4>
                            <ul>
                                <li>
                                    <a href="#">Career</a>
                                </li>
                                <li>
                                    <a href="#">Leadership</a>
                                </li>
                                <li>
                                    <a href="#">Strategy</a>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                                <li>
                                    <a href="#">History</a>
                                </li>
                                <li>
                                    <a href="#">Jobs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 equal-height item">
                        <div class="f-item twitter-widget">
                            <h4>Contact Info</h4>
                            <p>
                                Queenslad Victoria Building. 60 california street california USA, 20, floor
                            </p>
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Website:</h5>
                                            <span>www.validtheme.com</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Email:</h5>
                                            <span>support@validtheme.com</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Phone:</h5>
                                            <span>+44-20-7328-4499</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="col-lg-6 col-md-6 col-sm-7">
                            <p>&copy; Copyright 2022. Tout droits réservés par <a href="#">Closer.com</a></p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-5 text-right social">
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Bottom -->
        </div>
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/equal-height.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.backgroundMove.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>



</body>

</html>