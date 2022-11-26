<?php
//Две строчки ниже для защиты форм от спам-ботов
session_start();
$_SESSION['sf_key'] = md5(substr( session_id(), mt_rand(0,10), mt_rand(3,10) ) . time() );

header('Content-Type: text/html; charset=utf-8');
header('X-UA-Compatible: IE=edge');
include 'functions.php';

$title = 'KSenos';
$desc = 'Торгово-коммерческий комплекс';
$url = SI_CurrentPageURL();
$image = SI_CurrentPageImage();

?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru" class="loading">

<style>
    @media (max-width: 640px) {
        .layout-footer .social {
            right: 92px !important;
        }
    }
</style>

    <head>

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

        <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter48997670 = new Ya.Metrika({ id:48997670, clickmap:true, trackLinks:true, accurateTrackBounce:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/48997670" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->


    </head>

<body id="main">
<div id="global-wrapper">

    <!--===================================================== Header -->
    <header class="layout-header">

        <!-- logo -->
        <a href="#" class="logo si-jump">
            <img src="../images/ksenos-logo.png" alt=" ">
            <p>
                Flamelia Investments Ltd
                <span>
                    Торгово-коммерческий<br>
                    комплекс <span class="accent-ks">KS</span>enos
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

                

                <div class="col-1-4 col-offset-1-4 col-lg-offset-0">
                    <ul class="language-change hidden-md">
                        <li class="active">
                            <a href="index.php">Rus</a>
                        </li>
                        <li>
                            <a href="../">Eng</a>
                        </li>
                        <li>
                            <a href="../gr">Gre</a>
                        </li>
                    </ul>

                    <ul class="select-language visible-md">
                        <li>
                            Сменить язык
                            <ul class="language-change">
                                <li class="active">
                                    <a href="index.php">Rus</a>
                                </li>
                                <li>
                                    <a href="../">Eng</a>
                                </li>
                                <li>
                                    <a href="../gr">Gre</a>
                                </li>
                            </ul>
                        </li>

                    </ul>

                    <ul class="select-language visible-xs">
                        <li class="flag-ru">
                            Сменить язык
                            <ul class="language-change">
                                <li class="active">
                                    <a href="index.php">Rus</a>
                                </li>
                                <li>
                                    <a href="../">Eng</a>
                                </li>
                                <li>
                                    <a href="../gr">Gre</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>

            </div>
        </div>

        <!-- phone block -->
        <div class="si-phone hidden-xs">
            <a href="tel:+35795593555" class="phone-link dark">+357 95 593 555 <span>(Кипр)</span></a>
            <a href="tel:+35725344555" class="phone-link dark">+357 25 344 555 <span>(Офис)</span></a>
            <a href="#" class="open-phone-modal consult-btn" data-extra="1">Заказать консультацию</a>
        </div>

    </header>


    <!--===================================================== section heading -->
    <section class="section-heading" id="heading">

        <div class="container">

            <h1 class="align-center">
                Бизнес-центр А класса в Лимассоле
                <span class="big">Доступные инновации коммерческой недвижимости</span>
            </h1>

            <!-- block time -->
            <div class="block-time eng">
                    <div class="title-block">
                        <h2 style='letter-spacing: 1.5px;'>
                            Добро пожаловать в <br>
                            Ksenos Building
                        </h2>
                    </div>
                    <div class="main-facebook">
                        <a href="#image-layout-bg">
                            <button style="font: 700 20px/25px 'GothamPro', sans-serif;" class="btn btn-main-facebook">
                                Наличие недвижимости
                            </button>
                        </a>
                    </div>
                </div>


            <div class="row">
                <div class="col-1-4 col-offset-1-4 col-xs-1-2 col-xs-offset-0">

                    <div class="item-info-complex cre-animate" data-animation="slide-up-from-bottom"
                         data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">
                        Более 130<br class="hidden-xs">
                        парковочных мест
                    </div>

                </div>

                <div class="col-1-6 col-offset-1-6 col-xs-1-2 col-xs-offset-0">

                    <div class="item-info-complex cre-animate" data-animation="slide-up-from-bottom"
                         data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
                        Доступны для инвестиций
                    </div>

                </div>
            </div>

        </div>

        <a href="#" class="question-btn hidden-xs open-phone-modal" data-extra="5">
            Задать нам вопрос
        </a>

        <div class="heading-info-item hidden-xs">
            листайте ниже
        </div>

    </section>

    <!--===================================================== section build -->
    <section class="section-build light" id="build">
        <div class="container">

            <div class="content-block">

                <div class="row">
                    <div class="col-5-6 col-offset-1-6 col-xs-1 col-xs-offset-0">

                        <h2>
                        Уникальное архитектурное творение, идеально подходящее для стремящегося бизнеса<br class="hidden-xs">
                            <span style='font-size:18px;'>
                            Современный бизнес-центр в самом сердце Лимассола / для стремящегося бизнеса
                            </span>
                            <span class="big">01</span>
                        </h2>

                    </div>

                    <!-- single item -->
                    <div class="col-1-3 col-offset-1-6 col-xs-1 col-xs-offset-0">

                        <div class="item-advantages cre-animate" data-animation="slide-in-from-left"
                             data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                            <div class="title-item">Удобный подъезд</div>
                            <div class="description-item">
                                Комфортный заезд в независимости от точки направления.
                            </div>
                        </div>

                    </div>

                    <!-- single item -->
                    <div class="col-1-4 col-xs-1">

                        <div class="item-advantages cre-animate" data-animation="slide-in-from-left"
                             data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">

                            <div class="title-item">2.2 км до моря</div>
                            <div class="description-item">
                                А также вид на море и окрестности Лимассола.
                            </div>
                        </div>

                    </div>

                    <!-- single item -->
                    <div class="col-1-3 col-offset-1-6 col-xs-1 col-xs-offset-0">

                        <div class="item-advantages cre-animate" data-animation="slide-in-from-left"
                             data-speed="1000" data-delay="400" data-offset="90%" data-easing="easeOut">

                            <div class="title-item">200 м. до главной магистрали</div>
                            <div class="description-item">
                                Удобно добираться до любой точки острова.
                            </div>
                        </div>

                    </div>

                    <!-- single item -->
                    <div class="col-1-4 col-xs-1">

                        <div class="item-advantages cre-animate" data-animation="slide-in-from-left"
                             data-speed="1000" data-delay="500" data-offset="90%" data-easing="easeOut">

                            <div class="title-item">Планировка</div>
                            <div class="description-item">
                                Оптимальные планировочные  решения.
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
            преимущества
        </div>

    </section>

    <!--===================================================== section video -->
    <section class="section-video" id="video">
        <div class="container">

            <h2>
                Посмотрите ролик<br class="hidden-xs">
                о строительстве торгового<br class="hidden-xs">
                центра <span class="accent-ks">KS</span>enos<br>
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
            			Перейти к <span class="hidden-xs">3D Модели</span>
						<span class="top-border"></span>
						<span class="bottom-border"></span>
            		</a>

            	</div>
            </div>

        </div>

        <div class="section-info-item-video">
            видео
        </div>

    </section>

    <!--===================================================== section overview -->
    <section class="section-overview" id="overview">
        <div class="container">

            <h2>
                Как выглядит наш<br>
                торгово-коммерческий комплекс
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

                <!-- Add Pagination -->
                <div class="swiper-pagination overview-pagination"></div>

            </div>

        </div>

        <div class="section-info-item-overview">
            обзор комплекса
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
                Захватывающий панорамный вид<br>
                из окон будущего комплекса
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
            панорама
        </div>

    </section>

    <!--===================================================== section technology -->
    <section class="section-technology" id="technology">
        <div class="container">

            <h2>
                <span class="big">05</span>
                В чём уникальность<br>
                строящегося здания
            </h2>

            <div class="row row-2">

                <!-- item -->
                <div class="col-1-2 col-xs-1">

                    <div class="item-uniqueness cre-animate" data-animation="slide-in-from-left"
                         data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                        <div class="title-item">
                            Европейское качество
                            <span>01</span>
                        </div>
                        <div class="description-item">
                            Комплекс <span class="accent-ks">KS</span>enos отвечает высоким требованиям зданий категории "А" за счёт строительства по европейским стандартам качества и энергоэффективности.
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
                            Архитектурная задумка в стиле high-tech
                            <span>02</span>
                        </div>
                        <div class="description-item">
                            Большое количество алюминия и бетона подчёркивает неповторимый дизайн, а панорамные окна позволяют насладиться прелестями окрестностей с самой высокой точки района.
                        </div>

                    </div>

                </div>

                <!-- item -->
                <div class="col-1-2 col-xs-1">

                    <div class="item-uniqueness cre-animate" data-animation="slide-in-from-left"
                         data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                        <div class="title-item">
                            Технологическое оснащение
                            <span>03</span>
                        </div>
                        <div class="description-item">
                            Комплекс будет оборудован защищённой
                            серверной комнатой, современной VRV-системой кондиционирования, системой smart для коммерческих зданий.
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
                            Необходимая<br>
                            инфраструктура здания
                            <span>04</span>
                        </div>
                        <div class="description-item">
                            Полностью подготовленная инфраструктура под нужды любого арендатора и соглашения с компанией, поставляющей электричество на дополнительные объемы.
                        </div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-2 col-xs-1">

                    <div class="item-uniqueness cre-animate" data-animation="slide-in-from-left"
                         data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                        <div class="title-item">
                            Безопасность
                            <span>05</span>
                        </div>
                        <div class="description-item">
                            Центр находится под охраной и видеонаблюдением 24 часа в сутки.
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
                            Индивидуальный подход
                            <span>06</span>
                        </div>
                        <div class="description-item">
                            Гибкие условия сотрудничества и дополнительного оснащения помещений.
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="section-info-item-technology">
            technology
        </div>

    </section>

    <!--===================================================== section layout -->
    <section class="section-layout light" id="layout">
        <div class="container">

            <div class="row">

                <div class="col-1-2 col-xs-1">

                    <h2>
                        <span class="big">06</span>
                        Офисные помещения<br>
                        на Ваш вкус
                    </h2>

                </div>

            </div>

            <div class="row">

                <div class="col-1-5 col-xs-1-2">

                    <div class="layout-description cre-animate" data-animation="slide-up-from-bottom"
                         data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                        <div class="title-layout">7 этажей</div>
                        <div class="text-layout">
                            с панорамным<br>
                            видом
                        </div>
                    </div>

                </div>

                <div class="col-1-5 col-xs-1-2">

                    <div class="layout-description cre-animate" data-animation="slide-up-from-bottom"
                         data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">

                        <div class="title-layout">7 379 м<sup>2</sup></div>
                        <div class="text-layout">
                            общая площадь<br>
                            здания
                        </div>
                    </div>

                </div>

                <div class="col-1-5 col-xs-1-2">

                    <div class="layout-description cre-animate" data-animation="slide-up-from-bottom"
                         data-speed="1000" data-delay="400" data-offset="90%" data-easing="easeOut">

                        <div class="title-layout">1074 м<sup>2</sup></div>
                        <div class="text-layout">
                            коммерческие<br>
                            площади
                        </div>
                    </div>

                </div>

                <div class="col-1-5 col-xs-1-2">

                    <div class="layout-description cre-animate" data-animation="slide-up-from-bottom"
                         data-speed="1000" data-delay="500" data-offset="90%" data-easing="easeOut">

                        <div class="title-layout">4 008 м<sup>2</sup></div>
                        <div class="text-layout">
                            офисные<br>
                            помещения
                        </div>
                    </div>

                </div>

                <div class="col-1-5 col-xs-1-2">

                    <div class="layout-description cre-animate" data-animation="slide-up-from-bottom"
                         data-speed="1000" data-delay="600" data-offset="90%" data-easing="easeOut">

                        <div class="title-layout">130</div>
                        <div class="text-layout">
                            парковочных мест
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

        <div class="wrapper-btn align-center" data-id="1">
            <a href="images/plan/3.jpg" data-fancybox="layout-plan" class="btn">
                Смотреть планировки
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
                            Узнайте подробности покупки
                            и аренды офиса в комплексе <span class="accent-ks">KS</span>enos
                        </h2>

                        <p class="sub-title">
                            Заполните форму и наш менеджер свяжется с Вами
                        </p>

                        <form method="post" class="send-form" autocomplete="off">
                            <div class="row">
                                <div class="col-1-2 col-xs-1">
                                    <div class="wrapper-input">
                                        <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">
                                        <?php include('svg/user-form.svg'); ?>
                                    </div>
                                </div>

                                <div class="col-1-2 col-xs-1">
                                    <div class="wrapper-input">
                                        <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">
                                        <?php include('svg/phone-form.svg'); ?>
                                    </div>
                                </div>

                                <div class="col-1-2 col-xs-1">
                                    <div class="wrapper-input">
                                        <input type="email" name="client_mail" class="client-mail" placeholder="Ваш e-mail">
                                        <img src="images/mail-form.png" class="mail-form hidden-xs" alt=" "/>
                                        <img src="images/mail-form-mob.png" class="mail-form visible-xs" alt=" "/>
                                    </div>
                                </div>

                                <div class="col-1-2 col-xs-1">
                                    <div class="btn-holder">
                                        <button type="submit" onclick="yaCounter48997670.reachGoal('detail');" class="btn">
                                            Отправить запрос
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
                                    Нажимая кнопку "Отправить запрос", я&nbsp;даю своё согласие на&nbsp;обработку
                                    моих персональных данных в&nbsp;соответствии с&nbsp;Федеральным законом
                                    от&nbsp;27.07.2006&nbsp;года №152&#8209;ФЗ "О&nbsp;персональных данных",
                                    на&nbsp;условиях и&nbsp;для&nbsp;целей, определённых
                                    в&nbsp;Согласии на&nbsp;обработку персональных данных.
                                </label>
                            </div>
                        </form>

                    </div>

                </div>

                <div class="ks"></div>

            </div>

        </div>

        <div class="section-info-item-form">
            узнать подробности
        </div>

    </section>

    <!--===================================================== section advantages -->
    <section class="section-advantages" id="advantages">
        <div class="container">

            <h2>
                <span class="big">08</span>
                Приятные дополнения<br>
                с открытием офиса в <span class="accent-ks">KS</span>enos
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
                        <div class="title-item">Благоприятная атмосфера</div>
                        <div class="decription-item">
                            На острове Вы сможете зарядиться
                            энергией морского воздуха, открыть новые гастрономические вкусы и познакомиться
                            с приятными людьми.
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
                        <div class="title-item">Растущая экономика</div>
                        <div class="decription-item">
                            За последние полтора года экономика
                            Кипра набирает темпы. На острове идёт
                            активное строительство жилых комплексов
                            и коммерческой недвижимости.
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
                        <div class="title-item">Развитая инфраструктура</div>
                        <div class="decription-item">
                            Район, в котором расположен комплекс, отличается развитой инфраструктурой. В нём Вы найдёте место для шоппинга, развлечений и отдыха.
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
                            Лояльность для иностранных
                            граждан
                        </div>
                        <div class="decription-item">
                            Правительство Кипра предлагает все
                            необходимые условия для иностранных предпринимателей, владеющих
                            недвижимостью.
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
                        <div class="title-item">Партнеры</div>
                        <div class="decription-item">
                            На острове Вы сможете зарядиться
                            энергией морского воздуха, открыть новые гастрономические вкусы и познакомиться
                            с приятными людьми.
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
                        <div class="title-item">Освобождение доходов от налогов</div>
                        <div class="decription-item">
                            За последние полтора года экономика
                            Кипра набирает темпы. На острове идёт
                            активное строительство жилых комплексов
                            и коммерческой недвижимости.
                        </div>

                    </div>

                </div>

                <div class="wrapper-btn align-center">
                    <a href="#" class="btn btn-loyalty open-phone-modal" data-extra="4">
                        Узнать больше о лояльности
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
                <div class="title-item">Благоприятная атмосфера</div>
                <div class="decription-item">
                    На острове Вы сможете зарядиться
                    энергией морского воздуха, открыть новые гастрономические вкусы и познакомиться
                    с приятными людьми.
                </div>

            </div>

            <!-- single item -->
            <div class="item-advantages-sect light">

                <span class="number">02</span>
                <div class="wrapper-svg">
                    <?php include('svg/economy.svg'); ?>
                </div>
                <div class="title-item">Растущая экономика</div>
                <div class="decription-item">
                    За последние полтора года экономика
                    Кипра набирает темпы. На острове идёт
                    активное строительство жилых комплексов
                    и коммерческой недвижимости.
                </div>

            </div>

            <!-- single item -->
            <div class="item-advantages-sect light mob-dark">

                <span class="number">03</span>
                <div class="wrapper-svg">
                    <?php include('svg/infrastructure.svg'); ?>
                </div>
                <div class="title-item">Развитая инфраструктура</div>
                <div class="decription-item">
                    Район, в котором расположен комплекс, отличается развитой инфраструктурой. В нём Вы найдёте место для шоппинга, развлечений и отдыха.
                </div>

            </div>

            <!-- single item -->
            <div class="item-advantages-sect mob-light">

                <span class="number">04</span>
                <div class="wrapper-svg">
                    <?php include('svg/loyalty.svg'); ?>
                </div>
                <div class="title-item">
                    Лояльность для иностранных
                    граждан
                </div>
                <div class="decription-item">
                    Правительство Кипра предлагает все
                    необходимые условия для иностранных предпринимателей, владеющих
                    недвижимостью.
                </div>

            </div>

            <!-- single item -->
            <div class="item-advantages-sect">

                <span class="number">05</span>
                <div class="wrapper-svg">
                    <?php include('svg/partner.svg'); ?>
                </div>
                <div class="title-item">Партнеры</div>
                <div class="decription-item">
                    В строительстве принимает участие большое количество известных партнёров, которые помогают усовершенствовать комплекс в каждой области.
                </div>

            </div>

            <!-- single item -->
            <div class="item-advantages-sect light">

                <span class="number">06</span>
                <div class="wrapper-svg">
                    <?php include('svg/nalog.svg'); ?>
                </div>
                <div class="title-item">Освобождение доходов от налогов</div>
                <div class="decription-item">
                    Ещё одним специальным преимуществом на Кипре для иностранных предпринимателей является льготный режим, освобождающий от уплаты налогов.
                </div>

            </div>

            <div class="wrapper-btn align-center">
                <a href="#" class="btn btn-loyalty">
                    Узнать больше о лояльности
                    <span class="top-border"></span>
                    <span class="bottom-border"></span>
                </a>
            </div>

        </div>

        <div class="section-info-item-advantages">
            Преимущества офиса
        </div>

    </section>

    <!--===================================================== section income -->
    <section class="section-income light" id="income">
        <div class="container">

            <h2>
                <span class="big">09</span>
                На Кипре Ваш налог на прибыль<br>
                составит 12.5%
            </h2>

            <div class="subtitle-h2">
                Какие доходы освобождаются<br>
                от налогообложения?
            </div>

            <div class="row">

                <div class="col-5-12 col-xs-1">

                    <div class="item-income i-1 cre-animate" data-animation="slide-in-from-left"
                         data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                        <span>01</span>
                        <div class="title-item">
                            Доход от продажи<br>
                            ценных бумаг
                        </div>
                    </div>

                    <div class="item-income i-3 cre-animate" data-animation="slide-in-from-left"
                         data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOut">

                        <span class="hidden-xs">03</span>
                        <span class="visible-xs">02</span>
                        <div class="title-item">Процентный доход</div>

                        <div class="description-item">
                            возникающий не в результате обычной
                            (или тесно связанной с обычной) деятельности компании
                        </div>
                        <ul class="income-list">
                            <li>
                                <a href="#" class="open-info-modal" data-id="1">Судоходные компании</a>
                            </li>
                            <li>
                                <a href="#" class="open-info-modal" data-id="2">Судовладельцы</a>
                            </li>
                            <li>
                                <a href="#" class="open-info-modal" data-id="3">Фрахтователи</a>
                            </li>
                            <li>
                                <a href="#" class="open-info-modal" data-id="4">Страховые компании</a>
                            </li>
                            <li>
                                <a href="#"  class="open-info-modal" data-id="5">
                                    Компании, оказывающие услуги
                                    по управлению судами
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
                            Дивиденды
                        </div>
                        <div class="description-item">
                            Начиная с 1 января 2016 года - кроме тех дивидендов, которые вычитаются компанией-плательщиком дивидендов из налоговой базы по налогу на прибыль
                        </div>
                    </div>

                    <div class="item-income i-4 cre-animate" data-animation="slide-in-from-left"
                         data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">

                        <span>04</span>
                        <div class="title-item">
                            Доходы
                        </div>
                        <div class="description-item">
                            полученные от деятельности постоянного представительства за рубежом (при соблюдении определенных условий).
                        </div>
                    </div>

                    <div class="item-income cre-animate" data-animation="slide-in-from-left"
                         data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">

                        <span>05</span>
                        <div class="title-item">
                            Доходы в виде курсовых разниц
                        </div>
                        <div class="description-item">
                            за исключением курсовых разниц, относящихся
                            к торговле иностранной валютой или деривативам
                            на иностранную валюту
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
                Где будет расположен<br>
                комплекс <span class="accent-ks">KS</span>enos
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
                Наши партнеры
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
            компании
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
                            Узнайте подробности покупки
                            и аренды офиса в комплексе <span class="accent-ks">KS</span>enos
                        </h2>

                        <p class="sub-title">
                            Заполните форму и наш менеджер свяжется с Вами
                        </p>

                        <form method="post" class="send-form" autocomplete="off">
                            <div class="row">
                                <div class="col-1-2 col-xs-1">
                                    <div class="wrapper-input">
                                        <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">
                                        <?php include('svg/user-form.svg'); ?>
                                    </div>
                                </div>

                                <div class="col-1-2 col-xs-1">
                                    <div class="wrapper-input">
                                        <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">
                                        <?php include('svg/phone-form.svg'); ?>
                                    </div>
                                </div>

                                <div class="col-1-2 col-xs-1">
                                    <div class="wrapper-input">
                                        <input type="email" name="client_mail" class="client-mail" placeholder="Ваш e-mail">
                                        <img src="images/mail-form.png" class="mail-form hidden-xs" alt=" "/>
                                        <img src="images/mail-form-mob.png" class="mail-form visible-xs" alt=" "/>
                                    </div>
                                </div>

                                <div class="col-1-2 col-xs-1">
                                    <div class="btn-holder">
                                        <button type="submit" onclick="yaCounter48997670.reachGoal('detail-2');" class="btn">
                                            Заказать консультацию
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
                                    Нажимая кнопку "Заказать консультацию", я&nbsp;даю своё согласие на&nbsp;обработку
                                    моих персональных данных в&nbsp;соответствии с&nbsp;Федеральным законом
                                    от&nbsp;27.07.2006&nbsp;года №152&#8209;ФЗ "О&nbsp;персональных данных",
                                    на&nbsp;условиях и&nbsp;для&nbsp;целей, определённых
                                    в&nbsp;Согласии на&nbsp;обработку персональных данных.
                                </label>
                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </div>

        <div class="section-info-item-form-2">
            узнать подробности
        </div>

    </section>

    <!--===================================================== Footer -->
    <footer class="layout-footer light" id="layout-footer">

        <!-- logo -->
        <a href="#" class="logo si-jump">
            <img src="../images/ksenos-logo.png" alt=" ">
            <p>
                Flamelia Investments Ltd
                <span>
                    Торгово-коммерческий<br>
                    комплекс <span class="accent-ks">KS</span>enos
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
                                <span>Cyprus</span> <br>
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
                            Наверх
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
                            Следите за новостями<br>
                        о компании <span class="accent-ks">KS</span>enos
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="si-phone">
            <a href="tel:+35795593555" class="phone-link dark">+357 95 593 555 <span>(Кипр)</span></a>
            <a href="tel:+35725344555" class="phone-link dark">+357 25 344 555 <span>(Офис)</span></a>
            <a href="#" class="open-phone-modal consult-btn" data-extra="2">Заказать консультацию</a>
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

        Данный сайт использует технологию Cookies

    </div>

    <!-- menu btn -->
    <div class="show-menu">
        <span class="icon-sandwich"></span>
    </div>

    <div class="nav">
        <div class="wrapper-content">

            <ul class="language-change">
                <li class="active">
                    <a href="index.php">Rus</a>
                </li>
                <li>
                    <a href="../">Eng</a>
                </li>
                <li>
                    <a href="../gr">Gre</a>
                </li>
            </ul>

            <ul class="menu-nav">
                <li><a href="#heading" class="si-jump">Главная</a></li>
                <li><a href="#map" class="si-jump">Расположение</a></li>
                <li><a href="#video" class="si-jump">Видео о строительстве</a></li>
                <li><a href="#overview" class="si-jump">Как будет выглядеть</a></li>
                <li><a href="#panorama" class="si-jump">Панорамы</a></li>
                <li><a href="#technology" class="si-jump">Уникальность</a></li>
                <li><a href="#layout" class="si-jump">Генплан</a></li>
                <li><a href="#company" class="si-jump">Компании в комплексе</a></li>
                <li><a href="#advantages" class="si-jump">Дополнения</a></li>
                <li><a href="#income" class="si-jump">Налоги</a></li>
                <li><a href="#map" class="si-jump">Карта</a></li>
                <li><a href="#partner-2" class="si-jump">Партнеры</a></li>
                <li><a href="#layout-footer" class="si-jump">Контакты</a></li>
            </ul>

            <div class="si-phone nav-block">
                <a href="tel:+35795593555" class="phone-link dark">+357 95 593 555 <span>(Кипр)</span></a>
                <a href="tel:+35725344555" class="phone-link dark">+357 25 344 555 <span>(Офис)</span></a>
                <a href="#" class="open-phone-modal consult-btn" data-extra="4">Заказать консультацию</a>
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
                Спасибо!
            </div>

            <div class="success-time">
                Наш менеджер свяжется с вами в течение 15 минут
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
                Закажите консультацию
            </div>

            <form method="post" class="send-form" autocomplete="off">
                <div class="row">
                    <div class="col-1-2 col-xs-1">
                        <div class="wrapper-input">
                            <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">
                            <?php include('svg/user-form.svg'); ?>
                        </div>
                    </div>

                    <div class="col-1-2 col-xs-1">
                        <div class="wrapper-input">
                            <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">
                            <?php include('svg/phone-form.svg'); ?>
                        </div>
                    </div>

                    <div class="col-1-2 col-xs-1">
                        <div class="wrapper-input">
                            <input type="email" name="client_mail" class="client-mail" placeholder="Ваш e-mail">
                            <img src="images/mail-form.png" class="mail-form hidden-xs" alt=" "/>
                            <img src="images/mail-form-mob.png" class="mail-form visible-xs" alt=" "/>
                        </div>
                    </div>

                    <div class="col-1-2 col-xs-1">
                        <div class="btn-holder">
                            <button type="submit" onclick="yaCounter48997670.reachGoal('phone');" class="btn">
                                Позвоните мне
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
                        Нажимая кнопку "Позвоните мне", я&nbsp;даю своё согласие на&nbsp;обработку
                        моих персональных данных в&nbsp;соответствии с&nbsp;Федеральным законом
                        от&nbsp;27.07.2006&nbsp;года №152&#8209;ФЗ "О&nbsp;персональных данных",
                        на&nbsp;условиях и&nbsp;для&nbsp;целей, определённых
                        в&nbsp;Согласии на&nbsp;обработку персональных данных.
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
                Офисные помещения этажа 1
            </div>

            <div class="row row-xs-2">
                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Общая площадь этажа
                        </div>
                        <div class="number">395 м<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Офисные помещения
                        </div>
                        <div class="number">348 м<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Площадь общего пользования/Лобби
                        </div>
                        <div class="number">47 м<sup>2</sup></div>
                    </div>

				</div>
				
				<!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Парковочные места
                        </div>
                        <div class="number">To be scheduled</div>
                    </div>

                </div>
            </div>

            <div class="wrapper-plan-level">
                <a href="images/plan/1.jpg" class="plan-gallery" data-fancybox="plan-gallery">
                    <img src="images/plan/1.jpg" alt=" "/>
                    <span>Смотреть</span>
                </a>
            </div>

            <div class="modal-form-title">
                Интерьеры
            </div>

            <div class="row row-3">

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/1.jpg" data-fancybox="interior">
                        <img src="images/interior/1.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/2.jpg" data-fancybox="interior">
                        <img src="images/interior/2.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/3.jpg" data-fancybox="interior">
                        <img src="images/interior/3.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/4.jpg" data-fancybox="interior">
                        <img src="images/interior/4.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/5.jpg" data-fancybox="interior">
                        <img src="images/interior/5.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/6.jpg" data-fancybox="interior">
                        <img src="images/interior/6.jpg" alt=" "/>
                        <span>Смотреть</span>
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
                Офисные помещения этажа 2
            </div>

            <div class="row row-xs-2">
                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Общая площадь этажа
                        </div>
                        <div class="number">689 м<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Количество офисных помещений
                        </div>
                        <div class="number">10</div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Офис 1
                        </div>
                        <div class="number">280 м<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Инженерная площадь/Серверная
                        </div>
                        <div class="number">300 м<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Лобби
                        </div>
                        <div class="number">52 м<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Крытые веранды
                        </div>
                        <div class="number">57 м<sup>2</sup></div>
                    </div>

                </div>
            </div>

            <div class="wrapper-plan-level">
                <a href="images/plan/4.jpg" class="plan-gallery" data-fancybox="plan-gallery">
                    <img src="images/plan/4.jpg" alt=" "/>
                    <span>Смотреть</span>
                </a>
            </div>

            <div class="modal-form-title">
                Интерьеры
            </div>

            <div class="row row-3">

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/1.jpg" data-fancybox="interior2">
                        <img src="images/interior/1.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/2.jpg" data-fancybox="interior2">
                        <img src="images/interior/2.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/3.jpg" data-fancybox="interior2">
                        <img src="images/interior/3.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/4.jpg" data-fancybox="interior2">
                        <img src="images/interior/4.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/5.jpg" data-fancybox="interior2">
                        <img src="images/interior/5.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/6.jpg" data-fancybox="interior2">
                        <img src="images/interior/6.jpg" alt=" "/>
                        <span>Смотреть</span>
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
                Офисные помещения этажа 3
            </div>

            <div class="row row-xs-2">
                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Общая площадь этажа
                        </div>
                        <div class="number">691 м<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Количество офисных помещений
                        </div>
                        <div class="number">10</div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Офис 2
                        </div>
                        <div class="number">582 м<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Площади общего пользования/Лобби
                        </div>
                        <div class="number">52 м<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Крытые веранды
                        </div>
                        <div class="number">57 м<sup>2</sup></div>
                    </div>

                </div>

            </div>

            <div class="wrapper-plan-level">
                <a href="images/plan/5.jpg" class="plan-gallery" data-fancybox="plan-gallery">
                    <img src="images/plan/5.jpg" alt=" "/>
                    <span>Смотреть</span>
                </a>
            </div>

            <div class="modal-form-title">
                Интерьеры
            </div>

            <div class="row row-3">

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/1.jpg" data-fancybox="interior3">
                        <img src="images/interior/1.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/2.jpg" data-fancybox="interior3">
                        <img src="images/interior/2.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/3.jpg" data-fancybox="interior3">
                        <img src="images/interior/3.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/4.jpg" data-fancybox="interior3">
                        <img src="images/interior/4.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/5.jpg" data-fancybox="interior3">
                        <img src="images/interior/5.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/6.jpg" data-fancybox="interior3">
                        <img src="images/interior/6.jpg" alt=" "/>
                        <span>Смотреть</span>
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
                Офисные помещения этажа 4
            </div>

            <div class="row row-xs-2">
                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Общая площадь этажа
                        </div>
                        <div class="number">692 м<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Количество офисных помещений
                        </div>
                        <div class="number">10</div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Офис 3
                        </div>
                        <div class="number">583 м<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Площади общего пользования/Лобби
                        </div>
                        <div class="number">52 м<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Крытые веранды
                        </div>
                        <div class="number">57 м<sup>2</sup></div>
                    </div>

                </div>
            </div>

            <div class="wrapper-plan-level">
                <a href="images/plan/6.jpg" class="plan-gallery" data-fancybox="plan-gallery">
                    <img src="images/plan/6.jpg" alt=" "/>
                    <span>Смотреть</span>
                </a>
            </div>

            <div class="modal-form-title">
                Интерьеры
            </div>

            <div class="row row-3">

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/1.jpg" data-fancybox="interior4">
                        <img src="images/interior/1.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/2.jpg" data-fancybox="interior4">
                        <img src="images/interior/2.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/3.jpg" data-fancybox="interior4">
                        <img src="images/interior/3.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/4.jpg" data-fancybox="interior4">
                        <img src="images/interior/4.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/5.jpg" data-fancybox="interior4">
                        <img src="images/interior/5.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/6.jpg" data-fancybox="interior4">
                        <img src="images/interior/6.jpg" alt=" "/>
                        <span>Смотреть</span>
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
                Офисные помещения этажа 5
            </div>

            <div class="row row-xs-2">
                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Общая площадь этажа
                        </div>
                        <div class="number">727 м<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                           Офисные помещения
                        </div>
                        <div class="number">680</div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Площади общего пользования/Лобби
                        </div>
                        <div class="number">47 м<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Парковочные места
                        </div>
                        <div class="number">To be scheduled</div>
                    </div>

                </div>
            </div>

            <div class="wrapper-plan-level">
                <a href="images/plan/5.jpg" class="plan-gallery" data-fancybox="plan-gallery">
                    <img src="images/plan/5.jpg" alt=" "/>
                    <span>Смотреть</span>
                </a>
            </div>

            <div class="modal-form-title">
                Интерьеры
            </div>

            <div class="row row-3">

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/1.jpg" data-fancybox="interior5">
                        <img src="images/interior/1.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/2.jpg" data-fancybox="interior5">
                        <img src="images/interior/2.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/3.jpg" data-fancybox="interior5">
                        <img src="images/interior/3.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/4.jpg" data-fancybox="interior5">
                        <img src="images/interior/4.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/5.jpg" data-fancybox="interior5">
                        <img src="images/interior/5.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/6.jpg" data-fancybox="interior5">
                        <img src="images/interior/6.jpg" alt=" "/>
                        <span>Смотреть</span>
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
                Офисные помещения этажа 6-7
            </div>

            <div class="row row-xs-2">
                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Общая площадь этажа
                        </div>
                        <div class="number">1454 м<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Офисные помещения
                        </div>
                        <div class="number">680</div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Площади общего пользования/Лобби
                        </div>
                        <div class="number">47 м<sup>2</sup></div>
                    </div>

                </div>

                <!-- item -->
                <div class="col-1-4 col-xs-1-2">

                    <div class="item-office">
                        <div class="title">
                            Крытые веранды
                        </div>
                        <div class="number">348 м<sup>2</sup></div>
                    </div>

                </div>
            </div>

            <div class="wrapper-plan-level">
                <a href="images/plan/6.jpg" class="plan-gallery" data-fancybox="plan-gallery">
                    <img src="images/plan/6.jpg" alt=" "/>
                    <span>Смотреть</span>
                </a>
            </div>

            <div class="modal-form-title">
                Интерьеры
            </div>

            <div class="row row-3">

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/1.jpg" data-fancybox="interior6">
                        <img src="images/interior/1.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/2.jpg" data-fancybox="interior6">
                        <img src="images/interior/2.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/3.jpg" data-fancybox="interior6">
                        <img src="images/interior/3.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/4.jpg" data-fancybox="interior6">
                        <img src="images/interior/4.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/5.jpg" data-fancybox="interior6">
                        <img src="images/interior/5.jpg" alt=" "/>
                        <span>Смотреть</span>
                    </a>

                </div>

                <!-- single item -->
                <div class="col-1-3 col-xs-1">

                    <a class="interior-item" href="images/interior/6.jpg" data-fancybox="interior6">
                        <img src="images/interior/6.jpg" alt=" "/>
                        <span>Смотреть</span>
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
                Судоходные компании
            </div>

            <div class="info-text-content">
                Законодательство о Торговом Судоходстве, полностью одобренное
                ЕС, предусматривает освобождение от всех прямых налогов
                и применение режима налогообложения, основанного на
                величине тоннажа судна («режим тоннажного налога», РТН), для
                судовладельцев, фрахтователей и компаний, оказывающих услуги
                по управлению судами содружества (т.е. судами под флагом страны
                - участницы ЕС или страны, входящей в Европейскую
                Экономическую Зону (ЕЭЗ)), а также иностранными судами
                (при соблюдении определенных условий), при осуществлении
                подпадающей под действие Закона деятельности.
            </div>

            <div class="info-text-content">
                В соответствии с Законом, иностранные суда подпадают под
                действие РТН при условии, что флот состоит не менее чем на
                60% из судов ЕС/ЕЭЗ. Даже если данное условие не выполняется,
                иностранные суда по-прежнему могут подпадать под действие этого
                Закона при соблюдении определенных условий. Законодательство
                включает в себя правило “все или ничего”, согласно которому,
                если судовладелец / фрахтователь / управляющий судами группы
                решает применять РТН, все другие судовладельцы / фрахтователи /
                управляющие судами соответствующей группы должны применять
                такой же режим. Заработная плата офицеров и судовой команды на
                борту кипрского судна также освобождается от налогообложения.
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
                Судовладельцы
            </div>

            <div class="info-text-content">
                Освобождение от налогообложения распространяется на:
                <ul>
                    <li>прибыль, полученную от использования / фрахтования судов;</li>
                    <li>процентный доход, относящийся к оборотным средствам компании;</li>
                    <li>прибыль от продажи судов, соответствующих определённым условиям;</li>
                    <li>дивиденды, выплачиваемые из перечисленных выше видов прибыли на всех уровнях их распределения;</li>
                    <li>прибыль от продажи акций компании-владельца судов ираспределение такой прибыли;</li>
                </ul>
            </div>

            <div class="info-text-content">
                Данная льгота также применяется к фрахтователю (на условиях бербоут-чартера) судна под флагом Кипра при параллельной регистрации.
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
                Фрахтователи
            </div>

            <div class="info-text-content">
                Освобождение от налогообложения распространяется на:
                <ul>
                    <li>прибыль, полученную от использования зафрахтованных судов;</li>
                    <li>процентный доход, относящийся к оборотным средствам компании;</li>
                    <li>дивиденды, выплачиваемые из перечисленных выше видов прибыли на всех уровнях их распределения;</li>
                </ul>
            </div>

            <div class="info-text-content">
                Закон предоставляет освобождение при условии, что РТН
                применяется в отношении всех судов и выполняется условие
                к составу: не менее 25% (10% - при выполнении определенных
                условий) от чистой вместимости судов принадлежит фрахтователю
                на праве собственности или фрахтуется на условиях бербоутчартера.
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
                Компании, оказывающие услуги по управлению судами
            </div>

            <div class="info-text-content">
                Освобождение от налогообложения распространяется на:
                <ul>
                    <li>прибыль от технического управления судами и/или крюинга;</li>
                    <li>дивиденды, выплачиваемые из данной прибыли на всех уровнях их распределения;</li>
                    <li>процентный доход, относящийся к оборотным средствам компании;</li>
                </ul>
            </div>

            <div class="info-text-content">
                Для применения РТН компании, управляющие судами, должны
                соответствовать следующим дополнительным требованиям:
                <ul>
                    <li>Компания должна иметь на Кипре полностью оборудованный офис и штат квалифицированных сотрудников, достаточный для осуществления деятельности компании;</li>
                    <li>не менее 51% от общего числа берегового персонала должны быть гражданами ЕС/ЕЭЗ;</li>
                    <li>не менее 2/3 от общего тоннажа груза под управлением должно управляться на территории ЕС/ЕЭЗ (любое превышение 1/3 от общего тоннажа груза будет облагаться налогом на прибыль предприятий).;</li>
                </ul>
            </div>

            <div class="info-text-content">
                Применение РТН является обязательным для владельцев судов
                под флагом Кипра и добровольным для владельцев судов не под
                флагом Кипра, фрахтователей и компаний, оказывающих услуги по
                управлению судами. Лица, воспользовавшиеся правом применения
                РТН, должны в дальнейшем последовательно применять РТН
                в течение периода не менее 10 лет, если только они не имели
                веские причины прекратить применение РТН, например, в случае
                ликвидации их судов и прекращения их деятельности.
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
                Страховые компании
            </div>

            <div class="info-text-content">
                Порядок налогообложения прибыли страховых компаний
                аналогичен порядку налогообложения иных компаний, за
                исключением случая, когда налог на прибыль предприятий,
                уплачиваемый компанией, занимающейся страхованием жизни,
                составляет менее 1,5% от суммы валовой премии. В данном
                случае разница между фактически исчисленным налогом на
                прибыль предприятий и 1,5% от суммы валовой премии подлежит
                перечислению в бюджет Кипра в качестве дополнительного налога
                на прибыль.
            </div>

        </div>
    </div>

    <!--============================================== text modal 1 -->
    <div class="si-modal text-modal text-modal-1">
        <a href="#" class="si-close"></a>

        <div class="modal-container">

            <div class="modal-form-title align-center">
                Согласие на обработку персональных данных
            </div>

            <div class="modal-text-block">
                <p>
                    Настоящим в&nbsp;соответствии с&nbsp;Федеральным законом №152&#8209;ФЗ
                    «О&nbsp;персональных данных» от&nbsp;27.07.2006 года свободно, своей волей и&nbsp;в&nbsp;своём
                    интересе выражаю своё безусловное согласие на&nbsp;обработку моих персональных данных
                    Flamelia Investments Ltd,
                    зарегистрированным в&nbsp;соответствии с&nbsp;законодательством&nbsp;РФ по&nbsp;адресу:
                    Россия, Москв, 109147, Марксисткая ул. № 34
                    (далее по&nbsp;тексту&nbsp;- Оператор).
                </p>

                <p>
                    Персональные данные&nbsp;- любая информация, относящаяся к&nbsp;определённому
                    или&nbsp;определяемому на&nbsp;основании такой информации физическому лицу.
                </p>

                <p>
                    Настоящее Согласие выдано мною на&nbsp;обработку следующих персональных данных:
                </p>

                <ul class="marked">
                    <li>
                        Имя;
                    </li>
                    <li>
                        Телефон;
                    </li>
                    <li>
                        E-mail;
                    </li>
                    <li>
                        Комментарий.
                    </li>
                </ul>

                <p>
                    Согласие дано Оператору для&nbsp;совершения следующих действий с&nbsp;моими персональными
                    данными с&nbsp;использованием средств автоматизации и/или&nbsp;без&nbsp;использования таких
                    средств: сбор, систематизация, накопление, хранение, уточнение (обновление, изменение),
                    использование, обезличивание, передача третьим лицам для&nbsp;указанных ниже целей,
                    а&nbsp;также осуществление любых иных действий, предусмотренных действующим
                    законодательством&nbsp;РФ, как&nbsp;неавтоматизированными, так&nbsp;и&nbsp;автоматизированными
                    способами.
                </p>

                <p>
                    Данное согласие даётся Оператору и&nbsp;третьему лицу(&#8209;ам)
                    ТРЕТЬИ ЛИЦА
                    для&nbsp;обработки моих персональных данных в&nbsp;следующих целях:
                </p>

                <ul class="marked">
                    <li>
                        предоставление мне услуг/работ;
                    </li>
                    <li>
                        направление в&nbsp;мой адрес уведомлений, касающихся предоставляемых услуг/работ;
                    </li>
                    <li>
                        подготовка и&nbsp;направление ответов/коммерческих предложений на&nbsp;мои запросы;
                    </li>
                    <li>
                        направление в&nbsp;мой адрес информации, в&nbsp;том числе рекламной,
                        о&nbsp;мероприятиях/товарах/услугах/работах Оператора.
                    </li>
                </ul>

                <p>
                    Настоящее согласие действует до&nbsp;момента его&nbsp;отзыва путём направления соответствующего
                    уведомления на&nbsp;электронный адрес
                    <a href="mailto:">ЕМЕЙЛ</a>.
                    В&nbsp;случае отзыва мною согласия на&nbsp;обработку персональных данных Оператор вправе
                    продолжить обработку персональных данных без&nbsp;моего согласия при&nbsp;наличии оснований,
                    указанных в&nbsp;пунктах 2&#8209;11 части&nbsp;1 статьи&nbsp;6, части&nbsp;2 статьи&nbsp;10
                    и&nbsp;части&nbsp;2 статьи&nbsp;11 Федерального закона №152&#8209;ФЗ
                    «О&nbsp;персональных данных» от&nbsp;26.06.2006&nbsp;г.
                </p>
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
<script src="js/plugins-all.js"></script>
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