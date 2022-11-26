<?php
//Две строчки ниже для защиты форм от спам-ботов
session_start();
$_SESSION['sf_key'] = md5(substr( session_id(), mt_rand(0,10), mt_rand(3,10) ) . time() );

header('Content-Type: text/html; charset=utf-8');
header('X-UA-Compatible: IE=edge');
include 'functions.php';

$title = 'KSenos';
$desc = 'Κτίριο Γραφείων Κατηγορίας Α  ';
$url = SI_CurrentPageURL();
$image = SI_CurrentPageImage();

?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="el" class="loading">


<head>

    <style>
        @media (max-width: 640px) {
            .layout-footer .social {
                right: 120px !important;
            }
        }
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
    <link rel="stylesheet" href="../css/jquery.fancybox.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../css/jquery.formstyler.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../css/swiper.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../css/style-fix.css" type="text/css" media="screen">


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
        <img src="../images/ksenos-logo.png" alt="logo">
            <p>
                Flamelia Investments Ltd
                <span>
                    Κτίριο Γραφείων<br>
                    Κατηγορίας Α  <span class="accent-ks">KS</span>enos
                </span>
            </p>
        </a>

        <div class="container">
            <div class="row">

                <div class="col-1-4 col-lg-offset-1-6  hidden-xs">
                    <div class="location">
                    Cyprus, Limassol, 4105 Ayiou Athanasiou 10 <br> Office GF
                    </div>
                </div>


                <div class="col-1-4 col-offset-1-4 col-lg-offset-0">
                    <ul class="language-change hidden-md">
                        <li>
                            <a href="../ru">Rus</a>
                        </li>
                        <li>
                            <a href="../">Eng</a>
                        </li>
                        <li class="active">
                            <a href="index.php">Gre</a>
                        </li>
                    </ul>

                    <ul class="select-language visible-md">
                        <li>
                            Αλλαγή γλώσσας
                            <ul class="language-change">
                                <li>
                                    <a href="../ru">Rus</a>
                                </li>
                                <li>
                                    <a href="../">Eng</a>
                                </li>
                                <li class="active">
                                    <a href="index.php">Gre</a>
                                </li>
                            </ul>
                        </li>

                    </ul>

                    <ul class="select-language visible-xs">
                        <li class="flag-gr">
                            Αλλαγή γλώσσας
                            <ul class="language-change">
                                <li>
                                    <a href="../ru">Rus</a>
                                </li>
                                <li>
                                    <a href="../">Eng</a>
                                </li>
                                <li class="active">
                                    <a href="index.php">Gre</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>

            </div>
        </div>

        <!-- phone block -->
        <div class="si-phone hidden-xs">
            <a href="tel:+35795593555" class="phone-link dark">+357 95 593 555  <span>(Κύπρος)</span></a>
            <a href="tel:+35725344555" class="phone-link dark">+357 25 344 555 <span>(γραφείο)</span></a>
            <a href="#" class="open-phone-modal consult-btn" data-extra="1">Ζητείστε μια  γνωμοδότηση</a>
        </div>

    </header>


    <!--===================================================== section heading -->
    <section class="section-heading" id="heading">

        <div class="container">

            <h1 class="align-center">
                Επιχειρηματικό Κέντρο Κατηγορίας Α στη Λεμεσό Διαθέσιμες
                <span class="big">Καινοτομίες στην Εμπορική Ακίνητη Περιουσία</span>
            </h1>

            <!-- block time -->
            <div class="wrapper-block-time">

                <div class="block-time eng">
                    <div class="title-block">
                        <h2  style='letter-spacing: 1.5px;'>
                            Kαλωσόρισες στο<br>
                            Ksenos Building
                        </h2>
                    </div>
                    <div class="main-facebook">
                        <a href="#image-layout-bg">
                            <button style="font: 700 20px/25px 'GothamPro', sans-serif;" class="btn btn-main-facebook">
                            Ελέγξτε διαθεσιμότητα
                            </button>
                        </a>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-1-4 col-offset-1-4 col-xs-1-2 col-xs-offset-0">

                    <div class="item-info-complex cre-animate" data-animation="slide-up-from-bottom"
                         data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">
                        Περισσότερες<br class="visible-xs"> από 130<br class="hidden-xs">
                        θέσεις στάθμευσης
                    </div>

                </div>

                <div class="col-1-6 col-offset-1-6 col-xs-1-2 col-xs-offset-0">

                    <div class="item-info-complex cre-animate" data-animation="slide-up-from-bottom"
                         data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
                         Διαθέσιμο για επενδύσεις
                    </div>

                </div>
            </div>

        </div>

        <a href="#" class="question-btn hidden-xs open-phone-modal" data-extra="5">
            Κάντε μας μια ερώτηση
        </a>

        <div class="heading-info-item hidden-xs">
            Μετακινηθείτε προς τα κάτω
        </div>

    </section>

    <!--===================================================== section build -->
    <section class="section-build light" id="build">
        <div class="container">

            <div class="content-block">

                <div class="row">
                    <div class="col-5-6 col-offset-1-6 col-xs-1 col-xs-offset-0">

                        <h2>
                            Κατασκευάζουμε ένα συγκρότημα <br class="hidden-xs">
                            με μια άνετη τοποθεσία
                            <span class="big">01</span>
                        </h2>

                    </div>

                    <!-- single item -->
                    <div class="col-1-3 col-offset-1-6 col-xs-1 col-xs-offset-0">

                        <div class="item-advantages cre-animate" data-animation="slide-in-from-left"
                             data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                            <div class="title-item">Βολική πρόσβαση</div>
                            <div class="description-item">
                                Εύκολη είσοδος από οποιαδήποτε κατεύθυνση.
                            </div>
                        </div>

                    </div>

                    <!-- single item -->
                    <div class="col-1-4 col-xs-1">

                        <div class="item-advantages cre-animate" data-animation="slide-in-from-left"
                             data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">

                            <div class="title-item">2,2 χλμ. από τη θάλασσα</div>
                            <div class="description-item">
                                Και επίσης θέα στη θάλασσα και τα τοπία της Λεμεσού.
                            </div>
                        </div>

                    </div>

                    <!-- single item -->
                    <div class="col-1-3 col-offset-1-6 col-xs-1 col-xs-offset-0">

                        <div class="item-advantages cre-animate" data-animation="slide-in-from-left"
                             data-speed="1000" data-delay="400" data-offset="90%" data-easing="easeOut">

                            <div class="title-item">200 μέτρα από τον κεντρικό δρόμο</div>
                            <div class="description-item">
                                Βολικό για να φτάσετε σε οποιοδήποτε σημείο του νησιού.
                            </div>
                        </div>

                    </div>

                    <!-- single item -->
                    <div class="col-1-4 col-xs-1">

                        <div class="item-advantages cre-animate" data-animation="slide-in-from-left"
                             data-speed="1000" data-delay="500" data-offset="90%" data-easing="easeOut">

                            <div class="title-item">Κατόψεις</div>
                            <div class="description-item">
                                Βέλτιστες αποφάσεις σχεδιασμού.
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
            πλεονεκτήματα
        </div>

    </section>

    <!--===================================================== section video -->
    <section class="section-video" id="video">
        <div class="container">

            <h2>
                Παρακολουθήστε το βίντεο σχετικά<br class="hidden-xs">
                με την κατασκευή του<br class="hidden-xs">
                Κτιρίου Γραφείων <span class="accent-ks">KS</span>enos (Ξένος)<br>
                <span class="big">02</span>
            </h2>

            <div class="btns-wrap">
            	<div class="wrapper-btn align-center">

            		<a href="https://www.youtube.com/watch?v=aEXRScEIgK8&feature=youtu.be" class="review-item"
            			data-fancybox>
            			<img src="images/play.png" alt=" ">
            			<span class="shadow-circle"></span>
            		</a>

            	</div>

            	<div class="wrapper-btn align-center">

            		<a href="https://player.kubity.com/p/A2w4ON" target="_blank" class="btn btn-ghost btn-see-stream">			
                        3D Model - Έκδοση Brovser
						<span class="top-border"></span>
						<span class="bottom-border"></span>
            		</a>

            	</div>
            </div>

        </div>

        <div class="section-info-item-video">
            βίντεο
        </div>

    </section>

    <!--===================================================== section overview -->
    <section class="section-overview" id="overview">
        <div class="container">

            <h2>
                Πώς θα φαίνεται<br>
                το κτίριό μας;
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
					<img src="mthumb.php?src=images/overview/commercial-offices-interior.jpg&amp;w=280&amp;h=200" alt=" "/>
				</div>

				<!-- single slide -->
				<div class="swiper-slide">
					<img src="mthumb.php?src=images/overview/new-construction-ksenos.jpg&amp;w=280&amp;h=200" alt=" "/>
				</div>

				<!-- single slide -->
				<div class="swiper-slide">
					<img src="mthumb.php?src=images/overview/commercial-offices-interior.jpg&w=1100&h=630 alt=" "/>
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
            <img src="mthumb.php?src=images/overview/commercial-offices-interior.jpg&amp;w=1100&amp;h=630" alt=" "/>
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
            σύνθετη επισκόπηση
        </div>

        <!-- slider mobile -->
        <div class="wrapper-slider-overview visible-xs">

            <!-- Swiper -->
            <div class="swiper-container overview-slider-mob">
                <div class="swiper-wrapper">

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="mthumb.php?src=images/overview/1.jpg&amp;w=1100&amp;h=630" alt=" "/>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="mthumb.php?src=images/overview/2.jpg&amp;w=1100&amp;h=630" alt=" "/>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="mthumb.php?src=images/overview/3.jpg&amp;w=1100&amp;h=630" alt=" "/>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="mthumb.php?src=images/overview/4.jpg&amp;w=1100&amp;h=630" alt=" "/>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="mthumb.php?src=images/overview/5.jpg&amp;w=1100&amp;h=630" alt=" "/>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="mthumb.php?src=images/overview/6.jpg&amp;w=1100&amp;h=630" alt=" "/>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="mthumb.php?src=images/overview/7.jpg&amp;w=1100&amp;h=630" alt=" "/>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="mthumb.php?src=images/overview/8.jpg&amp;w=1100&amp;h=630" alt=" "/>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="mthumb.php?src=images/overview/9.jpg&amp;w=1100&amp;h=630" alt=" "/>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="mthumb.php?src=images/overview/10.jpg&amp;w=1100&amp;h=630" alt=" "/>
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
                Μαγευτική πανοραμική<br>
                θέα στη θάλασσα και στην πόλη
            </h2>

        </div>

        <div class="wrapper-panorama-slider">

            <!-- Swiper -->
            <div class="swiper-container panorama-slider">
                <div class="swiper-wrapper">

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <!-- img for pc -->
                        <img src="mthumb.php?src=images/panorama/1.jpg&amp;w=1920&amp;h=800" class="hidden-xs" alt=" "/>
                        <!-- img for mobile -->
                        <img src="mthumb.php?src=images/panorama/1.jpg&amp;w=640&amp;h=460" class="visible-xs" alt=" "/>
                        <span>01</span>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <!-- img for pc -->
                        <img src="mthumb.php?src=images/panorama/4.jpg&amp;w=1920&amp;h=800" class="hidden-xs" alt=" "/>
                        <!-- img for mobile -->
                        <img src="mthumb.php?src=images/panorama/4.jpg&amp;w=640&amp;h=460" class="visible-xs" alt=" "/>
                        <span>02</span>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <!-- img for pc -->
                        <img src="mthumb.php?src=images/panorama/6.jpg&amp;w=1920&amp;h=800" class="hidden-xs" alt=" "/>
                        <!-- img for mobile -->
                        <img src="mthumb.php?src=images/panorama/6.jpg&amp;w=640&amp;h=460" class="visible-xs" alt=" "/>
                        <span>03</span>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <!-- img for pc -->
                        <img src="mthumb.php?src=images/panorama/7.jpg&amp;w=1920&amp;h=800" class="hidden-xs" alt=" "/>
                        <!-- img for mobile -->
                        <img src="mthumb.php?src=images/panorama/7.jpg&amp;w=640&amp;h=460" class="visible-xs" alt=" "/>
                        <span>04</span>
                    </div

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <!-- img for pc -->
                        <img src="mthumb.php?src=images/panorama/3.jpg&amp;w=1920&amp;h=800" class="hidden-xs" alt=" "/>
                        <!-- img for mobile -->
                        <img src="mthumb.php?src=images/panorama/3.jpg&amp;w=640&amp;h=460" class="visible-xs" alt=" "/>
                        <span>05</span>
                    </div>

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
            πανόραμα
        </div>

    </section>

    <!--===================================================== section technology -->
    <section class="section-technology" id="technology">
        <div class="container">

            <h2>
                <span class="big">05</span>
                Ποια είναι η μοναδικότητα<br>
                του κτιρίου μας;
            </h2>

            <div class="row row-2">

                <!-- item -->
                <div class="col-1-2 col-xs-1">

                    <div class="item-uniqueness cre-animate" data-animation="slide-in-from-left"
                         data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                        <div class="title-item">
                            Ευρωπαϊκή ποιότητα
                            <span>01</span>
                        </div>
                        <div class="description-item">
                            Το συγκρότημα <span class="accent-ks">KS</span>enos (Ξένος) ανταποκρίνεται στις υψηλές απαιτήσεις των κτιρίων της κατηγορίας «Α» λόγω της κατασκευής σύμφωνα με τα ευρωπαϊκά πρότυπα ποιότητας και ενεργειακής απόδοσης.
                        </div>

                    </div>

                </div>
                <div class="col-1-2 col-xs-1">

                    <div class="image-uniqueness i-1">
                        <img src="mthumb.php?src=images/uniqueness/1.jpg&amp;w=555&amp;h=365" alt=" "/>
                        <a href="images/uniqueness/1.jpg" data-fancybox>
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
                            Αρχιτεκτονική ιδέα σε στυλ υψηλής τεχνολογίας
                            <span>02</span>
                        </div>
                        <div class="description-item">
                            Μια μεγάλη ποσότητα αλουμινίου και σκυροδέματος τονίζει το μοναδικό σχεδιασμό, και τα πανοραμικά παράθυρα σάς επιτρέπουν να ευχαριστηθείτε τις απολαύσεις της γύρω περιοχής από το υψηλότερο σημείο της συνοικίας.
                        </div>

                    </div>

                </div>

                <!-- item -->
                <div class="col-1-2 col-xs-1">

                    <div class="item-uniqueness cre-animate" data-animation="slide-in-from-left"
                         data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                        <div class="title-item">
                            Τεχνολογικός εξοπλισμός
                            <span>03</span>
                        </div>
                        <div class="description-item">
                            Το συγκρότημα θα είναι εξοπλισμένο με ένα ασφαλές δωμάτιο διακομιστή, ένα σύγχρονο σύστημα κλιματισμού VRV, και ένα έξυπνο σύστημα για εμπορικά κτίρια
                        </div>
                    </div>

                </div>
                <div class="col-1-2 col-xs-1">

                    <div class="image-uniqueness">
                        <img src="mthumb.php?src=images/uniqueness/3.jpg&amp;w=555&amp;h=365" alt=" "/>
                        <a href="images/uniqueness/3.jpg" data-fancybox>
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
                            Απαιτούμενη<br>
                            υποδομή κτιρίου
                            <span>04</span>
                        </div>
                        <div class="description-item">
                            Πλήρως προετοιμασμένη υποδομή για τις ανάγκες κάθε ενοικιαστή και συμφωνία με εταιρεία που παρέχει ηλεκτρική ενέργεια για επιπλέον όγκους.
                        </div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-2 col-xs-1">

                    <div class="item-uniqueness cre-animate" data-animation="slide-in-from-left"
                         data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                        <div class="title-item">
                            Ασφάλεια
                            <span>05</span>
                        </div>
                        <div class="description-item">
                            Το κτίριο του <span class="accent-ks">KS</span>enos (Ξένος) είναι υπό την παρακολούθηση φρουρού και βίντεο 24 ώρες την ημέρα.
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
                            Ατομική προσέγγιση
                            <span>06</span>
                        </div>
                        <div class="description-item">
                            Ευέλικτες συνθήκες συνεργασίας και πρόσθετου εξοπλισμού των εγκαταστάσεων.
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="section-info-item-technology">
            Τεχνολογίες
        </div>

    </section>

    <!--===================================================== section layout -->
    <section class="section-layout light" id="layout">
        <div class="container">

            <div class="row">

                <div class="col-1-2 col-xs-1">

                    <h2>
                        <span class="big">06</span>
                        Χώρος γραφείου στο<br>
                        γούστο σας
                    </h2>

                </div>

            </div>

            <div class="row">

                <div class="col-1-5 col-xs-1-2">

                    <div class="layout-description cre-animate" data-animation="slide-up-from-bottom"
                         data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                        <div class="title-layout">7 όροφοι</div>
                        <div class="text-layout">
                            με πανοραμική<br>
                            θέα
                        </div>
                    </div>

                </div>

                <div class="col-1-5 col-xs-1-2">

                    <div class="layout-description cre-animate" data-animation="slide-up-from-bottom"
                         data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">

                        <div class="title-layout">7 379 m<sup>2</sup></div>
                        <div class="text-layout">
                            συνολική έκταση του<br>
                            κτιρίου
                        </div>
                    </div>

                </div>

                <div class="col-1-5 col-xs-1-2">

                    <div class="layout-description cre-animate" data-animation="slide-up-from-bottom"
                         data-speed="1000" data-delay="400" data-offset="90%" data-easing="easeOut">

                        <div class="title-layout">1074 m<sup>2</sup></div>
                        <div class="text-layout">
                            εμπορικά <br>
                            τετράγωνο
                        </div>
                    </div>

                </div>

                <div class="col-1-5 col-xs-1-2">

                    <div class="layout-description cre-animate" data-animation="slide-up-from-bottom"
                         data-speed="1000" data-delay="500" data-offset="90%" data-easing="easeOut">

                        <div class="title-layout">4 008 m<sup>2</sup></div>
                        <div class="text-layout">
                            γραφείο <br>
                            εγκαταστάσεις
                        </div>
                    </div>

                </div>

                <div class="col-1-5 col-xs-1-2">

                    <div class="layout-description cre-animate" data-animation="slide-up-from-bottom"
                         data-speed="1000" data-delay="600" data-offset="90%" data-easing="easeOut">

                        <div class="title-layout">130</div>
                        <div class="text-layout">
                            θέσεις στάθμευσης
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- bg section -->
        <div id='image-layout-bg' class="image-layout-bg">
            <img width=1920 height=850 src="../images/layout-bg-1.webp" class="hidden-xs" alt=" "/>
            <img width=640  height=460 src="../images/layout-bg-1.webp" class="visible-xs" alt=" "/>
        </div>

        <div class="item-level-block">

            <!-- single item -->
            <div class="item-level i-1 ">
                <span class="number-level">Ground floor</span>
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

        <div class="wrapper-btn align-center open-plan-modal" data-id="1">
            <a href="images/plan/3.jpg" data-fancybox="layout-plan" class="btn">
                Εύρος διαρρυθμίσεων
                <span class="top-border"></span>
                <span class="bottom-border"></span>
            </a>
        </div>

        <a href="images/plan/4.jpg" data-fancybox="layout-plan"></a>
        <a href="images/plan/5.jpg" data-fancybox="layout-plan"></a>
        <a href="images/plan/6.jpg" data-fancybox="layout-plan"></a>
        <a href="images/plan/7.jpg" data-fancybox="layout-plan"></a>
        <a href="images/plan/1.jpg" data-fancybox="layout-plan"></a>
        <a href="images/plan/2.jpg" data-fancybox="layout-plan"></a>
        
            <div class="content-block">

                <div class="row">

                    <div class="col-2-3 col-offset-1-6 col-xs-1 col-xs-offset-0">

                        <h2>
                            <span class="big">07</span>
                            Μάθετε λεπτομέρειες σχετικά με την αγορά και την ενοικίαση ενός γραφείου στο συγκρότημα του <span class="accent-ks">KS</span>enos (Ξένος)
                        </h2>

                        <p class="sub-title">
                            Συμπληρώστε τη φόρμα και ο υπεύθυνός μας θα επικοινωνήσει μαζί σας
                        </p>

                        <form method="post" class="send-form" autocomplete="off">
                            <div class="row">
                                <div class="col-1-2 col-xs-1">
                                    <div class="wrapper-input">
                                        <input type="text" name="client_name" class="client-name" placeholder="Το όνομά σας">
                                        <?php include('svg/user-form.svg'); ?>
                                    </div>
                                </div>

                                <div class="col-1-2 col-xs-1">
                                    <div class="wrapper-input">
                                        <input type="tel" name="client_phone" class="client-phone" placeholder="Το τηλέφωνό σας">
                                        <?php include('svg/phone-form.svg'); ?>
                                    </div>
                                </div>

                                <div class="col-1-2 col-xs-1">
                                    <div class="wrapper-input">
                                        <input type="email" name="client_mail" class="client-mail" placeholder="Το δικό σου e-mail">
                                        <img src="images/mail-form.png" class="mail-form hidden-xs" alt=" "/>
                                        <img src="images/mail-form-mob.png" class="mail-form visible-xs" alt=" "/>
                                    </div>
                                </div>

                                <div class="col-1-2 col-xs-1">
                                    <div class="btn-holder">
                                        <button type="submit" onclick="yaCounter48997670.reachGoal('detail');" class="btn">
                                            αποστολή ερώτησης
                                            <span class="top-border"></span>
                                            <span class="bottom-border"></span>
                                        </button>
                                        <!--<div class="g-recaptcha" id="g-recaptcha"></div>-->
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
                                    Κάνοντας κλικ στο "αποστολή ερώτησης", συμφωνώ και συναινώ με την επεξεργασία των προσωπικών μου δεδομένων  Γενικής Προστασίας Δεδομένων (GDPR).
                                </label>
                            </div>
                        </form>

                    </div>

                </div>

                <div class="ks"></div>

            </div>

        </div>

        <div class="section-info-item-form">
            Μάθετε περισσότερα
        </div>

    </section>

    <!--===================================================== section advantages -->
    <section class="section-advantages" id="advantages">
        <div class="container">

            <h2>
                <span class="big">08</span>
                Ευχάριστες προσθήκες με την<br>
                έναρξη λειτουργίας του γραφείου στο Κένος
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
                        <div class="title-item">Ευνοϊκή ατμόσφαιρα</div>
                        <div class="decription-item">
                            Το νησί της Κύπρου θα σας γεμίσει με την ενέργεια της θάλασσας. Μπορείτε να ανακαλύψετε νέες γαστρονομικές γεύσεις και να γνωριστείτε με καλούς ανθρώπους.
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
                        <div class="title-item">Αναπτυσσόμενη Οικονομία</div>
                        <div class="decription-item">
                            Το τελευταίο ενάμισι έτος, η οικονομία της Κύπρου κερδίζει δυναμική. Το νησί κατασκευάζει ενεργά οικιστικά συγκροτήματα και εμπορικά ακίνητα.
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
                        <div class="title-item">Ανεπτυγμένη υποδομή</div>
                        <div class="decription-item">
                            Η περιοχή στην οποία βρίσκεται το συγκρότημα διαθέτει ανεπτυγμένη υποδομή. Εδώ θα βρείτε ένα μέρος για ψώνια, διασκέδαση και αναψυχή.
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
                            Αφοσίωση στους αλλοδαπούς πολίτες
                        </div>
                        <div class="decription-item">
                            Η Κυβέρνηση της Κύπρου προσφέρει όλες τις απαραίτητες προϋποθέσεις για τους αλλοδαπούς επιχειρηματίες που κατέχουν ακίνητα.
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
                        <div class="title-item">Συνεργάτες</div>
                        <div class="decription-item">
                            Ένας μεγάλος αριθμός γνωστών εταίρων συμμετέχουν στην κατασκευή, οι οποίες συμβάλλουν στη βελτίωση του συγκροτήματος σε κάθε περιοχή.
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
                        <div class="title-item">Απαλλαγή των εσόδων από φόρους</div>
                        <div class="decription-item">
                            Ένα άλλο ειδικό πλεονέκτημα στην Κύπρο για αλλοδαπούς επιχειρηματίες είναι η προτιμησιακή μεταχείριση, η οποία απαλλάσσει από την καταβολή φόρων.
                        </div>

                    </div>

                </div>

                <div class="wrapper-btn align-center">
                    <a href="#" class="btn btn-loyalty gre open-phone-modal" data-extra="4">
                        Μάθετε περισσότερα σχετικά με την αφοσίωση
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
                <div class="title-item">Ευνοϊκή ατμόσφαιρα</div>
                <div class="decription-item">
                    Το νησί της Κύπρου θα σας γεμίσει με την ενέργεια της θάλασσας. Μπορείτε να ανακαλύψετε νέες γαστρονομικές γεύσεις και να γνωριστείτε με καλούς ανθρώπους.
                </div>

            </div>

            <!-- single item -->
            <div class="item-advantages-sect light">

                <span class="number">02</span>
                <div class="wrapper-svg">
                    <?php include('svg/economy.svg'); ?>
                </div>
                <div class="title-item">Αναπτυσσόμενη Οικονομία</div>
                <div class="decription-item">
                    Το τελευταίο ενάμισι έτος, η οικονομία της Κύπρου κερδίζει δυναμική. Το νησί κατασκευάζει ενεργά οικιστικά συγκροτήματα και εμπορικά ακίνητα.
                </div>

            </div>

            <!-- single item -->
            <div class="item-advantages-sect light mob-dark">

                <span class="number">03</span>
                <div class="wrapper-svg">
                    <?php include('svg/infrastructure.svg'); ?>
                </div>
                <div class="title-item">Ανεπτυγμένη υποδομή</div>
                <div class="decription-item">
                    Η περιοχή στην οποία βρίσκεται το συγκρότημα διαθέτει ανεπτυγμένη υποδομή. Εδώ θα βρείτε ένα μέρος για ψώνια, διασκέδαση και αναψυχή.
                </div>

            </div>

            <!-- single item -->
            <div class="item-advantages-sect mob-light">

                <span class="number">04</span>
                <div class="wrapper-svg">
                    <?php include('svg/loyalty.svg'); ?>
                </div>
                <div class="title-item">
                    Αφοσίωση στους αλλοδαπούς πολίτες
                </div>
                <div class="decription-item">
                    Η Κυβέρνηση της Κύπρου προσφέρει όλες τις απαραίτητες προϋποθέσεις για τους αλλοδαπούς επιχειρηματίες που κατέχουν ακίνητα.
                </div>

            </div>

            <!-- single item -->
            <div class="item-advantages-sect">

                <span class="number">05</span>
                <div class="wrapper-svg">
                    <?php include('svg/partner.svg'); ?>
                </div>
                <div class="title-item">Συνεργάτες</div>
                <div class="decription-item">
                    Το νησί της Κύπρου θα σας γεμίσει με την ενέργεια της θάλασσας. Μπορείτε να ανακαλύψετε νέες γαστρονομικές γεύσεις και να γνωριστείτε με καλούς ανθρώπους.
                </div>

            </div>

            <!-- single item -->
            <div class="item-advantages-sect light">

                <span class="number">06</span>
                <div class="wrapper-svg">
                    <?php include('svg/nalog.svg'); ?>
                </div>
                <div class="title-item">Απαλλαγή των εσόδων από φόρους</div>
                <div class="decription-item">
                    Το τελευταίο ενάμισι έτος, η οικονομία της Κύπρου κερδίζει δυναμική. Το νησί κατασκευάζει ενεργά οικιστικά συγκροτήματα και εμπορικά ακίνητα.
                </div>

            </div>

            <div class="wrapper-btn align-center">
                <a href="#" class="btn btn-loyalty">
                    Μάθετε περισσότερα σχετικά με την αφοσίωση
                    <span class="top-border"></span>
                    <span class="bottom-border"></span>
                </a>
            </div>

        </div>

        <div class="section-info-item-advantages">
            Οφέλη Γραφείου
        </div>

    </section>

    <!--===================================================== section income -->
    <section class="section-income light" id="income">
        <div class="container">

            <h2>
                <span class="big">09</span>
                Στην Κύπρο, ο φόρος εισοδήματός σας<br>
                θα είναι 12,5%
            </h2>

            <div class="subtitle-h2">
                Ποιο εισόδημα απαλλάσσεται<br>
                από τη φορολογία;
            </div>

            <div class="row">

                <div class="col-5-12 col-xs-1">

                    <div class="item-income i-1 cre-animate" data-animation="slide-in-from-left"
                         data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                        <span>01</span>
                        <div class="title-item">
                            Έσοδα από την<br>
                            πώληση χρεογράφων
                        </div>
                    </div>

                    <div class="item-income i-3 cre-animate" data-animation="slide-in-from-left"
                         data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                        <span class="hidden-xs">03</span>
                        <span class="visible-xs">02</span>
                        <div class="title-item">Έσοδα από τόκους</div>

                        <div class="description-item">
                            που δεν προκύπτουν από τις συνήθεις (ή στενά συνδεδεμένη με τις συνηθισμένες) δραστηριότητες της εταιρείας
                        </div>
                        <ul class="income-list">
                            <li>
                                <a href="#" class="open-info-modal" data-id="1">Ναυτιλιακές εταιρείες</a>
                            </li>
                            <li>
                                <a href="#" class="open-info-modal" data-id="2">Πλοιοκτήτες</a>
                            </li>
                            <li>
                                <a href="#" class="open-info-modal" data-id="3">Ναυλωτές</a>
                            </li>
                            <li>
                                <a href="#" class="open-info-modal" data-id="4">Ασφαλιστικές εταιρείες</a>
                            </li>
                            <li>
                                <a href="#" class="open-info-modal" data-id="5">
                                    Εταιρείες που παρέχουν υπηρεσίες διαχείρισης πλοίων
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
                            Μερίσματα
                        </div>
                        <div class="description-item">
                            Από την 1η Ιανουαρίου 2016 - εκτός από τα μερίσματα που αφαιρούνται από τον πληρωτή των μερισμάτων από τη φορολογική βάση για τον φόρο εισοδήματος
                        </div>
                    </div>

                    <div class="item-income i-4 cre-animate" data-animation="slide-in-from-left"
                         data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">

                        <span>04</span>
                        <div class="title-item">
                            Εισόδημα
                        </div>
                        <div class="description-item">
                            από τις δραστηριότητες της μόνιμης αποστολής στο εξωτερικό (υπό ορισμένες προϋποθέσεις).
                        </div>
                    </div>

                    <div class="item-income cre-animate" data-animation="slide-in-from-left"
                         data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">

                        <span>05</span>
                        <div class="title-item">
                            Έσοδα υπό μορφή συναλλαγματικών διαφορών
                        </div>
                        <div class="description-item">
                            εκτός από τις συναλλαγματικές διαφορές που σχετίζονται με συναλλαγές σε ξένο νόμισμα ή παράγωγα σε ξένο νόμισμα
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
                Πού βρίσκεται το κτίριο;<br>
                <span class="accent-ks">KS</span>enos (Ξένος)
            </h2>

            <div class="block-map">
                <div class="title-block">
                    Cyprus, Limassol 4105 <br>
                    Ayiou Athanasiou 10 <br>
                    Office GF
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
                Οι συνεργάτες μας
            </h2>

            <!-- slider PC -->
            <div class="wrapper-partner-slider hidden-xs">

                <!-- Swiper -->
                <div class="swiper-container partner-slider">
                    <div class="swiper-wrapper">

					<div class="swiper-slide">

                      <div class="wrapper-item-logo">

                      	<!-- single item -->
                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://ksdesign.com.cy/" target="_blank">
                                          <img src="images/logo/new-prt-8.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                          </div>

                          <!-- single item -->
                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="http://www.trigonarchitect.com/" target="_blank">
                                          <img src="images/logo/1.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                          </div>

                          <!-- single item -->
                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://www.unisatcy.com/ " target="_blank">
                                          <img src="images/logo/uni-logo.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                          </div>

                          <!-- single item -->
                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <img src="images/logo/new-prt-5.png" alt=" "/>
                                  </div>
                              </div>
                          </div>

                          <!-- single item -->
                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://www.momenti-casa.it/" target="_blank">
                                      	<img src="images/logo/new-prt-6.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
						  </div>
						  
							<!-- single item -->
							<div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://kalfire.com/en" target="_blank">
									  	<img src="images/logo/new-prt-4.png" alt=" "/>
									  </a>
                                  </div>
                              </div>
                          </div>

                      </div>

                  </div>

                  <div class="swiper-slide">

                      <div class="wrapper-item-logo">

                          <!-- single item -->
                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
									<a href="https://www.ciprianihomood.com/" target="_blank">
										<img src="images/logo/new-prt-2.png" alt=" "/>
									</a> 
                                  </div>
                              </div>
                          </div>

                          <!-- single item -->
                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://www.malerbafurniture.com/" target="_blank">
									  	<img src="images/logo/new-prt-3.png" alt=" "/>
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

        </div>

        <!-- slider mobile -->
        <div class="wrapper-partner-slider visible-xs">

            <!-- Swiper -->
            <div class="swiper-container partner-slider-mob">
                <div class="swiper-wrapper">

                                      <div class="swiper-slide">

                      <div class="wrapper-item-logo">

                        <!-- single item -->
                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://ksdesign.com.cy/" target="_blank">
                                          <img src="images/logo/new-prt-8.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                          </div>

                          <!-- single item -->
                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="http://www.trigonarchitect.com/" target="_blank">
                                          <img src="images/logo/1.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                          </div>

                          <!-- single item -->
                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://www.unisatcy.com/ " target="_blank">
                                          <img src="images/logo/uni-logo.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                          </div>

                          <!-- single item -->
                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <img src="images/logo/new-prt-5.png" alt=" "/>
                                  </div>
                              </div>
                          </div>

                                                    <!-- single item -->
                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <img src="images/logo/new-prt-7.png" alt=" "/>
                                  </div>
                              </div>
                          </div>

                          <!-- single item -->
                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <a href="https://www.momenti-casa.it/" target="_blank">
                                        <img src="images/logo/new-prt-6.png" alt=" "/>
                                      </a>
                                  </div>
                              </div>
                          </div>

                      </div>

                  </div>

                  <div class="swiper-slide">

                      <div class="wrapper-item-logo">

                          <!-- single item -->
                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <img src="images/logo/new-prt-1.png" alt=" "/>
                                  </div>
                              </div>
                          </div>

                          <!-- single item -->
                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <img src="images/logo/new-prt-2.png" alt=" "/>
                                  </div>
                              </div>
                          </div>

                          <!-- single item -->
                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <img src="images/logo/new-prt-3.png" alt=" "/>
                                  </div>
                              </div>
                          </div>

                          <!-- single item -->
                          <div class="item-logo">
                              <div class="pseudo-table">
                                  <div class="pseudo-table-cell">
                                      <img src="images/logo/new-prt-4.png" alt=" "/>
                                  </div>
                              </div>
                          </div>

                      </div>

                  </div>

                </div>
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination partner-pagination-mob"></div>

            <!-- Add Arrows -->
            <div class="swiper-button-next partner-next-mob arrow">
                <?php include('svg/arrow-slider.svg'); ?>
            </div>
            <div class="swiper-button-prev partner-prev-mob arrow">
                <?php include('svg/arrow-slider.svg'); ?>
            </div>

        </div>

        <div class="section-info-item-company">
            Εταιρείες
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
                            Μάθετε λεπτομέρειες σχετικά με την αγορά και την ενοικίαση ενός γραφείου στο συγκρότημα του <span class="accent-ks">KS</span>enos
                        </h2>

                        <p class="sub-title">
                            Συμπληρώστε τη φόρμα και ο υπεύθυνός μας θα επικοινωνήσει μαζί σας
                        </p>

                        <form method="post" class="send-form" autocomplete="off">
                            <div class="row">
                                <div class="col-1-2 col-xs-1">
                                    <div class="wrapper-input">
                                        <input type="text" name="client_name" class="client-name" placeholder="Το όνομά σας">
                                        <?php include('svg/user-form.svg'); ?>
                                    </div>
                                </div>

                                <div class="col-1-2 col-xs-1">
                                    <div class="wrapper-input">
                                        <input type="tel" name="client_phone" class="client-phone" placeholder="Το τηλέφωνό σας">
                                        <?php include('svg/phone-form.svg'); ?>
                                    </div>
                                </div>

                                <div class="col-1-2 col-xs-1">
                                    <div class="wrapper-input">
                                        <input type="email" name="client_mail" class="client-mail" placeholder="Το δικό σου e-mail">
                                        <img src="images/mail-form.png" class="mail-form hidden-xs" alt=" "/>
                                        <img src="images/mail-form-mob.png" class="mail-form visible-xs" alt=" "/>
                                    </div>
                                </div>

                                <div class="col-1-2 col-xs-1">
                                    <div class="btn-holder">
                                        <button type="submit" onclick="yaCounter48997670.reachGoal('detail-2');" class="btn">
                                            Ζητείστε μια γνωμοδότηση
                                            <span class="top-border"></span>
                                            <span class="bottom-border"></span>
                                        </button>
                                        <!--<div class="g-recaptcha" id="g-recaptcha"></div>-->
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
                                    Κάνοντας κλικ στο "Ζητείστε μια γνωμοδότηση", συμφωνώ και συναινώ με την επεξεργασία των προσωπικών μου δεδομένων σύμφωνα με  τον Κανονισμό Γενικής Προστασίας Δεδομένων (GDPR).
                                </label>
                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </div>

        <div class="section-info-item-form-2">
            Μάθε περισσότερα
        </div>

    </section>

    <!--===================================================== Footer -->
    <footer class="layout-footer light" id="layout-footer">

        <!-- logo -->
        <a href="#" class="logo si-jump">
            <img src="../images/ksenos-logo.png" alt=" ">
            <p>
                Flamelia Investments Ltd<br>
                <span>
                    Εμπορικό και εμπορικό<br>
                    συγκρότημα <span class="accent-ks">KS</span>enos
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
                                <span>Κύπρος</span> <br>
                                Limassol, 4105 <br>
                                Ayiou Athanasiou 10 <br>
                                Office GF
                            </p>
                        </address>
                    </div>
                </div>

                <div class="col-1-3 col-xs-1 align-center">
                    <div class="wrapper-btn-footer">
                        <a href="#heading" class="btn btn-ghost btn-footer si-jump">
                            Επιστροφή στην αρχή
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
                            Ακολουθήστε τα νέα<br>
                            για το  <span class="accent-ks">KS</span>enos
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="si-phone">
            <a href="tel:+35795593555" class="phone-link dark">+357 95 593 555  <span>(Κύπρος)</span></a>
            <a href="tel:+35725344555" class="phone-link dark">+357 25 344 555 <span>(γραφείο)</span></a>
            <a href="#" class="open-phone-modal consult-btn" data-extra="2">Ζητείστε μια γνωμοδότηση</a>
        </div>

    </footer>

<!--===================================================== Modals -->
<!-- Overlay(s) -->
<div class="si-overlay"></div>
<div class="si-overlay-2"></div>

    <div class="info-show">
        <a href="#" class="close">
            <img src="images/close.png" alt=" "/>
        </a>

        Αυτός ο ιστότοπος χρησιμοποιεί την τεχνολογία Cookies

    </div>

<!-- menu btn -->
<div class="show-menu">
    <span class="icon-sandwich"></span>
</div>

<div class="nav">
    <div class="wrapper-content">

        <ul class="language-change">
            <li>
                <a href="../ru">Rus</a>
            </li>
            <li>
                <a href="../">Eng</a>
            </li>
            <li class="active">
                <a href="index.php">Gre</a>
            </li>
        </ul>

        <ul class="menu-nav">
            <li><a href="#heading" class="si-jump">Σπίτι</a></li>
            <li><a href="#map" class="si-jump">Τοποθεσία</a></li>
            <li><a href="#video" class="si-jump">Βίντεο για την κατασκευή</a></li>
            <li><a href="#overview" class="si-jump">Πώς θα μοιάζει</a></li>
            <li><a href="#panorama" class="si-jump">Πανόραμα</a></li>
            <li><a href="#technology" class="si-jump">Μοναδικότητα</a></li>
            <li><a href="#layout" class="si-jump">Κύριο Σχέδιο</a></li>
            <li><a href="#company" class="si-jump">Εταιρείες στο συγκρότημα</a></li>
            <li><a href="#advantages" class="si-jump">Προσθήκες</a></li>
            <li><a href="#income" class="si-jump">Φόροι</a></li>
            <li><a href="#map" class="si-jump">Χάρτης</a></li>
            <li><a href="#partner-2" class="si-jump">Συνεργάτες</a></li>
            <li><a href="#layout-footer" class="si-jump">Επαφές</a></li>
        </ul>

        <div class="si-phone nav-block">
            <a href="tel:+35795593555" class="phone-link dark">+357 95 593 555 <span>(Κύπρος)</span></a>
            <a href="tel:+35725344555" class="phone-link dark">+357 25 344 555 <span>(γραφείο)</span></a>
            <a href="#" class="open-phone-modal consult-btn" data-extra="4">Ζητείστε μια  γνωμοδότηση</a>
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
            Ευχαριστώ!
        </div>

        <div class="success-time">
            Ο υπεύθυνός μας θα επικοινωνήσει μαζί σας μέσα σε 15 λεπτά
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
            Ζητείστε μια γνωμοδότηση
        </div>

        <form method="post" class="send-form" autocomplete="off">
            <div class="row">
                <div class="col-1-2 col-xs-1">
                    <div class="wrapper-input">
                        <input type="text" name="client_name" class="client-name" placeholder="Ονομα">
                        <?php include('svg/user-form.svg'); ?>
                    </div>
                </div>

                <div class="col-1-2 col-xs-1">
                    <div class="wrapper-input">
                        <input type="tel" name="client_phone" class="client-phone" placeholder="Τηλέφωνο">
                        <?php include('svg/phone-form.svg'); ?>
                    </div>
                </div>

                <div class="col-1-2 col-xs-1">
                    <div class="wrapper-input">
                        <input type="email" name="client_mail" class="client-mail" placeholder="Ηλεκτρονική Διεύθυνση">
                        <img src="images/mail-form.png" class="mail-form hidden-xs" alt=" "/>
                        <img src="images/mail-form-mob.png" class="mail-form visible-xs" alt=" "/>
                    </div>
                </div>

                <div class="col-1-2 col-xs-1">
                    <div class="btn-holder">
                        <button type="submit" onclick="yaCounter48997670.reachGoal('phone');" class="btn">
                            Καλέστε με
                            <span class="top-border"></span>
                            <span class="bottom-border"></span>
                        </button>
                        <!--<div class="g-recaptcha" id="g-recaptcha"></div>-->
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
                    Κάνοντας κλικ στο κουμπί "Καλέστε με", συμφωνώ και συναινώ με την επεξεργασία των προσωπικών μου δεδομένων σύμφωνα με τον Κανονισμό Γενικής Προστασίας Δεδομένων (GDPR).
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
            Πατώματα γραφείων 1
        </div>

        <div class="row row-xs-2">
            <!-- item -->
            <div class="col-1-4 col-xs-1-2">

                <div class="item-office">
                    <div class="title">
                        Συνολική επιφάνεια δαπέδου
                    </div>
                    <div class="number">395 m<sup>2</sup></div>
                </div>

            </div>

            <!-- item -->
            <div class="col-1-4 col-xs-1-2">

                <div class="item-office">
                    <div class="title">
                        Αριθμός χώρων γραφείων
                    </div>
                    <div class="number">348</div>
                </div>

            </div>

            <!-- item -->
            <div class="col-1-4 col-xs-1-2">

                <div class="item-office">
                    <div class="title">
                        Κοινές περιοχές / λόμπι
                    </div>
                    <div class="number">47 m<sup>2</sup></div>
                </div>

            </div>
        </div>

        <div class="wrapper-plan-level">
            <a href="images/plan/1.jpg" class="plan-gallery" data-fancybox="plan-gallery">
                <img src="images/plan/1.jpg" alt=" "/>
                <span>ρολόι</span>
            </a>
        </div>

        <div class="modal-form-title">
            Εσωτερικά
        </div>

        <div class="row row-3">

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/1.jpg" data-fancybox="interior">
                    <img src="images/interior/1.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/2.jpg" data-fancybox="interior">
                    <img src="images/interior/2.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/3.jpg" data-fancybox="interior">
                    <img src="images/interior/3.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/4.jpg" data-fancybox="interior">
                    <img src="images/interior/4.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/5.jpg" data-fancybox="interior">
                    <img src="images/interior/5.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/6.jpg" data-fancybox="interior">
                    <img src="images/interior/6.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

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
            Πατώματα γραφείων 2
        </div>

        <div class="row row-xs-2">
            <!-- item -->
            <div class="col-1-4 col-xs-1-2">

                <div class="item-office">
                    <div class="title">
                        Συνολική επιφάνεια δαπέδου
                    </div>
                    <div class="number">689 m<sup>2</sup></div>
                </div>

            </div>

            <!-- item -->
            <div class="col-1-4 col-xs-1-2">

                <div class="item-office">
                    <div class="title">
                        Αριθμός χώρων γραφείων
                    </div>
                    <div class="number">10</div>
                </div>

            </div>

            <!-- item -->
            <div class="col-1-4 col-xs-1-2">

                <div class="item-office">
                    <div class="title">
                        Γραφείο 1
                    </div>
                    <div class="number">280 m<sup>2</sup></div>
                </div>

            </div>

            <!-- item -->
            <div class="col-1-4 col-xs-1-2">

                <div class="item-office">
                    <div class="title">
                        Τεχνολογία / αίθουσα διακομιστών
                    </div>
                    <div class="number">300 m<sup>2</sup></div>
                </div>

            </div>

            <!-- item -->
            <div class="col-1-4 col-xs-1-2">

                <div class="item-office">
                    <div class="title">
                        Λόμπι
                    </div>
                    <div class="number">52 m<sup>2</sup></div>
                </div>

            </div>

            <!-- item -->
            <div class="col-1-4 col-xs-1-2">

                <div class="item-office">
                    <div class="title">
                        Καλυμμένες βεράντες
                    </div>
                    <div class="number">57 m<sup>2</sup></div>
                </div>

            </div>
        </div>

        <div class="wrapper-plan-level">
            <a href="images/plan/4.jpg" class="plan-gallery" data-fancybox="plan-gallery">
                <img src="images/plan/4.jpg" alt=" "/>
                <span>ρολόι</span>
            </a>
        </div>

        <div class="modal-form-title">
            Εσωτερικά
        </div>

        <div class="row row-3">

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/1.jpg" data-fancybox="interior2">
                    <img src="images/interior/1.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/2.jpg" data-fancybox="interior2">
                    <img src="images/interior/2.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/3.jpg" data-fancybox="interior2">
                    <img src="images/interior/3.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/4.jpg" data-fancybox="interior2">
                    <img src="images/interior/4.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/5.jpg" data-fancybox="interior2">
                    <img src="images/interior/5.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/6.jpg" data-fancybox="interior2">
                    <img src="images/interior/6.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

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
            Πατώματα γραφείων 3
        </div>

        <div class="row row-xs-2">
            <!-- item -->
            <div class="col-1-4 col-xs-1-2">

                <div class="item-office">
                    <div class="title">
                        Συνολική επιφάνεια δαπέδου
                    </div>
                    <div class="number">582 m<sup>2</sup></div>
                </div>

            </div>

            <!-- item -->
            <div class="col-1-4 col-xs-1-2">

                <div class="item-office">
                    <div class="title">
                        Αριθμός χώρων γραφείων
                    </div>
                    <div class="number">10</div>
                </div>

            </div>

            <!-- item -->
            <div class="col-1-4 col-xs-1-2">

                <div class="item-office">
                    <div class="title">
                        Γραφείο 2
                    </div>
                    <div class="number">582 m<sup>2</sup></div>
                </div>

            </div>

            <!-- item -->
            <div class="col-1-4 col-xs-1-2">

                <div class="item-office">
                    <div class="title">
                        Κοινές περιοχές / λόμπι
                    </div>
                    <div class="number">52 m<sup>2</sup></div>
                </div>

            </div>

            <!-- item -->
            <div class="col-1-4 col-xs-1-2">

                <div class="item-office">
                    <div class="title">
                        Καλυμμένες βεράντες
                    </div>
                    <div class="number">57 m<sup>2</sup></div>
                </div>

            </div>
        </div>

        <div class="wrapper-plan-level">
            <a href="images/plan/5.jpg" class="plan-gallery" data-fancybox="plan-gallery">
                <img src="images/plan/5.jpg" alt=" "/>
                <span>ρολόι</span>
            </a>
        </div>

        <div class="modal-form-title">
            Εσωτερικά
        </div>

        <div class="row row-3">

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/1.jpg" data-fancybox="interior3">
                    <img src="images/interior/1.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/2.jpg" data-fancybox="interior3">
                    <img src="images/interior/2.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/3.jpg" data-fancybox="interior3">
                    <img src="images/interior/3.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/4.jpg" data-fancybox="interior3">
                    <img src="images/interior/4.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/5.jpg" data-fancybox="interior3">
                    <img src="images/interior/5.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/6.jpg" data-fancybox="interior3">
                    <img src="images/interior/6.jpg" alt=" "/>
                    <span>ρολόι</span>
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
            Πατώματα γραφείων 4
        </div>

        <div class="row row-xs-2">
            <!-- item -->
            <div class="col-1-4 col-xs-1-2">

                <div class="item-office">
                    <div class="title">
                        Συνολική επιφάνεια δαπέδου
                    </div>
                    <div class="number">583 m<sup>2</sup></div>
                </div>

            </div>

            <!-- item -->
            <div class="col-1-4 col-xs-1-2">

                <div class="item-office">
                    <div class="title">
                        Αριθμός χώρων γραφείων
                    </div>
                    <div class="number">10</div>
                </div>

            </div>

            <!-- item -->
            <div class="col-1-4 col-xs-1-2">

                <div class="item-office">
                    <div class="title">
                        Γραφείο 3
                    </div>
                    <div class="number">583 m<sup>2</sup></div>
                </div>

            </div>

            <!-- item -->
            <div class="col-1-4 col-xs-1-2">

                <div class="item-office">
                    <div class="title">
                        Κοινές περιοχές / λόμπι
                    </div>
                    <div class="number">52 m<sup>2</sup></div>
                </div>

            </div>

            <!-- item -->
            <div class="col-1-4 col-xs-1-2">

                <div class="item-office">
                    <div class="title">
                        Καλυμμένες βεράντες
                    </div>
                    <div class="number">57 m<sup>2</sup></div>
                </div>

            </div>
        </div>

        <div class="wrapper-plan-level">
            <a href="images/plan/6.jpg" class="plan-gallery" data-fancybox="plan-gallery">
                <img src="images/plan/6.jpg" alt=" "/>
                <span>ρολόι</span>
            </a>
        </div>

        <div class="modal-form-title">
            Εσωτερικά
        </div>

        <div class="row row-3">

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/1.jpg" data-fancybox="interior4">
                    <img src="images/interior/1.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/2.jpg" data-fancybox="interior4">
                    <img src="images/interior/2.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/3.jpg" data-fancybox="interior4">
                    <img src="images/interior/3.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/4.jpg" data-fancybox="interior4">
                    <img src="images/interior/4.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/5.jpg" data-fancybox="interior4">
                    <img src="images/interior/5.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/6.jpg" data-fancybox="interior4">
                    <img src="images/interior/6.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

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
            Πατώματα γραφείων 5
        </div>

        <div class="row row-xs-2">
            <!-- item -->
            <div class="col-1-4 col-xs-1-2">

                <div class="item-office">
                    <div class="title">
                        Συνολική επιφάνεια δαπέδου
                    </div>
                    <div class="number">727 m<sup>2</sup></div>
                </div>

            </div>

            <!-- item -->
            <div class="col-1-4 col-xs-1-2">

                <div class="item-office">
                    <div class="title">
                        Αριθμός χώρων γραφείων
                    </div>
                    <div class="number">680</div>
                </div>

            </div>

            <!-- item -->
            <div class="col-1-4 col-xs-1-2">

                <div class="item-office">
                    <div class="title">
                        Κοινές περιοχές / λόμπι
                    </div>
                    <div class="number">47 m<sup>2</sup></div>
                </div>

            </div>
        </div>

        <div class="wrapper-plan-level">
            <a href="images/plan/5.jpg" class="plan-gallery" data-fancybox="plan-gallery">
                <img src="images/plan/5.jpg" alt=" "/>
                <span>ρολόι</span>
            </a>
        </div>

        <div class="modal-form-title">
            Εσωτερικά
        </div>

        <div class="row row-3">

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/1.jpg" data-fancybox="interior5">
                    <img src="images/interior/1.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/2.jpg" data-fancybox="interior5">
                    <img src="images/interior/2.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/3.jpg" data-fancybox="interior5">
                    <img src="images/interior/3.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/4.jpg" data-fancybox="interior5">
                    <img src="images/interior/4.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/5.jpg" data-fancybox="interior5">
                    <img src="images/interior/5.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/6.jpg" data-fancybox="interior5">
                    <img src="images/interior/6.jpg" alt=" "/>
                    <span>ρολόι</span>
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
            Πατώματα γραφείων 6-7
        </div>

        <div class="row row-xs-2">
            <!-- item -->
            <div class="col-1-4 col-xs-1-2">

                <div class="item-office">
                    <div class="title">
                        Συνολική επιφάνεια δαπέδου
                    </div>
                    <div class="number">1454 m<sup>2</sup></div>
                </div>

            </div>

            <!-- item -->
            <div class="col-1-4 col-xs-1-2">

                <div class="item-office">
                    <div class="title">
                        Αριθμός χώρων γραφείων
                    </div>
                    <div class="number">680</div>
                </div>

            </div>

            <!-- item -->
            <div class="col-1-4 col-xs-1-2">

                <div class="item-office">
                    <div class="title">
                        Κοινές περιοχές / λόμπι
                    </div>
                    <div class="number">47 m<sup>2</sup></div>
                </div>

            </div>
        </div>

        <div class="wrapper-plan-level">
            <a href="images/plan/6.jpg" class="plan-gallery" data-fancybox="plan-gallery">
                <img src="images/plan/6.jpg" alt=" "/>
                <span>ρολόι</span>
            </a>
        </div>

        <div class="modal-form-title">
            Εσωτερικά
        </div>

        <div class="row row-3">

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/1.jpg" data-fancybox="interior6">
                    <img src="images/interior/1.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/2.jpg" data-fancybox="interior6">
                    <img src="images/interior/2.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/3.jpg" data-fancybox="interior6">
                    <img src="images/interior/3.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/4.jpg" data-fancybox="interior6">
                    <img src="images/interior/4.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/5.jpg" data-fancybox="interior6">
                    <img src="images/interior/5.jpg" alt=" "/>
                    <span>ρολόι</span>
                </a>

            </div>

            <!-- single item -->
            <div class="col-1-3 col-xs-1">

                <a class="interior-item gre" href="images/interior/6.jpg" data-fancybox="interior6">
                    <img src="images/interior/6.jpg" alt=" "/>
                    <span>ρολόι</span>
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
            Ναυτιλιακές εταιρείες
        </div>

        <div class="info-text-content">
            Νομοθεσία εμπορικής ναυτιλίας, πλήρως εγκεκριμένη
            ΕΕ, προβλέπει την απαλλαγή από όλους τους άμεσους φόρους
            και την εφαρμογή ενός φορολογικού καθεστώτος που βασίζεται στην
            - τη χωρητικότητα του σκάφους ("καθεστώς φόρου χωρητικότητας", RTN), για
            πλοιοκτήτες, ναυλωτές και εταιρείες παροχής υπηρεσιών
            σχετικά με τη διαχείριση των πλοίων της Κοινοπολιτείας (δηλαδή τα σκάφη που φέρουν τη σημαία της χώρας
            - μέλος της ΕΕ ή χώρα που ανήκει στον ευρωπαϊκό
            Την Οικονομική Ζώνη (ΕΟΧ), καθώς και από τα αλλοδαπά δικαστήρια
            (υπό ορισμένες προϋποθέσεις), κατά την εφαρμογή
            σύμφωνα με τον νόμο της δραστηριότητας.
        </div>

        <div class="info-text-content">
            Σύμφωνα με το Νόμο, υπόκεινται σε αλλοδαπά σκάφη
            δράση του RTN, εφόσον ο στόλος αποτελείται από τουλάχιστον
            60% των σκαφών της ΕΕ / ΕΟΧ. Ακόμη και αν δεν πληρούται αυτή η προϋπόθεση,
            τα ξένα σκάφη μπορούν ακόμα να υπόκεινται σε αυτό
            Νόμου υπό ορισμένες προϋποθέσεις. Νομοθεσία
            περιλαμβάνει τον κανόνα "όλα ή τίποτα", σύμφωνα με το οποίο,
            εάν ο εφοπλιστής / ναυλωτής / διευθυντής ομάδας του ομίλου
            αποφασίζει να εφαρμόσει το RTN, όλους τους άλλους πλοιοκτήτες / ναυλωτές /
            πρέπει να ισχύουν οι διαχειριστές των σκαφών της αντίστοιχης ομάδας
            ίδια λειτουργία. Μισθοί των αξιωματικών και του πληρώματος
            Το διοικητικό συμβούλιο ενός κυπριακού σκάφους απαλλάσσεται επίσης από τη φορολογία.
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
            Πλοιοκτήτες
        </div>

        <div class="info-text-content">
            Η απαλλαγή από τη φορολογία ισχύει για:
            <ul>
                <li>κέρδος που προκύπτει από τη χρήση / ναύλωση πλοίων;</li>
                <li>τα έσοδα από τόκους που σχετίζονται με τα κυκλοφορούντα περιουσιακά στοιχεία της εταιρείας;</li>
                <li>κέρδος από την πώληση πλοίων που πληρούν ορισμένες προϋποθέσεις;</li>
                <li>τα μερίσματα που καταβάλλονται από τα ανωτέρω είδη κερδών σε όλα τα επίπεδα της διανομής τους;</li>
                <li>κέρδος από την πώληση μετοχών της εταιρείας-ιδιοκτήτη πλοίων και τη διανομή τέτοιων κερδών;</li>
            </ul>
        </div>

        <div class="info-text-content">
            Αυτό το προνόμιο εφαρμόζεται επίσης στον ναυλωτή (υπό τη bareboat charter) πλοίου που φέρει κυπριακή σημαία με παράλληλη εγγραφή.
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
            Χάρτες
        </div>

        <div class="info-text-content">
            Η απαλλαγή από τη φορολογία ισχύει για:
            <ul>
                <li>κέρδος από τη χρήση μισθωμένων σκαφών;</li>
                <li>τα έσοδα από τόκους που σχετίζονται με τα κυκλοφορούντα περιουσιακά στοιχεία της εταιρείας;</li>
                <li>τα μερίσματα που καταβάλλονται από τα ανωτέρω είδη κερδών σε όλα τα επίπεδα της διανομής τους;</li>
            </ul>
        </div>

        <div class="info-text-content">
            Ο νόμος χορηγεί απαλλαγή με την προϋπόθεση ότι το RTN
            ισχύει για όλα τα σκάφη και την κατάσταση
            στη σύνθεση: τουλάχιστον 25% (10% - εάν είναι βέβαιο
            συνθήκες) της καθαρής χωρητικότητας των σκαφών ανήκουν στον ναυλωτή
            επί του δικαιώματος κυριότητας ή είναι ναυλωμένο σε ναύλωση γυμνού πλοίου.
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
            Εταιρείες που παρέχουν υπηρεσίες διαχείρισης πλοίων
        </div>

        <div class="info-text-content">
            Η απαλλαγή από τη φορολογία ισχύει για:
            <ul>
                <li>κέρδος από την τεχνική διαχείριση πλοίων ή / και πληρώματος;</li>
                <li>τα μερίσματα που καταβάλλονται από το κέρδος αυτό σε όλα τα επίπεδα της διανομής τους;</li>
                <li>τα έσοδα από τόκους που σχετίζονται με τα κυκλοφορούντα περιουσιακά στοιχεία της εταιρείας;</li>
            </ul>
        </div>

        <div class="info-text-content">
            Για την εφαρμογή της RTN, οι εταιρείες που διαχειρίζονται πλοία πρέπει
            να πληρούν τις ακόλουθες πρόσθετες απαιτήσεις:
            <ul>
                <li>Η εταιρεία πρέπει να διαθέτει στην Κύπρο ένα πλήρως εξοπλισμένο γραφείο και ένα προσωπικό εξειδικευμένων εργαζομένων, επαρκή για την άσκηση των δραστηριοτήτων της εταιρείας;</li>
                <li>Τουλάχιστον το 51% του συνολικού αριθμού του προσωπικού της ξηράς πρέπει να είναι πολίτες της ΕΕ / ΕΟΧ;</li>
                <li>τουλάχιστον το 2/3 της συνολικής χωρητικότητας υπό διαχείριση θα πρέπει να διαχειρίζεται στην επικράτεια της ΕΕ / ΕΟΧ (οποιαδήποτε υπέρβαση του 1/3 της συνολικής χωρητικότητας του φορτίου θα υπόκειται σε φόρο εισοδήματος εταιρειών);</li>
            </ul>
        </div>

        <div class="info-text-content">
            Η χρήση του RTN είναι υποχρεωτική για τους πλοιοκτήτες
            υπό τη κυπριακή σημαία και εθελοντική για τους ιδιοκτήτες πλοίων που δεν υπόκεινται στην
            σημαία της Κύπρου, ναυλωτές και εταιρείες που παρέχουν
            διαχείριση πλοίων. Άτομα που ασκούν το δικαίωμα χρήσης
            PTH, πρέπει στη συνέχεια να εφαρμόζει σταθερά PTH
            για περίοδο τουλάχιστον δέκα ετών, εκτός εάν έχουν
            σοβαροί λόγοι για να σταματήσετε να χρησιμοποιείτε την PTH, για παράδειγμα, στην περίπτωση
            την εκκαθάριση των δικαστηρίων τους και την παύση των δραστηριοτήτων τους.
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
            Ασφαλιστικές εταιρείες
        </div>

        <div class="info-text-content">
            Η σειρά φορολόγησης των κερδών των ασφαλιστικών εταιρειών
            είναι παρόμοια με τη διαδικασία φορολόγησης άλλων εταιρειών, για το 2006
            εκτός από την περίπτωση όπου ο φόρος εισοδήματος εταιρειών,
            που καταβάλλεται από εταιρεία που ασχολείται με ασφάλειες ζωής,
            είναι μικρότερο από το 1,5% του ακαθάριστου ποσού ασφαλίστρων. Σε αυτό
            περίπτωση, τη διαφορά μεταξύ του πραγματικού φόρου
            Το κέρδος των επιχειρήσεων και το 1,5% του ακαθάριστου ποσού της πριμοδότησης υπόκειται
            μεταφορά στον προϋπολογισμό της Κύπρου ως συμπληρωματικός φόρος
            για κέρδος.
        </div>

    </div>
</div>

<!--============================================== text modal 1 -->
<div class="si-modal text-modal text-modal-1">
    <a href="#" class="si-close"></a>

    <div class="modal-container">

        <div class="modal-form-title align-center">
            Συγκατάθεση για την επεξεργασία προσωπικών δεδομένων
        </div>

        <div class="modal-text-block">
            <p>
                Προσωπικά δεδομένα - οποιαδήποτε πληροφορία που σχετίζεται με ένα συγκεκριμένο πρόσωπο ή που καθορίζεται με βάση αυτές τις πληροφορίες σε ένα άτομο.
            </p>

            <p>
                Αυτή η συγκατάθεση έχει εκδοθεί από εμένα για την επεξεργασία των ακόλουθων προσωπικών δεδομένων:
            </p>

            <ul class="marked">
                <li>
                    Ονομα;
                </li>
                <li>
                    Τηλέφωνο;
                </li>
                <li>
                    Ηλεκτρονική Διεύθυνση;
                </li>
                <li>
                    Ενα σχόλιο.
                </li>
            </ul>

            <p>
                Η συγκατάθεση παρέχεται στον Διαχειριστή για την εκτέλεση των ακόλουθων ενεργειών με τα προσωπικά μου δεδομένα χρησιμοποιώντας εγκαταστάσεις αυτοματοποίησης ή / και χωρίς τη χρήση τέτοιων μέσων: συλλογή, συστηματοποίηση, συσσώρευση, αποθήκευση, διευκρίνιση (ενημέρωση, τροποποίηση), χρήση, αποπροσωποποίηση, μεταφορά σε τρίτους για τους ακόλουθους σκοπούς, καθώς και την εφαρμογή οποιωνδήποτε άλλων δράσεων που προβλέπονται από την ισχύουσα νομοθεσία της Κυπριακής Δημοκρατίας, τόσο μη αυτοματοποιημένες όσο και αυτοματοποιημένες.
            </p>

            <p>
                Αυτή η συγκατάθεση παρέχεται στον Διαχειριστή και σε τρίτους  για την επεξεργασία των προσωπικών μου δεδομένων για τους ακόλουθους σκοπούς:
            </p>

            <ul class="marked">
                <li>
                    παροχή υπηρεσιών / έργων σε εμένα.
                </li>
                <li>
                    αποστολή των ειδοποιήσεων σχετικά με τις παρεχόμενες υπηρεσίες / έργα σε εμένα.
                </li>
                <li>
                    προετοιμασία καιαποστολή απαντήσεων / προτάσεων για τα ερωτήματά μου.
                </li>
                <li>
                    πληροφορίες που μου έχουν αποσταλεί, συμπεριλαμβανομένων των διαφημίσεων, σχετικά με τις δραστηριότητες/ αγαθά/ υπηρεσίες του Διαχειριστή.
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

<!-- IE -->
<!--[if IE]>
<script src="js/html5shiv.js"></script> <![endif]-->

<!-- JS Scripts -->
<script src="js/plugins-all-gre.js"></script>
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

<!--

Digital-agency "Hello, brand!" - http://hello-brand.ru/
Дата создания: 16.03.2016
Версия: 1.0

-->


</body>
</html>