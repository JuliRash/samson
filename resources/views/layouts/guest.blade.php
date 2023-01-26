
<!-- Header Link -->
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UMM | Conference</title>
    <link rel="icon" href="{{ asset('assets/img/faveicon.png')}}" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/plugin.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
</head>
<body>
{{--<!-- preloader -->--}}
{{--<div class="loader-wrapper">--}}
{{--    <div class="loader"></div>--}}
{{--    <div class="loader-section section-left"></div>--}}
{{--    <div class="loader-section section-right"></div>--}}
{{--</div>--}}


<!-- Header Section -->
<!-- Header Start Here -->
<header class="header-area header-general ">
    <div class="container">
        <div class="header-wrapper header-general-wrapper">
            <div class="logo">
                <a href="index.html">
                    <img src="{{ asset('assets/img/logo/logo.svg') }}" alt="logo">
                </a>
            </div>
            <div class="header-wrap ">
                <!-- Menu Start -->
                <div class="main-menu ">
                    <ul>
                        <li class="dropdown"><a href="#">Home</a>
                            <ul class="sub-menu">
                                <li><a href="home-one.html">Home v.1</a></li>
                                <li><a href="home-page-v2.html">Home v.2</a></li>
                                <li><a href="landing-page-v1.html">Landing Page v.1</a></li>
                                <li><a href="landing-page-v2.html">Landing Page v.2</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">About</a>
                            <ul class="sub-menu">
                                <li><a href="about-us-v1.html">About Us v1</a></li>
                                <li><a href="about-us-v2.html">About Us v2</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <div class="mega-menu general-mega-menu ">
                                <div class="single-menu">
                                    <div class="title">
                                        <h6>Speaker <i class="icofont-rounded-down"></i></h6>
                                    </div>
                                    <div class="menu">
                                        <ul>
                                            <li><a href="speaeker-v1.html">Speaker v.1</a></li>
                                            <li><a href="speaeker-v2.html">Speaker v.2</a></li>
                                            <li><a href="speaker-details-v1.html">Speaker Details v.1</a></li>
                                            <li><a href="speaker-details-v2.html">Speaker Details v.2</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-menu">
                                    <div class="title">
                                        <h6>News <i class="icofont-rounded-down"></i></h6>
                                    </div>
                                    <div class="menu">
                                        <ul>
                                            <li><a href="news-v1.html">News v.1</a></li>
                                            <li><a href="news-v2.html">News v.2</a></li>
                                            <li><a href="news-details-v1.html">News Details v.1</a></li>
                                            <li><a href="news-details-v2.html">News Details v.2</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-menu">
                                    <div class="title">
                                        <h6>Call for Papers <i class="icofont-rounded-down"></i></h6>
                                    </div>
                                    <div class="menu">
                                        <ul>
                                            <li><a href="event-v1.html">Event v.1</a></li>
                                            <li><a href="event-v2.html">Event v.2</a></li>
                                            <li><a href="sponsor-v1.html">Sponsor v.1</a></li>
                                            <li><a href="sponsor-v2.html">Sponsor v.2</a></li>
                                            <li><a href="pricing-v1.html">Price Table v.1</a></li>
                                            <li><a href="pricing-v2.html">Price Table v.2</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-menu">
                                    <div class="title">
                                        <h6>Others <i class="icofont-rounded-down"></i></h6>
                                    </div>
                                    <div class="menu">
                                        <ul>
                                            <li><a href="gallery-v1.html">Gallery v.1</a></li>
                                            <li><a href="gallery-v2.html">Gallery v.2</a></li>
                                            <li><a href="faq-v1.html">FAQ v.1</a></li>
                                            <li><a href="faq-v2.html">FAQ v.2</a></li>
                                            <li><a href="contact-v1.html">Contact v.1</a></li>
                                            <li><a href="contact-v2.html">Contact v.2</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">Call for Papers</a></li>
                        <li class="dropdown"><a href="#">Schedule</a>
                            <ul class="sub-menu">
                                <li><a href="schedule-v1.html">Schedule v1</a></li>
                                <li><a href="schedule-v2.html">Schedule v2</a></li>
                            </ul>
                        </li>
                        <li><a href="contact-v1.html">Contact</a></li>
                    </ul>
                </div>
                <!-- Menu Start -->
                <div class="header-right">
                    <div class="header-search">
                        <div class="search-button">
                            <i class="icofont-search-1"></i>
                        </div>
                        <!-- Search Popup Area Start Here -->
                        <div class="search-popup-wrapper general-search-popup">
                            <div class="search-popup-close">
                                <button><i class="icofont-close"></i></button>
                            </div>
                            <div class="search-popup">
                                <div class="search-popup-title">
                                    <h2>What are you looking for ?</h2>
                                    <span>Just Search Here</span>
                                </div>
                                <div class="search-popup-input">
                                    <input type="text" placeholder="Type your keyword . . .">
                                    <button class="btn-bg-g-secondary"><i class="icofont-search-1"></i></button>
                                </div>
                                <div class="search-popup-list">
                                    <h4>07  Result show for your keyword</h4>
                                    <ul>
                                        <li>
                                            <span>16 Nov, 2020</span>
                                            <a href="#">Dolor sit amet, consectetur adipiscing elit in tortor nam pulvinar elementum lorem ipsum dolor . . .</a>
                                        </li>
                                        <li>
                                            <span>16 Nov, 2020</span>
                                            <a href="#">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin . . .</a>
                                        </li>
                                        <li>
                                            <span>16 Nov, 2020</span>
                                            <a href="#">Dolor sit amet, consectetur adipiscing elit Non, lobortis in in tortor nam . . .</a>
                                        </li>
                                        <li>
                                            <span>16 Nov, 2020</span>
                                            <a href="#">Building Construction  consectetur adipiscing elit Non, lobortis in in tortor nam far far away dolor sit amet. . .</a>
                                        </li>
                                        <li>
                                            <span>16 Nov, 2020</span>
                                            <a href="#">Dolor sit amet, consectetur adipiscing elit in tortor nam pulvinar elementum lorem ipsum dolor . . .</a>
                                        </li>
                                        <li>
                                            <span>16 Nov, 2020</span>
                                            <a href="#">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin . . .</a>
                                        </li>
                                        <li>
                                            <span>16 Nov, 2020</span>
                                            <a href="#">Dolor sit amet, consectetur adipiscing elit Non, lobortis in in tortor nam . . .</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Search Popup Area End Here -->
                    </div>
                    <div class="user-icon d-none">
                        <i class="icofont-user-male"></i>
                    </div>
                    <div class="book-ticket header-account">
                        <a class="btn btn-lg-space btn-bg-g-secondary" href="{{ route('login') }}">LOGIN</a>
                    </div>
                    <div class="hamburger">
                        <div class="plates">
                            <!--  onclick="this.classList.toggle('active')" -->
                            <div class="plate plate5">
                                <svg class="burger" version="1.1" height="100" width="100" viewBox="0 0 100 100">
                                    <path class="line line1" d="M 30,35 H 70 " />
                                    <path class="line line2" d="M 50,50 H 30 L 34,32" />
                                    <path class="line line3" d="M 50,50 H 70 L 66,68" />
                                    <path class="line line4" d="M 30,65 H 70 " />
                                </svg>
                                <svg class="x" version="1.1" height="100" width="100" viewBox="0 0 100 100">
                                    <path class="line" d="M 34,32 L 66,68" />
                                    <path class="line" d="M 66,32 L 34,68" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End Here -->

<!-- hero Area Start Here -->
<div class="landing-page-v1-hero-area" style="background-image:url('assets/img/bg/landing-page-1-hero.jpg');">
    <div class="container">
        <div class="langing-page-v1-hero-wrapper">
            <div class="home-v1-hero-content home-v2-hero-content">
                <div class="span-group" data-aos="fade-up" data-aos-delay="200">
                    <span><b>International Conference on Hazards of Agricultural Chemicals and Practices</b></span>
                </div>

                <h2 data-aos="fade-up" data-aos-delay="100"></h2>
                <h1 data-aos="fade-up" data-aos-delay="100">ICHACP 2022</h1>
                <div class="span-group" data-aos="fade-up" data-aos-delay="200">
                    <span>18th July - 22nd July, 2022</span>
                    <span class="span-border">University Campus, Mkar, Gboko</span>
                </div>
                <div class="countdown-clock" data-aos="fade-up" data-aos-delay="300">
                    <div class="countdown-item">
                        <div class="ci-inner">
                            <div class="clock-days ci-value"></div>
                        </div>
                        <h4>Days</h4>
                    </div>
                    <div class="countdown-item">
                        <div class="ci-inner">
                            <div class="clock-hours ci-value"></div>
                        </div>
                        <h4>Hours</h4>
                    </div>
                    <div class="countdown-item">
                        <div class="ci-inner">
                            <div class="clock-minutes ci-value"></div>
                        </div>
                        <h4>Minutes</h4>
                    </div>
                    <div class="countdown-item">
                        <div class="ci-inner">
                            <div class="clock-seconds ci-value"></div>
                        </div>
                        <h4>Seconds</h4>
                    </div>
                </div>
                <div class="button-group" data-aos="fade-up" data-aos-delay="400">
                    <a class="btn btn-lg-space" href="{{ route('register') }}">Register Now</a>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- hero Area End Here -->

<!-- About Area Start Here -->
<section class="landing-page-v1-about-area s-py-100">
    <div class="container">
        <div class="section-title-v2 Water-color">
            <span>ABOUT US</span>
            <h2>ABOUT US</h2>
            <p></p>
            <div class="line">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="landing-page-v1-about-wrapper">
            <div class="landing-page-v1-about-thumb">
                <div class="image-01" data-aos="zoom-in">
                    <img class="thumbnail" src="{{ asset('assets/img/thumb/landing-page-v1/about-01.jpg')}}" alt="about">
                </div>
                <div class="image-02" data-aos="zoom-in">
                    <img src="{{ asset('assets/img/thumb/landing-page-v1/about-02.jpg')}}" alt="about">
                    <div class="play-button">
                        <a class="popup-video" href="https://www.youtube.com/watch?v=4Y8bn1fs_mo">
                            <img src="{{ asset('assets/img/icon/play-icon.svg')}}" alt="play-icon">
                        </a>
                    </div>
                    <div class="shape-01">
                        <img src="{{ asset('assets/img/shape/sercal-group.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="landing-page-v1-about-content" data-aos="fade-down">
                <h4>Who should attend ICHACP 2022</h4>
                <p> This Conference focuses on Hazards of Agricultural Chemicals and Practices with interest on the Implications for the Environment,
                    Food Security and Public Health in Developing Countries.</p>
                <p>It is open to all participants who may belong to any of the categories below:</p>
                <ul>
                    <li><i class="icofont-long-arrow-right"></i>Presenters of Papers in Relevant Sections</li>
                    <li><i class="icofont-long-arrow-right"></i>Professionals in Relevant Areas who desire updates in subject matter</li>
                    <li><i class="icofont-long-arrow-right"></i>Students in Agriculture and relevant fields</li>
                </ul>
                <p>There are facilities available for both physical and remote participation. Registered members would be advised
                    with connection parameters at the completion of the registration process</p>
                <p></p>
                <div class="date" data-aos="fade-up">
                    <span>See a tour around our facilities</span>
                    <h4>February, 2022</h4>
                    <div class="shape">
                        <img src="{{ asset('assets/img/shape/arrorpng.png')}}" alt="ashape">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Area End Here -->

<!-- Schedule Area Start Area Start Here -->
<div class="landing-page-v1-schedule-area s-py-100">
    <div class="bg-image">
        <img class="left-right" src="{{ asset('assets/img/bg/langing-page-v1-schedule.jpg')}}" alt="bg">
    </div>
    <div class="container">
        <div class="section-title-v2 white-section-title-v2">
            <span>SCHEDULE</span>
            <h2>Event Schedule</h2>
            <p>View our carefully planned timelines to help you have a seamless participation at this conference</p>
            <div class="line">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="landing-v1-schedule-wrapper">
            <nav class="landing-v1-schedule-tab-navs">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="schedule-v1-tabs-1" data-bs-toggle="tab" data-bs-target="#schedule-v1-tab-1" type="button" role="tab" aria-controls="schedule-v1-tab-1" aria-selected="true">
                        Pre-Conference
                    </button>
                    <button class="nav-link" id="schedule-v1-tabs-2" data-bs-toggle="tab" data-bs-target="#schedule-v1-tab-2" type="button" role="tab" aria-controls="schedule-v1-tab-2" aria-selected="false">
                        DAY - 01 to Day 04
                    </button>
                    <button class="nav-link" id="schedule-v1-tabs-3" data-bs-toggle="tab" data-bs-target="#schedule-v1-tab-3" type="button" role="tab" aria-controls="schedule-v1-tab-3" aria-selected="false">
                        DAY - 05
                    </button>
                    <button class="nav-link" id="schedule-v1-tabs-4" data-bs-toggle="tab" data-bs-target="#schedule-v1-tab-4" type="button" role="tab" aria-controls="schedule-v1-tab-4" aria-selected="false">
                        Post-Conference
                    </button>
                </div>
            </nav>

            <!-- Content -->
            <div class="tab-content landing-v1-schedule-tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="schedule-v1-tab-1" role="tabpanel" aria-labelledby="schedule-v1-tabs-1">
                    <div class="landing-v1-schedule-content">
                        <div class="landing-v1-single-schedule-content">

                            <div class="schedule-number" style="background-image: url({{asset('assets/img/shape/landing-page-v1-schedule/schedule-frame-02.png')}});">
                                <h1>14</h1>
                                <span>April, 2022</span>
                            </div>

                            <div class="content-wrapper" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-schedule/schedule-frame.png')}});">

                                <div class="content-inner">
                                    <div class="content">
                                        <span>Ends 5th July, 2022 at 16:00 Hours GMT+1</span>
                                        <a href="{{ route('register') }}">REGISTER HERE</a>
                                        <h4>Early Bird Registration</h4>
                                    </div>
                                    <div class="content-button">
                                        <a href="{{ route('register') }}" class="btn btn-md-space">REGISTER</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="landing-v1-single-schedule-content">

                            <div class="schedule-number" style="background-image: url({{asset('assets/img/shape/landing-page-v1-schedule/schedule-frame-02.png')}});">
                                <h1>14</h1>
                                <span>April, 2022</span>
                            </div>

                            <div class="content-wrapper" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-schedule/schedule-frame.png')}});">

                                <div class="content-inner">
                                    <div class="content">
                                        <span>Ends 15th July, 2022 at 16:00 Hours GMT+1</span>
                                        <a href="{{ route('register') }}">SUBMIT ARTICLE/PAPER HERE</a>
                                        <h4>Submission of Articles and Papers</h4>
                                    </div>
                                    <div class="content-button">
                                        <a href="{{ route('register') }}" class="btn btn-md-space">SUBMIT ARTICLE</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="landing-v1-single-schedule-content">

                            <div class="schedule-number" style="background-image: url({{asset('assets/img/shape/landing-page-v1-schedule/schedule-frame-02.png')}});">
                                <h1>6</h1>
                                <span>July, 2022</span>
                            </div>

                            <div class="content-wrapper" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-schedule/schedule-frame.png')}});">

                                <div class="content-inner">
                                    <div class="content">
                                        <span>Begins 6th July, 2022  <br> Ends 15th July, 2022 at 16:00 Hours GMT+1</span>
                                        <a href="#">REGISTER HERE (Not Active Yet)</a>
                                        <h4>Late Registration</h4>
                                    </div>
                                    <div class="content-button">
                                        <a href="#" class="btn btn-md-space">REGISTER</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="schedule-v1-tab-2" role="tabpanel" aria-labelledby="schedule-v1-tabs-2">
                    <div class="landing-v1-schedule-content">
                        <div class="landing-v1-single-schedule-content">

                            <div class="schedule-number" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-schedule/schedule-frame-02.png')}});">
                                <h1>18</h1>
                                <span>July</span>
                            </div>

                            <div class="content-wrapper" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-schedule/schedule-frame.png')}});">

                                <div class="content-inner">
                                    <div class="content">
                                        <span>13:00  to 15:00 Hrs GMT+1</span>
                                        <a href="#">Brigadier John Atom Kpera Conference Room </a>
                                        <h4>Opening Ceremony</h4>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="landing-v1-single-schedule-content">

                            <div class="schedule-number" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-schedule/schedule-frame-02.png')}});">
                                <h1>19</h1>
                                <span>July</span>
                            </div>

                            <div class="content-wrapper" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-schedule/schedule-frame.png')}});">

                                <div class="content-inner">
                                    <div class="content">
                                        <span>8:00 Hrs to 16:00 Hrs GMT+1</span>
                                        <a href="{{env('APP_URL')}}/presentation/schedules">Various Venues</a>
                                        <h4>Paper Presentations</h4>
                                    </div>
                                    <div class="content-button">
                                        <a href="{{env('APP_URL')}}/presentation/schedules" class="btn btn-md-space">View Presentaion Schedule</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="landing-v1-single-schedule-content">

                            <div class="schedule-number" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-schedule/schedule-frame-02.png')}});">
                                <h1>20</h1>
                                <span>July</span>
                            </div>

                            <div class="content-wrapper" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-schedule/schedule-frame.png')}});">

                                <div class="content-inner">
                                    <div class="content">
                                        <span>8:00 Hrs to 16:00 Hrs GMT+1</span>
                                        <a href="{{env('APP_URL')}}/presentation/schedules">Various Venues</a>
                                        <h4>Paper Presentations</h4>
                                    </div>
                                    <div class="content-button">
                                        <a href="{{env('APP_URL')}}/presentation/schedules" class="btn btn-md-space">View Presentaion Schedule</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="landing-v1-single-schedule-content">

                            <div class="schedule-number" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-schedule/schedule-frame-02.png')}});">
                                <h1>21</h1>
                                <span>July</span>
                            </div>

                            <div class="content-wrapper" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-schedule/schedule-frame.png')}});">

                                <div class="content-inner">
                                    <div class="content">
                                        <span>8:00 Hrs to 16:00 Hrs GMT+1</span>
                                        <a href="{{env('APP_URL')}}/presentation/schedules">Various Venues</a>
                                        <h4>Paper Presentations</h4>
                                    </div>
                                    <div class="content-button">
                                        <a href="{{env('APP_URL')}}/presentation/schedules" class="btn btn-md-space">View Presentaion Schedule</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="schedule-v1-tab-3" role="tabpanel" aria-labelledby="schedule-v1-tabs-3">
                    <div class="landing-v1-schedule-content">
                        <div class="landing-v1-single-schedule-content">

                            <div class="schedule-number" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-schedule/schedule-frame-02.png')}});">
                                <h1>22</h1>
                                <span>July</span>
                            </div>

                            <div class="content-wrapper" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-schedule/schedule-frame.png')}});">

                                <div class="content-inner">
                                    <div class="content">
                                        <span>8:00 Hrs to 12:45 Hrs GMT+1</span>
                                        <a href="{{env('APP_URL')}}/presentation/schedules">Various Venues</a>
                                        <h4>Paper Presentations</h4>
                                    </div>
                                    <div class="content-button">
                                        <a href="{{env('APP_URL')}}/presentation/schedules" class="btn btn-md-space">View Presentaion Schedule</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="landing-v1-single-schedule-content">

                            <div class="schedule-number" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-schedule/schedule-frame-02.png')}});">
                                <h1>22</h1>
                                <span>July</span>
                            </div>

                            <div class="content-wrapper" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-schedule/schedule-frame.png')}});">

                                <div class="content-inner">
                                    <div class="content">
                                        <span>13:00  to 15:00 Hrs GMT+1</span>
                                        <a href="#">Brigadier John Atom Kpera Conference Room </a>
                                        <h4>Closing Ceremony</h4>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="tab-pane fade" id="schedule-v1-tab-4" role="tabpanel" aria-labelledby="schedule-v1-tabs-4">
                    <div class="landing-v1-schedule-content">
                        <div class="landing-v1-single-schedule-content">

                            <div class="schedule-number" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-schedule/schedule-frame-02.png')}});">
                                <h1>24</h1>
                                <span>July</span>
                            </div>

                            <div class="content-wrapper" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-schedule/schedule-frame.png')}});">

                                <div class="content-inner">
                                    <div class="content">
                                        <span>2:30 Hours GMT+1</span>
                                        <a href="#">School of Agriculture, University of Mkar</a>
                                        <h4>Copy Editing of Paper Presentations</h4>
                                    </div>
                                    <div class="content-button">
                                        <a href="#" class="btn btn-md-space">View Presentations</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="landing-v1-single-schedule-content">

                            <div class="schedule-number" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-schedule/schedule-frame-02.png')}});">
                                <h1>24</h1>
                                <span>November</span>
                            </div>

                            <div class="content-wrapper" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-schedule/schedule-frame.png')}});">

                                <div class="content-inner">
                                    <div class="content">
                                        <span>10:00 Hours GMT+1</span>
                                        <a href="https://journals.umm.edu.ng/">University of Mkar Journal</a>
                                        <h4>Online Publication of Proceedings</h4>
                                    </div>
                                    <div class="content-button">
                                        <a href="#" class="btn btn-md-space">View Presentations</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="landing-v1-single-schedule-content">

                            <div class="schedule-number" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-schedule/schedule-frame-02.png')}});">
                                <h1>25</h1>
                                <span>November</span>
                            </div>

                            <div class="content-wrapper" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-schedule/schedule-frame.png')}});">

                                <div class="content-inner">
                                    <div class="content">
                                        <span>2:30 PM to 6 PM</span>
                                        <a href="https://journals.umm.edu.ng">Mkar Journal of Interdisciplinary Studies</a>
                                        <h4>Hard Copy Publication</h4>
                                    </div>
                                    <div class="content-button">
                                        <a href="http://journals.umm.edu.ng" class="btn btn-md-space">Check Publication Here</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Schedule Area Start Area End Here -->

<!-- Speaker Area Start Here -->
<section class="landing-v1-speaker-area s-py-100">
    <div class="shape-01">
        <img src="{{ asset('assets/img/shape/login/trangle.svg')}}" alt="shape">
    </div>
    <div class="shape-02">
        <img src="{{ asset('assets/img/shape/login/plus.svg')}}" alt="shape">
    </div>
    <div class="container">
        <div class="section-title-v2 Water-color">
            <span>SPEAKERS</span>
            <h2>Speakers</h2>
            <p>This years conference has the following keynote presenters</p>
            <div class="line">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="landing-v1-speaker-wrapper">
            <div class="landing-v1-single-speaker mb-30 mb-lg-20" data-aos="fade-up" data-aos-delay="10">
                <div class="speaeker-img">
                    <img src="{{ asset('assets/img/thumb/landing-page-v1/speaker/speaker-01.jpg')}}" alt="speaker">
                </div>
                <div class="speaeker-content">
                    <div class="social">
                        <ul>
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="title">
                        <a href="#">Kames Williamson</a>
                        <span>UI / UX Designer</span>
                    </div>
                </div>
            </div>
            <div class="landing-v1-single-speaker mb-30 mb-lg-20" data-aos="fade-up" data-aos-delay="200">
                <div class="speaeker-img">
                    <img src="{{ asset('assets/img/thumb/landing-page-v1/speaker/speaker-02.jpg')}}" alt="speaker">
                </div>
                <div class="speaeker-content">
                    <div class="social">
                        <ul>
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="title">
                        <a href="#">Kames Williamson</a>
                        <span>UI / UX Designer</span>
                    </div>
                </div>
            </div>
            <div class="landing-v1-single-speaker mb-30 mb-lg-20" data-aos="fade-up" data-aos-delay="400">
                <div class="speaeker-img">
                    <img src="{{ asset('assets/img/thumb/landing-page-v1/speaker/speaker-03.jp')}}g" alt="speaker">
                </div>
                <div class="speaeker-content">
                    <div class="social">
                        <ul>
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="title">
                        <a href="#">Kames Williamson</a>
                        <span>UI / UX Designer</span>
                    </div>
                </div>
            </div>
            <div class="landing-v1-single-speaker mb-30 mb-lg-20" data-aos="fade-up" data-aos-delay="600">
                <div class="speaeker-img">
                    <img src="{{ asset('assets/img/thumb/landing-page-v1/speaker/speaker-04.jpg')}}" alt="speaker">
                </div>
                <div class="speaeker-content">
                    <div class="social">
                        <ul>
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="title">
                        <a href="#">Kames Williamson</a>
                        <span>UI / UX Designer</span>
                    </div>
                </div>
            </div>
            <div class="landing-v1-single-speaker mb-lg-20" data-aos="fade-up" data-aos-delay="800">
                <div class="speaeker-img">
                    <img src="{{ asset('assets/img/thumb/landing-page-v1/speaker/speaker-05.jpg')}}" alt="speaker">
                </div>
                <div class="speaeker-content">
                    <div class="social">
                        <ul>
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="title">
                        <a href="#">Kames Williamson</a>
                        <span>UI / UX Designer</span>
                    </div>
                </div>
            </div>
            <div class="landing-v1-single-speaker mb-lg-20" data-aos="fade-up" data-aos-delay="1000">
                <div class="speaeker-img">
                    <img src="{{ asset('assets/img/thumb/landing-page-v1/speaker/speaker-06.jpg')}}" alt="speaker">
                </div>
                <div class="speaeker-content">
                    <div class="social">
                        <ul>
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="title">
                        <a href="#">Kames Williamson</a>
                        <span>UI / UX Designer</span>
                    </div>
                </div>
            </div>
            <div class="landing-v1-single-speaker" data-aos="fade-up" data-aos-delay="1200">
                <div class="speaeker-img">
                    <img src="{{ asset('assets/img/thumb/landing-page-v1/speaker/speaker-07.jpg')}}" alt="speaker">
                </div>
                <div class="speaeker-content">
                    <div class="social">
                        <ul>
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="title">
                        <a href="#">Kames Williamson</a>
                        <span>UI / UX Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Speaker Area End Here -->

<!-- Pricing Table Area Start Here -->
<section class="landing-v1-pricing-area s-py-100 bg-snow">
    <div class="shape-1"><img src="{{ asset('assets/img/shape/landing-page-v1-pricing/area-shape-top.png')}}" alt="shape"></div>
    <div class="shape-2"><img src="{{ asset('assets/img/shape/landing-page-v1-pricing/area-shape-bottom.png')}}" alt="shape"></div>
    <div class="shape-3"><img src="{{ asset('assets/img/shape/login/trangle.svg')}}" alt="shape"></div>
    <div class="container">
        <div class="section-title-v2 Water-color">
            <span>Pricing</span>
            <h2>Pricing</h2>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.  up of the more obscure Latin words, consectetur.</p>
            <div class="line">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="landing-v1-pricing-wrapper">
            <div class="single-landing-v1-pricing" data-aos="fade-right">
                <div class="landing-v1-pricing-title" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-pricing/table-from-top.png')}});">
                    <h5>Basic Pack</h5>
                </div>
                <div class="landing-v1-pricing-list">
                    <ul>
                        <li>Bookmarksgrove right coast</li>
                        <li>Vokalia and Consonantia</li>
                        <li>large language ocean semantics</li>
                        <li>Bookmarksgrove right coast</li>
                        <li>Vokalia and Consonantia</li>
                    </ul>
                </div>
                <div class="landing-v1-pricing-content" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-pricing/table-from-bottom.png')}});">
                    <div class="number">
                        <span>$180</span>
                    </div>
                    <div class="button">
                        <a href="#" class="btn btn-sm-space">Bue Ticket</a>
                    </div>
                </div>
            </div>
            <div class="single-landing-v1-pricing active" data-aos="fade-up">
                <div class="landing-v1-pricing-title" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-pricing/table-from-active-top.png')}});">
                    <h5>Standard Pack</h5>
                </div>
                <div class="landing-v1-pricing-list">
                    <ul>
                        <li>Bookmarksgrove right coast</li>
                        <li>Vokalia and Consonantia</li>
                        <li>large language ocean semantics</li>
                        <li>Bookmarksgrove right coast</li>
                        <li>Vokalia and Consonantia</li>
                    </ul>
                </div>
                <div class="landing-v1-pricing-content" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-pricing/table-from-active-bottom.png')}});">
                    <div class="number">
                        <span>$280</span>
                    </div>
                    <div class="button">
                        <a href="#" class="btn btn-sm-space">Bue Ticket</a>
                    </div>
                </div>
            </div>
            <div class="single-landing-v1-pricing" data-aos="fade-left">
                <div class="landing-v1-pricing-title" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-pricing/table-from-top.png')}});">
                    <h5>Premium Pack</h5>
                </div>
                <div class="landing-v1-pricing-list">
                    <ul>
                        <li>Bookmarksgrove right coast</li>
                        <li>Vokalia and Consonantia</li>
                        <li>large language ocean semantics</li>
                        <li>Bookmarksgrove right coast</li>
                        <li>Vokalia and Consonantia</li>
                    </ul>
                </div>
                <div class="landing-v1-pricing-content" style="background-image: url({{ asset('assets/img/shape/landing-page-v1-pricing/table-from-bottom.png')}});">
                    <div class="number">
                        <span>$380</span>
                    </div>
                    <div class="button">
                        <a href="#" class="btn btn-sm-space">Bue Ticket</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing Table Area End Here -->

<!-- Gallery Area Start Here -->
<section class="landing-v1-gallery-area s-py-100">
    <div class="container">
        <div class="section-title-v2 Water-color">
            <span>GALLERY</span>
            <h2>Gallery</h2>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.  up of the more obscure Latin words, consectetur.</p>
            <div class="line">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="landing-v1-gallery-wrapper">
            <div class="grid-sizer"></div>
            <div class="isotop-item l-g-hight-1 mb-20">
                <div class="gallery-v1-single-item gallery-v1-single-item-1">
                    <div class="gallery-image">
                        <img src="{{ asset('assets/img/gallery/landing-v1-gallery/gallery-01.jpg')}}" alt="gallery">
                    </div>
                    <div class="popup-icon">
                        <a class="popup-image" href="{{ asset('assets/img/gallery/landing-v1-gallery/gallery-01.jpg')}}">
                            <i class="icofont-plus"></i>
                        </a>
                    </div>
                    <div class="title">
                        <h4>Business Summit 2019</h4>
                        <span>John Doe   l   LA Stadium</span>
                    </div>
                </div>
            </div>
            <div class="isotop-item l-g-hight-2 mb-20">
                <div class="gallery-v1-single-item gallery-v1-single-item-2">
                    <div class="gallery-image">
                        <img src="{{ asset('assets/img/gallery/landing-v1-gallery/gallery-02.jpg')}}" alt="gallery">
                    </div>
                    <div class="popup-icon">
                        <a class="popup-image" href="{{ asset('assets/img/gallery/landing-v1-gallery/gallery-02.jpg')}}">
                            <i class="icofont-plus"></i>
                        </a>
                    </div>
                    <div class="title">
                        <h4>Business Summit 2019</h4>
                        <span>John Doe   l   LA Stadium</span>
                    </div>
                </div>
            </div>
            <div class="isotop-item l-g-hight-1 mb-20">
                <div class="gallery-v1-single-item gallery-v1-single-item-3">
                    <div class="gallery-image">
                        <img src="{{ asset('assets/img/gallery/landing-v1-gallery/gallery-03.jpg')}}" alt="gallery">
                    </div>
                    <div class="popup-icon">
                        <a class="popup-image" href="{{ asset('assets/img/gallery/landing-v1-gallery/gallery-03.jpg')}}">
                            <i class="icofont-plus"></i>
                        </a>
                    </div>
                    <div class="title">
                        <h4>Business Summit 2019</h4>
                        <span>John Doe   l   LA Stadium</span>
                    </div>
                </div>
            </div>
            <div class="isotop-item l-g-hight-2 mb-20">
                <div class="gallery-v1-single-item gallery-v1-single-item-4">
                    <div class="gallery-image">
                        <img src="{{ asset('assets/img/gallery/landing-v1-gallery/gallery-04.jpg')}}" alt="gallery">
                    </div>
                    <div class="popup-icon">
                        <a class="popup-image" href="{{ asset('assets/img/gallery/landing-v1-gallery/gallery-04.jpg')}}">
                            <i class="icofont-plus"></i>
                        </a>
                    </div>
                    <div class="title">
                        <h4>Business Summit 2019</h4>
                        <span>John Doe   l   LA Stadium</span>
                    </div>
                </div>
            </div>
            <div class="isotop-item l-g-hight-1 mb-20">
                <div class="gallery-v1-single-item gallery-v1-single-item-5">
                    <div class="gallery-image">
                        <img src="{{ asset('assets/img/gallery/landing-v1-gallery/gallery-05.jpg')}}" alt="gallery">
                    </div>
                    <div class="popup-icon">
                        <a class="popup-image" href="{{ asset('assets/img/gallery/landing-v1-gallery/gallery-05.jpg')}}">
                            <i class="icofont-plus"></i>
                        </a>
                    </div>
                    <div class="title">
                        <h4>Business Summit 2019</h4>
                        <span>John Doe   l   LA Stadium</span>
                    </div>
                </div>
            </div>
            <div class="isotop-item l-g-hight-1 mb-20">
                <div class="gallery-v1-single-item gallery-v1-single-item-6">
                    <div class="gallery-image">
                        <img src="{{ asset('assets/img/gallery/landing-v1-gallery/gallery-06.jpg')}}" alt="gallery">
                    </div>
                    <div class="popup-icon">
                        <a class="popup-image" href="{{ asset('assets/img/gallery/landing-v1-gallery/gallery-06.jpg')}}">
                            <i class="icofont-plus"></i>
                        </a>
                    </div>
                    <div class="title">
                        <h4>Business Summit 2019</h4>
                        <span>John Doe   l   LA Stadium</span>
                    </div>
                </div>
            </div>
            <div class="isotop-item l-g-hight-1 mb-xl-20">
                <div class="gallery-v1-single-item gallery-v1-single-item-7">
                    <div class="gallery-image">
                        <img src="{{ asset('assets/img/gallery/landing-v1-gallery/gallery-07.jpg')}}" alt="gallery">
                    </div>
                    <div class="popup-icon">
                        <a class="popup-image" href="{{ asset('assets/img/gallery/landing-v1-gallery/gallery-07.jpg')}}">
                            <i class="icofont-plus"></i>
                        </a>
                    </div>
                    <div class="title">
                        <h4>Business Summit 2019</h4>
                        <span>John Doe   l   LA Stadium</span>
                    </div>
                </div>
            </div>
            <div class="isotop-item l-g-hight-1 mb-md-20">
                <div class="gallery-v1-single-item gallery-v1-single-item-8">
                    <div class="gallery-image">
                        <img src="{{ asset('assets/img/gallery/landing-v1-gallery/gallery-08.jpg')}}" alt="gallery">
                    </div>
                    <div class="popup-icon">
                        <a class="popup-image" href="{{ asset('assets/img/gallery/landing-v1-gallery/gallery-08.jpg')}}">
                            <i class="icofont-plus"></i>
                        </a>
                    </div>
                    <div class="title">
                        <h4>Business Summit 2019</h4>
                        <span>John Doe   l   LA Stadium</span>
                    </div>
                </div>
            </div>
            <div class="isotop-item l-g-hight-1 mb-sm-20">
                <div class="gallery-v1-single-item gallery-v1-single-item-9">
                    <div class="gallery-image">
                        <img src="{{ asset('assets/img/gallery/landing-v1-gallery/gallery-05.jpg') }}" alt="gallery">
                    </div>
                    <div class="popup-icon">
                        <a class="popup-image" href="{{ asset('assets/img/gallery/landing-v1-gallery/gallery-05.jpg') }}">
                            <i class="icofont-plus"></i>
                        </a>
                    </div>
                    <div class="title">
                        <h4>Business Summit 2019</h4>
                        <span>John Doe   l   LA Stadium</span>
                    </div>
                </div>
            </div>
            <div class="isotop-item l-g-hight-1">
                <div class="gallery-v1-single-item gallery-v1-single-item-9">
                    <div class="gallery-image">
                        <img src="{{ asset('assets/img/gallery/landing-v1-gallery/gallery-01.jpg') }}" alt="gallery">
                    </div>
                    <div class="popup-icon">
                        <a class="popup-image" href="{{ asset('assets/img/gallery/landing-v1-gallery/gallery-01.jpg') }}">
                            <i class="icofont-plus"></i>
                        </a>
                    </div>
                    <div class="title">
                        <h4>Business Summit 2019</h4>
                        <span>John Doe   l   LA Stadium</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Gallery Area End Here -->

<!-- Sponsor Area Start Here -->
<section class="landing-v1-sponsor-area s-py-100 bg-snow">
    <div class="container">
        <div class="section-title-v2 Water-color">
            <span>SPONSOR</span>
            <h2>Sponsors</h2>
            <p>This conference is sponsored by the University of Mkar, Mkar in conjunction with the following</p>
            <div class="line">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="partner-slider-wrapper owl-carousel landing-v1-sponsor">
            <div class="single-partner-slider">
                <img src="{{ asset('assets/img/partner/partner-slider/partner-01.svg') }}" alt="partner">
            </div>
            <div class="single-partner-slider">
                <img src="{{ asset('assets/img/partner/partner-slider/partner-02.svg') }}" alt="partner">
            </div>
            <div class="single-partner-slider">
                <img src="{{ asset('assets/img/partner/partner-slider/partner-03.svg') }}" alt="partner">
            </div>
            <div class="single-partner-slider">
                <img src="{{ asset('assets/img/partner/partner-slider/partner-04.svg') }}" alt="partner">
            </div>
            <div class="single-partner-slider">
                <img src="{{ asset('assets/img/partner/partner-slider/partner-01.svg') }}" alt="partner">
            </div>
            <div class="single-partner-slider">
                <img src="{{ asset('assets/img/partner/partner-slider/partner-02.svg') }}" alt="partner">
            </div>
            <div class="single-partner-slider">
                <img src="{{ asset('assets/img/partner/partner-slider/partner-03.svg') }}" alt="partner">
            </div>
            <div class="single-partner-slider">
                <img src="{{ asset('assets/img/partner/partner-slider/partner-04.svg') }}" alt="partner">
            </div>
            <div class="single-partner-slider">
                <img src="{{ asset('assets/img/partner/partner-slider/partner-01.svg') }}" alt="partner">
            </div>
            <div class="single-partner-slider">
                <img src="{{ asset('assets/img/partner/partner-slider/partner-02.svg') }}" alt="partner">
            </div>
            <div class="single-partner-slider">
                <img src="{{ asset('assets/img/partner/partner-slider/partner-03.svg') }}" alt="partner">
            </div>
            <div class="single-partner-slider">
                <img src="{{ asset('assets/img/partner/partner-slider/partner-04.svg') }}" alt="partner">
            </div>
            <div class="single-partner-slider">
                <img src="{{ asset('assets/img/partner/partner-slider/partner-01.svg') }}" alt="partner">
            </div>
        </div>
    </div>
</section>
<!-- Sponsor Area End Here -->

<!-- V1 Story Area Start Here -->
<section class="landing-v1-story-area s-py-100">
    <div class="shape-1">
        <img src="{{ asset('assets/img/shape/login/trangle.svg') }}" alt="shape">
    </div>
    <div class="shape-2">
        <img src="{{ asset('assets/img/shape/login/plus.svg') }}" alt="shape">
    </div>
    <div class="shape-3">
        <img src="{{ asset('assets/img/shape/login/sign.svg') }}" alt="shape">
    </div>
    <div class="container">
        <div class="section-title-v2 Water-color">
            <span>STORY</span>
            <h2>Our Story</h2>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.  up of the more obscure Latin words, consectetur.</p>
            <div class="line">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="landing-v1-story-wrapper">
            <div class="single-landing-v1-story" data-aos="fade-down">
                <div class="landing-v1-story-thumb">
                    <img src="{{ asset('assets/img/gallery/landing-v1-gallery/gallery-08.jpg')}}" alt="story">
                    <div class="tag">
                        <span>5th Feb</span>
                    </div>
                </div>
                <div class="landing-v1-story-content">
                    <h4><a href="#">A small river named Duden flows by their plat.</a></h4>
                    <p>Contrary to popular belief, Lorem Ipsum 45 BC, making it over 2000 years old. Richard McClintock</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="single-landing-v1-story" data-aos="fade-left">
                <div class="landing-v1-story-thumb">
                    <img src="{{ asset('assets/img/gallery/landing-v1-gallery/gallery-07.jpg')}}" alt="story">
                    <div class="tag">
                        <span>6th Feb</span>
                    </div>
                </div>
                <div class="landing-v1-story-content">
                    <h4><a href="#">A small river named Duden flows by their plat.</a></h4>
                    <p>Contrary to popular belief, Lorem Ipsum 45 BC, making it over 2000 years old. Richard McClintock</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="single-landing-v1-story" data-aos="fade-right">
                <div class="landing-v1-story-thumb">
                    <img src="{{ asset('assets/img/gallery/landing-v1-gallery/gallery-05.jpg')}}" alt="story">
                    <div class="tag">
                        <span>7th Feb</span>
                    </div>
                </div>
                <div class="landing-v1-story-content">
                    <h4><a href="#">A small river named Duden flows by their plat.</a></h4>
                    <p>Contrary to popular belief, Lorem Ipsum 45 BC, making it over 2000 years old. Richard McClintock</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="single-landing-v1-story" data-aos="fade-up">
                <div class="landing-v1-story-thumb">
                    <img src="{{ asset('assets/img/gallery/landing-v1-gallery/gallery-06.jpg')}}" alt="story">
                    <div class="tag">
                        <span>8th Feb</span>
                    </div>
                </div>
                <div class="landing-v1-story-content">
                    <h4><a href="#">A small river named Duden flows by their plat.</a></h4>
                    <p>Contrary to popular belief, Lorem Ipsum 45 BC, making it over 2000 years old. Richard McClintock</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
        <div class="about-us-v1-team-area-button">
            <a class="btn btn-lg-space btn-bg-g-secondary b-r-0" href="news-v1.html">Load More Story</a>
        </div>
    </div>
</section>
<!-- V1 Story Area End Here -->

<!-- Query Area Start Here -->
<section class="landing-v1-query-area s-pt-100">
    <div class="bg-image">
        <img class="thumbnail" src="{{ asset('assets/img/bg/home-v1-pricing-bg.jpg')}}" alt="bg">
    </div>
    <div class="container">
        <div class="landing-v1-query-title">
            <h2 data-aos="fade-up" data-aos-delay="10">HAVE ANY QUERY ?</h2>
            <p data-aos="fade-up" data-aos-delay="100">Just call here : +123 - (456 789)</p>
        </div>
        <div class="landing-v1-query-from" data-aos="fade-up" data-aos-delay="200">
            <div class="from-content">
                <h4>Subscribe Newsletter</h4>
                <p>Subscribe Newsletter & get always update information.</p>
            </div>
            <div class="form-input">
                <input type="email" placeholder="Enter your email address">
                <button class="btn">Subscribe</button>
            </div>
        </div>
    </div>
</section>
<!-- Query Area End Here -->

<!-- Contact Area Start Here -->
<section class="landing-v1-contact-area s-pb-100">
    <div class="container">
        <div class="landing-v1-contact-wrapper">
            <div class="landing-v1-contact-from">
                <div class="shape-1">
                    <img src="{{ asset('assets/img/shape/login/trangle.svg') }}" alt="shape">
                </div>
                <div class="shape-2">
                    <img src="{{ asset('assets/img/shape/login/plus.svg') }}" alt="shape">
                </div>
                <div class="shape-3">
                    <img src="{{ asset('assets/img/shape/login/sign.svg') }}" alt="shape">
                </div>
                <div class="shape-4" >
                    <img src="{{ asset('assets/img/shape/sercal-group.png') }}" alt="shape">
                </div>
                <div class="title" data-aos="fade-down">
                    <h2>Get in Touch</h2>
                    <p>Text us for sponsorship or need any Information</p>
                </div>
                <div class="landing-v1-from-input">
                    <div class="single-input" data-aos="fade-right" data-aos-delay="10">
                        <input type="text" placeholder="Full Name">
                    </div>
                    <div class="single-input" data-aos="fade-right" data-aos-delay="100">
                        <input type="text" placeholder="Email Address">
                    </div>
                    <div class="single-input" data-aos="fade-right" data-aos-delay="200">
                        <textarea placeholder="Type your text"></textarea>
                    </div>
                    <div class="from-button" data-aos="fade-up" data-aos-delay="300">
                        <button class="btn btn-md-space btn-bg-g-secondary">Submit Message</button>
                    </div>
                </div>
            </div>
            <div class="landing-v1-contact-map">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d699.5514406098364!2d9.040322072922018!3d7.324605494687998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105a232192ab526b%3A0x397516ae7c38392!2sUniversity%20of%20Mkar%2C%20Mkar!5e0!3m2!1sen!2sng!4v1649235917613!5m2!1sen!2sng" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>
<!-- Contact Area End Here -->

<!-- Footer Area Start Here -->

<footer class="footer-shape-area py-70 py-md-40 footer-with-bg">
    <div class="footer-bg">
        <div class="shape-1">
            <img src="{{ asset('assets/img/footer/footer-with-shape-bg.png')}}" alt="shape">
        </div>
        <div class="shape-2">
            <img class="left-right" src="{{ asset('assets/img/footer/footer-with-bg-bg.jpg')}}" alt="shape">
        </div>
    </div>
    <div class="container">
        <div class="footer-shape-wrapper">
            <div class="footer-shape-top">
                <div class="footer-contact">
                    <h4 class="footer-title">Emergency Contact</h4>
                    <a href="#"><i class="icofont-ui-message"></i>evenzoinfo@gmail.com</a>
                    <a href="#"><i class="icofont-phone"></i>+123 - (456 7890)</a>
                </div>

                <div class="footer-logo">
                    <div class="logo">
                        <img src="{{ asset('assets/img/logo/footer-logo.svg')}}" alt="logo">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non, lobortis in in tortor lectus iaculis viverra. Adipiscing lobortis interdum fringilla euismod odio vitae.</p>
                </div>

                <div class="footer-link">
                    <h4 class="footer-title">Important Link</h4>
                    <ul class="footer-list">
                        <li><a href="#"><i class="icofont-long-arrow-right"></i>FAQ</a></li>
                        <li><a href="#"><i class="icofont-long-arrow-right"></i>Privecy</a></li>
                        <li><a href="#"><i class="icofont-long-arrow-right"></i>Terms & Condition</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-shape-bottom">
                <div class="menu">
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Speakers</a></li>
                        <li><a href="#">Schedule</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">News</a></li>
                    </ul>
                </div>
                <div class="footer-social">
                    <span>Follow Us</span>
                    <ul>
                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                        <li><a href="#"><i class="icofont-twitter"></i></a></li>
                        <li><a href="#"><i class="icofont-instagram"></i></a></li>
                        <li><a href="#"><i class="icofont-youtube-play"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Copy Right Start Here -->
<div class="footer-shape-copyright">
    <p>Copyright &copy; Durable Consultants Limited.</p>
</div>
<!-- Copy Right End Here -->
<!-- Footer Area End Here -->
<!-- Footer script-->
<!-- Jquery call here-->
<script src="{{ asset('assets/js/app.min.js')}}"></script>
<!-- custom script call here -->
<script src="{{ asset('assets/js/scripts.js')}}"></script>
</body>
</html>
