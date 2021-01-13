
@extends('layouts.main')
@section('content')
 <!-- Blog Area Wrapper Start Here -->
 <div class="blog-area-wrapper">
    <!-- Breadcrumb Area Start Here -->
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3">Blog Details Fullwidth</h3>
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
            <div class="row">
                <div class="col-12 col-custom widget-mt">
                    <!-- Blog Details wrapper Area Start -->
                    <div class="blog-post-details">
                        <figure class="blog-post-thumb mb-5">
                            <img src="assets/images/blog/blog1.jpg" alt="Blog Image">
                        </figure>
                        <section class="blog-post-wrapper product-summery">
                            <div class="section-content section-title">
                                <h2 class="section-title-2 mb-3">Standard blog post one</h2>
                                <p class="mb-4">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.</p>
                                <blockquote class="blockquote mb-4">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock</p>
                                </blockquote>
                                <p class="mb-5">and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                            </div>
                            <div class="share-article">
                                <span class="left-side">
                            <a href="#"> <i class="fa fa-long-arrow-left"></i> Older Post</a>
                        </span>
                                <h6 class="text-uppercase">Share this article</h6>
                                <span class="right-side">
                        <a href="#">Newer Post <i class="fa fa-long-arrow-right"></i></a>
                        </span>
                            </div>
                            <div class="social-share">
                                <a href="#"><i class="fa fa-facebook-square facebook-color"></i></a>
                                <a href="#"><i class="fa fa-twitter-square twitter-color"></i></a>
                                <a href="#"><i class="fa fa-linkedin-square linkedin-color"></i></a>
                                <a href="#"><i class="fa fa-pinterest-square pinterest-color"></i></a>
                            </div>
                            <div class="comment-area-wrapper mt-5">
                                <div class="comments-view-area">
                                    <h3 class="mb-5">3 Comments</h3>
                                    <div class="single-comment-wrap mb-4 d-flex">
                                        <figure class="author-thumb">
                                            <a href="#">
                                                <img src="assets/images/review/1.jpg" alt="Author">
                                            </a>
                                        </figure>
                                        <div class="comments-info">
                                            <p class="mb-2">This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet</p>
                                            <div class="comment-footer d-flex justify-content-between">
                                                <a href="#" class="author"><strong>Duy</strong> - July 30, 2021</a>
                                                <a href="#" class="btn-reply"><i class="fa fa-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-comment-wrap mb-4 comment-reply d-flex">
                                        <figure class="author-thumb">
                                            <a href="#">
                                                <img src="assets/images/review/1.jpg" alt="Author">
                                            </a>
                                        </figure>
                                        <div class="comments-info">
                                            <p class="mb-2">Praesent bibendum risus pellentesque faucibus rhoncus. Etiam a mollis odio. Integer urna nisl, fermentum eu mollis et, gravida eu elit.</p>
                                            <div class="comment-footer d-flex justify-content-between">
                                                <a href="#" class="author"><strong>Jack</strong> - July 30, 2021</a> <a href="#" class="btn-reply"><i class="fa fa-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-comment-wrap mb-4 d-flex">
                                        <figure class="author-thumb">
                                            <a href="#">
                                                <img src="assets/images/review/1.jpg" alt="Author">
                                            </a>
                                        </figure>
                                        <div class="comments-info">
                                            <p class="mb-2">Praesent bibendum risus pellentesque faucibus rhoncus. Etiam a mollis odio. Integer urna nisl, fermentum eu mollis et, gravida eu elit.</p>
                                            <div class="comment-footer d-flex justify-content-between">
                                                <a href="#" class="author"><strong>Duy</strong> - July 30, 2021</a>
                                                <a href="#" class="btn-reply"><i class="fa fa-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- Blog Details Wrapper Area End -->
                    <!-- Blog Comments Area Start Here -->
                    <form action="#">
                        <div class="comment-box">
                            <h3>Leave A Comment</h3>
                            <div class="row">
                                <div class="col-12 col-custom">
                                    <div class="input-item mt-4 mb-4">
                                        <textarea cols="30" rows="5" name="comment" class="border rounded-0 w-100 custom-textarea input-area" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 col-custom">
                                    <div class="input-item mb-4">
                                        <input class="border rounded-0 w-100 input-area name" type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-custom">
                                    <div class="input-item mb-4">
                                        <input class="border rounded-0 w-100 input-area email" type="text" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12 col-custom mt-40">
                                    <button type="submit" class="btn flosun-button primary-btn rounded-0 w-100">Post comment</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Blog Comments Area End Here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Main Area End Here -->
</div>
<!-- Blog Area Wrapper End Here -->
@endsection
