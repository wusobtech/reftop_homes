@extends('web.layouts.app')
@section('title' , 'Contact Us')
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
                        <h1 class="text-white mb-0">Contact Us</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item active">Contact Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->

    <!--contact us promo start-->
    <section class="contact-us-promo pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <span class="ti-mobile icon-sm color-secondary"></span>
                            </div>
                            <div><h5 class="mb-0">Call Us</h5>
                                <p class="text-muted mb-0">07063602099</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <span class="ti-location-pin icon-sm color-secondary"></span>
                            </div>
                            <div><h5 class="mb-0">Visit Us</h5>
                                <p class="text-muted mb-0">Sangotedo, Lagos</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <span class="ti-email icon-sm color-secondary"></span>
                            </div>
                            <div><h5 class="mb-0">Mail Us</h5>
                                <p class="text-muted mb-0">contact@reftophomes.com</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <span class="ti-headphone-alt icon-sm color-secondary"></span>
                            </div>
                            <div><h5 class="mb-0">Live Chat</h5>
                                <p class="text-muted mb-0">Chat with Us 24/7</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us promo end-->

    <!--contact us section start-->
    <section class="contact-us-section ptb-100">
        <div class="container contact">
            <div class="col-12 pb-3 message-box d-none">
                <div class="alert alert-danger"></div>
            </div>
            <div class="row justify-content-around">
                <div class="col-md-6">
                    <div class="contact-us-form gray-light-bg rounded p-5">
                        <h4>Ready to get started?</h4>
                        <form action="{{route('contact.store')}}" method="POST" id="contactForm" class="contact-us-form">
                                @csrf
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Enter name" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Enter email" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Enter Subject" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <button type="submit" class="btn secondary-solid-btn" id="btnContactUs">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="contact-us-content">
                        <h2>Looking for a home or property?</h2>
                        <p class="lead">Get reliable, affordable lands and properties.</p>

                        <a href="https://www.google.ng/maps/dir//EMPEROR+ESTATE+MALL,+Eti-Osa+100242,+Lekki/@6.4696685,3.638255,17z/data=!4m15!1m6!3m5!1s0x103bf967dbe9c993:0xce1179e2215788f2!2sEMPEROR+ESTATE+MALL!8m2!3d6.4696632!4d3.6404437!4m7!1m0!1m5!1m1!1s0x103bf967dbe9c993:0xce1179e2215788f2!2m2!1d3.6404437!2d6.4696632" class="btn outline-btn align-items-center" target="_blank">Get Directions <span class="ti-arrow-right pl-2"></span></a>

                        <hr class="my-5">

                        <h5>Our Office</h5>
                        <address>
                            2nd Floor emperor Estate Mall, km34, Lekki-Epe Express way <br>
                            Beside Novare Mall, (Shoprite) Sangotedo Lagos
                        </address>
                        <br>
                        <span>Whatsapp: 07063602099 </span> <br>
                        <span>Phone: 08155726553</span> <br>
                        <span>Email: <a href="mailto:contact@reftophomes.com" class="link-color">contact@reftophomes.com</a></span>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us section end-->

    <!--google map block start-->
    <div class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.409738626287!2d3.6382550142968206!3d6.469668525582859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf967dbe9c993%3A0xce1179e2215788f2!2sEMPEROR%20ESTATE%20MALL!5e0!3m2!1sen!2sng!4v1601764018192!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
       <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.83543450937!2d144.953735315922!3d-37.817323442021234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sbd!4v1571030260624!5m2!1sen!2sbd" height="450" style="border:0;" allowfullscreen=""></iframe> -->
    </div>
    <!--google map block end-->


</div>
<!--body content wrap end-->
@stop
