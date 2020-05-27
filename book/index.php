<?php

require('logincheck.php');
require('db.php');
?>
    
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CBC Welcome!</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="site-header">
        <div class="header-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-10 col-lg-4">
                        <h1 class="site-branding flex">
                            <a href="#">Chengdu Bus Company</a>
                        </h1>
                    </div>

                    <div class="col-2 col-lg-8">
                        <nav class="site-navigation">
                            <div class="hamburger-menu d-lg-none">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div><!-- .hamburger-menu -->

                            <ul>
                                <li><a href="index.php">HOME</a></li>
                                <li><a href="elements.php">Top Place</a></li>
                                <li><a href="../ticket/booking.php">Ticket</a></li>
                                <li><a href="../food/food.php">Food</a></li>
                                <li><a href="contact.php">CONTACT</a></li>
                            </ul><!-- flex -->
                        </nav><!-- .site-navigation -->
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- container-fluid -->
        </div><!-- header-bar -->
    </header><!-- .site-header -->

    <div class="hero-content">
        <div class="container">
            <div class="row">
                <div class="col-12 offset-lg-2 col-lg-10">
                    <div class="entry-header">
                        <h2>Start CBC!</h2>

                        <div class="entry-meta-date">
                            06.28.018
                        </div><!-- .entry-meta-date -->
                    </div><!-- .entry-header -->

                    <div class="countdown flex flex-wrap justify-content-between" data-date="2018/06/06">
                        <div class="countdown-holder">
                            <div class="dday"></div>
                            <label>Days</label>
                        </div><!-- .countdown-holder -->

                        <div class="countdown-holder">
                            <div class="dhour"></div>
                            <label>Hours</label>
                        </div><!-- .countdown-holder -->

                        <div class="countdown-holder">
                            <div class="dmin"></div>
                            <label>Minutes</label>
                        </div><!-- .countdown-holder -->

                        <div class="countdown-holder">
                            <div class="dsec"></div>
                            <label>Seconds</label>
                        </div><!-- .countdown-holder -->
                    </div><!-- .countdown -->
                </div><!-- .col-12 -->
            </div><!-- row -->

            <div class="row">
                <div class="col-12 ">
                    <div class="entry-footer">
                        <a href="booking.php" class="btn">Buy Tickets</a>
                        <a href="#" class="btn current">See Routeline</a>
                    </div>
                </div>
            </div>
        </div><!-- .container -->
    </div><!-- .hero-content -->

    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="lineup-artists-headline">
                        <div class="entry-title">
                            <p>JUST THE BEST</p>
                            <h2>Top 3 Popular Places</h2>
                        </div><!-- entry-title -->

                        <div class="lineup-artists">
                            <div class="lineup-artists-wrap flex flex-wrap">
                                <figure class="featured-image">
                                    <a href="#"> <img src="images/black-chick.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <div class="lineup-artists-description">
                                    <div class="lineup-artists-description-container">
                                        <div class="entry-title">
                                            Chengdu-Jiuzhaigou
                                        </div><!-- entry-title -->

                                        <div class="entry-content">
                                            <p>Located in Nanping County, Aba Tibetan-Qiang Autonomous Prefecture, Jiuzhaigou Ravine stretches 80 kilometer in one direction and takes up an area of more than 60,000 hectares.</p>
                                        </div><!-- entry-content -->

                                        <div class="box-link">
                                            <a href=""><img src="images/box.jpg" alt=""></a>
                                        </div><!-- box-link -->
                                    </div><!-- lineup-artists-description-container -->
                                </div><!-- lineup-artists-description -->
                            </div><!-- lineup-artists-wrap -->

                            <div class="lineup-artists-wrap flex flex-wrap">
                                <div class="lineup-artists-description">
                                    <figure class="featured-image d-md-none">
                                        <a href="#"> <img src="images/mathew-kane.jpg" alt=""> </a>
                                    </figure><!-- featured-image -->

                                    <div class="lineup-artists-description-container">
                                        <div class="entry-title">
                                            Chengdu-Leshan
                                        </div><!-- entry-title -->

                                        <div class="entry-content">
                                            <p>Leshan is a prefecture level city located at the confluence of the Dadu Qingyi and Min rivers in Sichuan Province. </p>
                                        </div><!-- entry-content -->

                                        <div class="box-link">
                                            <a href="#"><img src="images/box.jpg" alt=""></a>
                                        </div><!-- box-link -->
                                    </div><!-- lineup-artists-description-container -->
                                </div><!-- lineup-artists-description -->

                                <figure class="featured-image d-none d-md-block">
                                    <a href="#"> <img src="images/mathew-kane.jpg" alt=""> </a>
                                </figure><!-- featured-image -->
                            </div><!-- lineup-artists-wrap -->

                            <div class="lineup-artists-wrap flex flex-wrap">
                                <figure class="featured-image">
                                    <a href="#"> <img src="images/eric-ward.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <div class="lineup-artists-description">
                                    <div class="lineup-artists-description-container">
                                        <div class="entry-title">
                                            Chengdu-Meishan
                                        </div><!-- entry-title -->

                                        <div class="entry-content">
                                            <p>Quisque at erat eu libero consequat tempus. Quisque mole stie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum. </p>
                                        </div><!-- entry-content -->

                                        <div class="box-link">
                                            <a href="#"> <img src="images/box.jpg" alt=""></a>
                                        </div><!-- box-link -->
                                    </div><!-- lineup-artists-description-container -->
                                </div><!-- lineup-artists-description -->
                            </div><!-- lineup-artists-wrap -->
                        </div><!-- lineup-artists -->
                    </div><!-- lineup-artists-headline -->
                </div><!-- col-12 -->
            </div><!-- row -->
            <div class="tlinks">Collect from <a href="http://www.cbc.com/" >CBC</a></div>

            <div class="row">
                <div class="col-12">
                    <div class="the-complete-lineup">
                        <div class="entry-title">
                            <p>JUST THE BEST</p>
                            <h2>Travel Routeline</h2>
                        </div><!-- entry-title -->

                        <div class="row the-complete-lineup-artists">
                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="images/image-1.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Suiling-Yaan</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="images/image-2.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Guangyuan-Deyang</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="images/image-3.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Chengdu-Mianyang</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="images/image-4.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Mianyang-Ziyang</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="images/image-5.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Chengdu-Chongqing</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="images/image-6.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Neijiang-Leshan</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="images/image-7.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Neijiang-Chongqing</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="images/image-8.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Chengdu-Neijiang</h2>
                            </div><!-- artist-single -->
                        </div><!-- the-complete-lineup-artists -->

                        <div class="row justify-content-center">
                            <div class="see-complete-lineup">
                                <div class="entry-footer">
                                    <a href="#" class="btn">See all lineup</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- the-complete-lineup -->
                </div><!-- col-12 -->
            </div><!-- row -->
        </div><!-- container -->

        <div class="homepage-next-events">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="entry-title">
                            <p>JUST THE BEST</p>
                            <h2>Our Next Events</h2>
                        </div><!-- entry-title -->
                    </div><!-- col-12 -->
                </div><!-- row -->
            </div><!-- container -->

            <div class="next-event-slider-wrap">
                <div class="swiper-container next-event-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="images/next-event-1.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure><!-- featured-image -->
                            </div><!-- next-event-content -->
                        </div><!-- swiper-slide" -->

                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="images/next-event-2.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure><!-- featured-image -->
                            </div><!-- next-event-content -->
                        </div><!-- swiper-slide" -->

                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="images/next-event-3.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure><!-- featured-image -->
                            </div><!-- next-event-content -->
                        </div><!-- swiper-slide" -->

                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="images/next-event-1.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure><!-- featured-image -->
                            </div><!-- next-event-content -->
                        </div><!-- swiper-slide" -->

                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="images/next-event-2.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure><!-- featured-image -->
                            </div><!-- next-event-content -->
                        </div><!-- swiper-slide" -->

                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="images/next-event-3.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure><!-- featured-image -->
                            </div><!-- next-event-content -->
                        </div><!-- swiper-slide" -->
                    </div><!-- .swiper-wrapper -->
                </div><!-- .swiper-container -->

                <div class="swiper-button-next">
                    <img src="images/button.png" alt="">
                </div><!-- .slider-button -->
            </div><!-- .next-event-slider-wrap -->
        </div><!-- homepage-next-events -->

        <div class="home-page-last-news">
            <div class="container">
                <div class="header">
                    <div class="entry-title">
                        <p>JUST THE BEST</p>
                        <h2>Our Last News</h2>
                    </div><!-- entry-title -->
                </div><!-- header -->

                <div class="home-page-last-news-wrap">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <figure class="featured-image">
                                <a href="#"> <img src="images/news-image-1.jpg" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                            <div class="box-link-date">
                                <a href="#">03.12.18</a>
                            </div>

                            <div class="content-wrapper">
                                <div class="entry-content">
                                    <div class="entry-header">
                                        <h2><a href="#">10 Festival Tips</a></h2>
                                    </div><!-- entry-header -->

                                    <div class="entry-meta">
                                        <span class="author-name"><a href="#"> By James Williams</a></span>
                                        <span class="space">|</span>
                                        <span class="comments-count"><a href="#">3 comments</a></span>
                                    </div><!-- entry-meta -->

                                    <div class="entry-description">
                                        <p>Quisque at erat eu libero consequat tempus.
                                            Quisque mole stie convallis tempus.
                                            Ut semper purus metus, a euismod sapien sodales ac.
                                            Duis viverra eleifend fermentum.</p>
                                    </div><!-- entry-description -->
                                </div><!-- entry-content -->
                            </div><!-- content-wrapper -->
                        </div><!-- .col-6 -->

                        <div class="col-12 col-md-6">
                            <figure class="featured-image">
                                <a href="#"> <img src="images/news-image-1.jpg" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                            <div class="box-link-date">
                                <a href="">03.12.18</a>
                            </div>

                            <div class="content-wrapper">
                                <div class="entry-content">
                                    <div class="entry-header">
                                        <h2><a href="#">New event calendar for this year</a></h2>
                                    </div><!-- entry-header -->

                                    <div class="entry-meta">
                                        <span class="author-name"><a href="#">By James Williams</a></span>
                                        <span class="space">|</span>
                                        <span class="comments-count"><a href="#">3 comments</a></span>
                                    </div><!-- entry-meta -->

                                    <div class="entry-description">
                                        <p>Quisque at erat eu libero consequat tempus.
                                            Quisque mole stie convallis tempus.
                                            Ut semper purus metus, a euismod sapien sodales ac.
                                            Duis viverra eleifend fermentum.</p>
                                    </div><!-- entry-description -->
                                </div><!-- entry-content -->
                            </div><!-- .content-wrapper -->
                        </div><!-- col-6 -->
                    </div><!-- row -->
                </div><!-- home-page-last-news-wrap -->
            </div><!-- container -->
        </div><!-- home-page-last-news -->
    </div>

    <footer class="site-footer">
        <div class="footer-cover-title flex justify-content-center align-items-center">
            <h2>CBC</h2>
        </div><!-- .site-footer -->

        <div class="footer-content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="entry-title">
                            <a href="#">Chengdu Bus Company</a>
                        </div><!-- entry-title -->

                        <div class="entry-mail">
                            <a href="#">SAYHELLO@CBC.COM</a>
                        </div><!-- .entry-mail -->

                        <div class="copyright-info">
                            
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | by l5k1C <a href="http://www.cbc.com/" target="_blank" title="CBC">CBC</a> - Collect from <a href="http://www.cbc.com/" title="CBC" target="_blank">CBC</a>

                        </div><!-- copyright-info -->

                        <div class="footer-social">
                            <ul class="flex justify-content-center align-items-center">
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div><!-- footer-social -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- footer-content-wrapper -->
    </footer><!-- site-footer -->

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
</body>
</html>