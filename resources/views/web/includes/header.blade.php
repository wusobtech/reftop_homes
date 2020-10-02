
<!--header section start-->
<header class="header">
    <!--topbar start-->
    <div id="header-top-bar" class="primary-bg py-2">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-7 col-lg-7 d-none d-md-block d-lg-block">
                    <div class="topbar-text text-white">
                        <ul class="list-inline">
                            <li class="list-inline-item"><span class="fas fa-envelope mr-1"></span> <a href="mailto:support@yourdomain.com">support@yourdomain.com</a></li>
                            <li class="list-inline-item"><span class="fas fa-map-marker mr-1"></span> Address CA-234/B New York, USA</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="topbar-text text-white">
                        <ul class="list-inline text-md-right text-lg-right text-left">
                            <li class="list-inline-item"><span class="ti-phone mr-2"></span> Call Now: <strong>883-4565-123456</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--topbar end-->
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top white-bg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{ $web_source }}/img/logo-color.png" alt="logo" class="img-fluid"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu">
                    <li class=""><a href="{{ route('homepage') }}" > Home</a></li>
                    <li><a  href="{{ route('aboutUs') }}">About Us</a></li>
                    <li><a  href="{{ route('services') }}">Services</a></li>
                    <li><a  href="#">Blog</a></li>
                    <li><a  href="{{ route('contactUs') }}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--header section end-->
