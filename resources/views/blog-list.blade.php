@extends('layouts.main')
@section('content')

<!-- Breadcrumb Area Start Here -->
<div class="breadcrumbs-area position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title-3">Blog Sidebar</h3>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->
<!-- Blog Main Area Start Here -->
<div class="blog-main-area">
    <div class="container container-default custom-area">
        <div class="row flex-row-reverse">
            <div class="col-lg-12 col-12 col-custom widget-mt">
                <!-- Shop Wrapper Start -->
                <div class="row">
                    <div class="col-12 col-md-6 col-custom mb-30">
                        <div class="blog-lst">
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a class="d-block" href="{{ 'blog-details' }}">
                                        <img src="assets/images/blog/blog1.jpg" alt="Blog Image" class="w-100">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-text">
                                        <h4><a href="{{ 'blog-details'}}">Standard blog post title</a></h4>
                                        <div class="blog-post-info">
                                            <span><a href="#">By admin</a></span>
                                            <span>December 18, 2020</span>
                                        </div>
                                        <p>Lorem ipsu dolor sit amet cons elits cumque adipisicing, sed do incid eiusmod tempor ut labore et dolore eveniet .</p>
                                        <a href="{{ 'blog-details' }}" class="readmore">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Shop Wrapper End -->
                <!-- Bottom Toolbar Start -->
                <div class="row">
                    <div class="col-sm-12 col-custom">
                        <div class="toolbar-bottom">
                            <div class="pagination">
                                <ul>
                                    <li class="current">1</li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="next"><a href="#">next</a></li>
                                    <li><a href="#">&gt;&gt;</a></li>
                                </ul>
                            </div>
                            <p class="desc-content text-center text-sm-right mb-0">Showing 1 - 12 of 34 result</p>
                        </div>
                    </div>
                </div>
                <!-- Bottom Toolbar End -->
            </div>

        </div>
    </div>
</div>
<!-- Blog Main Area End Here -->
@endsection
