<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html lang="<?php echo $configLanguage; ?>" dir="<?php echo $dirType; ?>">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-translate-customization" content="839d71f7ff6044d0-328a2dc5159d6aa2-gd17de6447c9ba810-f">
    <?php echo $this->Html->charset(); ?>
    <title><?php echo $metaTitle; ?></title>
    <meta name="keyword" content="<?php echo $metaKeyword; ?>" />
    <meta name="description" content="<?php echo $metaContent; ?>" />
    <link rel="icon" type="image/png"
        href="<?php echo $this->Html->url(array('crm' => false, 'controller' => 'img')) . '/' . $sysSetting['Configuration']['favicon']; ?>">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <?php
	echo $this->Html->css('/app/webroot/css/font-awesome-5.7.2');

	echo $this->Html->css('/app/webroot/assets/vendor/aos/aos.css');

	echo $this->Html->css('/app/webroot/design300/css/font');
	echo $this->Html->css('/app/webroot/design300/css/settings');
	echo $this->Html->css('/app/webroot/design300/css/style');
	echo $this->Html->css('/app/webroot/design300/css/slider');
	echo $this->Html->css('/app/webroot/css/validationEngine.jquery');
	echo $this->Html->css('/app/webroot/css/bootstrap-multiselect');
	// echo $this->Html->css('style');
	echo $this->fetch('meta');
	echo $this->fetch('css');
	// /* ========================== */

	echo $this->Html->css('/app/webroot/css/v2/feather');
	echo $this->Html->css('/app/webroot/css/v2/owl.carousel.min');
	echo $this->Html->css('/app/webroot/css/v2/owl.theme.default.min');
	echo $this->Html->css('/app/webroot/css/v2/slick');
	echo $this->Html->css('/app/webroot/css/v2/slick-theme');
	echo $this->Html->css('/app/webroot/css/v2/select2.min');
	echo $this->Html->css('/app/webroot/css/v2/swiper.min');
	echo $this->Html->css('/app/webroot/css/v2/style');
	echo $this->Html->css('/app/webroot/css/v2/slider');

	echo $this->Html->css('/app/webroot/assets/vendor/bootstrap/css/bootstrap.min.css');
	echo $this->Html->css('/app/webroot/assets/vendor/bootstrap-icons/bootstrap-icons.css');
	echo $this->Html->css('/app/webroot/assets/vendor/boxicons/css/boxicons.min.css');
	echo $this->Html->css('/app/webroot/assets/vendor/glightbox/css/glightbox.min.css');
	echo $this->Html->css('/app/webroot/assets/vendor/remixicon/remixicon.css');
	echo $this->Html->css('/app/webroot/assets/vendor/swiper/swiper-bundle.min.css');
	echo $this->Html->css('/app/webroot/assets/css/style.css');


	echo $this->Html->script('/app/webroot/design300/js/jquery.min', array());
	echo $this->Html->script('/app/webroot/js/v2/jquery.flexslider-min', array('defer'));
	echo $this->Html->script('/app/webroot/js/v2/en', array('defer'));
	echo "<style>
        .empty-cart center>a>i.fa.fa-shopping-bag {
                border: 1px solid #ddd;
                font-size: 35px;
                color: #000;
                padding: 20px;
                border-radius: 100%;
                box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
        }
    </style>";
	if ($this->params['controller'] == "pages") {
		$this->params['controller'] = "";
	}

	$currentUrl = Router::url(null, true);



	?>
    <?php if ($translate > 0) { ?>
    <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <?php } ?>

    <script type="text/javascript">
    $(document).ready(function() {
        $("#products_animation_id").click(function(event) {
            $("#products_animation").toggle();
            $("#products_animation").attr('style', 'display:block');
        });
        $("#products_animation").hide();
    });
    </script>
</head>


<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <h1 class="presento-logo me-auto"><a href="index.html">Edu Expression<span>.</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li>
                        <a <?php if ($currentUrl == $siteDomain) { ?> class="nav-link scrollto active" <?php } ?>
                            class="nav-link scrollto" href="<?= $siteDomain ?>"><i class="fa fa-home"></i>&nbsp;Home</a>
                    </li>
                    <li class="dropdown">
                        <a <?php if ($currentUrl == $siteDomain . '/Contents/Pages/About-Us' || $currentUrl == $siteDomain . '/Contents/Pages/Profile') { ?>
                            class="nav-link scrollto active" <?php } ?> href="#"><i
                                class="fa fa-globe"></i>&nbsp;About&nbsp;<i class="fas fa-chevron-down"></i></a>

                        <ul>
                            <li><a <?php if ($currentUrl == $siteDomain . '/Contents/Pages/About-Us') { ?>
                                    class="active" <?php } ?> style="justify-content: flex-start"
                                    href="<?= $siteDomain ?>/Contents/Pages/About-Us"><i></i>&nbsp;About
                                    Us</a>
                            </li>
                            <li><a <?php if ($currentUrl == $siteDomain . '/Contents/Pages/Profile') { ?> class="active"
                                    <?php } ?> style="justify-content: flex-start;"
                                    href="<?= $siteDomain ?>/Contents/Pages/Profile"><i></i>&nbsp;Profile</a>
                            </li>
                        </ul>

                    </li>
                    <li><a <?php if ($currentUrl == $siteDomain . '/Packages/index/index') { ?>
                            class="nav-link scrollto active" <?php } ?> class="nav-link scrollto"
                            href="<?= $siteDomain ?>/Packages/index/index"><i
                                class="fa fa-shopping-cart"></i>&nbsp;Packages</a></li>

                    <li><a <?php if ($currentUrl == $siteDomain . '/Schedules/index') { ?>
                            class="nav-link scrollto active" <?php } ?> class="nav-link scrollto"
                            href="<?= $siteDomain ?>/Schedules/index"><i class="fa fa-calendar"></i>&nbsp;Schedules</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a <?php if ($currentUrl == $siteDomain . '/Login/index') { ?> style="background: #111111; color: #fff;"
                <?php } ?>href="<?= $siteDomain ?>/Login/index" class="get-started-btn scrollto">Sign In</a>

            <a <?php if ($currentUrl == $siteDomain . '/Registers/index') { ?> style="background: #111111; color: #fff;"
                <?php } ?>href="<?= $siteDomain ?>/Registers/index" class="get-started-btn scrollto">Sign Up</a>
        </div>
    </header><!-- End Header -->
    <?php echo $this->fetch('content'); ?>

    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Presento<span>.</span></h3>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Presento</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            <div class="social-links text-center text-md-end pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
    <?php
	echo $this->Html->script('/app/webroot/assets/vendor/purecounter/purecounter_vanilla.js', array('defer'));
	echo $this->Html->script('/app/webroot/assets/vendor/aos/aos.js', array('defer'));
	echo $this->Html->script('/app/webroot/assets/vendor/glightbox/js/glightbox.min.js', array('defer'));
	echo $this->Html->script('/app/webroot/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('defer'));
	echo $this->Html->script('/app/webroot/assets/vendor/isotope-layout/isotope.pkgd.min.js', array('defer'));
	echo $this->Html->script('/app/webroot/assets/vendor/swiper/swiper-bundle.min.js', array('defer'));
	echo $this->Html->script('/app/webroot/assets/vendor/php-email-form/validate.js', array('defer'));
	echo $this->Html->script('/app/webroot/assets/js/main.js', array('defer'));
	echo $this->Html->script('/app/webroot/js/v2/bootstrap.bundle.min', array('defer'));
	echo $this->Html->script('/app/webroot/js/v2/owl.carousel.min', array('defer'));
	// echo $this->Html->script('/app/webroot/js/v2/aos', array('defer'));
	echo $this->Html->script('/app/webroot/js/v2/jquery.waypoints', array('defer'));
	echo $this->Html->script('/app/webroot/js/v2/jquery.counterup.min', array('defer'));
	echo $this->Html->script('/app/webroot/js/v2/select2.min', array('defer'));
	echo $this->Html->script('/app/webroot/js/v2/slick', array('defer'));
	echo $this->Html->script('/app/webroot/js/v2/swiper.min', array('defer'));
	echo $this->Html->script('/app/webroot/js/v2/script', array('defer'));

	echo $this->Html->script('/app/webroot/design300/js/jquery.min', array());
	echo $this->Html->script('/app/webroot/design300/js/jquery.flexslider-min', array('defer'));
	echo $this->Html->script('/app/webroot/js/html5shiv.js', array('defer'));
	echo $this->Html->script('/app/webroot/js/respond.min', array('defer'));
	echo $this->Html->script('/app/webroot/js/jquery.validationEngine-en', array('defer'));
	echo $this->Html->script('/app/webroot/js/jquery.validationEngine', array('defer'));
	echo $this->Html->script('/app/webroot/design300/js/bootstrap.min', array('defer'));
	echo $this->Html->script('/app/webroot/design300/js/rs-slider', array('defer'));
	echo $this->Html->script('/app/webroot/js/bootstrap-multiselect', array('defer'));
	echo $this->Html->script('/app/webroot/js/waiting-dialog.min', array('defer'));
	echo $this->Html->script("/app/webroot/js/langs/$configLanguage", array('defer'));




	?>

</body>








</html>