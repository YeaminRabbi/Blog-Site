@extends('layouts.frontend.master')

@section('content')
    <div class="row" id="vue-app">
        <blog-view-component :id="{{ $id }}"></blog-view-component>

        <div class="col-lg-4 max-width">
            <!--widget-author-->
            <div class="widget">
                <div class="widget-author">
                    <a href="author.html" class="image">
                        <img src="{{ asset('frontendAssets/img/author/author.jpg') }}" alt="">
                    </a>
                    <h6>
                        <span>Hi, I'm David Smith</span>
                    </h6>
                    <p>

                        I'm David Smith, husband and father ,
                        I love Photography,travel and nature. I'm working as a writer and blogger with experience
                        of 5 years until now.
                    </p>


                    <div class="social-media">
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="color-facebook">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="color-instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="color-twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="color-youtube">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="color-pinterest">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/-->

            <!--widget-latest-posts-->
            <div class="widget ">
                <div class="section-title">
                    <h5>Latest Posts</h5>
                </div>
                <ul class="widget-latest-posts">
                    <li class="last-post">
                        <div class="image">
                            <a href="post-default.html">
                                <img src="{{ asset('frontendAssets/img/latest/1.jpg') }}" alt="...">
                            </a>
                        </div>
                        <div class="nb">1</div>
                        <div class="content">
                            <p><a href="post-default.html">5 Things I Wish I Knew Before Traveling to Malaysia</a></p>
                            <small><span class="icon_clock_alt"></span> January 15, 2021</small>
                        </div>
                    </li>
                    <li class="last-post">
                        <div class="image">
                            <a href="post-default.html">
                                <img src="{{ asset('frontendAssets/img/latest/2.jpg') }}" alt="...">
                            </a>
                        </div>
                        <div class="nb">2</div>
                        <div class="content">
                            <p>
                                <a href="post-default.html">Everything you need to know about visiting the Amazon.</a>
                            </p>
                            <small>
                                <span class="icon_clock_alt"></span> January 15, 2021</small>
                        </div>
                    </li>
                    <li class="last-post">
                        <div class="image">
                            <a href="post-default.html">
                                <img src="{{ asset('frontendAssets/img/latest/3.jpg') }}" alt="...">
                            </a>
                        </div>
                        <div class="nb">3</div>
                        <div class="content">
                            <p>
                                <a href="post-default.html">How to spend interesting vacation after hard work?</a>
                            </p>
                            <small>
                                <span class="icon_clock_alt"></span> January 15, 2021</small>
                        </div>
                    </li>
                    <li class="last-post">
                        <div class="image">
                            <a href="post-default.html">
                                <img src="{{ asset('frontendAssets/img/latest/4.jpg') }}" alt="...">
                            </a>
                        </div>
                        <div class="nb">4</div>
                        <div class="content">
                            <p>
                                <a href="post-default.html">10 Best and Most Beautiful Places to Visit in Italy</a>
                            </p>
                            <small>
                                <span class="icon_clock_alt"></span> January 15, 2021</small>
                        </div>
                    </li>
                </ul>
            </div>
            <!--/-->

            <!--widget-categories-->
            <div class="widget">
                <div class="section-title">
                    <h5>Categories</h5>
                </div>
                <ul class="widget-categories">
                    <li>
                        <a href="#" class="categorie">Livestyle</a>
                        <span class="ml-auto">22 Posts</span>
                    </li>
                    <li>
                        <a href="#" class="categorie">Travel</a>
                        <span class="ml-auto">18 Posts</span>
                    </li>
                    <li>
                        <a href="#" class="categorie">Food</a>
                        <span class="ml-auto">14 Posts</span>
                    </li>
                    <li>
                        <a href="#" class="categorie">fashion</a>
                        <span class="ml-auto">10 Posts</span>
                    </li>
                </ul>
            </div>
            <!--/-->

            <!--widget-instagram-->
            <div class="widget">
                <div class="section-title">
                    <h5>Instagram</h5>
                </div>
                <ul class="widget-instagram">
                    <li>
                        <a class="image" href="#">
                            <img src="{{ asset('frontendAssets/img/instagram/1.jpg') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="image" href="#">
                            <img src="{{ asset('frontendAssets/img/instagram/2.jpg') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="image" href="#">
                            <img src="{{ asset('frontendAssets/img/instagram/3.jpg') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="image" href="#">
                            <img src="{{ asset('frontendAssets/img/instagram/4.jpg') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="image" href="#">
                            <img src="{{ asset('frontendAssets/img/instagram/5.jpg') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="image" href="#">
                            <img src="{{ asset('frontendAssets/img/instagram/6.jpg') }}" alt="">
                        </a>
                    </li>
                </ul>

            </div>
            <!--/-->

            <!--widget-tags-->
            <div class="widget">
                <div class="section-title">
                    <h5>Tags</h5>
                </div>
                <div class="widget-tags">
                    <ul class="list-inline">
                        <li>
                            <a href="blog-grid.html">Travel</a>
                        </li>
                        <li>
                            <a href="blog-grid.html">Nature</a>
                        </li>
                        <li>
                            <a href="blog-grid.html">tips</a>
                        </li>
                        <li>
                            <a href="blog-grid.html">forest</a>
                        </li>
                        <li>
                            <a href="blog-grid.html">beach</a>
                        </li>
                        <li>
                            <a href="blog-grid.html">fashion</a>
                        </li>
                        <li>
                            <a href="blog-grid.html">livestyle</a>
                        </li>
                        <li>
                            <a href="blog-grid.html">healty</a>
                        </li>
                        <li>
                            <a href="blog-grid.html">food</a>
                        </li>
                        <li>
                            <a href="blog-grid.html">breakfast</a>
                        </li>

                    </ul>
                </div>
            </div>
            <!--/-->
        </div>
    </div>
@endsection
