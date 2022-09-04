@extends('layouts.frontend.master')

@section('content')


<div class="row">
    
    <div id="vue-app">
        <blog-list-component>

        </blog-list-component>
    </div> 
</div>

<!--/-->

{{-- <div id="vue-app">
    <blog-list-component>

    </blog-list-component>
</div> --}}
{{-- <div class="col-lg-4 col-md-6">
                    <!--Post-2-->
                    <div class="post-card">
                        <div class="post-card-image">
                            <a href="post-default.html">
                                <img src="{{ asset("frontendassets/img/blog/23.jpg") }}" alt="">
</a>
</div>
<div class="post-card-content">
    <a href="blog-grid.html" class="categorie">travel</a>
    <h5>
        <a href="post-default.html"> 10 Best and Most Beautiful Places to Visit in Italy
        </a>
    </h5>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio...
    </p>
    <div class="post-card-info">
        <ul class="list-inline">
            <li>
                <a href="author.html">
                    <img src="{{ asset("frontendassets/img/author/1.jpg") }}" alt="">
                </a>
            </li>
            <li>
                <a href="author.html">David Smith</a>
            </li>
            <li class="dot"></li>
            <li>January 15, 2021</li>
        </ul>
    </div>
</div>
</div>
<!--/-->
</div>
<div class="col-lg-4 col-md-6">
    <!--Post-3-->
    <div class="post-card">
        <div class="post-card-image">
            <a href="post-default.html">
                <img src="{{ asset("frontendassets/img/blog/24.jpg") }}" alt="">
            </a>
        </div>
        <div class="post-card-content">
            <a href="blog-grid.html" class="categorie">Food</a>
            <h5>
                <a href="post-default.html">Enjoy My Favourite Molten Chocolate Cake</a>
            </h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio...
            </p>
            <div class="post-card-info">
                <ul class="list-inline">
                    <li>
                        <a href="author.html">
                            <img src="{{ asset("frontendassets/img/author/1.jpg") }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="author.html">David Smith</a>
                    </li>
                    <li class="dot"></li>
                    <li>January 15, 2021</li>
                </ul>
            </div>
        </div>
    </div>
    <!--/-->
</div> --}}
@endsection
