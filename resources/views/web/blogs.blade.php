@extends('web.layouts.app')
@section('title' , 'Our Blog')
@section('content')

<!--body content wrap start-->
<div class="main">

    <!--header section start-->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">Blog Default</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                                <li class="list-inline-item breadcrumb-item"><a href="#">Blog</a></li>
                                <li class="list-inline-item breadcrumb-item active">Blog Default</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->

    <!--blog section start-->
    <div class="module ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="row row-post-thumbnail">
                       @foreach ($posts as $post)
                            <!-- Post-->
                            <article class="post row align-items-center">
                                <div class="col-md-5">
                                    <div class="post-preview"><a href="#"><img src="img/blog/1.jpg" alt="article" class="img-fluid"/></a></div>
                                </div>
                                <div class="col-md-7">
                                    <div class="post-wrapper">
                                        <div class="post-header">
                                            <h2 class="post-title"><a href="#">Bluetooth Speaker</a></h2>
                                            <ul class="post-meta">
                                                <li>November 18, 2016</li>
                                                <li><a href="#">Branding</a>, <a href="#">Design</a></li>
                                                <li><a href="#">3 Comments</a></li>
                                            </ul>
                                        </div>
                                        <div class="post-content">
                                            <p>See how your users experience your website in realtime or view trends to see any changes in performance over time.</p>
                                            <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Post end-->
                       @endforeach
                    </div>

                    <!-- Page Navigation-->
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="custom-pagination-nav">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-left"></span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Navigation end-->
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="sidebar-right pl-4">

                        <!-- Search widget-->
                        <aside class="widget widget-search">
                            <form>
                                <input class="form-control" type="search" placeholder="Type Search Words">
                                <button class="search-button" type="submit"><span class="ti-search"></span></button>
                            </form>
                        </aside>

                        @if ($categories->count() > 0)
                            <!-- Categories widget-->
                            <aside class="widget widget-categories">
                                <div class="widget-title">
                                    <h6>Categories</h6>
                                </div>
                                <ul>
                                    @foreach ($categories as $category)
                                        <li><a href="">{{ $category->title }} <span class="float-right">112</span></a></li>
                                    @endforeach
                                </ul>
                            </aside>
                        @endif


                        @if ($recent_posts->count() > 0)
                            <!-- Recent entries widget-->
                            <aside class="widget widget-recent-entries-custom">
                                <div class="widget-title">
                                    <h6>Recent Posts</h6>
                                </div>
                                <ul>
                                    <li class="clearfix">
                                        <div class="wi"><a href="#"><img src="img/blog/3.jpg" alt="recent post" class="img-fluid rounded"/></a></div>
                                        <div class="wb"><a href="#">Map where your photos were taken and discover local points.</a><span class="post-date">May 8, 2016</span></div>
                                    </li>
                                </ul>
                            </aside>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog section end-->

</div>
<!--body content wrap end-->
@stop
