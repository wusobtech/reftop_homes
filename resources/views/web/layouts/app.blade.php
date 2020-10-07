<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description"
          content="Think different, Be different. We are a real estate company with a focus on delivering quality real estate investment products to individuals seeking medium and long term high yielding properties">
    <meta name="author" content="WUSOBTECH">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="Reftophomes"/> <!-- website name -->
    <meta property="og:site" content="https://reftophomes.com"/> <!-- website link -->
    <meta property="og:title" content="ReftopHomes"/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="Think different, Be different. We are a real estate company with a focus on delivering quality real estate investment products to individuals seeking medium and long term high yielding properties"/> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="https://reftophomes.com/web/img/icon.jpg"/> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content=""/> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article"/>

    <!--title-->
    <title>@yield('title') :: ReftopHomes</title>

    <!--favicon icon-->
    <link rel="icon" href="{{ $web_source }}/img/icon.png" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans:400,600&display=swap" rel="stylesheet">

    @include('web.includes.style')
</head>
<body>

<!--loader start-->
<div id="preloader">
    <div class="loader1">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!--loader end-->
    @include('web.includes.header')
    @yield('content')
        @include('web.includes.footer')

<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-angle-up"></span>
</button>
<!--bottom to top button end-->

        @include('web.includes.script')
</body>

</html>
