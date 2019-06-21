<? defined("CHECK") or (header('Location: /') && exit); ?>

<?
include "include/base.php";

define("PAGE", Pages::HOME)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dristi 2.0</title>

    <link rel="shortcut icon" href="favicon.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="theme-color" content="#000000" />
    <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />

    <meta name="description" content="The Vision beyond imagination" />
    <meta name="image" content="https://dristi.keckist.edu.np/social.jpg" />

    <!-- {/* Item prop */} -->
    <meta itemprop="name" content="Dristi2.0" />
    <meta itemprop="description" content="The Vision beyond imagination" />
    <meta itemprop="image" content="https://dristi.keckist.edu.np/social.jpg" />

    <!-- {/* Twitter */} -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Dristi2.0" />
    <meta name="twitter:description" content="The Vision beyond imagination" />
    <meta name="twitter:site" content="@dristi" />
    <meta name="twitter:creator" content="@dristi" />
    <meta name="twitter:image:src" content="https://dristi.keckist.edu.np/social.jpg" />
    <!-- {/* Twitter */} -->

    <!-- {/* Facebook */} -->
    <meta property="og:title" content="Dristi2.0" />
    <meta property="og:description" content="The Vision beyond imagination" />
    <meta property="og:image" content="https://dristi.keckist.edu.np/social.jpg" />
    <meta property="og:url" content="https://dristi.keckist.edu.np" />
    <meta property="og:site_name" content="Dristi2.0" />
    <meta property="og:type" content="website" />
    <!-- {/* Facebook */} -->

    <!-- {/* Styles */} -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- {/* Styles */} -->
</head>

<body>

    <? include 'include/nav.php'; ?>


    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-xl-10 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" style="font-weight: 500;" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span>Dristi 2.0</span> <br> The
                        Vision beyond imagination </h1>
                    <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">July 5-7, 2019.
                        <b>Kathmandu Enginnering College </b>, Kalimati</p>
                    <div id="timer" class="d-flex mb-3">
                        <div class="time" id="days"></div>
                        <div class="time pl-4" id="hours"></div>
                        <div class="time pl-4" id="minutes"></div>
                        <div class="time pl-4" id="seconds"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- events start -->


    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row mb-4 justify-content-center">
                <div class="text-center heading-section ftco-animate">
                    <span class="subheading"></span>
                    <h2 class="mb-4">
                        <span>Our</span>
                        Events</h2>
                </div>
            </div>
            <div class="row d-flex">

                <!-- event item start -->
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <!-- here goes the photo -->
                        <a href="events/hackathon" class="block-20" style="background-image: url('images/hackathon.jpg');">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <div class="d-flex align-items-center pt-2 mb-4">
                                <div class="one">
                                    <!-- event name -->
                                    <span style="font-size: 30px;
                                    font-weight: 600 !important;" class="day">Hackathon</span>
                                </div>
                            </div>
                            <!-- short info -->
                            <p style="color:#343a40;">A Hackathon is an event where programmers meet to do collaborative computer programming.
                                Hackathons provide a venue for ...</p>
                            <a href="events/hackathon">
                                <input type="submit" style="cursor: pointer;" class="button btn-send disabled" value="More Info">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- event item end -->

                <!-- event item start -->
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <!-- here goes the photo -->
                        <a href="events/software-exhibition" class="block-20" style="background-image: url('images/image_1.jpg');">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <div class="d-flex align-items-center pt-2 mb-4">
                                <div class="one">
                                    <!-- event name -->
                                    <span style="font-size: 30px;
                                        font-weight: 600 !important;" class="day">Software Exhibition</span>
                                </div>
                            </div>
                            <!-- short info -->
                            <p style="color:#343a40;">Software events often act as a medium to connect the ideas of students into
                                a practical solution. It allows the students to ...
                            </p>
                            <a href="events/software-exhibition">
                                <input type="submit" style="cursor: pointer;" class="button btn-send disabled" value="More Info">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- event item end -->

                <!-- event item start -->
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <!-- here goes the photo -->
                        <a href="events/code-camp" class="block-20" style="background-image: url('images/image_1.jpg');">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <div class="d-flex align-items-center pt-2 mb-4">
                                <div class="one">
                                    <!-- event name -->
                                    <span style="font-size: 30px;
                                        font-weight: 600 !important;" class="day">Code Camp</span>
                                </div>
                            </div>
                            <!-- short info -->
                            <p style="color:#343a40;">A Code Camp is an event where programmers meet to do collaborative computer programming.
                                It provides a venue for self-expression and creativity through technology. People with technical backgrounds ...</p>
                            <a href="events/codeCamp.html">
                                <input type="submit" style="cursor: pointer;" class="button btn-send disabled" value="More Info">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- event item end -->

                <!-- event item start -->
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <!-- here goes the photo -->
                        <a href="events/software-exhibition" class="block-20" style="background-image: url('images/softwareExhibition.jpg');">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <div class="d-flex align-items-center pt-2 mb-4">
                                <div class="one">
                                    <!-- event name -->
                                    <span style="font-size: 30px;
                                      font-weight: 600 !important;" class="day">Kurukshetra</span>
                                </div>
                            </div>
                            <!-- short info -->
                            <p style="color:#343a40;">Kurukshetra is an event with objective of building a manual war robot that should fight against other robots and push it out of the arena or destroy the bot.</p>
                            <a href="events/kurukshetra">
                                <input type="submit" style="cursor: pointer;" class="button btn-send disabled" value="More Info">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- event item end -->

                <div style="width:100%;" class="row">
                    <div class="col text-center">
                        <div class="block-27">
                            <a href="/events">
                                <input type="submit" style="cursor: pointer;" class="button btn-send disabled" value="All Events">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <section class="ftco-counter img" id="section-counter">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 d-flex">
                    <div class="img d-flex align-self-stretch" style="background-size: contain; background-image:url(images/about.png);"></div>
                </div>
                <div class="col-md-6 pl-md-5 py-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <span class="subheading">Good To Know</span>
                            <h2 class="mb-4"><span>Fun</span> Facts</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center py-4 bg-light mb-4">
                                <div class="text">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="flaticon-guest"></span>
                                    </div>
                                    <strong class="number" data-number="50">0</strong> <strong class="number">+</strong>
                                    <span>Participants</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center py-4 bg-light mb-4">
                                <div class="text">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="flaticon-handshake"></span>
                                    </div>
                                    <strong class="number" data-number="10">0</strong>
                                    <span>Clubs and Associations</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center py-4 bg-light mb-4">
                                <div class="text">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="flaticon-chair"></span>
                                    </div>
                                    <strong class="number" data-number="15">0</strong>
                                    <span>Events</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center py-4 bg-light mb-4">
                                <div class="text">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="flaticon-world"></span>
                                    </div>
                                    <strong class="number" data-number="8">0</strong> <strong class="number">+</strong>
                                    <span>Domains</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Pre</span>
                    <h2 class="mb-4"><span>Event</span> Schedule</h2>
                </div>
            </div>
            <div class="ftco-search">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap">
                        <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">First Event
                                <span>29 Jun. 2019</span></a>

                            <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Day 02 <span>22 Dec.
                                    2019</span></a>

                            <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Day 03 <span>23 Dec.
                                    2019</span></a>

                            <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Day 04 <span>24 Dec.
                                    2019</span></a>

                        </div>
                    </div>
                    <div class="col-md-12 tab-wrap">

                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                                <div class="speaker-wrap ftco-animate d-flex">
                                    <div class="img speaker-img" style="background-image: url(images/person_1.jpg);">
                                    </div>
                                    <div class="text pl-md-5">
                                        <span class="time">12:00 PM - 4:00 PM</span>
                                        <h2><a href="#">Kshitiz: Learn What’s Next</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the
                                            necessary regelialia. It is a paradisematic country, in which roasted parts
                                            of sentences fly into your mouth.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                                <div class="speaker-wrap ftco-animate d-flex">
                                    <div class="img speaker-img" style="background-image: url(images/person_1.jpg);">
                                    </div>
                                    <div class="text pl-md-5">
                                        <span class="time">12:00 PM - 4:00 PM</span>
                                        <h2><a href="#">Kshitiz: Learn What’s Next</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the
                                            necessary regelialia. It is a paradisematic country, in which roasted parts
                                            of sentences fly into your mouth.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                                <div class="speaker-wrap ftco-animate d-flex">
                                    <div class="img speaker-img" style="background-image: url(images/person_1.jpg);">
                                    </div>
                                    <div class="text pl-md-5">
                                        <span class="time">12:00 PM - 4:00 PM</span>
                                        <h2><a href="#">Kshitiz: Learn What’s Next</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the
                                            necessary regelialia. It is a paradisematic country, in which roasted parts
                                            of sentences fly into your mouth.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
                                <div class="speaker-wrap ftco-animate d-flex">
                                    <div class="img speaker-img" style="background-image: url(images/person_1.jpg);">
                                    </div>
                                    <div class="text pl-md-5">
                                        <span class="time">08: - 10:00</span>
                                        <h2><a href="#">Introduction to Wordpress 5.0</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the
                                            necessary regelialia. It is a paradisematic country, in which roasted parts
                                            of sentences fly into your mouth.</p>
                                        <h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-flex">
                                    <div class="speaker-wrap ftco-animate d-flex">
                                        <div class="img speaker-img" style="background-image: url(images/person_1.jpg);">
                                        </div>
                                        <div class="text pl-md-5">
                                            <span class="time">12:00 PM - 4:00 PM</span>
                                            <h2><a href="#">Kshitiz: Learn What’s Next</a></h2>
                                            <p>A small river named Duden flows by their place and supplies it with the
                                                necessary regelialia. It is a paradisematic country, in which roasted
                                                parts
                                                of sentences fly into your mouth.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-flex">
                                    <div class="speaker-wrap ftco-animate d-flex">
                                        <div class="img speaker-img" style="background-image: url(images/person_1.jpg);">
                                        </div>
                                        <div class="text pl-md-5">
                                            <span class="time">12:00 PM - 4:00 PM</span>
                                            <h2><a href="#">Kshitiz: Learn What’s Next</a></h2>
                                            <p>A small river named Duden flows by their place and supplies it with the
                                                necessary regelialia. It is a paradisematic country, in which roasted
                                                parts
                                                of sentences fly into your mouth.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Main</span>
                    <h2 class="mb-4"><span>Event</span> Schedule</h2>
                </div>
            </div>
            <div class="ftco-search">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap">
                        <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Day 01
                                <span>21 Dec. 2019</span></a>

                            <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Day 02 <span>22 Dec.
                                    2019</span></a>

                            <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Day 03 <span>23 Dec.
                                    2019</span></a>

                            <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Day 04 <span>24 Dec.
                                    2019</span></a>

                        </div>
                    </div>
                    <div class="col-md-12 tab-wrap">

                        <div class="tab-content" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                                <div class="speaker-wrap ftco-animate d-flex">
                                    <div class="img speaker-img" style="background-image: url(images/person_1.jpg);">
                                    </div>
                                    <div class="text pl-md-5">
                                        <span class="time">08: - 10:00</span>
                                        <h2><a href="#">Introduction to Wordpress 5.0</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the
                                            necessary regelialia. It is a paradisematic country, in which roasted parts
                                            of sentences fly into your mouth.</p>
                                        <h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-flex">
                                    <div class="img speaker-img" style="background-image: url(images/person_2.jpg);">
                                    </div>
                                    <div class="text pl-md-5">
                                        <span class="time">08: - 10:00</span>
                                        <h2><a href="#">Best Practices For Programming WordPress</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the
                                            necessary regelialia. It is a paradisematic country, in which roasted parts
                                            of sentences fly into your mouth.</p>
                                        <h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-flex">
                                    <div class="img speaker-img" style="background-image: url(images/person_3.jpg);">
                                    </div>
                                    <div class="text pl-md-5">
                                        <span class="time">08: - 10:00</span>
                                        <h2><a href="#">Web Performance For Third Party Scripts</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the
                                            necessary regelialia. It is a paradisematic country, in which roasted parts
                                            of sentences fly into your mouth.</p>
                                        <h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                                <div class="speaker-wrap ftco-animate d-flex">
                                    <div class="img speaker-img" style="background-image: url(images/person_1.jpg);">
                                    </div>
                                    <div class="text pl-md-5">
                                        <span class="time">08: - 10:00</span>
                                        <h2><a href="#">Introduction to Wordpress 5.0</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the
                                            necessary regelialia. It is a paradisematic country, in which roasted parts
                                            of sentences fly into your mouth.</p>
                                        <h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-flex">
                                    <div class="img speaker-img" style="background-image: url(images/person_2.jpg);">
                                    </div>
                                    <div class="text pl-md-5">
                                        <span class="time">08: - 10:00</span>
                                        <h2><a href="#">Best Practices For Programming WordPress</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the
                                            necessary regelialia. It is a paradisematic country, in which roasted parts
                                            of sentences fly into your mouth.</p>
                                        <h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-flex">
                                    <div class="img speaker-img" style="background-image: url(images/person_3.jpg);">
                                    </div>
                                    <div class="text pl-md-5">
                                        <span class="time">08: - 10:00</span>
                                        <h2><a href="#">Web Performance For Third Party Scripts</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the
                                            necessary regelialia. It is a paradisematic country, in which roasted parts
                                            of sentences fly into your mouth.</p>
                                        <h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                                <div class="speaker-wrap ftco-animate d-flex">
                                    <div class="img speaker-img" style="background-image: url(images/person_1.jpg);">
                                    </div>
                                    <div class="text pl-md-5">
                                        <span class="time">08: - 10:00</span>
                                        <h2><a href="#">Introduction to Wordpress 5.0</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the
                                            necessary regelialia. It is a paradisematic country, in which roasted parts
                                            of sentences fly into your mouth.</p>
                                        <h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-flex">
                                    <div class="img speaker-img" style="background-image: url(images/person_2.jpg);">
                                    </div>
                                    <div class="text pl-md-5">
                                        <span class="time">08: - 10:00</span>
                                        <h2><a href="#">Best Practices For Programming WordPress</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the
                                            necessary regelialia. It is a paradisematic country, in which roasted parts
                                            of sentences fly into your mouth.</p>
                                        <h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-flex">
                                    <div class="img speaker-img" style="background-image: url(images/person_3.jpg);">
                                    </div>
                                    <div class="text pl-md-5">
                                        <span class="time">08: - 10:00</span>
                                        <h2><a href="#">Web Performance For Third Party Scripts</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the
                                            necessary regelialia. It is a paradisematic country, in which roasted parts
                                            of sentences fly into your mouth.</p>
                                        <h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
                                <div class="speaker-wrap ftco-animate d-flex">
                                    <div class="img speaker-img" style="background-image: url(images/person_1.jpg);">
                                    </div>
                                    <div class="text pl-md-5">
                                        <span class="time">08: - 10:00</span>
                                        <h2><a href="#">Introduction to Wordpress 5.0</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the
                                            necessary regelialia. It is a paradisematic country, in which roasted parts
                                            of sentences fly into your mouth.</p>
                                        <h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-flex">
                                    <div class="img speaker-img" style="background-image: url(images/person_2.jpg);">
                                    </div>
                                    <div class="text pl-md-5">
                                        <span class="time">08: - 10:00</span>
                                        <h2><a href="#">Best Practices For Programming WordPress</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the
                                            necessary regelialia. It is a paradisematic country, in which roasted parts
                                            of sentences fly into your mouth.</p>
                                        <h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-flex">
                                    <div class="img speaker-img" style="background-image: url(images/person_3.jpg);">
                                    </div>
                                    <div class="text pl-md-5">
                                        <span class="time">08: - 10:00</span>
                                        <h2><a href="#">Web Performance For Third Party Scripts</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the
                                            necessary regelialia. It is a paradisematic country, in which roasted parts
                                            of sentences fly into your mouth.</p>
                                        <h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Honorable</span>
                    <h2 class="mb-4">
                        <!-- <span>Happy</span>  -->
                        Messages</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Prof. Er. Hirendra Man Pradhan</p>
                                    <span class="position">Chairman/Principal</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Interface Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">UI Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Web Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">System Analyst</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Our</span>
                    <h2 class="mb-4">
                        <!-- <span>Happy</span>  -->
                        Sponsors</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class=" owl-carousel auto-carousel">
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                </div>
                                <div class="text">
                                    <p class="name">Sponsor Name</p>
                                    <span class="position">Location</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                </div>
                                <div class="text">
                                    <p class="name">Sponsor Name</p>
                                    <span class="position">Location</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                </div>
                                <div class="text">
                                    <p class="name">Sponsor Name</p>
                                    <span class="position">Location</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                </div>
                                <div class="text">
                                    <p class="name">Sponsor Name</p>
                                    <span class="position">Location</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                </div>
                                <div class="text">
                                    <p class="name">Sponsor Name</p>
                                    <span class="position">Location</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-gallery">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <a href="images/image_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_1.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/image_2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_2.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/image_3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_3.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_4.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <? include "include/footer.php" ?>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>