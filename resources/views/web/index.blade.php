@extends('web.layouts.app')
@section('title' , 'Home')
@section('content')

<!--body content wrap start-->
<div class="main">

    <!--hero section start-->
    <section class="hero-equal-height pt-165 pb-100 gradient-overly-right-light" style="background: url('{{ $web_source }}/img/hero-bg1.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-6">
                    <div class="hero-slider-content">
                        <span class="text-uppercase">Total Real Estate Solutions</span>
                        <h1>Your Most Trusted Business Partner</h1>
                        <p class="lead">Think different,
                            Be different.
                            We are a real estate company with a focus on delivering quality real estate investment products to individuals seeking medium and long term high yielding properties. </p>

                        <div class="action-btns mt-3">
                            <a href="{{route('contactUs')}}" class="btn secondary-solid-btn">Meet Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

    <!--promo section start
    <section class="promo-block ptb-100 mt--165 z-index position-relative">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="single-promo-block promo-hover-bg-1 hover-image shadow-lg p-5 custom-radius white-bg">
                        <div class="promo-block-icon mb-3">
                            <span class="fab fa-superpowers icon-md color-primary"></span>
                        </div>
                        <div class="promo-block-content">
                            <h5>Creative Design</h5>
                            <p>Compellingly promote collaborative products without synergistic schemas. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="single-promo-block promo-hover-bg-2 hover-image shadow-lg p-5 custom-radius white-bg">
                        <div class="promo-block-icon mb-3">
                            <span class="far fa-clock icon-md color-primary"></span>
                        </div>
                        <div class="promo-block-content">
                            <h5>Cyber Security</h5>
                            <p>Enthusiastically scale mission-critical imperatives rather than an expanded array.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="single-promo-block promo-hover-bg-3 hover-image shadow-lg p-5 custom-radius white-bg">
                        <div class="promo-block-icon mb-3">
                            <span class="fas fa-headphones-alt icon-md color-primary"></span>
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
    promo section end-->

    <!--about us section start-->
    <section class="about-us-section pb-100 mt-4">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-12 col-lg-6">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <h2>Corporate Real Estate Investments Company for Your needs</h2>
                        <p class="lead">Interactively deliver niche properties and homes. Professionally
                            repurpose strategies.</p>
                        <ul class="list-unstyled tech-feature-list">
                            <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Properties</strong> Land Acquisition</li>
                            <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Property Management</strong> Consultancy</li>
                            <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Property Leasing</strong> Sales </li>
                        </ul>
                        <div class="action-btns mt-4">
                            <a href="{{route('services')}}" class="btn primary-solid-btn mr-2">View Our Services</a>
                            <a href="{{route('contactUs')}}" class="btn outline-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="image-wrap">
                        <img src="{{ $web_source }}/img/about-img.jpg" alt="Our-Agency" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about us section end-->

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
            <div class="col-lg-6 col-md-6 col-sm-6">
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
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="services-single d-flex p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                    <div class="service-icon mr-4">
                        <span class="ti-stats-up icon-md color-secondary"></span>
                    </div>
                    <div class="services-content-wrap">
                        <h5>Real Estate Development</h5>
                        <p class="mb-0">Our development process at ReftopHomes involves the purchase of raw land, rezoning, construction and renovation of buildings, and sale or lease of the finished product to end users.</p>
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

    <!--promo section start
    <section class="promo-section gradient-bg ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="app-business-content text-center text-white">
                        <h2 class="text-white">Download Apps Managing Business</h2>
                        <p class="lead">Building your Apps busines helps attract more potential clients.
                            Our integrated marketing team will work directly long-term high-impact convergence. </p>

                        <div class="action-btns mt-5">
                            <ul class="list-inline app-download-list">
                                <li class="list-inline-item">
                                    <a href="#" class="d-flex align-items-center border rounded">
                                        <span class="fab fa-windows icon-sm mr-3"></span>
                                        <div class="download-text text-left">
                                            <span>Download form</span>
                                            <h5 class="mb-0">Windows</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="d-flex align-items-center border rounded">
                                        <span class="fab fa-apple icon-sm mr-3"></span>
                                        <div class="download-text text-left">
                                            <span>Download form</span>
                                            <h5 class="mb-0">App Store</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="d-flex align-items-center border rounded">
                                        <span class="fab fa-google-play icon-sm mr-3"></span>
                                        <div class="download-text text-left">
                                            <span>Download form</span>
                                            <h5 class="mb-0">Google Play</h5>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    promo section end-->

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

    <!--blog section start-->
    <section class="our-blog-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-heading mb-5">
                        <h2>Our Latest News</h2>
                        <p class="lead">
                            Enthusiastically drive revolutionary opportunities before emerging leadership. Distinctively
                            transform tactical methods of empowerment via resource.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <a href="#"><span class="category position-absolute">Business</span></a>
                            <a href="#"><img src="{{ $web_source }}/img/blog/1.jpg" class="card-img-top position-relative img-fluid" alt="blog"></a>
                        </div>
                        <div class="card-body">
                            <h3 class="h5 mb-2 card-title"><a href="#">Appropriately productize fully</a></h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk.</p>
                        </div>
                        <div class="card-footer border-0 d-flex align-items-center justify-content-between">
                            <div class="author-meta d-flex align-items-center">
                                <span class="fa fa-user mr-2 p-3 bg-white rounded-circle border"></span>
                                <div class="author-content">
                                    <a href="#" class="d-block">ThemeTags</a>
                                    <small>May 26, 2020</small>
                                </div>
                            </div>
                            <div class="author-like">
                                <a href="#"><span class="fa fa-share-alt"></span> 50</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <a href="#"><span class="category position-absolute">SEO, Analytics</span></a>
                            <a href="#"><img src="{{ $web_source }}/img/blog/2.jpg" class="card-img-top position-relative img-fluid" alt="blog"></a>
                        </div>
                        <div class="card-body">
                            <h3 class="h5 mb-2 card-title"><a href="#">Quickly formulate backend</a></h3>
                            <p class="card-text">Synergistically engage effective ROI after customer directed partnerships.</p>
                        </div>
                        <div class="card-footer border-0 d-flex align-items-center justify-content-between">
                            <div class="author-meta d-flex align-items-center">
                                <span class="fa fa-user mr-2 p-3 bg-white rounded-circle border"></span>
                                <div class="author-content">
                                    <a href="#" class="d-block">ThemeTags</a>
                                    <small>May 28, 2020</small>
                                </div>
                            </div>
                            <div class="author-like">
                                <a href="#"><span class="fa fa-share-alt"></span> 30</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <a href="#"><span class="category position-absolute">Marketing</span></a>
                            <a href="#"><img src="{{ $web_source }}/img/blog/3.jpg" class="card-img-top position-relative img-fluid" alt="blog"></a>
                        </div>
                        <div class="card-body">
                            <h3 class="h5 mb-2 card-title"><a href="#">Objectively extend extensive</a></h3>
                            <p class="card-text">Holisticly mesh open-source leadership rather than proactive users.</p>
                        </div>
                        <div class="card-footer border-0 d-flex align-items-center justify-content-between">
                            <div class="author-meta d-flex align-items-center">
                                <span class="fa fa-user mr-2 p-3 bg-white rounded-circle border"></span>
                                <div class="author-content">
                                    <a href="#" class="d-block">ThemeTags</a>
                                    <small>May 30, 2020</small>
                                </div>
                            </div>
                            <div class="author-like">
                                <a href="#"><span class="fa fa-share-alt"></span> 55</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog section end-->

    <!--team two section start-->
    <section class="team-two-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Meet Our Lovely Team</h2>
                        <p class="lead">Our team is defined by its distinct mix of individuals, which creates unique ideas to drive us
                            to building second to non real-estate transactions.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                    <div class="action-btn text-lg-right text-sm-left">
                        <a href="{{route('aboutUs')}}" class="btn secondary-solid-btn">Meet the Team</a>
                    </div>
            </div>
        </div>
    </section>
    <!--team two section end-->

    <!--call to action section start-->
    <section class="call-to-action py-5">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-md-7">
                    <div class="subscribe-content">
                        <h3 class="mb-1">Real Estate Agency for You</h3>
                        <p>Get reliable, affordable lands and properties.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="action-btn text-lg-right text-sm-left">
                        <a href="#" class="btn secondary-solid-btn">Contact With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action section end-->

</div>
<!--body content wrap end-->



@stop
