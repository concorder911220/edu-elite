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
    <!-- <link href="assets/js/plugins/bootsnav_files/skins/color.css" rel="stylesheet">

	<link href="assets/js/plugins/bootsnav_files/css/animate.css" rel="stylesheet">

	<link href="assets/js/plugins/bootsnav_files/css/bootsnav.css" rel="stylesheet">

	<link href="assets/js/plugins/bootsnav_files/css/overwrite.css" rel="stylesheet">

	<link href="assets/js/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">

	<link href="assets/js/plugins/owl-carousel/owl.theme.css" rel="stylesheet">

	<link href="assets/js/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">

	<link href="assets/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet"> -->



    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!--
	<link href="assets/css/main.css" rel="stylesheet"> -->
    <?php
	echo $this->Html->css('/app/webroot/assets/css/main.css');
	echo $this->Html->css('/app/webroot/assets/js/plugins/bootsnav_files/skins/color.css');
	echo $this->Html->css('/app/webroot/assets/js/plugins/bootsnav_files/css/animate.css');
	echo $this->Html->css('/app/webroot/assets/js/plugins/bootsnav_files/css/bootsnav.css');
	echo $this->Html->css('/app/webroot/assets/js/plugins/bootsnav_files/css/overwrite.css');
	echo $this->Html->css('/app/webroot/assets/js/plugins/owl-carousel/owl.carousel.css');
	echo $this->Html->css('/app/webroot/assets/js/plugins/owl-carousel/owl.theme.css');
	echo $this->Html->css('/app/webroot/assets/js/plugins/owl-carousel/owl.transitions.css');
	echo $this->Html->css('/app/webroot/assets/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/magnific-popup.css');


	echo $this->Html->css('/app/webroot/assets/bootstrap-3.3.7/bootstrap-3.3.7-dist/css/bootstrap.min.css');


	echo $this->Html->css('/app/webroot/css/font-awesome-5.7.2');

	// echo $this->Html->css('app/webroot/design300/css/bootstrap.min');
	echo $this->Html->css('/app/webroot/design300/css/font');
	echo $this->Html->css('/app/webroot/design300/css/settings');
	echo $this->Html->css('/app/webroot/design300/css/style');
	echo $this->Html->css('/app/webroot/design300/css/slider');
	echo $this->Html->css('/app/webroot/css/validationEngine.jquery');
	echo $this->Html->css('/app/webroot/css/bootstrap-multiselect');
	echo $this->Html->css('style');
	echo $this->fetch('meta');
	echo $this->fetch('css');
	/* ========================== */
	// echo $this->Html->css('/app/webroot/css/v2/bootstrap.min');
	echo $this->Html->css('/app/webroot/css/v2/feather');
	echo $this->Html->css('/app/webroot/css/v2/owl.carousel.min');
	echo $this->Html->css('/app/webroot/css/v2/owl.theme.default.min');
	echo $this->Html->css('/app/webroot/css/v2/slick');
	echo $this->Html->css('/app/webroot/css/v2/slick-theme');
	echo $this->Html->css('/app/webroot/css/v2/select2.min');
	echo $this->Html->css('/app/webroot/css/v2/swiper.min');
	//echo $this->Html->css('/app/webroot/css/v2/aos');
//echo $this->Html->css('/app/webroot/css/v2/style_v1');
	echo $this->Html->css('/app/webroot/css/v2/style');
	echo $this->Html->css('/app/webroot/css/v2/slider');

	echo $this->Html->script('/app/webroot/design300/js/jquery.min', array());
	// echo $this->Html->script('app/webroot/js/v2/jquery-3.6.0.min', array('defer'));
// echo $this->Html->script('app/webroot/js/v2/custom.min', array('defer'));
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

        // $("#products_animation_id").hover(
        //     function () {
        //         $("#products_animation").show(500);
        //     }, function () {
        //         //$( "#products_animation" ).hide(500);
        //     }
        // );

        // $("#products_animation").hover(
        //     function () {
        //         // $( "#products_animation" ).show(500);
        //     }, function () {
        //         $("#products_animation").hide(500);
        //     }
        // );

        $("#products_animation_id").click(function(event) {
            $("#products_animation").toggle();
            //  $("#products_animation").attr('style','visibility:visible');
            //  $("#products_animation").attr('style','opacity:1');
            $("#products_animation").attr('style', 'display:block');
        });
        $("#products_animation").hide();
    });
    </script>
</head>


<body>



    <!--========================================

		   Preloader

	========================================-->

    <div class="page-preloader">

        <div class="spinner">

            <div class="rect1"></div>

            <div class="rect2"></div>

            <div class="rect3"></div>

            <div class="rect4"></div>

            <div class="rect5"></div>

        </div>

    </div>



    <!--========================================

		   Header

	========================================-->



    <!--//** Navigation**//-->

    <nav class="navbar navbar-default navbar-fixed white no-background bootsnav navbar-scrollspy"
        data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">



        <div class="container">

            <!-- Start Header Navigation -->

            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">

                    <i class="fa fa-bars"></i>

                </button>

                <a class="navbar-brand" href="#brand">

                    <img src="assets/img/logo.png" class="logo" alt="logo">

                </a>

            </div>

            <!-- End Header Navigation -->



            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="navbar-menu">

                <ul class="nav navbar-nav navbar-right">

                    <li class="active scroll"><a href="#home">Home</a></li>

                    <li class="scroll"><a href="#about">About Us</a></li>

                    <li class="scroll"><a href="#services">Profile</a></li>

                    <li class="scroll"><a href="#price">Packages</a></li>

                    <li class="scroll"><a href="#team">Schdules</a></li>

                    <li class="button-holder">
                        <button type="button" class="vortex-btn vortex-btn-blue navbar-vortex-btn"
                            id="sign_in_vortex-btn">Sign in</button>
                    </li>
                    <li class="button-holder">
                        <button type="button" class="vortex-btn vortex-btn-blue navbar-vortex-btn"
                            id="sign_up_vortex-btn">Sign up</button>
                    </li>

                </ul>

            </div>

            <!-- /.navbar-collapse -->

        </div>

    </nav>



    <!--//** Banner**//-->

    <section id="home">

        <div class="container">

            <div class="row">

                <div id="particles-js"></div>

                <!-- Introduction -->

                <div class="col-md-6 caption">

                    <h1 class="vortex-h1">Welcome To Vortex</h1>

                    <h2>

                        I am

                        <span class="animated-text"></span>

                        <span class="typed-cursor"></span>

                    </h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, quibusdam. Sit, quas tempora
                        quia officia!</p>

                    <a href="#" class="vortex-btn vortex-btn-transparent">Get Started</a>

                    <a class="vortex-btn vortex-btn-blue popup-youtube" href="#">

                        <i class="material-icons">play_circle_filled</i>Watch Video

                    </a>

                </div>

                <!-- Sign Up -->

                <div class="col-md-5 col-md-offset-1" style="display: none;" id="signup_form_section">

                    <form class="signup-form">

                        <h2 class="text-center">Signup Now</h2>

                        <hr>

                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="Full Name" required="required">

                        </div>

                        <div class="form-group">

                            <input type="email" class="form-control" placeholder="Email Address" required="required">

                        </div>

                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="User Name" required="required">

                        </div>

                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="Password" required="required">

                        </div>

                        <div class="form-group text-center">

                            <button type="submit" class="vortex-btn vortex-btn-blue vortex-btn-block">Start Now</button>

                        </div>

                    </form>

                </div>

            </div>

        </div>



    </section>



    <!--========================================

		   About Us

	========================================-->



    <section id="about" class="section-padding">

        <div class="container">

            <h2>About Us</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, optio.</p>

            <div class="row">

                <div class="col-md-4">

                    <div class="icon-box">

                        <i class="material-icons">favorite</i>

                        <h4>Simple To Use</h4>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas minima, dicta quaerat sit
                            cupiditate eum mollitia.</p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="icon-box">

                        <i class="material-icons">flash_on</i>

                        <h4>Powerful</h4>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas minima, dicta quaerat sit
                            cupiditate eum mollitia.</p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="icon-box">

                        <i class="material-icons">settings</i>

                        <h4>Easy To Customize</h4>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas minima, dicta quaerat sit
                            cupiditate eum mollitia.</p>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!--========================================

		   Story

	========================================-->



    <section id="story">

        <div class="container-fluid">

            <div class="row">

                <!-- Img -->

                <div class="col-md-6 story-bg">

                </div>

                <!-- Story Caption -->

                <div class="col-md-6">

                    <div class="story-content">

                        <h2>Our Success Story</h2>

                        <p class="story-quote">

                            " Success is finding satisfaction in giving a little more than you take."

                        </p>

                        <div class="story-text">

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis amet consequatur
                                incidunt, alias odit quisquam laborum nemo nisi, vel, tempora eligendi enim voluptate
                                accusamus libero voluptas commodi ex rerum dolorem!</p>

                        </div>

                        <a href="#" class="vortex-btn vortex-btn-white">Learn More</a>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!--========================================

		   Services

	========================================-->



    <section id="services" class="section-padding">

        <div class="container">

            <h2>Our Services</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, optio.</p>

            <div class="row">

                <div class="col-md-3">

                    <div class="icon-box">

                        <i class="material-icons">thumb_up</i>

                        <h4>Great Quality</h4>

                        <p>Quality ipsum dolor sit amet, consectetur adipisicing elit. Beatae quod error quis.</p>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="icon-box">

                        <i class="material-icons">euro_symbol</i>

                        <h4>Best Price</h4>

                        <p>Price ipsum dolor sit amet, consectetur adipisicing elit. Beatae quod error quis.</p>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="icon-box">

                        <i class="material-icons">forum</i>

                        <h4>24/7 Support</h4>

                        <p>Support ipsum dolor sit amet, consectetur adipisicing elit. Beatae quod error quis.</p>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="icon-box">

                        <i class="material-icons">view_carousel</i>

                        <h4>UX/UI Design</h4>

                        <p>Quality ipsum dolor sit amet, consectetur adipisicing elit. Beatae quod error quis.</p>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!--========================================

		   Features

	========================================-->



    <section id="features">

        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <h2>Awesome Features</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, repudiandae mollitia iure
                        magni accusamus, alias veniam.</p>

                    <hr>

                    <div class="feat-media">

                        <!-- Feature -->

                        <div class="media">

                            <div class="media-left">

                                <a href="#">

                                    <i class="material-icons">monetization_on</i>

                                </a>

                            </div>

                            <div class="media-body">

                                <h4 class="media-heading">Easy On Your Wallet</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti nam vel provident
                                    quae.</p>

                            </div>

                        </div>

                        <!-- Feature -->

                        <div class="media">

                            <div class="media-left">

                                <a href="#">

                                    <i class="material-icons">access_time</i>

                                </a>

                            </div>

                            <div class="media-body">

                                <h4 class="media-heading">Time Saver</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti nam vel provident
                                    quae.</p>

                            </div>

                        </div>

                        <!-- Feature -->

                        <div class="media">

                            <div class="media-left">

                                <a href="#">

                                    <i class="material-icons">computer</i>

                                </a>

                            </div>

                            <div class="media-body">

                                <h4 class="media-heading">Fully Responsive</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti nam vel provident
                                    quae.</p>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Features Img -->

                <div class="col-md-6 col-md-push-2">

                    <img src="assets/img/dashboard.png" class="img-responsive" alt="feature">

                </div>

            </div>

        </div>

    </section>



    <!--========================================

		   Price

	========================================-->



    <section id="price" class="section-padding">

        <div class="container">

            <h2>Choose Your Plan</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, optio.</p>

            <div class="row">

                <!-- Pricing Start Here -->

                <div class="pricing-container">

                    <div class="col-md-4">

                        <!--== SINGLE USER: Plan ==-->

                        <div class="plan">

                            <div class="pricing-header">

                                <h3>Single User</h3>

                                <h3>

                                    <span class="currency">$</span>

                                    <span class="amount">20</span>

                                    <span class="period">/mo</span>

                                </h3>

                            </div>

                            <div class="pricing-body">

                                <ul class="list-unstyled">

                                    <li><i class="material-icons">done</i><b>265MB</b> Memory</li>

                                    <li><i class="material-icons">done</i><b>1</b> User</li>

                                    <li><i class="material-icons">done</i><b>1</b> Website</li>

                                    <li><i class="material-icons">done</i><b>1</b> Domain</li>

                                    <li><i class="material-icons">done</i><b>Unlimeted</b> Bandwitch</li>

                                    <li><i class="material-icons">done</i><b>24/7</b> Support</li>

                                </ul>

                            </div>

                            <div class="pricing-footer">

                                <a href="#" class="vortex-btn vortex-btn-blue">Select</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <!--== MULTIPLE USER: Plan ==-->

                        <div class="plan active">

                            <div class="pricing-header">

                                <h3>Multiple Users</h3>

                                <h3>

                                    <span class="currency">$</span>

                                    <span class="amount">40</span>

                                    <span class="period">/mo</span>

                                </h3>

                            </div>

                            <div class="pricing-body">

                                <ul class="list-unstyled">

                                    <li><i class="material-icons">done</i><b>512MB</b> Memory</li>

                                    <li><i class="material-icons">done</i><b>3</b> User</li>

                                    <li><i class="material-icons">done</i><b>5</b> Website</li>

                                    <li><i class="material-icons">done</i><b>7</b> Domain</li>

                                    <li><i class="material-icons">done</i><b>Unlimeted</b> Bandwitch</li>

                                    <li><i class="material-icons">done</i><b>24/7</b> Support</li>

                                </ul>

                            </div>

                            <div class="pricing-footer">

                                <a href="#" class="vortex-btn vortex-btn-blue">Select</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <!--== Developer: Plan ==-->

                        <div class="plan">

                            <div class="pricing-header">

                                <h3>Developer</h3>

                                <h3>

                                    <span class="currency">$</span>

                                    <span class="amount">60</span>

                                    <span class="period">/mo</span>

                                </h3>

                            </div>

                            <div class="pricing-body">

                                <ul class="list-unstyled">

                                    <li><i class="material-icons">done</i><b>1024MB</b> Memory</li>

                                    <li><i class="material-icons">done</i><b>5</b> User</li>

                                    <li><i class="material-icons">done</i><b>10</b> Website</li>

                                    <li><i class="material-icons">done</i><b>10</b> Domain</li>

                                    <li><i class="material-icons">done</i><b>Unlimeted</b> Bandwitch</li>

                                    <li><i class="material-icons">done</i><b>24/7</b> Support</li>

                                </ul>

                            </div>

                            <div class="pricing-footer">

                                <a href="#" class="vortex-btn vortex-btn-blue">Select</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!--========================================

		   Team

	========================================-->



    <section id="team" class="section-padding">

        <div class="container">

            <h2>Team Of Professionals</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, optio.</p>

            <div class="row">

                <div class="col-md-6 col-lg-3">

                    <!--**Team-Member**-->

                    <div class="thumbnail team-member">

                        <img src="assets/img/team-1.jpg" class="img-responsive img-circle" alt="team-1">

                        <div class="caption">

                            <h4>Adam White</h4>

                            <h6>Founder Ceo</h6>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                            <hr>

                            <div class="team-social">

                                <ul class="liste-unstyled">

                                    <li><a href="#facebook"><i class="fa fa-facebook"></i></a></li>

                                    <li><a href="#twitter"><i class="fa fa-twitter"></i></a></li>

                                    <li><a href="#linkedin"><i class="fa fa-linkedin"></i></a></li>

                                    <li><a href="#instagram"><i class="fa fa-instagram"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-lg-3">

                    <!--**Team-Member**-->

                    <div class="thumbnail team-member">

                        <img src="assets/img/team-2.jpg" class="img-responsive img-circle" alt="team-2">

                        <div class="caption">

                            <h4>Jasmine Doe</h4>

                            <h6>Web Designer</h6>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                            <hr>

                            <div class="team-social">

                                <ul class="liste-unstyled">

                                    <li><a href="#facebook"><i class="fa fa-facebook"></i></a></li>

                                    <li><a href="#twitter"><i class="fa fa-twitter"></i></a></li>

                                    <li><a href="#linkedin"><i class="fa fa-linkedin"></i></a></li>

                                    <li><a href="#instagram"><i class="fa fa-instagram"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-lg-3">

                    <!--**Team-Member**-->

                    <div class="thumbnail team-member">

                        <img src="assets/img/team-3.jpg" class="img-responsive img-circle" alt="team-3">

                        <div class="caption">

                            <h4>Mike White</h4>

                            <h6>Developer</h6>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                            <hr>

                            <div class="team-social">

                                <ul class="liste-unstyled">

                                    <li><a href="#facebook"><i class="fa fa-facebook"></i></a></li>

                                    <li><a href="#twitter"><i class="fa fa-twitter"></i></a></li>

                                    <li><a href="#linkedin"><i class="fa fa-linkedin"></i></a></li>

                                    <li><a href="#instagram"><i class="fa fa-instagram"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-lg-3">

                    <!--**Team-Member**-->

                    <div class="thumbnail team-member">

                        <img src="assets/img/team-4.jpg" class="img-responsive img-circle" alt="team-4">

                        <div class="caption">

                            <h4>Jarl Doe</h4>

                            <h6>Photographer</h6>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                            <hr>

                            <div class="team-social">

                                <ul class="liste-unstyled">

                                    <li><a href="#facebook"><i class="fa fa-facebook"></i></a></li>

                                    <li><a href="#twitter"><i class="fa fa-twitter"></i></a></li>

                                    <li><a href="#linkedin"><i class="fa fa-linkedin"></i></a></li>

                                    <li><a href="#instagram"><i class="fa fa-instagram"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!--========================================

		   Clients

	========================================-->



    <section id="clients" class="section-padding">

        <div class="container">

            <div class="row">

                <h2>Clients Trust Us</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, optio.</p>

                <!--// Clients Images //-->

                <div class="clients-images">

                    <div id="owl-clients">

                        <div class="item"><img src="assets/img/clients/c_logo01.png" class="center-block" alt="client">
                        </div>

                        <div class="item"><img src="assets/img/clients/c_logo02.png" class="center-block" alt="client">
                        </div>

                        <div class="item"><img src="assets/img/clients/c_logo03.png" class="center-block" alt="client">
                        </div>

                        <div class="item"><img src="assets/img/clients/c_logo04.png" class="center-block" alt="client">
                        </div>

                        <div class="item"><img src="assets/img/clients/c_logo05.png" class="center-block" alt="client">
                        </div>

                        <div class="item"><img src="assets/img/clients/c_logo06.png" class="center-block" alt="client">
                        </div>

                    </div>

                </div>

                <!--// Clients Testimonials //-->

                <div id="owl-testimonials">

                    <div class="item">

                        <i class="material-icons">mood</i>

                        <p class="quote">Vivamus quam neque, aliquet ac faucibus ut, vestibulum. Nulla quis laoreet
                            diam. Donec sed egestas ex, nec facilisis ante. Vivamus imperdiet odio. Cras luctus interdum
                            sodales. Quisque quis odio dui.</p>

                        <h4>-John Doe, Company inc.</h4>

                    </div>

                    <div class="item">

                        <i class="material-icons">mood</i>

                        <p class="quote">Vivamus quam neque, aliquet ac faucibus ut, vestibulum. Nulla quis laoreet
                            diam. Donec sed egestas ex, nec facilisis ante. Vivamus imperdiet odio. Cras luctus interdum
                            sodales. Quisque quis odio dui.</p>

                        <h4>-Jarl Doe, Company inc.</h4>

                    </div>

                    <div class="item">

                        <i class="material-icons">mood</i>

                        <p class="quote">Vivamus quam neque, aliquet ac faucibus ut, vestibulum. Nulla quis laoreet
                            diam. Donec sed egestas ex, nec facilisis ante. Vivamus imperdiet odio. Cras luctus interdum
                            sodales. Quisque quis odio dui.</p>

                        <h4>-Adam Doe, Company inc.</h4>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!--========================================

		   Newsletter

	========================================-->



    <section id="newsletter">

        <div class="container">

            <div class="row">

                <h3>Subscribe to get early access!</h3>

                <div class="form-container">

                    <form class="form-inline">

                        <input type="email" class="form-control" id="newsletter-form" placeholder="Email"
                            required="required">

                        <button type="submit" class="vortex-btn vortex-btn-white">Subscribe</button>

                    </form>

                </div>

            </div>

        </div>

    </section>



    <!--========================================

		   Contact

	========================================-->



    <section id="contact" class="section-padding">

        <div class="container">

            <h2>Contact Us</h2>

            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>

            <p>sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>

        </div>

        <!-- Contact Info -->

        <div class="container contact-info">

            <div class="row">

                <div class="col-md-4">

                    <div class="icon-box">

                        <i class="material-icons">place</i>

                        <h4>Address</h4>

                        <p>PABox 13592, Lorem Street Ipsum Dolor, Victoria 8007, USA</p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="icon-box">

                        <i class="material-icons">phone</i>

                        <h4>Call Us On</h4>

                        <p>1-834-527-6940</p>

                        <p>1-834-527-6940</p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="icon-box">

                        <i class="material-icons">email</i>

                        <h4>Email us on</h4>

                        <p>lorem@xyz.com</p>

                        <p>lorem@xyz.com</p>

                    </div>

                </div>

            </div>

        </div>

        <!-- Google Map -->



        <!-- Contact Form -->

        <div class="contact-forms">

            <div class="container">

                <h2>Drop us a Line</h2>

                <form class="contact-form">

                    <div class="col-md-6">

                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="Full Name" required="required">

                        </div>

                        <div class="form-group">

                            <input type="email" class="form-control" placeholder="Email" required="required">

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">

                            <textarea class="form-control" rows="3" placeholder="Message"></textarea>

                        </div>

                    </div>

                    <button type="submit" class="vortex-btn vortex-btn-blue">Send Message</button>

                </form>

            </div>

        </div>

    </section>



    <!--========================================

		   Footer

	========================================-->



    <footer>

        <div class="container">

            <div class="row">

                <div class="footer-caption">

                    <img src="assets/img/logo.png" class="img-responsive center-block" alt="logo">

                    <hr>

                    <h5 class="pull-left">Vortex, &copy;2016 All rights reserved</h5>

                    <ul class="liste-unstyled pull-right">

                        <li><a href="#facebook"><i class="fa fa-facebook"></i></a></li>

                        <li><a href="#twitter"><i class="fa fa-twitter"></i></a></li>

                        <li><a href="#linkedin"><i class="fa fa-linkedin"></i></a></li>

                        <li><a href="#instagram"><i class="fa fa-instagram"></i></a></li>

                    </ul>

                </div>

            </div>

        </div>

    </footer>



    <!--========================================

		   Modal

	========================================-->

    <!-- Modal -->



    <!-- <div class="modal fade" id="SignIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

		<div class="modal-dialog" role="document">

			<div class="modal-content">

				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

					<h4 class="modal-title text-center" id="myModalLabel">Sign In</h4>

				</div>

				<div class="modal-body">

					<form class="signup-form">

						<div class="form-group">

							<input type="text" class="form-control" placeholder="User Name" required="required">

						</div>

						<div class="form-group">

							<input type="text" class="form-control" placeholder="Password" required="required">

						</div>

						<div class="form-group text-center">

							<button type="submit" class="vortex-btn vortex-btn-blue vortex-btn-block">Log In</button>

						</div>

					</form>

				</div>

				<div class="modal-footer text-center">

					<a href="#">Forgot your password /</a>

					<a href="#">Signup</a>

				</div>

			</div>

		</div>

	</div> -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!-- <script src="assets/bootstrap-3.3.7/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> -->

    <!-- <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script> -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <?php


	echo $this->Html->script('/app/webroot/js/v2/bootstrap.bundle.min', array('defer'));
	echo $this->Html->script('/app/webroot/assets/js/plugins/owl-carousel/owl.carousel.min.js', array('defer'));
	// echo $this->Html->script('/app/webroot/js/v2/owl.carousel.min', array('defer'));
	echo $this->Html->script('/app/webroot/js/v2/aos', array('defer'));
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
	echo $this->Html->script('/app/webroot/assets/js/plugins/bootsnav_files/js/bootsnav.js', array('defer'));
	echo $this->Html->script('/app/webroot/assets/js/plugins/typed.js-master/typed.js-master/dist/typed.min.js', array('defer'));
	echo $this->Html->script('/app/webroot/assets/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/jquery.magnific-popup.js', array('defer'));
	echo $this->Html->script('/app/webroot/assets/js/plugins/particles.js-master/particles.js-master/particles.min.js', array('defer'));
	echo $this->Html->script('/app/webroot/assets/js/particales-script.js', array('defer'));
	echo $this->Html->script('/app/webroot/assets/js/main.js', array('defer'));


	// <script src="assets/js/plugins/bootsnav_files/js/bootsnav.js"></script>

	// <script src="assets/js/plugins/typed.js-master/typed.js-master/dist/typed.min.js"></script>



	// <script src="assets/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/jquery.magnific-popup.js"></script>

	// <script src="assets/js/plugins/particles.js-master/particles.js-master/particles.min.js"></script>

	// <script src="assets/js/particales-script.js"></script>

	// <script src="assets/js/main.js"></script>
	// echo $this->Html->script('app/webroot/js/custom.min', array('defer'));
	?>

</body>



</html>