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
    <link rel="shortcut icon" href="<?= $action->helper->loadImg('favicon.png') ?>" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="<?= $action->helper->loadCss('bootstrap.min.css') ?>" rel="stylesheet" />
    <link href="<?= $action->helper->loadCss('font-awesome.min.css') ?>" rel="stylesheet" />
    <link href="<?= $action->helper->loadCss('flaticon-set.css') ?>" rel="stylesheet" />
    <link href="<?= $action->helper->loadCss('magnific-popup.css') ?>" rel="stylesheet" />
    <link href="<?= $action->helper->loadCss('owl.carousel.min.css') ?>" rel="stylesheet" />
    <link href="<?= $action->helper->loadCss('owl.theme.default.min.cs') ?>'" rel="stylesheet" />
    <link href="<?= $action->helper->loadCss('animate.css') ?>" rel="stylesheet" />
    <link href="<?= $action->helper->loadCss('bootsnav.css') ?>" rel="stylesheet" />
    <link href="<?= $action->helper->loadCss('style.css') ?>" rel="stylesheet">
    <link href="<?= $action->helper->loadCss('responsive.css') ?>" rel="stylesheet" />
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
                            <a class="navbar-brand" href="<?= $action->helper->url('/') ?>"><img src="<?= $action->helper->loadImg('logo.png') ?>" class="logo" alt="Logo"></a>
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

    <div id="blog" class="blog-area full-width single default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="col-lg-12 col-md-12">
                        <div class="item">

                            <div class="info">


                                <div class="comments-form">
                                    <div class="row">

                                    </div>
                                    <form method="POST" action="<?= $action->helper->url('action/createresume') ?>" class="border border-2 rounded-2 p-2 my-3">
                                        <div class="row">
                                            <input id="modèle" name="modele" type="hidden" value="2">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group" style="margin-top: 10px;">

                                                    <input name="name" class="form-control" placeholder="Nom" type="text" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group" style="margin-top: 10px;">

                                                    <input name="firstname" class="form-control" placeholder="Prénom *" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group" style="margin-top: 10px;">

                                                    <input name="email" class="form-control" placeholder="Email" type="text" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group" style="margin-top: 10px;">

                                                    <input name="location" class="form-control" placeholder="Localisation ( Paris, France )" type="text" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group" style="margin-top: 10px;">

                                                    <input name="xp" class="form-control" placeholder="Nombres d'années d'expériences" type="text" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group" style="margin-top: 10px;">

                                                    <input name="taux" class="form-control" placeholder="Taux de closing (en %)" type="text" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group" style="margin-top: 10px;">

                                                    <input name="formateur" class="form-control" placeholder="Formateur" type="text" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group" style="margin-top: 10px;">

                                                    <input name="headline" class="form-control" placeholder="Metier" type="text" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group" style="margin-top: 10px;">

                                                    <input name="mobile" class="form-control" placeholder="Numéro de téléphone" type="text" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group" style="margin-top: 10px;">

                                                    <input class="form-control" type="file" id="formFile" placeholder="Image de profil">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group" style="margin-top: 10px;">

                                                    <div class="">
                                                        <label for="inputEmail3" class=""></label>

                                                        <select type="secteur" name="secteur" class="form-control" required>
                                                            <option value="">-- Choisissez votre secteur d'activité --</option>
                                                            <option value="Sport">Sport</option>
                                                            <option value="Santé">Santé</option>
                                                            <option value="Bien-etre">Bien-être</option>
                                                            <option value="Business">Business</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group comments" style="margin-top: 20px;">

                                                    <textarea name="objective" class="form-control" placeholder="Décrivez-vous en quelques lignes" required></textarea>
                                                </div>
                                                <div class=" mb-3">
                                                    <label for="inputEmail3" class=""></label>
                                                    <div id="educations" class="">

                                                    </div>
                                                    <div class="d-flex gap-2" style="margin-top: 20px;">
                                                        <input type="text" class="form-control w-30" id="college" placeholder="Paris University, Paris">
                                                        <input type="text" class="form-control" id="course" placeholder="Bachelor Computer IA">
                                                        <input type="text" class="form-control" id="e_duration" placeholder="2021-2022">
                                                        <button type="button" class="" id="addEducation">Ajouter</button>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group full-width submit">
                                                    <button type="submit">
                                                        Générer Portfolio
                                                    </button>
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
    </div>
    <!-- Start Footer 
    
    ============================================= -->

    <!-- jQuery Frameworks
    ============================================= -->

    <script src="<?= $action->helper->loadJs('jquery-1.12.4.min.js') ?>"></script>
    <script src="<?= $action->helper->loadJs('bootstrap.min.js') ?>"></script>
    <script src="<?= $action->helper->loadJs('equal-height.min.js') ?>"></script>
    <script src="<?= $action->helper->loadJs('jquery.appear.js') ?>"></script>
    <script src="<?= $action->helper->loadJs('jquery.easing.min.js') ?>"></script>
    <script src="<?= $action->helper->loadJs('jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?= $action->helper->loadJs('modernizr.custom.13711.js') ?>"></script>
    <script src="<?= $action->helper->loadJs('owl.carousel.min.js') ?>"></script>
    <script src="<?= $action->helper->loadJs('count-to.js') ?>"></script>
    <script src="<?= $action->helper->loadJs('wow.min.js') ?>"></script>
    <script src="<?= $action->helper->loadJs('jquery.backgroundMove.js') ?>"></script>
    <script src="<?= $action->helper->loadJs('js/bootsnav.js') ?>"></script>
    <script src="<?= $action->helper->loadJs('main.js') ?>"></script>

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
                    <button type="button" class="btn-sm btn-danger" onclick="removeEducation(this)">Supprimer</button>
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
    </script>

</body>

</html>