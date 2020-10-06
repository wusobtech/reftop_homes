@extends('web.layouts.app')
@section('title' , 'About Us')
@section('content')

<!--body content wrap start-->
<div class="main">

    <!--header section start-->
    <section class="hero-section ptb-100 gradient-overlay" style="background: url('{{ $web_source }}/img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">About Us</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                                <li class="list-inline-item breadcrumb-item active">About Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->

    <!--promo section start-->
    <section class="promo-section gray-light-bg">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="single-promo-block p-3 rounded d-flex justify-content-between">
                        <div class="promo-block-icon mr-4">
                            <span class="ti-light-bulb icon-md color-primary"></span>
                        </div>
                        <div class="promo-block-content">
                            <h5>Our Goal</h5>
                            <p>is to ensure our clients get maximum returns from their real estate investments. 
                                This we do by siting our estates in 
                                strategic locations, vetting and perfecting land documents, putting in 
                                place complementary uses and solid infrastructure that creates a serene living environment
                            </p>
                        </div>
                    </div>
                </div>
                    <div class="single-promo-block p-3 rounded d-flex justify-content-between">
                        <div class="promo-block-icon mr-4">
                            <span class="ti-flag-alt icon-md color-primary"></span>
                        </div>
                        <div class="promo-block-content">
                            <h5>Our Mission</h5>
                            <p>The company’s vision is to become the most innovative, technology driven provider of real estate products and solutions in Africa.</p>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- promo section end-->

    <!--about us section start-->
    <section class="about-us-section ptb-100">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-12 col-lg-5">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <h2>Who We Are</h2>
                        <p>Reftop Homes Ltd has over the years established herself as one of the industry’s fastest rising name. With development projects and investment interests in spread across Lekki Lagos, Reftop Homes Ltd has established impressive growth in the recent years
                            </p>
                        <ul class="list-unstyled tech-feature-list">
                            <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Cost</strong> Accounting Fundamentals
                            </li>
                            <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Corporate</strong> Cash Management
                            </li>
                            <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Company</strong> Brand Solutions</li>
                        </ul>
                        <div class="row mt-4">
                            <div class="col-4">
                                <div class="counter-single">
                                    <h4 class="mb-0 color-secondary">4566</h4>
                                    <strong>Total Project</strong>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="counter-single">
                                    <h4 class="mb-0 color-secondary">25002</h4>
                                    <strong>Total Properties</strong>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="counter-single">
                                    <h4 class="mb-0 color-secondary">4566</h4>
                                    <strong>Total Customers</strong>
                                </div>
                            </div>
                        </div>
                        <div class="action-btns mt-4">
                            <a href="{{route('services')}}" class="btn primary-solid-btn mr-2">View Our Services</a>
                            <a href="{{route('contactUs')}}" class="btn outline-btn">Contact Us</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="card border-0 shadow-sm text-white">
                        <img src="{{ $web_source }}/img/about-1.jpg" alt="video" class="img-fluid rounded shadow-sm">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about us section end-->

    <!--our work process section start-->
    <section class="work-process-new ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Our Development Process</h2>
                        <p class="lead">In satisfying our clients, we make sure our processes are hitch free and compliant with world best practices on real-estate</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="work-process-wrap text-center">
                        <div class="single-work-process">
                            <div class="work-process-icon-wrap secondary-bg rounded-circle">
                                <i class="ti-location-pin icon-md text-white"></i>
                                <span class="process-step primary-bg text-white shadow-sm">1</span>
                            </div>
                            <div class="work-process-content mt-4">
                                <h5>Locate a Property</h5>
                                <p>We search for properties in the best of environs</p>
                            </div>
                        </div>
                        <div class="single-work-process">
                            <div class="work-process-icon-wrap secondary-bg rounded-circle">
                                <i class="ti-layout-list-thumb icon-md text-white"></i>
                                <span class="process-step primary-bg text-white shadow-sm">2</span>
                            </div>
                            <div class="work-process-content mt-4">
                                <h5>Inquiry</h5>
                                <p>24/7 calls, centered to respond to all proeperties located</p>
                            </div>
                        </div>
                        <div class="single-work-process">
                            <div class="work-process-icon-wrap secondary-bg rounded-circle">
                                <i class="ti-search icon-md text-white"></i>
                                <span class="process-step primary-bg text-white shadow-sm">3</span>
                            </div>
                            <div class="work-process-content mt-4">
                                <h5>Inspection</h5>
                                <p>Careful Quality Assured inspections are carried out on all the properties on Mondays, Wednesdays & Saturdays</p>
                            </div>
                        </div>
                        <div class="single-work-process">
                            <div class="work-process-icon-wrap secondary-bg rounded-circle">
                                <i class="ti-money icon-md text-white"></i>
                                <span class="process-step primary-bg text-white shadow-sm">4</span>
                            </div>
                            <div class="work-process-content mt-4">
                                <h5>Purchase</h5>
                                <p>Signed deeds and documents are filed after every payment made</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our work process section end-->

    <!--team two section start
    <section class="team-two-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Meet our lovely team</h2>
                        <p class="lead">Distinctively grow go forward manufactured products and optimal networks. Globally administrate 24/7 interfaces and end-to-end platforms.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="staff-member">
                        <div class="card gray-light-bg text-center border-0">
                            <img src="{{ $web_source }}/img/team-1.jpg" alt="team image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Richard Ford</h5>
                                <span>Instructor of Mathematics</span>
                                <ul class="list-inline pt-2 social">
                                    <li class="list-inline-item"><a href="" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Dramatically leverage existing fully researched platforms vis-a-vis viral." </p>
                                <a href="#" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Richard Ford</h5>
                                </a>
                                <span class="teacher-field text-white">Instructor of Mathematics</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                                <p class="teacher-see-profile">
                                    <a href="#" class="btn outline-white-btn">View my profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="staff-member">
                        <div class="card gray-light-bg text-center border-0">
                            <img src="{{ $web_source }}/img/team-3.jpg" alt="team image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Kely Roy</h5>
                                <span>Lead Designer</span>
                                <ul class="list-inline pt-2 social">
                                    <li class="list-inline-item"><a href="" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Credibly extend high-payoff web-readiness via top-line relationships." </p>
                                <a href="#" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Kely Roy</h5>
                                </a><span class="teacher-field text-white">Lead Designer</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                                <p class="teacher-see-profile">
                                    <a href="#" class="btn outline-white-btn">View my profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="staff-member">
                        <div class="card gray-light-bg text-center border-0">
                            <img src="{{ $web_source }}/img/team-2.jpg" alt="team image" class="img-fluid">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Gerald Nichols</h5>
                                <span>Managing Director</span>
                                <ul class="list-inline pt-2 social">
                                    <li class="list-inline-item"><a href="" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Authoritatively evolve stand-alone e-tailers whereas prospective partnerships." </p>
                                <a href="#" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Gerald Nichols</h5>
                                </a>
                                <span class="teacher-field text-white">Managing Director</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                                <p class="teacher-see-profile">
                                    <a href="#" class="btn app-store-btn">View my profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    team two section end-->

    <!--testimonial section start-->
    <section class="testimonial-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-5 text-center">
                        <h2>What Clients Say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="owl-carousel owl-theme client-testimonial custom-arrow custom-arrow-bottom-center mb-5">
                        <div class="item">
                            <div class="testimonial-single shadow-sm white-bg rounded p-4">
                                <blockquote>
                                    "WoW! ReftopHomes has made me a land owner after many years"
                                </blockquote>
                                <div class="client-img d-flex align-items-center justify-content-between pt-4">
                                    <div class="d-flex align-items-center">
                                    <!--    <img src="{{ $web_source }}/img/client-1.jpg" alt="client" width="50" class="img-fluid rounded-circle shadow-sm mr-3" /> -->
                                        <div class="client-info">
                                            <h5 class="mb-0">Oluwole Tinubu</h5>
                                            <small class="mb-0">Marketer</small>
                                        </div>
                                    </div>
                                    <div class="client-ratting">
                                        <ul class="list-inline client-ratting-list">
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        </ul>
                                        <span class="font-weight-bold">5.0 <small class="font-weight-lighter">Out of 5</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-single shadow-sm white-bg rounded p-4">
                                <blockquote>
                                    "Who knew property purchase could be this easy..Thumbs up ReftopHomes"
                                </blockquote>
                                <div class="client-img d-flex align-items-center justify-content-between pt-4">
                                    <div class="d-flex align-items-center">
                                    <!--    <img src="{{ $web_source }}/img/client-2.jpg" alt="client" width="50" class="img-fluid rounded-circle shadow-sm mr-3" /> -->
                                        <div class="client-info">
                                            <h5 class="mb-0">Chisom Frank</h5>
                                            <small class="mb-0">Business Man</small>
                                        </div>
                                    </div>
                                    <div class="client-ratting">
                                        <ul class="list-inline client-ratting-list">
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        </ul>
                                        <span class="font-weight-bold">5.0 <small class="font-weight-lighter">Out of 5</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-single shadow-sm white-bg rounded p-4">
                                <blockquote>
                                    "I've had no land disputes since I went through ReftopHomes. Thank You"
                                </blockquote>
                                <div class="client-img d-flex align-items-center justify-content-between pt-4">
                                    <div class="d-flex align-items-center">
                                     <!--   <img src="{{ $web_source }}/img/client-3.jpg" alt="client" width="50" class="img-fluid rounded-circle shadow-sm mr-3" /> -->
                                        <div class="client-info">
                                            <h5 class="mb-0">Joy Nwambueze</h5>
                                            <small class="mb-0">Accountant</small>
                                        </div>
                                    </div>
                                    <div class="client-ratting">
                                        <ul class="list-inline client-ratting-list">
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        </ul>
                                        <span class="font-weight-bold">5.0 <small class="font-weight-lighter">Out of 5</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-single shadow-sm white-bg rounded p-4">
                                <blockquote>
                                    "Theres nothing better than owning your own home, in a cool environment"
                                </blockquote>
                                <div class="client-img d-flex align-items-center justify-content-between pt-4">
                                    <div class="d-flex align-items-center">
                                       <!-- <img src="{{ $web_source }}/img/client-4.jpg" alt="client" width="50" class="img-fluid rounded-circle shadow-sm mr-3" /> -->
                                        <div class="client-info">
                                            <h5 class="mb-0">Jonathan Ayomide</h5>
                                            <small class="mb-0">Banker</small>
                                        </div>
                                    </div>
                                    <div class="client-ratting">
                                        <ul class="list-inline client-ratting-list">
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        </ul>
                                        <span class="font-weight-bold">5.0 <small class="font-weight-lighter">Out of 5</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--testimonial section end-->


    <!--client section start
    <div class="client-section ptb-100">
        <div class="container">
            
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                        <div class="item single-client">
                            <img src="{{ $web_source }}/img/clients-logo-01.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{ $web_source }}/img/clients-logo-02.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{ $web_source }}/img/clients-logo-03.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{ $web_source }}/img/clients-logo-04.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{ $web_source }}/img/clients-logo-05.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{ $web_source }}/img/clients-logo-06.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{ $web_source }}/img/clients-logo-07.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{ $web_source }}/img/clients-logo-08.png" alt="client logo" class="client-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    client section start-->

</div>
<!--body content wrap end-->
@stop
