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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

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

<body class="bg-gray">

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


    <div id="faq" class="faq-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 thumb">
                    <img src="assets/img/illustrations/2.svg" alt="Thumb">
                </div>
                <div class="col-md-7 faq-items">
                    <div class="heading">
                        <h2>Mon profil</h2>
                    </div>
                    <!-- Start Accordion -->
                    <div class="acd-items acd-arrow">
                        <div class="panel-group symb" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac3">
                                            Mes informations
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            Removing welcomed civility or hastened is. Justice elderly but perhaps expense six her are another passage. Full her ten open fond walk not down.For request general express unknown are. journey greatly or garrets. Draw door kept do so come on open mean. Estimating stimulated how reasonably precaution diminution she simplicity sir but. Questions am sincerity zealously concluded consisted or no gentleman it.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac1">
                                            Modifier mon identifiant
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>
                                            Removing welcomed civility or hastened is. Justice elderly but perhaps expense six her are another passage. Full her ten open fond walk not down.For request general express unknown are. journey greatly or garrets. Draw door kept do so come on open mean. Estimating stimulated how reasonably precaution diminution she simplicity sir but. Questions am sincerity zealously concluded consisted or no gentleman it.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac2">
                                            Modifier mon mot de passe
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            Removing welcomed civility or hastened is. Justice elderly but perhaps expense six her are another passage. Full her ten open fond walk not down.For request general express unknown are. journey greatly or garrets. Draw door kept do so come on open mean. Estimating stimulated how reasonably precaution diminution she simplicity sir but. Questions am sincerity zealously concluded consisted or no gentleman it.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Accordion -->
                </div>
            </div>
        </div>
    </div>


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
                            <p>&copy; Copyright 2018. All Rights Reserved by <a href="#">validthemes</a></p>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    <script>
        <?php

        $error = $action->session->get('error');
        $success = $action->session->get('success');

        if ($error) {
        ?>

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            Toast.fire({
                icon: 'error',
                title: '<?= $error ?>'
            });

        <?php
            $action->session->delete('error');
        }
        ?>

        <?php
        if ($success) {
        ?>

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            Toast.fire({
                icon: 'success',
                title: '<?= $success ?>'
            });

        <?php
            $action->session->delete('success');
        }
        ?>

        $("#addskill").click(function() {
            var skill = $("#userskill").val();
            if (!skill) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'bottom-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                });

                Toast.fire({
                    icon: 'error',
                    title: 'Enter a skill'
                });
                return;
            }
            $("#skills").append(`<span class="badge bg-danger p-1 m-1">${skill} <input type='hidden' name='skill[]' value='${skill}'/> <span class="removeskill" onclick='removeskill(this)'>X</span> </span>`);
            $("#userskill").val(``);
        });

        $("#addEducation").click(function() {
            var college = $("#college").val();
            var course = $("#course").val();
            var e_duration = $("#e_duration").val();
            if (!college) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'bottom-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                });

                Toast.fire({
                    icon: 'error',
                    title: 'Enter a college/institute'
                });
                return;
            }
            if (!e_duration) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'bottom-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                });

                Toast.fire({
                    icon: 'error',
                    title: 'Enter a course duration'
                });
                return;
            }
            if (!course) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'bottom-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                });

                Toast.fire({
                    icon: 'error',
                    title: 'Enter a course'
                });
                return;
            }
            $("#educations").append(`
                <div class="d-inline-block border rounded p-2 my-2">
            <input type="hidden" name="college[]" value="${college}">
            <input type="hidden" name="course[]" value="${course}">
            <input type="hidden" name="e_duration[]" value="${e_duration}">

                    <h4>${college}</h4>
                    <p>${course} - ${e_duration}</p>
                    <button type="button" class="btn-sm btn-danger" onclick="removeEducation(this)">Remove</button>
                </div>`);
            $("#college").val(``);
            $("#course").val(``);
            $("#e_duration").val(``);
        });

        $("#addExps").click(function() {
            var company = $("#company").val();
            var jobrole = $("#jobrole").val();
            var c_duration = $("#c_duration").val();
            var about = $("#work_desc").val();
            if (!company) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'bottom-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                });

                Toast.fire({
                    icon: 'error',
                    title: 'Enter a Company duration'
                });
                return;
            }
            if (!c_duration) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'bottom-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                });

                Toast.fire({
                    icon: 'error',
                    title: 'Enter a course duration'
                });
                return;
            }
            if (!jobrole) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'bottom-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                });

                Toast.fire({
                    icon: 'error',
                    title: 'Enter a job role'
                });
                return;
            }

            $("#exps").append(`
                <div class="d-inline-block border rounded p-2 my-2">
            <input type="hidden" name="company[]" value="${company}">
            <input type="hidden" name="jobrole[]" value="${jobrole}">
            <input type="hidden" name="c_duration[]" value="${c_duration}">
            <textarea class="d-none" name="work_desc[]">
            ${about}
            </textarea>

                    <h4>${company}</h4>
                    <p>${jobrole} - ${c_duration}</p>
                    <p>${about}</p>
                    <button type="button" class="btn-sm btn-danger" onclick="removeExps(this)">Remove</button>
                </div>`);
            $("#company").val(``);
            $("#jobrole").val(``);
            $("#c_duration").val(``);
            $("#work_desc").val(``);
        });

        function removeskill(button) {
            $(button).parent().remove();
        }

        function removeEducation(button) {
            $(button).parent().remove();
        }

        function removeEducation(button) {
            $(button).parent().remove();
        }

        function copyurl(url) {
            navigator.clipboard.writeText(url);
            const Toast = Swal.mixin({
                toast: true,
                position: 'bottom-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });
            Toast.fire({
                icon: 'success',
                title: 'Lien de partage copié'
            });
        }
    </script>

</body>

</html>