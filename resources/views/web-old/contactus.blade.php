@extends('web.layouts.app1')
@section('title')
Contact Us Now
@endsection
@section('content')
    <!-- banner-w3layouts -->
    <section class="ab-info-main py-md-5 py-5">
        <div class="container py-md-5 py-5">
            <div class="ab-info-grids pt-md-5 pt-3">
                <div class="contact-info pt-md-5 pt-0 text-center">
                    <h3 class="tittle text-uppercase text-center mb-lg-5 mb-3 inner-tittle"><span class="sub-tittle">Find Us</span> Contact Us</h3>
                    <p class="text-center" data-aos="fade-up">Whether you have a question about services, trials, pricing, need a demo, or anything else, our team is ready to answer all your questions. We will be glad to provide your software solutions at your convinience and affordable price. Just contact us and we'll revert. Thanks! </p>
                    <div class="contact-form mt-md-5">
                        <div class="contact-form-inner mx-auto text-left">
                            <form id="contactForm" method="post" action="{{ url('/send') }}">
                                <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group" data-aos="fade-up">
                                            <label>Name</label>
                                            <input type="text" class="form-control" required id="name" placeholder="Enter Name" name="name">
                                        </div>
                                        <div class="form-group" data-aos="fade-up">
                                            <label>Email</label>
                                            <input type="email" class="form-control" required id="email" placeholder="Enter Email" name="email">
                                        </div>

                                    </div>
                                    <div class="col-lg-6">

                                        <div class="form-group" data-aos="fade-up">
                                            <label>Phone No.</label>
                                            <input type="text" class="form-control" required id="phone" placeholder="Enter Phone no." name="phone">
                                        </div>
                                        <div class="form-group" data-aos="fade-up">
                                            <label>Subject</label>
                                            <input type="text" class="form-control" required id="subject" placeholder="Subject" name="subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" data-aos="fade-up">
                                    <label>How can we help?</label>
                                    <textarea name="bodyMessage" class="form-control" required id="bodyMessage" placeholder="Enter Your Message Here"></textarea>
                                </div>
                                <input type="submit" class="btn btn-primary" value="Send Message" data-loading-text="Sending...">
                            </form>
                            <div class="map mt-md-5" data-aos="fade-up">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.1475662390053!2d3.5804754154079483!3d6.502996425203946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bfa753fd11f17%3A0x231e4f63a072574c!2sOwode%20Bus%20Stop!5e0!3m2!1sen!2sng!4v1598350963244!5m2!1sen!2sng" class="map" style="border:0" allowfullscreen=""></iframe> </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
