<?php
//Две строчки ниже для защиты форм от спам-ботов
session_start();
$_SESSION['sf_key'] = md5(substr( session_id(), mt_rand(0,10), mt_rand(3,10) ) . time() );

header('Content-Type: text/html; charset=utf-8');
header('X-UA-Compatible: IE=edge');
include 'functions.php';

$title = 'KSenos';
$desc = 'Сommercial business centre';
$url = SI_CurrentPageURL();
$image = SI_CurrentPageImage();

?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" class="loading">


<head>
<style>
.floor-num:nth-last-child {
	display: none !important;
}
@import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');
</style>
    <!-- Meta information (content-type + mobile mod) -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="format-detection" content="telephone=no">
    <meta name="cmsmagazine" content="2f345f737ed0d95e9259d18f5edc8cd7">
    <meta name="tagline" content="http://hello-brand.ru/">

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" type="image/png">
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

    <!-- CSS styles -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/jquery.formstyler.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/swiper.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style-fix.css" type="text/css" media="screen">


    <!-- OGP -->
    <meta property="og:title" content="<?php echo $title; ?>"/>
    <meta property="og:description" content="<?php echo $desc; ?>"/>
    <meta property="og:url" content="<?php echo $url; ?>">
    <meta property="og:image" content="<?php echo $image; ?>">


    <!-- Page title -->
    <title><?php echo $title; ?> | <?php echo $desc; ?></title>


</head>

<body id="main">
<div id="global-wrapper">

    <!--===================================================== Header -->
    <header class="layout-header">

        <!-- logo -->
        <a href="#" class="logo si-jump">
            <img src="images/ksenos-logo.png" alt=" ">
            <p>
                Flamelia Investments Ltd
                <span>
                    Class A  Office<br>
                    Building <span class="accent-ks">KS</span>enos
                </span>
            </p>
        </a>

        <div class="container">
            <div class="row">

                <div class="col-1-4 col-lg-offset-1-6 hidden-xs">
                    <div class="location">
                        Cyprus, Limassol, 4105 Ayiou Athanasiou 10 <br> Office GF
                    </div>
                </div>

                <!-- второй адрес -->
                <!-- <div class="col-1-4 hidden-xs">
                    <div class="location l-2">
                        Russia, Moscow, 109147, Marksistskaya St. № 34
                    </div>
                </div> -->

                <div class="col-1-4 col-offset-1-4 col-lg-offset-0">
                    <ul class="language-change">
                        <li>
                            <a href="ru">Rus</a>
                        </li>
                        <li class="active">
                            <a href="index.php">Eng</a>
                        </li>
                        <li>
                            <a href="gr">Gre</a>
                        </li>
                    </ul>

                    <ul class="select-language">
                        <li>
                            Change language
                            <ul class="language-change">
                                <li>
                                    <a href="ru">Rus</a>
                                </li>
                                <li  class="active">
                                    <a href="index.php">Eng</a>
                                </li>
                                <li>
                                    <a href="gr">Gre</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="select-language hidden">
                        <li class="flag">
                            Change language
                            <ul class="language-change">
                                <li>
                                    <a href="ru">Rus</a>
                                </li>
                                <li  class="active">
                                    <a href="index.php">Eng</a>
                                </li>
                                <li>
                                    <a href="gr">Gre</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- phone block -->
        <div class="si-phone hidden-xs">
            <a href="tel:+35795593555" class="phone-link dark">+357 95 593 555 <span>(Cyprus)</span></a>
            <a href="tel:+35725344555" class="phone-link dark">+357 25 344 555 <span>(Office)</span></a>
            <a href="#" class="open-phone-modal consult-btn" data-extra="1">Order a consultation</a>
        </div>

    </header>


    <!--===================================================== section heading -->
    <section class="section-heading" id="heading">

        <div class="container">

            <h1 class="align-center">
                Class A  Business Center in Limassol
                <span class="big">Available Innovations in Commercial Real Estate</span>
            </h1>

            <!-- block time -->
            <div class="wrapper-block-time">

                <div class="block-time eng">
                    <div class="title-block">
                        <h2>
                            Welcome to <br>
                            Ksenos Building
                        </h2>
                    </div>
                    <div class="main-facebook">
                        <a href="#image-layout-bg">
                            <button style="font: 700 20px/25px 'GothamPro', sans-serif; background-color:#0066cce3; border-radius:10px;" class="btn btn-main-facebook">
                            Check Availability
                            </button>
                        </a>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-1-4 col-offset-1-4 col-xs-1-2 col-xs-offset-0">

                    <div class="item-info-complex cre-animate" data-animation="slide-up-from-bottom"
                         data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">
                        More than 130<br class="hidden-xs">
                        parking spaces
                    </div>

                </div>

                <div class="col-1-6 col-offset-1-6 col-xs-1-2 col-xs-offset-0">

                    <div class="item-info-complex cre-animate" data-animation="slide-up-from-bottom"
                         data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
                        Available for Investments
                    </div>

                </div>
            </div>

        </div>

        <a href="#" class="question-btn hidden-xs open-phone-modal" data-extra="5">
            Ask us a question
        </a>

        <div class="heading-info-item hidden-xs">
            Scroll down
        </div>

    </section>

    <!--===================================================== section build -->
    <section class="section-build light" id="build">
        <div class="container">

            <div class="content-block">

                <div class="row">
                    <div class="col-5-6 col-offset-1-6 col-xs-1 col-xs-offset-0">

                        <h2>
                            A unique architectural creation perfect for striving businesses<br class="hidden-xs">
                            <span style='font-size:18px;'>
                            A state-of-the-art Business Center in the heart of Limassol
                            </span>
                            <span class="big">01</span>
                        </h2>

                    </div>

                    <!-- single item -->
                    <div class="col-1-3 col-offset-1-6 col-xs-1 col-xs-offset-0">

                        <div class="item-advantages cre-animate" data-animation="slide-in-from-left"
                             data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                            <div class="title-item">Convenient access</div>
                            <div class="description-item">
                            A connecting highway means that you can easily travel to and from work from anywhere
                            </div>
                        </div>

                    </div>

                    <!-- single item -->
                    <div class="col-1-4 col-xs-1">

                        <div class="item-advantages cre-animate" data-animation="slide-in-from-left"
                             data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">

                            <div class="title-item">Panoramic Views</div>
                            <div class="description-item">
                                This building gives 360-degree views of the whole of Limassol
                            </div>
                        </div>

                    </div>

                    <!-- single item -->
                    <div class="col-1-3 col-offset-1-6 col-xs-1 col-xs-offset-0">

                        <div class="item-advantages cre-animate" data-animation="slide-in-from-left"
                             data-speed="1000" data-delay="400" data-offset="90%" data-easing="easeOut">

                            <div class="title-item">24/7 Security</div>
                            <div class="description-item">
                                A safe environment for all, with 24/7 security around the building
                            </div>
                        </div>

                    </div>

                    <!-- single item -->
                    <div class="col-1-4 col-xs-1">

                        <div class="item-advantages cre-animate" data-animation="slide-in-from-left"
                             data-speed="1000" data-delay="500" data-offset="90%" data-easing="easeOut">

                            <div class="title-item">Flexibility</div>
                            <div class="description-item">
                            This project focuses on flexibility, and understanding the changing requirements of buyers and tenants
                            </div>
                        </div>

                    </div>
                </div>

                <div class="name-kse">
                    kse
                </div>
                <div class="name-nos">
                    nos
                </div>

            </div>

        </div>

        <div class="section-info-item">
            advantages
        </div>

    </section>

    <!--===================================================== section video -->
    <section class="section-video" id="video">
        <div class="container">

            <h2>
                Follow us on YouTube to follow<br class="hidden-xs">
                the progress of the <span class="accent-ks">KS</span>enos<br class="hidden-xs">
                A-Class Business Center 
                <span class="big">02</span>
            </h2>

            <div class="btns-wrap">
            	<div class="wrapper-btn align-center">
                    <!-- data-fancybox -->
            		<a target='_blank' href="https://www.youtube.com/channel/UCPLZ6gA_mYDglxMZMil1DHw/videos" class="review-item">
            			<img src="images/play.png" alt=" ">
            			<span class="shadow-circle"></span>
            		</a>

            	</div>

            	<div class="wrapper-btn align-center">

            		<a href="https://player.kubity.com/p/A2w4ON" target="_blank" class="btn btn-ghost btn-see-stream">
            			3D Model <span class="hidden-xs">- Browser Version</span>
						<span class="top-border"></span>
						<span class="bottom-border"></span>
            		</a>

            	</div>
            </div>
		
        </div>

        <div class="section-info-item-video">
            video
        </div>

    </section>

    <!--===================================================== section overview -->
    <section class="section-overview" id="overview">
    <div class="container">

        <h2>
            Discover the <br>
            KSenos Building 
            <span class="big">03</span>
        </h2>

		<div class="swiper-container overview-slider-top hidden-xs">
			<div class="swiper-wrapper">

				<!-- single slide -->
				<div class="swiper-slide">
					<img src="mthumb.php?src=images/overview/commercial-offices.jpg&amp;w=280&amp;h=200" alt=" "/>
				</div>

				<!-- single slide -->
				<div class="swiper-slide">
					<img src="mthumb.php?src=images/overview/real-estate-property-rent-sale.jpg&amp;w=280&amp;h=200" alt=" "/>
				</div>

				<!-- single slide -->
				<div class="swiper-slide">
					<img src="mthumb.php?src=images/overview/ksenos-slider-3.jpg&amp;w=280&amp;h=200" alt=" "/>
				</div>

				<!-- single slide -->
				<div class="swiper-slide">
					<img src="mthumb.php?src=images/overview/ksenos_building_photos_4.jpg&amp;w=280&amp;h=200" alt=" "/>
				</div>

				<!-- single slide -->
				<div class="swiper-slide">
					<img src="mthumb.php?src=images/overview/real-estate-ksenos.jpg&amp;w=280&amp;h=200" alt=" "/>
				</div>

				<!-- single slide -->
				<div class="swiper-slide">
					<img src="mthumb.php?src=images/overview/ksenos-projects-building.jpg&amp;w=280&amp;h=200" alt=" "/>
				</div>

				<!-- single slide -->
				<div class="swiper-slide">
					<img src="mthumb.php?src=images/overview/new-construction-ksenos.jpg&amp;w=280&amp;h=200" alt=" "/>
				</div>

				<!-- single slide -->
				<div class="swiper-slide">
					<img src="mthumb.php?src=images/overview/commercial-offices-interior.jpg&amp;w=280&amp;h=200" alt=" "/>
				</div>

				<!-- single slide -->
				<div class="swiper-slide">
					<img src="mthumb.php?src=images/overview/ksenos-2-project.jpg&amp;w=280&amp;h=200" alt=" "/>
				</div>

				<!-- single slide -->
				<div class="swiper-slide">
					<img src="mthumb.php?src=images/overview/ksenos_building_photos_009.jpg&amp;w=280&amp;h=200" alt=" "/>
				</div>


			</div>
		</div>

        <!-- slider PC & desktop -->
        <div class="wrapper-slider-overview hidden-xs">

            <!-- Swiper -->
            <div class="swiper-container overview-slider">
                <div class="swiper-wrapper">

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="mthumb.php?src=images/overview/commercial-offices.jpg&amp;w=1100&amp;h=630" alt=" "/>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="mthumb.php?src=images/overview/real-estate-property-rent-sale.jpg&amp;w=1100&amp;h=630" alt=" "/>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="mthumb.php?src=images/overview/ksenos-slider-3.jpg&amp;w=1100&amp;h=630" alt=" "/>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="mthumb.php?src=images/overview/ksenos_building_photos_4.jpg&amp;w=1100&amp;h=630" alt=" "/>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="mthumb.php?src=images/overview/real-estate-ksenos.jpg&amp;w=1100&amp;h=630" alt=" "/>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="mthumb.php?src=images/overview/ksenos-projects-building.jpg&amp;w=1100&amp;h=630" alt=" "/>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="mthumb.php?src=images/overview/new-construction-ksenos.jpg&amp;w=1100&amp;h=630" alt=" "/>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="mthumb.php?src=images/overview/commercial-offices-interior.jpg&amp;w=1100&amp;h=630" alt=" "/>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="mthumb.php?src=images/overview/ksenos-2-project.jpg&amp;w=1100&amp;h=630" alt=" "/>
                    </div>
					
                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="mthumb.php?src=images/overview/ksenos_building_photos_009.jpg&amp;w=1100&amp;h=630" alt=" "/>
					</div>
					

                </div>
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination overview-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next overview-next"></div>
            <div class="swiper-button-prev overview-prev"></div>

            <!-- Add Arrows -->
            <div class="swiper-button-next overview-next arrow">
                <?php include('svg/arrow-slider.svg'); ?>
            </div>
            <div class="swiper-button-prev overview-prev arrow">
                <?php include('svg/arrow-slider.svg'); ?>
            </div>

        </div>

    </div>

    <div class="section-info-item-overview">
        complex overview
    </div>

    <!-- slider mobile -->
    <div class="wrapper-slider-overview visible-xs">

        <!-- Swiper -->
        <div class="swiper-container overview-slider-mob">
            <div class="swiper-wrapper">

                <!-- single slide -->
                <div class="swiper-slide">
                    <img src="mthumb.php?src=images/overview/commercial-offices.jpg&amp;w=1100&amp;h=630" alt=" "/>
                </div>

                <!-- single slide -->
                <div class="swiper-slide">
                    <img src="mthumb.php?src=images/overview/real-estate-property-rent-sale.jpg&amp;w=1100&amp;h=630" alt=" "/>
                </div>

                <!-- single slide -->
                <div class="swiper-slide">
                    <img src="mthumb.php?src=images/overview/ksenos-slider-3.jpg&amp;w=1100&amp;h=630" alt=" "/>
                </div>

                <!-- single slide -->
                <div class="swiper-slide">
                    <img src="mthumb.php?src=images/overview/ksenos_building_photos_4.jpg&amp;w=1100&amp;h=630" alt=" "/>
                </div>

                <!-- single slide -->
                <div class="swiper-slide">
                    <img src="mthumb.php?src=images/overview/real-estate-ksenos.jpg&amp;w=1100&amp;h=630" alt=" "/>
                </div>

                <!-- single slide -->
                <div class="swiper-slide">
                    <img src="mthumb.php?src=images/overview/commercial-offices-interior.jpg&amp;w=1100&amp;h=630" alt=" "/>
                </div>

                <!-- single slide -->
                <div class="swiper-slide">
                    <img src="mthumb.php?src=images/overview/new-construction-ksenos.jpg&amp;w=1100&amp;h=630" alt=" "/>
                </div>

                <!-- single slide -->
                <div class="swiper-slide">
                    <img src="mthumb.php?src=images/overview/ksenos-projects-building.jpg&amp;w=1100&amp;h=630" alt=" "/>
                </div>

                <!-- single slide -->
                <div class="swiper-slide">
                    <img src="mthumb.php?src=images/overview/ksenos-2-project.jpg&amp;w=1100&amp;h=630" alt=" "/>
                </div>

                <!-- single slide -->
                <div class="swiper-slide">
                    <img src="mthumb.php?src=images/overview/ksenos_building_photos_009.jpg&amp;w=1100&amp;h=630" alt=" "/>
                </div>

            </div>
        </div>

        <!-- Add Pagination -->
        <div class="swiper-pagination overview-pagination-mob"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next overview-next-mob"></div>
        <div class="swiper-button-prev overview-prev-mob"></div>

        <!-- Add Arrows -->
        <div class="swiper-button-next overview-next-mob arrow">
            <?php include('svg/arrow-slider.svg'); ?>
        </div>
        <div class="swiper-button-prev overview-prev-mob arrow">
            <?php include('svg/arrow-slider.svg'); ?>
        </div>

    </div>

    </section>

    <!--===================================================== section panorama -->
    <section class="section-panorama light" id="panorama">
        <div class="container">

            <h2>
                <span class="big">04</span>
                Breathtaking panoramic views<br>
                of the sea and the city
            </h2>

        </div>

        <div class="wrapper-panorama-slider">

            <!-- Swiper -->
            <div class="swiper-container panorama-slider">
                <div class="swiper-wrapper">

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <!-- img for pc -->
                        <img src="mthumb.php?src=images/panorama/Sky-View-Round-About-City-Limassol-Ksenos-Investment.jpg&amp;w=1920&amp;h=800" class="hidden-xs" alt=" "/>
                        <!-- img for mobile -->
                        <img src="mthumb.php?src=images/panorama/Sky-View-Round-About-City-Limassol-Ksenos-Investment.jpg&amp;w=640&amp;h=460" class="visible-xs" alt=" "/>
                        <span>01</span>
                    </div>
                    
                     <!-- single slide -->
                    <div class="swiper-slide">
                        <!-- img for pc -->
                        <img src="mthumb.php?src=images/panorama/Drone-Top-Round-View-Main-Road-Limassol-Ksenos-Investment.jpg&amp;w=1920&amp;h=800" class="hidden-xs" alt=" "/>
                        <!-- img for mobile -->
                        <img src="mthumb.php?src=images/panorama/Drone-Top-Round-View-Main-Road-Limassol-Ksenos-Investment.jpg&amp;w=640&amp;h=460" class="visible-xs" alt=" "/>
                        <span>02</span>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <!-- img for pc -->
                        <img src="mthumb.php?src=images/panorama/Panorama-Top-View-City-Limassol-Ksenos-Investment (2).jpg&amp;w=1920&amp;h=800" class="hidden-xs" alt=" "/>
                        <!-- img for mobile -->
                        <img src="mthumb.php?src=images/panorama/Panorama-Top-View-City-Limassol-Ksenos-Investment (2).jpg&amp;w=640&amp;h=460" class="visible-xs" alt=" "/>
                        <span>03</span>
                    </div>

                   

                    <!-- single slide -->
                    <!-- <div class="swiper-slide"> -->
                        <!-- img for pc -->
                        <!-- <img src="mthumb.php?src=images/panorama/7.jpg&amp;w=1920&amp;h=800" class="hidden-xs" alt=" "/> -->
                        <!-- img for mobile -->
                        <!-- <img src="mthumb.php?src=images/panorama/7.jpg&amp;w=640&amp;h=460" class="visible-xs" alt=" "/> -->
                        <!-- <span>04</span> -->
                    <!-- </div -->

                    <!-- single slide -->
                    <!-- <div class="swiper-slide"> -->
                        <!-- img for pc -->
                        <!-- <img src="mthumb.php?src=images/panorama/3.jpg&amp;w=1920&amp;h=800" class="hidden-xs" alt=" "/> -->
                        <!-- img for mobile -->
                        <!-- <img src="mthumb.php?src=images/panorama/3.jpg&amp;w=640&amp;h=460" class="visible-xs" alt=" "/> -->
                        <!-- <span>05</span> -->
                    <!-- </div> -->
                </div>

                <!-- Add Arrows -->
                <div class="swiper-button-next panorama-next"></div>
                <div class="swiper-button-prev panorama-prev"></div>

                <!-- Add Arrows -->
                <div class="swiper-button-next panorama-next arrow hide">
                    <?php include('svg/arrow-slider.svg'); ?>
                </div>
                <div class="swiper-button-prev panorama-prev arrow hide">
                    <?php include('svg/arrow-slider.svg'); ?>
                </div>

            </div>

            <!-- Add Arrows -->
            <div class="swiper-button-next panorama-next arrow">
                <?php include('svg/arrow-slider.svg'); ?>
            </div>
            <div class="swiper-button-prev panorama-prev arrow">
                <?php include('svg/arrow-slider.svg'); ?>
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination panorama-pagination"></div>

        </div>

        <div class="section-info-item-panorama">
            panorama
        </div>

    </section>

    <!--===================================================== section technology -->
    <section class="section-technology" id="technology">
        <div class="container">

            <h2>
                <span class="big">05</span>
                What differentiates our<br>
                Business Center?
            </h2>

            <div class="row row-2">

                <!-- item -->
                <div class="col-1-2 col-xs-1">

                    <div class="item-uniqueness cre-animate" data-animation="slide-in-from-left"
                         data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                        <div class="title-item">
                            EUROPEAN STANDARDS
                            <span>01</span>
                        </div>
                        <div class="description-item">
                            The <span class="accent-ks">KS</span>enos business center meets structural requirements of category A buildings in Europe. Meeting European quality and energy efficiency standards was a key factor when designing our building.
                        </div>

                    </div>

                </div>
                <div class="col-1-2 col-xs-1">

                    <div class="image-uniqueness i-1">
                        <img src="mthumb.php?src=images/uniqueness/European-Quality-Class-A-Building-1.jpg&amp;w=555&amp;h=365" alt=" "/>
                        <a href="images/uniqueness/European-Quality-Class-A-Building-1.jpg" data-fancybox>
                            <?php include('svg/zoom.svg'); ?>
                        </a>
                    </div>

                </div>

                <!-- item odd-->
                <div class="col-1-2 col-xs-1">

                    <div class="image-uniqueness odd i-2">
                        <img src="mthumb.php?src=images/uniqueness/ksenos-building-1.jpg&amp;w=555&amp;h=365" alt=" "/>
                        <a href="images/uniqueness/ksenos-building-1.jpg" data-fancybox>
                            <?php include('svg/zoom.svg'); ?>
                        </a>
                    </div>

                </div>
                <div class="col-1-2 col-xs-1">

                    <div class="item-uniqueness odd cre-animate" data-animation="slide-in-from-right"
                         data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                        <div class="title-item">
                            ARCHITECTURAL EXCELLENCE 
                            <span>02</span>
                        </div>
                        <div class="description-item">
                            The unique and modern design of the building focuses on a large amount of aluminum and concrete. Countless panoramic windows have also been placed all around the building to allow you to enjoy 360-degree exquisite surroundings.
                        </div>

                    </div>

                </div>

                <!-- item -->
                <div class="col-1-2 col-xs-1">

                    <div class="item-uniqueness cre-animate" data-animation="slide-in-from-left"
                         data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                        <div class="title-item">
                            HIGH-TECH EQUIPMENT
                            <span>03</span>
                        </div>
                        <div class="description-item">
                        The whole building is equipped with a modern VRV-conditioning system, and smart system technologies designed for commercial buildings. Additionally, a secure server room with restricted access is placed in the heart of the building.
                        </div>
                    </div>

                </div>
                <div class="col-1-2 col-xs-1">

                    <div class="image-uniqueness">
                        <img src="mthumb.php?src=images/uniqueness/34.jpg&amp;w=555&amp;h=365" alt=" "/>
                        <a href="images/uniqueness/34.jpg" data-fancybox>
                            <?php include('svg/zoom.svg'); ?>
                        </a>
                    </div>

                </div>

                <!-- item odd-->
                <div class="col-1-2 col-xs-1">

                    <div class="image-uniqueness odd i-4">
                        <img src="mthumb.php?src=images/uniqueness/4.jpg&amp;w=555&amp;h=365" alt=" "/>
                        <a href="images/uniqueness/4.jpg" data-fancybox>
                            <?php include('svg/zoom.svg'); ?>
                        </a>
                    </div>

                </div>
                <div class="col-1-2 col-xs-1">

                    <div class="item-uniqueness odd cre-animate" data-animation="slide-in-from-right"
                         data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                        <div class="title-item">
                            AN INDIVIDUAL APPROACH
                            <span>04</span>
                        </div>
                        <div class="description-item">
                        Our infrastructure is flexible, and can be adapted to the needs of any tenant and agreement. This competitive advantage helps us to deliver agility, ensure application performance and reliability, and enable a great customer experience.
                        </div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-2 col-xs-1">

                    <div class="item-uniqueness cre-animate" data-animation="slide-in-from-left"
                         data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                        <div class="title-item">
                            24/7 SECURITY
                            <span>05</span>
                        </div>
                        <div class="description-item">
                        The KSenos building is under surveillance 24 hours a day. Our private security team monitor who enters and exits the premises at all times, with the assistance of advanced CCTV footage.
                        </div>
                    </div>

                </div>
                <div class="col-1-2 col-xs-1">

                    <div class="image-uniqueness i-5">
                        <img src="mthumb.php?src=images/uniqueness/5.jpg&amp;w=555&amp;h=365" alt=" "/>
                        <a href="images/uniqueness/5.jpg" data-fancybox>
                            <?php include('svg/zoom.svg'); ?>
                        </a>
                    </div>

                </div>

                <!-- item odd-->
                <div class="col-1-2 col-xs-1">

                    <div class="image-uniqueness odd last">
                        <img src="mthumb.php?src=images/uniqueness/6.jpg&amp;w=555&amp;h=365" alt=" "/>
                        <a href="images/uniqueness/6.jpg" data-fancybox>
                            <?php include('svg/zoom.svg'); ?>
                        </a>
                    </div>

                </div>
                <div class="col-1-2 col-xs-1">

                    <div class="item-uniqueness odd i-6 cre-animate" data-animation="slide-in-from-right"
                         data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                        <div class="title-item">
                            A PRIME LOCATION IN THE HEART OF LIMASSOL
                            <span>06</span>
                        </div>
                        <div class="description-item">
                        Being placed right beside the Agios Athanasios roundabout makes our Business Center a prime location to invest in. Being placed in the heart of Limassol means that you have easy access to the town center, the seafront, supermarkets, and so much more.
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="section-info-item-technology">
            Technologies
        </div>

    </section>

    <!--===================================================== section layout -->
    <section class="section-layout light" id="layout">
        <div class="container">

            <div class="row">

                <div class="col-1-2 col-xs-1">

                    <h2>
                        <span class="big">06</span>
                        What flexible office space <br>
                        to meet your tastes
                    </h2>

                </div>

            </div>

            <div class="row">

                <div class="col-1-5 col-xs-1-2">

                    <div class="layout-description cre-animate" data-animation="slide-up-from-bottom"
                         data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                        <div class="title-layout">7 floor</div>
                        <div class="text-layout">
                            Number of floors
                        </div>
                    </div>

                </div>

                <div class="col-1-5 col-xs-1-2">

                    <div class="layout-description cre-animate" data-animation="slide-up-from-bottom"
                         data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                        <div class="title-layout">7 379 m<sup>2</sup></div>
                        <div class="text-layout">
                            Total area
                        </div>
                    </div>

                </div>

                <div class="col-1-5 col-xs-1-2">

                    <div class="layout-description cre-animate" data-animation="slide-up-from-bottom"
                         data-speed="1000" data-delay="400" data-offset="90%" data-easing="easeOut">

                        <div class="title-layout">1074 m<sup>2</sup></div>
                        <div class="text-layout">
                        Commercial premises / <br>
                        Common Areas
                        </div>
                    </div>

                </div>

                <div class="col-1-5 col-xs-1-2">

                    <div class="layout-description cre-animate" data-animation="slide-up-from-bottom"
                         data-speed="1000" data-delay="500" data-offset="90%" data-easing="easeOut">

                        <div class="title-layout">4 008 m<sup>2</sup></div>
                        <div class="text-layout">
                            Office premises
                        </div>
                    </div>

                </div>

                <div class="col-1-5 col-xs-1-2">

                    <div class="layout-description cre-animate" data-animation="slide-up-from-bottom"
                         data-speed="1000" data-delay="600" data-offset="90%" data-easing="easeOut">

                        <div class="title-layout">130</div>
                        <div class="text-layout">
                            Parking spaces
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- bg section -->
        <div id='image-layout-bg' class="image-layout-bg">
            <img width=1920 height=850 src="images/layout-bg-1.webp" class="hidden-xs" alt=" "/>
            <img width=640  height=460 src="images/layout-bg-1.webp" class="visible-xs" alt=" "/>
        </div>

        <div class="item-level-block">

            <!-- single item -->
            <div class="item-level i-1 gre sale open-plan-modal" data-id="8">
                <span class="number-level level-gf">GF</span>
            </div>

            <!-- single item -->
            

            <div class="item-level i-2 gre open-plan-modal reserved" data-id="1">
                <h1 class="number-level">1</h1>
            </div>

            <!-- single item -->
            <div class="item-level i-3 gre sale open-plan-modal"  data-id="2">
                <h1 class="number-level">2</h1>
            </div>

            <!-- single item -->
            <div class="item-level i-4 gre sale open-plan-modal" data-id="3">
                <h1 class="number-level">3</h1>
            </div>

            <!-- single item -->
            <div class="item-level i-5 gre sale open-plan-modal" data-id="4">
                <h1 class="number-level">4</h1>
            </div>

            <!-- single item -->
            <div class="item-level i-6 gre open-plan-modal reserved" data-id="5">
                <h1 class="number-level">5</h1>
            </div>

            <!-- single item -->
            <div class="item-level i-7 gre open-plan-modal reserved" data-id="6">
                <h1 class="number-level">
                    7 <br> <br>
                    6
                </h1>
            </div>

        </div>
    </section>

    <!--===================================================== section form-detail -->
    <section class="section-form form-detail light" id="form-detail">
        <div class="container">

            <div class="wrapper-btn align-center open-plan-modal"
                        data-id="1">
                        <a href="images/interior/5-Floor-Interior-Office-Industrial-Open-Plan.jpg"
                        style='background-color:#0066cce3;'
                        data-fancybox="layout-plan" class="btn">
                            Watch KSENOS Interiors
                            <span class="top-border"></span>
                            <span class="bottom-border"></span>
                        </a>
                    </div>
                    
                    <a href="images/interior/1st-Ready-Interior-Modern-Office.jpg" data-fancybox="layout-plan"></a>
                    <a href="images/interior/1st-Ready-Interior-Modern-Office-Architecture.jpg" data-fancybox="layout-plan"></a>
                    <a href="images/interior/7-luxury-Top-Floor-Office-Limassol-View.jpg" data-fancybox="layout-plan"></a>
                    <a href="images/interior/Business-Centre-Interior-Office-Industrial-Open-Plan.jpg" data-fancybox="layout-plan"></a>
                    <a href="images/interior/Business-Centre-Office-Industrial-Open-Plan-Investment.jpg" data-fancybox="layout-plan"></a>
                    <a href="images/interior/Business-Office-Open-Plan-Construction.jpg" data-fancybox="layout-plan"></a>
                    <a href="images/interior/Construction-Commercial-Limassol.jpg" data-fancybox="layout-plan"></a>
                    <a href="images/interior/First-Floor-Interior-Modern-Office-Architecture.jpg" data-fancybox="layout-plan"></a>
                    <a href="images/interior/First-Interior-Modern-Office-Architecture-Investment.jpg" data-fancybox="layout-plan"></a>
                    <a href="images/interior/Limassol-sale-rent-investment-office-space-industrial-style.jpg" data-fancybox="layout-plan"></a>
                    <a href="images/interior/Office-Commercial-Ksenos-Cyprus.jpg" data-fancybox="layout-plan"></a>
                    <a href="images/interior/Office-Commercial-Ready-Interior-Modern.JPG" data-fancybox="layout-plan"></a>
                    <a href="images/interior/Office-Commercial-Space-Rent.jpg" data-fancybox="layout-plan"></a>
                    <a href="images/interior/Office-Commercial-Space-sale.jpg" data-fancybox="layout-plan"></a>
                    <a href="images/interior/Penthouse-Construction-City-Sea-View.jpg" data-fancybox="layout-plan"></a>
                    <a href="images/interior/Penthouse-Top-Floor-Limassol-View.jpg" data-fancybox="layout-plan"></a>
                    <a href="images/interior/Real-Estate-Commercial-Investment.jpg" data-fancybox="layout-plan"></a>
                    <a href="images/interior/Sale-New-Interior-Modern-Office-Architecture-Investment.JPG" data-fancybox="layout-plan"></a>
                    <a href="images/interior/Top-Floor-Building-Ksenos.jpg" data-fancybox="layout-plan"></a>
                    <a href="images/interior/Top-Floor-Office-Limassol-Rent-Sale.jpg" data-fancybox="layout-plan"></a>

            <div class="content-block">

                <div class="row">

                    <div class="col-2-3 col-offset-1-6 col-xs-1 col-xs-offset-0">

                        <h2>
                            <span class="big">07</span>
                            Find out more about buying and renting at the <span class="accent-ks">KS</span>enos Business Center
                        </h2>

                        <p class="sub-title">
                            Fill in the form and our manager will contact you
                        </p>

                        <form method="post" class="send-form" autocomplete="off">
                            <div class="row">
                                <div class="col-1-2 col-xs-1">
                                    <div class="wrapper-input">
                                        <input type="text" name="client_name" class="client-name" placeholder="Your name">
                                        <?php include('svg/user-form.svg'); ?>
                                    </div>
                                </div>

                                <div class="col-1-2 col-xs-1">
                                    <div class="wrapper-input">
                                        <input type="tel" name="client_phone" class="client-phone" placeholder="Your phone">
                                        <?php include('svg/phone-form.svg'); ?>
                                    </div>
                                </div>

                                <div class="col-1-2 col-xs-1">
                                    <div class="wrapper-input">
                                        <input type="email" name="client_mail" class="client-mail" placeholder="Your e-mail">
                                        <img src="images/mail-form.png" class="mail-form hidden-xs" alt=" "/>
                                        <img src="images/mail-form-mob.png" class="mail-form visible-xs" alt=" "/>
                                    </div>
                                </div>

                                <div class="col-1-2 col-xs-1">
                                    <div class="btn-holder">
                                        <button type="submit" onclick="yaCounter48997670.reachGoal('detail');" class="btn">
                                            Send request
                                            <span class="top-border"></span>
                                            <span class="bottom-border"></span>
                                        </button>
                                        <input type="hidden" class="g-recaptcha-response" id="g-recaptcha-response" name="g-recaptcha-response">
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="send_type" class="send-type" value="2">
                            <input type="hidden" name="send_extra" class="send-extra" value="1">
                            <input type="hidden" name="key" value="<?php echo $_SESSION['sf_key'] ?>">
                            <?php //Поле выше для защиты формы от спам-ботов ?>

                            <!-- Agreement -->
                            <div class="form-agree align-left">
                                <label class="checkbox-label form-agree-check checked">
                                    <input type="checkbox" checked>
                                    By clicking the "Send request", I agree and consent to the processing of my personal data in terms of The General Data Protection Regulation (GDPR).
                                </label>
                            </div>
                        </form>

                    </div>

                </div>

                <div class="ks"></div>

            </div>

        </div>

        <div class="section-info-item-form">
            Learn more
        </div>

    </section>

    <!--===================================================== section advantages -->
    <section class="section-advantages" id="advantages">
    <div class="container">

        <h2>
            <span class="big">08</span>
            Why invest your money in Limassol, Cyprus?
        </h2>

        <div class="row row-no-pad hidden-xs">

            <!-- single item -->
            <div class="col-1-2">

                <div class="item-advantages-sect cre-animate" data-animation="slide-up-from-bottom"
                     data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">


                    <span class="number">01</span>
                    <div class="wrapper-svg">
                        <?php include('svg/atm.svg'); ?>
                    </div>
                    <div class="title-item">Pleasant Environment</div>
                    <div class="decription-item">
                        Cyprus is a thriving island that will fill you with the energy of the sea. Apart from having a friendly and stable business environment, this island is cosmopolitan and vibrant, and has excellent facilities and institutes. Invest in Cyprus for a safer and more comfortable life.
                    </div>

                </div>

            </div>

            <!-- single item -->
            <div class="col-1-2">

                <div class="item-advantages-sect light cre-animate" data-animation="slide-up-from-bottom"
                     data-speed="1000" data-delay="400" data-offset="90%" data-easing="easeOut">

                    <span class="number">02</span>
                    <div class="wrapper-svg">
                        <?php include('svg/economy.svg'); ?>
                    </div>
                    <div class="title-item">Growing Economy</div>
                    <div class="decription-item">
                    Over the past few years, the Cyprus economy has been gaining momentum. The island is actively building residential complexes and commercial real estate, and it has become a great place for investors and companies to invest in.
                    </div>

                </div>

            </div>

            <!-- single item -->
            <div class="col-1-2">

                <div class="item-advantages-sect light cre-animate" data-animation="slide-up-from-bottom"
                     data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                    <span class="number">03</span>
                    <div class="wrapper-svg">
                        <?php include('svg/infrastructure.svg'); ?>
                    </div>
                    <div class="title-item">Developed Infrastructure</div>
                    <div class="decription-item">
                    Cyprus, and especially Limassol, has been progressing rapidly over the past few years. With our entry into the European Union, the standard of living has improved and the country has seen a large development in educational institutions, professional expertise, healthcare and more.
                    </div>
                </div>

            </div>

            <!-- single item -->
            <div class="col-1-2">

                <div class="item-advantages-sect cre-animate" data-animation="slide-up-from-bottom"
                     data-speed="1000" data-delay="400" data-offset="90%" data-easing="easeOut">

                    <span class="number">04</span>
                    <div class="wrapper-svg">
                        <?php include('svg/loyalty.svg'); ?>
                    </div>
                    <div class="title-item">
                        Investment Opportunities for all
                    </div>
                    <div class="decription-item">
                    The Government of Cyprus offers all of the necessary conditions for foreign entrepreneurs looking to invest. The benefits include from having a high return on investment and enjoying tax benefits,  gaining access to the EU market, and to potential profiting from internationals laws amongst other things.
                    </div>

                </div>

            </div>

            <!-- single item -->
            <div class="col-1-2">

                <div class="item-advantages-sect cre-animate" data-animation="slide-up-from-bottom"
                     data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                    <span class="number">05</span>
                    <div class="wrapper-svg">
                        <?php include('svg/partner.svg'); ?>
                    </div>
                    <div class="title-item">Partnerships</div>
                    <div class="decription-item">
                    In Cyprus, many entrepreneurs are open to partnerships and working together for mutual benefit. A large number of well-known partners have participated in the KSenos construction, which has helped to rapidly enrich the complex.
                    </div>

                </div>

            </div>

            <!-- single item -->
            <div class="col-1-2">

                <div class="item-advantages-sect light cre-animate" data-animation="slide-up-from-bottom"
                     data-speed="1000" data-delay="400" data-offset="90%" data-easing="easeOut">

                    <span class="number">06</span>
                    <div class="wrapper-svg">
                        <?php include('svg/nalog.svg'); ?>
                    </div>
                    <div class="title-item">Exemption for Income Taxes</div>
                    <div class="decription-item">
                    Another special advantage for foreign investors in Cyprus is the preferential treatment. Company owners are exempt from paying taxes.
                    </div>

                </div>

            </div>

            <div class="wrapper-btn align-center">
                <a href="#" class="btn btn-loyalty open-phone-modal" data-extra="4">
                    FIND OUT MORE
                    <span class="top-border"></span>
                    <span class="bottom-border"></span>
                </a>
            </div>

        </div>

    </div>

    <!-- mobile -->
    <div class="wrapper-item visible-xs">

        <!-- single item -->
        <div class="item-advantages-sect">

            <span class="number">01</span>
            <div class="wrapper-svg">
                <?php include('svg/atm.svg'); ?>
            </div>
            <div class="title-item">Favorable atmosphere</div>
            <div class="decription-item">
                Cyprus island will fill you with the energy of the sea. You may discover new gastronomic tastes and get acquainted with nice people.
            </div>

        </div>

        <!-- single item -->
        <div class="item-advantages-sect light">

            <span class="number">02</span>
            <div class="wrapper-svg">
                <?php include('svg/economy.svg'); ?>
            </div>
            <div class="title-item">Growing Economy</div>
            <div class="decription-item">
                Over the past year and a half, the economy of Cyprus is gaining momentum. The island is actively building residential complexes and commercial real estate.
            </div>

        </div>

        <!-- single item -->
        <div class="item-advantages-sect light mob-dark">

            <span class="number">03</span>
            <div class="wrapper-svg">
                <?php include('svg/infrastructure.svg'); ?>
            </div>
            <div class="title-item">Developed infrastructure</div>
            <div class="decription-item">
                The area in which the complex is located has a developed infrastructure. You will find a place for shopping, entertainment and recreation here.
            </div>

        </div>

        <!-- single item -->
        <div class="item-advantages-sect mob-light">

            <span class="number">04</span>
            <div class="wrapper-svg">
                <?php include('svg/loyalty.svg'); ?>
            </div>
            <div class="title-item">
                Loyalty for foreign citizens
            </div>
            <div class="decription-item">
                The Government of Cyprus offers all the necessary conditions for foreign entrepreneurs owning real estate.
            </div>

        </div>

        <!-- single item -->
        <div class="item-advantages-sect">

            <span class="number">05</span>
            <div class="wrapper-svg">
                <?php include('svg/partner.svg'); ?>
            </div>
            <div class="title-item">Partners</div>
            <div class="decription-item">
                Cyprus island will  fill you with the energy of the sea. You may discover new gastronomic tastes and get acquainted with nice people.
            </div>

        </div>

        <!-- single item -->
        <div class="item-advantages-sect light">

            <span class="number">06</span>
            <div class="wrapper-svg">
                <?php include('svg/nalog.svg'); ?>
            </div>
            <div class="title-item">Exemption of income from taxes</div>
            <div class="decription-item">
                Over the past year and a half, the economy of Cyprus is gaining momentum. The island is actively building residential complexes and commercial real estate.
            </div>

        </div>

        <div class="wrapper-btn align-center">
            <a href="#" class="btn btn-loyalty">
                Learn more about loyalty
                <span class="top-border"></span>
                <span class="bottom-border"></span>
            </a>
        </div>

    </div>

    <div class="section-info-item-advantages">
        Office Benefits
    </div>

    </section>

    <!--===================================================== section income -->
    <section class="section-income light" id="income">
        <div class="container">

            <h2>
                <span class="big">09</span>
                In Cyprus, your income tax<br>
                will be 12.5%
            </h2>

            <div class="subtitle-h2">
                What income is exempt<br>
                from taxation?
            </div>

            <div class="row">

                <div class="col-5-12 col-xs-1">

                    <div class="item-income i-1 cre-animate" data-animation="slide-in-from-left"
                         data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                        <span>01</span>
                        <div class="title-item">
                            Income from the sale<br>
                            of securities
                        </div>
                    </div>

                    <div class="item-income i-3 cre-animate" data-animation="slide-in-from-left"
                         data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                        <span class="hidden-xs">03</span>
                        <span class="visible-xs">02</span>
                        <div class="title-item">Interest income</div>

                        <div class="description-item">
                            arising not as a result of the usual (or closely related to the usual) activities of the company
                        </div>
                        <ul class="income-list">
                            <li>
                                <a href="#" class="open-info-modal" data-id="1">Shipping companies</a>
                            </li>
                            <li>
                                <a href="#" class="open-info-modal" data-id="2">Shipowners</a>
                            </li>
                            <li>
                                <a href="#" class="open-info-modal" data-id="3">Charterers</a>
                            </li>
                            <li>
                                <a href="#" class="open-info-modal" data-id="4">Insurance companies</a>
                            </li>
                            <li>
                                <a href="#" class="open-info-modal" data-id="5">
                                    Companies providing ship management services
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="col-5-12 col-xs-1">

                    <div class="item-income cre-animate" data-animation="slide-in-from-left"
                         data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">

                        <span class="hidden-xs">02</span>
                        <span class="visible-xs">03</span>
                        <div class="title-item">
                            Dividends
                        </div>
                        <div class="description-item">
                            Starting from January 1, 2016 - except those dividends that are deducted by the payer of dividends from the tax base for income tax
                        </div>
                    </div>

                    <div class="item-income i-4 cre-animate" data-animation="slide-in-from-left"
                         data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">

                        <span>04</span>
                        <div class="title-item">
                            Income
                        </div>
                        <div class="description-item">
                            received from the activities of the permanent mission abroad (subject to certain conditions).
                        </div>
                    </div>

                    <div class="item-income cre-animate" data-animation="slide-in-from-left"
                         data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">

                        <span>05</span>
                        <div class="title-item">
                            Income in the form of exchange rate differences
                        </div>
                        <div class="description-item">
                            except for exchange differences relating to trading in foreign currency or derivatives in foreign currency
                        </div>
                    </div>

                </div>

            </div>

            <?php include('svg/percent.svg'); ?>

        </div>
    </section>

    <!--===================================================== section map -->
    <div class="section-map light">
        <div class="container">

            <h2>
                <span class="big">10</span>
                Where is the <span class="accent-ks">KS</span>enos Building<br>
                Located ?
            </h2>

            <div class="block-map">
                <div class="title-block">
                Ayiou Athanasiou 10  <br>
                Limassol 4105<br>
                Cyprus
                </div>
            </div>

        </div>

        <div class="map-holder" id="map"></div>

    </div>

    <!--===================================================== section partner-2 -->
    <section class="section-partner-2" id="partner-2">
    <div class="container">

        <h2>
            <span class="big">11</span>
            Our partners
        </h2>

        <!-- slider PC -->
        <div class="wrapper-partner-slider hidden-xs">
            <h3 style="font-size:28px;display:flex;letter-spacing: 0.5px;;justify-content:center;margin-bottom:20px;"
            ><span class='accent-ks'>KS</span>enos Partners</h3>
            <!-- Swiper -->
            <div class="swiper-container partner-slider">
                <div class="swiper-wrapper">

                  <div class="swiper-slide">

                      <div class="wrapper-item-logo">

                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://group.ksenos.com.cy/" target="_blank">
                                          <img src="images/logo/new-prt-8.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                          </div>

                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://www.unisatcy.com/ " target="_blank">
                                          <img src="images/logo/uni-logo.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                          </div>

                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                        <a href="https://www.togas.com/en " target="_blank">
                                            <img src="images/logo/new-prt-5.png" alt=" "/>
                                        </a>
                                  </div>
                              </div>
                          </div>

                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://ksdesign.com.cy/" target="_blank">
                                          <img style="max-width: 90%;" src="images/logo/ks-design.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                          </div>

                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href"#" target="_blank">
                                          <img src="images/logo/services.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                          </div>

                      </div>

                  </div>

                </div>
            </div>

        </div>

        <div style='margin-top:50px;' class="wrapper-partner-slider hidden-xs">
            <h3 style="font-size:28px;letter-spacing: 0.5px;;display:flex;justify-content:center;margin-bottom:20px;"
            >Suppliers & Brands</h3>
            <!-- Swiper -->
            <div class="swiper-container partner-slider">
                <div class="swiper-wrapper">

                  <div class="swiper-slide">

                      <div class="wrapper-item-logo">

                        <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://www.ciacexport.it/" target="_blank">
                                          <img src="images/logo/ciac.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                        </div>

                        <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://www.dvo-studio.com/" target="_blank">
                                          <img src="images/logo/dvo.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                        </div>

                        <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://www.lago.it/en/" target="_blank">
                                      	<img src="images/logo/lago.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
						</div>

                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://www.malerbafurniture.com/" target="_blank">
                                          <img src="images/logo/malerba.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                          </div>

                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://www.cipriani.com/us/home-page" target="_blank">
                                          <img src="images/logo/cipriani.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                          </div>

                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://kalfire.com/en" target="_blank">
                                          <img src="images/logo/kalfire.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                          </div>

                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://momenti-casa.it/" target="_blank">
                                          <img src="images/logo/momenti.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                          </div>

                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://momenti-casa.it/" target="_blank">
                                          <img src="images/logo/leicht.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                          </div>

                      </div>

                  </div>

                </div>
            </div>

            

        </div>

        

    </div>

    <!-- slider mobile -->
    <div class="wrapper-partner-slider visible-xs">
    
        <!-- Swiper -->
        <div class="swiper-container partner-slider">
            <div class="swiper-wrapper">
            <div class="swiper-slide">

                      <div class="wrapper-item-logo">

                      <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://group.ksenos.com.cy/" target="_blank">
                                          <img src="images/logo/new-prt-8.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                          </div>

                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://www.unisatcy.com/ " target="_blank">
                                          <img src="images/logo/uni-logo.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                          </div>

                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                        <a href="https://www.togas.com/en " target="_blank">
                                            <img src="images/logo/new-prt-5.png" alt=" "/>
                                        </a>
                                  </div>
                              </div>
                          </div>

                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://ksdesign.com.cy/" target="_blank">
                                          <img style="max-width: 90%;" src="images/logo/ks-design.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                          </div>

                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href"#" target="_blank">
                                          <img src="images/logo/services.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                          </div>

                      </div>

                  </div>

                  <div class="swiper-slide">

                      <div class="wrapper-item-logo">

                      <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://www.ciacexport.it/" target="_blank">
                                          <img src="images/logo/ciac.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                        </div>

                        <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://www.dvo-studio.com/" target="_blank">
                                          <img src="images/logo/dvo.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                        </div>

                        <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://www.lago.it/en/" target="_blank">
                                      	<img src="images/logo/lago.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
						</div>

                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://www.malerbafurniture.com/" target="_blank">
                                          <img src="images/logo/malerba.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                          </div>

                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://www.cipriani.com/us/home-page" target="_blank">
                                          <img src="images/logo/cipriani.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                          </div>

                      </div>

                  </div>

                  <div class="swiper-slide">

                      <div class="wrapper-item-logo">

                      <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://kalfire.com/en" target="_blank">
                                          <img src="images/logo/kalfire.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                          </div>

                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://momenti-casa.it/" target="_blank">
                                          <img src="images/logo/momenti.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                          </div>

                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://momenti-casa.it/" target="_blank">
                                          <img src="images/logo/leicht.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                          </div>


                      </div>

                  </div>
            </div>
        </div>

        <!-- Add Pagination -->
        <div class="swiper-pagination partner-pagination"></div>

        <!-- Add Arrows -->
        <div class="swiper-button-next partner-next arrow">
            <?php include('svg/arrow-slider.svg'); ?>
        </div>
        <div class="swiper-button-prev partner-prev arrow">
            <?php include('svg/arrow-slider.svg'); ?>
        </div>

    </div>

    <div class="section-info-item-company">
        Companies
    </div>

    </section>

    <!--===================================================== section form-detail 2 -->
    <section class="section-form form-detail-2" id="form-detail-2">
        <div class="container">

            <div class="content-block">

                <div class="row">

                    <div class="col-2-3 col-offset-1-6 col-xs-1 col-xs-offset-0">

                        <h2>
                            <span class="big">12</span>
                            Find out more about buying and renting at the <span class="accent-ks">KS</span>enos Business Center
                        </h2>

                        <p class="sub-title">
                            Fill in the form and our manager will contact you
                        </p>

                        <form method="post" class="send-form" autocomplete="off">
                            <div class="row">
                                <div class="col-1-2 col-xs-1">
                                    <div class="wrapper-input">
                                        <input type="text" name="client_name" class="client-name" placeholder="Your name">
                                        <?php include('svg/user-form.svg'); ?>
                                    </div>
                                </div>

                                <div class="col-1-2 col-xs-1">
                                    <div class="wrapper-input">
                                        <input type="tel" name="client_phone" class="client-phone" placeholder="Your phone">
                                        <?php include('svg/phone-form.svg'); ?>
                                    </div>
                                </div>

                                <div class="col-1-2 col-xs-1">
                                    <div class="wrapper-input">
                                        <input type="email" name="client_mail" class="client-mail" placeholder="Your e-mail">
                                        <img src="images/mail-form.png" class="mail-form hidden-xs" alt=" "/>
                                        <img src="images/mail-form-mob.png" class="mail-form visible-xs" alt=" "/>
                                    </div>
                                </div>

                                <div class="col-1-2 col-xs-1">
                                    <div class="btn-holder">
                                        <button type="submit" onclick="yaCounter48997670.reachGoal('detail-2');" class="btn">
                                            Order a consultation
                                            <span class="top-border"></span>
                                            <span class="bottom-border"></span>
                                        </button>
                                        <input type="hidden" class="g-recaptcha-response" id="g-recaptcha-response" name="g-recaptcha-response">
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="send_type" class="send-type" value="3">
                            <input type="hidden" name="send_extra" class="send-extra" value="1">
                            <input type="hidden" name="key" value="<?php echo $_SESSION['sf_key'] ?>">
                            <?php //Поле выше для защиты формы от спам-ботов ?>

                            <!-- Agreement -->
                            <div class="form-agree align-left">
                                <label class="checkbox-label form-agree-check checked">
                                    <input type="checkbox" checked>
                                    By clicking the "Order a consultation", I agree and consent to the processing of my personal data in terms of The General Data Protection Regulation (GDPR).
                                </label>
                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </div>

        <div class="section-info-item-form-2">
            Learn more
        </div>

    </section>

    <!--===================================================== Footer -->
    <footer class="layout-footer light" id="layout-footer">

        <!-- logo -->
        <a href="#" class="logo si-jump">
            <img src="images/ksenos-logo.png" alt=" ">
            <p>
                Flamelia Investments Ltd<br>
                <span>
                    Commercial and commercial<br>
                    complex <span class="accent-ks">KS</span>enos
                </span>
            </p>
        </a>

        <div class="container">
            <div class="row">

                <!-- company info block -->
                <div class="col-1-3 col-xs-1">
                    <div class="company-info-block">

                        <?php include('svg/pin-footer.svg'); ?>

                        <address>
                            <p>
                                Agiou Athanasiou 10 <br>
                                Limassol, 4105 <br>
                                Cyprus
                            </p>
                        </address>
                    </div>
                </div>

                <div class="col-1-3 col-xs-1 align-center">
                    <div class="wrapper-btn-footer">
                        <a href="#heading" class="btn btn-ghost btn-footer si-jump">
                            Back to top
                            <span class="top-border"></span>
                            <span class="bottom-border"></span>
                        </a>
                    </div>
                </div>

                <!-- Phone block -->
                <div class="col-1-3 col-xs-1 align-right">
                    <div class="social">
                        <a href="https://www.facebook.com/ksenoscy/" target="_blank">
                            <?php include('svg/fb.svg'); ?>
                        </a>
                        <span>
                            Follow the news<br>
                            about <span class="accent-ks">KS</span>enos
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="si-phone">
            <a href="tel:+35795593555" class="phone-link dark">+357 95 593 555 <span>(Cyprus)</span></a>
            <a href="tel:+35725344555" class="phone-link dark">+357 25 344 555 <span>(Office)</span></a>
            <a href="#" class="open-phone-modal consult-btn" data-extra="2">Order a consultation</a>
        </div>

    </footer>
<!--===================================================== Modals -->
<!-- Overlay(s) -->


<!-- модальное окно с ксенос 2 -->
<!-- <div style="z-index:999; padding:35px 50px; color:black; border:10px solid #c39b6d;" class="info-show">
    <a href="#" class="close">
        <img src="images/close.png" alt=" "/>
    </a>
    
    <a style="font-size:36px;"  href="https://2.ksenos.com.cy/">
    2.ksenos.com.cy
    </a> <br> <br>
    Check out upcoming Ksenos Projects
</div> -->
<!-- модальное окно с ксенос 2 -->


<div class="si-overlay"></div>
<div class="si-overlay-2"></div>

<!-- <div class="info-show">
    <a href="#" class="close">
        <img src="images/close.png" alt=" "/>
    </a>

    This site uses Cookies technology

</div> -->

<!-- menu btn -->
<div class="show-menu">
    <span class="icon-sandwich"></span>
</div>

<div class="nav">
    <div class="wrapper-content">

        <ul class="language-change hidden">
            <li>
                <a href="ru">Rus</a>
            </li>
            <li class="active">
                <a href="index.php">Eng</a>
            </li>
            <li>
                <a href="gr">Gre</a>
            </li>
        </ul>

        <ul class="menu-nav">
            <li><a href="#heading" class="si-jump">Home</a></li>
            <li><a href="#map" class="si-jump">Location</a></li>
            <li><a href="#video" class="si-jump">Video about construction</a></li>
            <li><a href="#overview" class="si-jump">How it will look like</a></li>
            <li><a href="#panorama" class="si-jump">Panoramas</a></li>
            <li><a href="#technology" class="si-jump">Uniqueness</a></li>
            <li><a href="#layout" class="si-jump">Master Plan</a></li>
            <li><a href="#company" class="si-jump">Companies in the complex</a></li>
            <li><a href="#advantages" class="si-jump">Additions</a></li>
            <li><a href="#income" class="si-jump">Taxes</a></li>
            <li><a href="#map" class="si-jump">Map</a></li>
            <li><a href="#partner-2" class="si-jump">Partners</a></li>
            <li><a href="#layout-footer" class="si-jump">Contacts</a></li>
        </ul>

        <div class="si-phone nav-block">
            <a href="tel:+35795593555" class="phone-link dark">+357 95 593 555 <span>(Cyprus)</span></a>
						<a href="tel:+35725344555" class="phone-link dark">+357 25 344 555 <span>(Office)</span></a>
            <a href="#" class="open-phone-modal consult-btn" data-extra="4">Order a consultation</a>
        </div>

    </div>
</div>

    <!-- Wrappers -->
    <div class="si-modals-wrapper-2"></div>

    <div class="si-modals-wrapper">

    <!--============================================== success modal -->
    <div class="si-success-modal si-success-modal-1">
        <a href="#" class="si-close">
            <img src="images/close.png" alt=" "/>
        </a>

        <div class="modal-container align-center">

            <div class="si-success-modal-title">
                Thank you!
            </div>

            <div class="success-time">
                Our manager will contact you within 15 minutes
            </div>

        </div>
    </div>

    <!--============================================== phone modal -->
    <div class="si-modal phone-modal">
        <a href="#" class="si-close">
            <img src="images/close.png" alt=" "/>
        </a>

        <div class="modal-container">

            <div class="modal-form-title">
                Order a consultation
            </div>

            <form method="post" class="send-form" autocomplete="off">
                <div class="row">
                    <div class="col-1-2 col-xs-1">
                        <div class="wrapper-input">
                            <input type="text" name="client_name" class="client-name" placeholder="Your name">
                            <?php include('svg/user-form.svg'); ?>
                        </div>
                    </div>

                    <div class="col-1-2 col-xs-1">
                        <div class="wrapper-input">
                            <input type="tel" name="client_phone" class="client-phone" placeholder="Your phone">
                            <?php include('svg/phone-form.svg'); ?>
                        </div>
                    </div>

                    <div class="col-1-2 col-xs-1">
                        <div class="wrapper-input">
                            <input type="email" name="client_mail" class="client-mail" placeholder="Your e-mail">
                            <img src="images/mail-form.png" class="mail-form hidden-xs" alt=" "/>
                            <img src="images/mail-form-mob.png" class="mail-form visible-xs" alt=" "/>
                        </div>
                    </div>

                    <div class="col-1-2 col-xs-1">
                        <div class="btn-holder">
                            <button type="submit" onclick="yaCounter48997670.reachGoal('phone');" class="btn">
                                Call me
                                <span class="top-border"></span>
                                <span class="bottom-border"></span>
                            </button>
                            <input type="hidden" class="g-recaptcha-response" id="g-recaptcha-response" name="g-recaptcha-response">
                        </div>
                    </div>
                </div>

                <input type="hidden" name="send_type" class="send-type" value="4">
                <input type="hidden" name="send_extra" class="send-extra" value="1">
                <input type="hidden" name="key" value="<?php echo $_SESSION['sf_key'] ?>">
                <?php //Поле выше для защиты формы от спам-ботов ?>

                <!-- Agreement -->
                <div class="form-agree align-left">
                    <label class="checkbox-label form-agree-check checked">
                        <input type="checkbox" checked>
                        By clicking the "Call me", I agree and consent to the processing of my personal data in terms of The General Data Protection Regulation (GDPR).
                    </label>
                </div>
            </form>

        </div>
    </div>

    <!--============================================== plan modal 1-->
    <div class="si-modal plan-modal plan-modal-1">
        <a href="#" class="si-close">
            <img src="images/close.png" alt=" "/>
        </a>

        <div class="modal-container">

            <div class="modal-form-title">
            Office Floor 1 - Interior
            </div>

            <div class="row row-3">

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/1st-Ready-Interior-Modern-Office.jpg" data-fancybox="interior">
                        <img src="images/interior/1st-Ready-Interior-Modern-Office.jpg" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/1st-Ready-Interior-Modern-Office-Architecture.jpg" data-fancybox="interior">
                        <img width=436 src="images/interior/1st-Ready-Interior-Modern-Office-Architecture.jpg" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/First-Floor-Interior-Modern-Office-Architecture.jpg" data-fancybox="interior">
                        <img width=436 src="images/interior/First-Floor-Interior-Modern-Office-Architecture.jpg" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/First-Interior-Modern-Office-Architecture-Investment.jpg" data-fancybox="interior">
                        <img width=436 src="images/interior/First-Interior-Modern-Office-Architecture-Investment.jpg" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/Office-Commercial-Ready-Interior-Modern.JPG" data-fancybox="interior">
                        <img width=436 src="images/interior/Office-Commercial-Ready-Interior-Modern.JPG" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/Sale-New-Interior-Modern-Office-Architecture-Investment.JPG" data-fancybox="interior">
                        <img width=436 src="images/interior/Sale-New-Interior-Modern-Office-Architecture-Investment.JPG" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

            </div>

            <div class="modal-form-title">
            
            </div>

            <div class="row row-xs-2">
                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Total floor area
                        </div>
                        <div class="number">395 m<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
							Office premises
                        </div>
                        <div class="number">348 m<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Common Areas / Lobby
                        </div>
                        <div class="number">47 m<sup>2</sup></div>
                    </div>

				</div>
				
				<!-- item -->
				<div class="col-1-4 col-xs-1-2">

					<div class="item-office">
						<div class="title">
							Parking Spaces
						</div>
						<div class="number">To be scheduled</div>
					</div>

				</div>
            </div>

            <div class="wrapper-plan-level">
                <a href="images/plan/1.jpg" class="plan-gallery" data-fancybox="plan-gallery">
                    <img src="images/plan/1.jpg" alt=" "/>
                    <span>Look</span>
                </a>
            </div>

            

        </div>
    </div>

    <!--============================================== plan modal GF-->
    <div class="si-modal plan-modal plan-modal-8">
        <a href="#" class="si-close">
            <img src="images/close.png" alt=" "/>
        </a>

        <div class="modal-container">

            <div class="modal-form-title">
            Office Ground Floor - Interior
            </div>

            <div class="row row-3">

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/togas_1.png" data-fancybox="interior">
                        <img src="images/interior/togas_1.png" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/togas_2.png" data-fancybox="interior">
                        <img width=436 src="images/interior/togas_2.png" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/togas_3.png" data-fancybox="interior">
                        <img width=436 src="images/interior/togas_3.png" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/togas_4.png" data-fancybox="interior">
                        <img width=436 src="images/interior/togas_4.png" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/togas_5.png" data-fancybox="interior">
                        <img width=436 src="images/interior/togas_5.png" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/togas_6.png" data-fancybox="interior">
                        <img width=436 src="images/interior/togas_6.png" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

            </div>

            <div class="modal-form-title">
            
            </div>

            <div class="row row-xs-2">
                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Total floor area
                        </div>
                        <div class="number">380 m<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
							Office premises
                        </div>
                        <div class="number">350 m<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Common Areas / Lobby
                        </div>
                        <div class="number">47 m<sup>2</sup></div>
                    </div>

				</div>

				<!-- item -->
				<div class="col-1-4 col-xs-1-2">

					<div class="item-office">
						<div class="title">
							Parking Spaces
						</div>
						<div class="number">To be scheduled</div>
					</div>

				</div>
            </div>



            

        </div>
    </div>

    <!--============================================== plan modal 1-->
    <div class="si-modal plan-modal plan-modal-2">
        <a href="#" class="si-close">
            <img src="images/close.png" alt=" "/>
        </a>

        <div class="modal-container">

            <div class="modal-form-title">
            Office Floor 2 - Interior
            </div>

            <div class="row row-3">

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/Construction-Commercial-Limassol.jpg" data-fancybox="interior2">
                        <img src="images/interior/Construction-Commercial-Limassol.jpg" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/Office-Commercial.jpg" data-fancybox="interior2">
                        <img src="images/interior/Office-Commercial.jpg" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/Office-Commercial-Ksenos-Cyprus.jpg" data-fancybox="interior2">
                        <img src="images/interior/Office-Commercial-Ksenos-Cyprus.jpg" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/Office-Commercial-Space-Rent.jpg" data-fancybox="interior2">
                        <img src="images/interior/Office-Commercial-Space-Rent.jpg" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/Office-Commercial-Space-sale.jpg" data-fancybox="interior2">
                        <img src="images/interior/Office-Commercial-Space-sale.jpg" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/Real-Estate-Commercial-Investment.jpg" data-fancybox="interior2">
                        <img src="images/interior/Real-Estate-Commercial-Investment.jpg" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

            </div>
            <div class="modal-form-title">
                
            </div>

            <div class="row row-xs-2">
                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Total floor area
                        </div>
                        <div class="number">689 m<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Number of office premises
                        </div>
                        <div class="number">10</div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Office 1
                        </div>
                        <div class="number">280 m<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Engineering area / Server room
                        </div>
                        <div class="number">300 m<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Lobby
                        </div>
                        <div class="number">52 m<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Covered verandas
                        </div>
                        <div class="number">57 m<sup>2</sup></div>
                    </div>

                </div>
            </div>

            <div class="wrapper-plan-level">
                <a href="images/plan/2.jpg" class="plan-gallery" data-fancybox="plan-gallery">
                    <img src="images/plan/2.jpg" alt=" "/>
                    <span>Look</span>
                </a>
            </div>
        </div>
    </div>

    <!--============================================== plan modal 1-->
    <div class="si-modal plan-modal plan-modal-3">
        <a href="#" class="si-close">
            <img src="images/close.png" alt=" "/>
        </a>

        <div class="modal-container">

            <div class="modal-form-title">
            Office Floor 3 - Interior
            </div>

            <div class="row row-3">

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/Construction-Commercial-Limassol.jpg" data-fancybox="interior3">
                        <img src="images/interior/Construction-Commercial-Limassol.jpg" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/Office-Commercial.jpg" data-fancybox="interior3">
                        <img src="images/interior/Office-Commercial.jpg" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/Office-Commercial-Ksenos-Cyprus.jpg" data-fancybox="interior3">
                        <img src="images/interior/Office-Commercial-Ksenos-Cyprus.jpg" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/Office-Commercial-Space-Rent.jpg" data-fancybox="interior3">
                        <img src="images/interior/Office-Commercial-Space-Rent.jpg" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/Office-Commercial-Space-sale.jpg" data-fancybox="interior3">
                        <img src="images/interior/Office-Commercial-Space-sale.jpg" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/Real-Estate-Commercial-Investment.jpg" data-fancybox="interior3">
                        <img src="images/interior/Real-Estate-Commercial-Investment.jpg" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>
                <div class="modal-form-title">
                
            </div>

            <div class="row row-xs-2">
                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Total floor area
                        </div>
                        <div class="number">582 m<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Number of office premises
                        </div>
                        <div class="number">10</div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Office 2
                        </div>
                        <div class="number">582 m<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Common Areas / Lobby
                        </div>
                        <div class="number">52 m<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Covered verandas
                        </div>
                        <div class="number">57 m<sup>2</sup></div>
                    </div>

                </div>
            </div>

            <div class="wrapper-plan-level">
                <a href="images/plan/3.jpg" class="plan-gallery" data-fancybox="plan-gallery">
                    <img src="images/plan/3.jpg" alt=" "/>
                    <span>Look</span>
                </a>
            </div>
            </div>

        </div>
    </div>

    <!--============================================== plan modal 4-->
    <div class="si-modal plan-modal plan-modal-4">
        <a href="#" class="si-close">
            <img src="images/close.png" alt=" "/>
        </a>

        <div class="modal-container">

            <div class="modal-form-title">
            Office Floor 4 - Interior
            </div>

            <div class="row row-3">

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/4-Floor-KSenos-Project-Building-Investment.jpg" data-fancybox="interior4">
                        <img src="images/interior/4-Floor-KSenos-Project-Building-Investment.jpg" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/4-Floor-Offices-KSenos-Project-Building-Investment.jpg" data-fancybox="interior4">
                        <img src="images/interior/4-Floor-Offices-KSenos-Project-Building-Investment.jpg" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/Office-Kitchen-View-Limassol-Ksenos-Investment.jpg" data-fancybox="interior4">
                        <img src="images/interior/Office-Kitchen-View-Limassol-Ksenos-Investment.jpg" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                

            </div>
            <div class="modal-form-title">
                
            </div>

            <div class="row row-xs-2">
                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Total floor area
                        </div>
                        <div class="number">583 m<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Number of office premises
                        </div>
                        <div class="number">10</div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Office 3
                        </div>
                        <div class="number">583 m<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Common Areas / Lobby
                        </div>
                        <div class="number">52 m<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Covered verandas
                        </div>
                        <div class="number">57 m<sup>2</sup></div>
                    </div>

                </div>
            </div>

            <div class="wrapper-plan-level">
                <a href="images/plan/4.jpg" class="plan-gallery" data-fancybox="plan-gallery">
                    <img src="images/plan/4.jpg" alt=" "/>
                    <span>Look</span>
                </a>
            </div>
        </div>
    </div>

    <!--============================================== plan modal 5-->
    <div class="si-modal plan-modal plan-modal-5">
        <a href="#" class="si-close">
            <img src="images/close.png" alt=" "/>
        </a>

        <div class="modal-container">

            <div class="modal-form-title">
            Office Floor 5 - Interior
            </div>

            <div class="row row-3">

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/5-Floor-Interior-Office-Industrial-Open-Plan.jpg" data-fancybox="interior5">
                        <img src="images/interior/5-Floor-Interior-Office-Industrial-Open-Plan.jpg" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/Business-Centre-Interior-Office-Industrial-Open-Plan.jpg" data-fancybox="interior5">
                        <img src="images/interior/Business-Centre-Interior-Office-Industrial-Open-Plan.jpg" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/Business-Centre-Office-Industrial-Open-Plan-Investment.jpg" data-fancybox="interior5">
                        <img src="images/interior/Business-Centre-Office-Industrial-Open-Plan-Investment.jpg" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/Business-Office-Open-Plan-Construction.jpg" data-fancybox="interior5">
                        <img src="images/interior/Business-Office-Open-Plan-Construction.jpg" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                
                
               
            
            <div class="row row-xs-2">
                
                <!-- item -->
                <div class="col-1-4 col-xs-1-2">
                
                    <div class="item-office">
                        <div class="title">
                            Total floor area
                        </div>
                        <div class="number">727 m<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
							Office premises
                        </div>
                        <div class="number">680</div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Common Areas / Lobby
                        </div>
                        <div class="number">47 m<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
							Parking Spaces
                        </div>
                        <div class="number">To be scheduled</sup></div>
                    </div>

                </div>
            </div>

            <div class="wrapper-plan-level">
                <a href="images/plan/5.jpg" class="plan-gallery" data-fancybox="plan-gallery">
                    <img src="images/plan/5.jpg" alt=" "/>
                    <span>Look</span>
                </a>
            </div>
            </div>

        </div>
    </div>

    <!--============================================== plan modal 6-->
    <div class="si-modal plan-modal plan-modal-6">
        <a href="#" class="si-close">
            <img src="images/close.png" alt=" "/>
        </a>

        <div class="modal-container">

            <div class="modal-form-title">
            Office Floors 6-7 - Interior
            </div>

            <div class="row row-3">

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/Top-Floor-Office-Limassol-Rent-Sale.jpg" data-fancybox="interior6">
                        <img src="images/interior/Top-Floor-Office-Limassol-Rent-Sale.jpg" />
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/Top-Floor-Building-Ksenos.jpg" data-fancybox="interior6">
                        <img src="images/interior/Top-Floor-Building-Ksenos.jpg" />
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/Penthouse-Top-Floor-Limassol-View.jpg" data-fancybox="interior6">
                        <img src="images/interior/Penthouse-Top-Floor-Limassol-View.jpg"/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/Penthouse-Construction-City-Sea-View.jpg" data-fancybox="interior6">
                        <img src="images/interior/Penthouse-Construction-City-Sea-View.jpg" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/Limassol-sale-rent-investment-office-space-industrial-style.jpg" data-fancybox="interior6">
                        <img src="images/interior/Limassol-sale-rent-investment-office-space-industrial-style.jpg" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item eng" href="images/interior/7-luxury-Top-Floor-Office-Limassol-View.jpg" data-fancybox="interior6">
                        <img src="images/interior/7-luxury-Top-Floor-Office-Limassol-View.jpg" alt=" "/>
                        <span>Look</span>
                    </a>

                </div>
                <div class="modal-form-title">
                
            </div>

            <div class="row row-xs-2">
                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Total floor area
                        </div>
                        <div class="number">1454 m<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
							Office premises
                        </div>
                        <div class="number">680</div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Common Areas / Lobby
                        </div>
                        <div class="number">47 m<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
							Parking Spaces
                        </div>
                        <div class="number">To be scheduled</div>
                    </div>

                </div>
            </div>

            <div class="wrapper-plan-level">
                <a href="images/plan/6.jpg" class="plan-gallery" data-fancybox="plan-gallery">
                    <img src="images/plan/6.jpg" alt=" "/>
                    <span>Look</span>
                </a>
            </div>
            </div>

        </div>
    </div>

    <!--============================================== info modal 1-->
    <div class="si-modal info-modal info-modal-1">
        <a href="#" class="si-close">
            <img src="images/close.png" alt=" "/>
        </a>

        <div class="modal-container">

            <div class="modal-form-title">
                Shipping companies
            </div>

            <div class="info-text-content">
                Commercial Shipping Legislation, fully approved
                EU, provides for exemption from all direct taxes
                and the application of a taxation regime based on
                the tonnage of the vessel ("tonnage tax regime", RTN), for
                shipowners, charterers and service companies
                on the management of commonwealth ships (ie vessels flying the flag of the country
                - Member of the EU or a country belonging to the European
                The Economic Zone (EEA)), as well as by foreign courts
                (subject to certain conditions), when implementing
                subject to the Law of Activity.
            </div>

            <div class="info-text-content">
                In accordance with the Law, foreign vessels are subject to
                action of the RTN provided that the fleet consists of not less than
                60% of the EU / EEA vessels. Even if this condition is not met,
                foreign vessels can still be subject to this
                Law under certain conditions. Legislation
                includes the rule "all or nothing", according to which,
                if the shipowner / charterer / group manager of the group
                decides to apply the RTN, all other shipowners / charterers /
                managers of the vessels of the relevant group should apply
                same mode. Wages of officers and crew on
                The board of a Cypriot vessel is also exempt from taxation.
            </div>

        </div>
    </div>

    <!--============================================== info modal 2-->
    <div class="si-modal info-modal info-modal-2">
        <a href="#" class="si-close">
            <img src="images/close.png" alt=" "/>
        </a>

        <div class="modal-container">

            <div class="modal-form-title">
                Shipowners
            </div>

            <div class="info-text-content">
                Exemption from taxation applies to:
                <ul>
                    <li>profit derived from the use / chartering of ships;</li>
                    <li>interest income relating to the company's working capital;</li>
                    <li>profit from the sale of ships that meet certain conditions;</li>
                    <li>dividends paid out of the above types of profit at all levels of their distribution;</li>
                    <li>profit from the sale of shares of the company-owner of ships and the distribution of such profits;</li>
                </ul>
            </div>

            <div class="info-text-content">
                This privilege is also applied to the charterer (under the bareboat charter) of a ship flying the Cyprus flag with parallel registration.
            </div>

        </div>
    </div>

    <!--============================================== info modal 3-->
    <div class="si-modal info-modal info-modal-3">
        <a href="#" class="si-close">
            <img src="images/close.png" alt=" "/>
        </a>

        <div class="modal-container">

            <div class="modal-form-title">
                Charterers
            </div>

            <div class="info-text-content">
                Exemption from taxation applies to:
                <ul>
                    <li>profit from the use of leased vessels;</li>
                    <li>interest income relating to circulating assets of the company;</li>
                    <li>dividends paid out of the above types of profit at all levels of their distribution;</li>
                </ul>
            </div>

            <div class="info-text-content">
                The law grants exemption on the condition that the RTN
                applies to all vessels and condition
                to the composition: at least 25% (10% - if certain
                conditions) of the net tonnage of the vessels belong to the charterer
                on the right of ownership or is chartered on a bareboat charter.
            </div>

        </div>
    </div>

    <!--============================================== info modal 5-->
    <div class="si-modal info-modal info-modal-5">
        <a href="#" class="si-close">
            <img src="images/close.png" alt=" "/>
        </a>

        <div class="modal-container">

            <div class="modal-form-title">
                Companies providing ship management services
            </div>

            <div class="info-text-content">
                Exemption from taxation applies to:
                <ul>
                    <li>profit from technical management of ships and / or crewing;</li>
                    <li>dividends paid out of this profit at all levels of their distribution;</li>
                    <li>interest income relating to circulating assets of the company;</li>
                </ul>
            </div>

            <div class="info-text-content">
                For the application of RTN, companies managing vessels should
                meet the following additional requirements:
                <ul>
                    <li>The company must have in Cyprus a fully equipped office and a staff of qualified employees, sufficient to carry out the activities of the company;</li>
                    <li>At least 51% of the total number of shore personnel should be EU / EEA citizens;</li>
                    <li>at least 2/3 of the total tonnage of cargo under management should be managed on the territory of the EU / EEA (any excess of 1/3 of the total tonnage of cargo will be taxed on the profits of enterprises).;</li>
                </ul>
            </div>

            <div class="info-text-content">
                The use of RTN is mandatory for shipowners
                under the Cyprus flag and voluntary for owners of ships not under the
                flag of Cyprus, charterers and companies providing
                ship management. Persons who exercise the right to use
                PTH, should subsequently consistently apply PTH
                for a period of at least 10 years, unless they have
                good reasons to stop using PTH, for example, in the case of
                liquidation of their courts and termination of their activities.
            </div>

        </div>
    </div>

    <!--============================================== info modal 4-->
    <div class="si-modal info-modal info-modal-4">
        <a href="#" class="si-close">
            <img src="images/close.png" alt=" "/>
        </a>

        <div class="modal-container">

            <div class="modal-form-title">
                Insurance companies
            </div>

            <div class="info-text-content">
                The order of taxation of profits of insurance companies
                is similar to the taxation procedure for other companies, for
                except for the case when the corporate income tax,
                paid by a company engaged in life insurance,
                is less than 1.5% of the gross premium amount. In this
                case, the difference between the actual tax
                The profit of enterprises and 1.5% of the gross premium amount is subject to
                transfer to the budget of Cyprus as a supplementary tax
                at a profit.
            </div>

        </div>
    </div>

    <!--============================================== text modal 1 -->
    <div class="si-modal text-modal text-modal-1">
        <a href="#" class="si-close"></a>

        <div class="modal-container">

            <div class="modal-form-title align-center">
                Consent to the processing of personal data
            </div>

            <div class="modal-text-block">
                <p>
                    Personal data - any information related to a certain person or determined on the basis of such information to an individual.
                </p>

                <p>
                    This consent has been issued by me for the processing of the following personal data:
                </p>

                <ul class="marked">
                    <li>
                        Name;
                    </li>
                    <li>
                        Phone;
                    </li>
                    <li>
                        E-mail;
                    </li>
                    <li>
                        A comment.
                    </li>
                </ul>

                <p>
                    The consent is given to the Operator for performing the following actions with my personal data using automation facilities and / or without using such means: collection, systematization, accumulation, storage, clarification (updating, modification), use, depersonalization, transfer to third parties for the following purposes, as well as the implementation of any other actions provided for by the current legislation of the Republic of Cyprus, both non-automated and automated methods.
                </p>

                <p>
                    This consent is given to the Operator and third parties for processing my personal data for the following purposes:
                </p>

                <ul class="marked">
                    <li>
                        providing me with services / works;
                    </li>
                    <li>
                        sending to me the notifications related to the services / works provided;
                    </li>
                    <li>
                        preparation and sending of responses / proposals for my inquiries;
                    </li>
                    <li>
                        information sent to me, including advertising, about the activities / goods / services / works of the Operator.
                    </li>
                </ul>
            </div>

        </div>
    </div>

    </div>

</div>

<script>
    var template_url = '<?php echo SI_RootURL(); ?>';
    //    var template_url = '<?php //echo SI_CurrentPageURL(); ?>//';
</script>


<!-- Inlcude jQuery framework + jQuery migrate -->
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery-migrate-1.4.1.min.js"></script>


<!-- JS Scripts -->
<script src="js/plugins-all-eng.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/smooth-scroll-1.4.4.min.js"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADz9aaxYiWxtQKH0fNSvvXozuC6v8xoWE&callback=initMap">
</script>

<!-- Google Recaptcha -->
<script src="https://www.google.com/recaptcha/api.js?render=6LdtEbgUAAAAAGeZ6EA6ADKzDulnkOe71wcojnJV"></script>
  <script>
    grecaptcha.ready(() => {
      recaptcha = grecaptcha.execute('6LdtEbgUAAAAAGeZ6EA6ADKzDulnkOe71wcojnJV', {action: 'homepage'}).then((token) => {
        let gRecapthcaInp = document.querySelectorAll('.g-recaptcha-response');
        for (i = 0; i < gRecapthcaInp.length; i++) {
            gRecapthcaInp[i].value = token;
        }
      });
  });
  </script>

<!-- custom scripts -->
<script src="js/main.js"></script>
<script src="js/share.js"></script>

<?php include('si-engine.php'); ?>


</body>
</html>