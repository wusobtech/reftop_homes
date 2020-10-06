@extends('web.layouts.app')
@section('title' , 'Our Services')
@section('content')
<!--body content wrap start-->
<div class="main">

    <!--header section start-->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url('{{ $web_source }}/img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">Our Services</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                                <li class="list-inline-item breadcrumb-item active">Services</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->

    <!--promo block with hover effect start
    <section class="promo-block ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="single-promo-block promo-hover-bg-1 hover-image shadow-lg p-5 rounded">
                        <div class="promo-block-icon mb-3">
                            <span class="ti-vector icon-md color-primary"></span>
                        </div>
                        <div class="promo-block-content">
                            <h5>Creative Design</h5>
                            <p>Compellingly promote collaborative products without synergistic schemas. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="single-promo-block promo-hover-bg-2 hover-image shadow-lg p-5 rounded">
                        <div class="promo-block-icon mb-3">
                            <span class="ti-lock icon-md color-primary"></span>
                        </div>
                        <div class="promo-block-content">
                            <h5>Cyber Security</h5>
                            <p>Enthusiastically scale mission-critical imperatives rather than an expanded array.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="single-promo-block promo-hover-bg-3 hover-image shadow-lg p-5 rounded">
                        <div class="promo-block-icon mb-3">
                            <span class="ti-cloud icon-md color-primary"></span>
                        </div>
                        <div class="promo-block-content">
                            <h5>Cloud Services</h5>
                            <p>Rapidiously create cooperative resources rather than client-based leadership skills.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    promo block with hover effect end-->

    <!--services section start-->
    <section class="services-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Building</h2>
                        <p class="lead">we provide users with the best built properties and homes. Our engineers are well equiped for anything</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="services-single d-flex p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                        <div class="service-icon mr-4">
                            <span class="ti-announcement icon-md color-secondary"></span>
                        </div>
                        <div class="services-content-wrap">
                            <h5>Land Banking</h5>
                            <p class="mb-0">We offer Sales and marketing services to sell buildings and lands. 
                                We will help you make money out of your land or properties 
                            </p>
                        </div>
                    </div>
                </div>
            <!--    <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="services-single d-flex p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                        <div class="service-icon mr-4">
                            <span class="ti-light-bulb icon-md color-secondary"></span>
                        </div>
                        <div class="services-content-wrap">
                            <h5>Property management</h5>
                            <p class="mb-0">We can help you manage your properties and units. Our jobs include collecting rent, showing units, fixing deficiencies, performing repairs, and managing tenants. </p>
                        </div>
                    </div>
                </div>
            -->
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="services-single d-flex p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                        <div class="service-icon mr-4">
                            <span class="ti-stats-up icon-md color-secondary"></span>
                        </div>
                        <div class="services-content-wrap">
                            <h5>Real Estate Development</h5>
                            <p class="mb-0">we can help you secure your future by investing in our landbanking,our job include land banking, real estate development, real estate broking, construction</p>
                         </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="services-single d-flex p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                        <div class="service-icon mr-4">
                            <span class="ti-headphone icon-md color-secondary"></span>
                        </div>
                        <div class="services-content-wrap">
                            <h5>Creative Consultancy</h5>
                            <p class="mb-0">Conveniently productize corporate imperatives for innovative best practices ideas whereas ethical change. We work with a variety of real estate professionals who work in the industry and help make it function. </p>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services section end-->

    <!--counter section start-->
    <section class="call-to-action ptb-100 gradient-overlay"
             style="background: url('{{ $web_source }}/img/slider-img-3.jpg')no-repeat top center / cover fixed">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8">
                    <div class="call-to-action-content text-white text-center mb-4">
                        <h2 class="text-white mb-1">Say bye to accomodation problems</h2>
                        <p class="lead">Join our amazing clients and be part of our success story</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white">
                        <span class="ti-medall-alt icon-md"></span>
                        <h3 class="mb-0 text-white">1600</h3>
                        <p>Lands Sold</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white">
                        <span class="ti-user icon-md"></span>
                        <h3 class="mb-0 text-white">2500</h3>
                        <p>Happy clients</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white">
                        <span class="ti-cup icon-md"></span>
                        <h3 class="mb-0 text-white">2150</h3>
                        <p>Owned Properties</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white">
                        <span class="ti-user icon-md"></span>
                        <h3 class="mb-0 text-white">250</h3>
                        <p>Estates Constructed</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--counter section end-->

   <!--our work or portfolio section start-->
   <section class="our-portfolio-section ptb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-heading text-center mb-5">
                    <h2>Check Our Distinct Properties</h2>
                    <p class="lead">Our sites are dry land and are very affordable <br>Feel free to contact us for further information</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="text-center pb-2">
                    <button type="button" class="filter-btn" data-mixitup-control data-filter="all">All</button>
                    <button type="button" class="filter-btn" data-mixitup-control data-filter=".branding">Lands</button>
                    <button type="button" class="filter-btn" data-mixitup-control data-filter=".animation">Homes</button>
                    <button type="button" class="filter-btn" data-mixitup-control data-filter=".other">Beach View</button>
                </div>
                <div class="portfolio-container" id="MixItUp">
                    <div class="mix portfolio-item branding" data-ref="mixitup-target">
                        <div class="portfolio-wrapper">
                            <a href="" target="_blank">
                                <div class="content-overlay"></div>
                                <img class="img-fluid" src="{{ $web_source }}/img/portfolios/3.jpg" alt="portfolio"/>
                                <div class="content-details fadeIn-bottom text-white">
                                    <h5 class="text-white mb-1">Park View Estate</h5>
                                    <p>Ibeju Lekki</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="mix portfolio-item animation" data-ref="mixitup-target">
                        <div class="portfolio-wrapper">
                            <a href="" target="_blank">
                                <div class="content-overlay"></div>
                                <img class="img-fluid" src="{{ $web_source }}/img/portfolios/2.jpg" alt="portfolio"/>
                                <div class="content-details fadeIn-bottom text-white">
                                    <h5 class="text-white mb-1">Rose Park Estate</h5>
                                    <p>Ibeju Lekki</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="mix portfolio-item animation" data-ref="mixitup-target">
                        <div class="portfolio-wrapper">
                            <a href="" target="_blank">
                                <div class="content-overlay"></div>
                                <img class="img-fluid" src="{{ $web_source }}/img/portfolios/4.jpg" alt="portfolio"/>
                                <div class="content-details fadeIn-bottom text-white">
                                    <h5 class="text-white mb-1">Park View Estate</h5>
                                    <p>Ibeju Lekki</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="mix portfolio-item branding" data-ref="mixitup-target">
                        <div class="portfolio-wrapper">
                            <a href="" target="_blank">
                                <div class="content-overlay"></div>
                                <img class="img-fluid" src="{{ $web_source }}/img/portfolios/1.jpg" alt="portfolio"/>
                                <div class="content-details fadeIn-bottom text-white">
                                    <h5 class="text-white mb-1">Rose Park Estate</h5>
                                    <p>Ibeju Lekki</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="mix portfolio-item branding " data-ref="mixitup-target">
                        <div class="portfolio-wrapper">
                            <a href="" target="_blank">
                                <div class="content-overlay"></div>
                                <img class="img-fluid" src="{{ $web_source }}/img/portfolios/6.jpg" alt="portfolio"/>
                                <div class="content-details fadeIn-bottom text-white">
                                    <h5 class="text-white mb-1">Park View Estate</h5>
                                    <p>Ibeju Lekki</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="mix portfolio-item other " data-ref="mixitup-target">
                        <div class="portfolio-wrapper">
                            <a href="" target="_blank">
                                <div class="content-overlay"></div>
                                <img class="img-fluid" src="{{ $web_source }}/img/portfolios/7.jpg" alt="portfolio"/>
                                <div class="content-details fadeIn-bottom text-white">
                                    <h5 class="text-white mb-1">Beach View</h5>
                                    <p>Spacious and Beautiful</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="gap"></div>
                    <div class="gap"></div>
                    <div class="gap"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--our work or portfolio section end-->

    <!--client section start
    <div class="client-section ptb-100 gray-light-bg">
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
