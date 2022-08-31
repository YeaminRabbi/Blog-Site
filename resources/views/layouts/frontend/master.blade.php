<!doctype html>
<html lang="en">


<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- favicon -->
    <link rel="icon" sizes="16x16" href="assets/img/favicon.png">

    <!-- Title -->
    <title> Blog  </title>

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

    <!-- CSS Plugins -->
    <link rel="stylesheet" href="{{ asset("frontendassets/css/all.css") }}">
    <link rel="stylesheet" href="{{ asset("frontendassets/css/elegant-font-icons.css") }}">
    <link rel="stylesheet" href="{{ asset("frontendassets/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("frontendassets/css/owl.carousel.css") }}">
    <!-- main style -->
    <link rel="stylesheet" href="{{ asset("frontendassets/css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("frontendassets/css/custom.css") }}">
</head>

<body>
    <!--loading -->
    <div class="loading">
        <div class="circle"></div>
    </div>
    <!--/-->

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <!--logo-->
            <div class="logo">
                <a href="index.html">
                    <img src="{{ asset("frontendassets/img/logo-dark.png") }}" alt="" class="logo-dark">
                    <img src="{{ asset("frontendassets/img/logo-white.png") }}" alt="" class="logo-white">   
                </a>
            </div>
            <!--/-->
    
            <!--navbar-collapse-->
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav ml-auto mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="index.html" data-toggle="dropdown"> Home </a>
                        <ul class="dropdown-menu fade-up">
                            <li>
                                <a class="dropdown-item" href="index.html">Demo 1</a>
                            </li>
                            <li>
                                <a class="dropdown-item active" href="index-2.html">Demo 2 </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-3.html">Demo 3 </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-4.html">Demo 4 </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-5.html">Demo 5</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-6.html">Demo 6 </a>
                            </li>
                        </ul>
                    </li>
    
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="blog-grid.html" data-toggle="dropdown"> Blog </a>
                        <ul class="dropdown-menu fade-up">
                            <li>
                                <a class="dropdown-item" href="blog-grid.html"> Blog grid</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="blog-masonry.html"> Blog masonry </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="blog-list.html"> Blog list </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="post-default.html" data-toggle="dropdown"> Posts Features </a>
                        <ul class="dropdown-menu fade-up">
                            <li>
                                <a class="dropdown-item" href="post-default.html"> post default</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-video.html"> post video</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-audio.html"> post audio</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-gallery.html"> post gallery</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-no-sidebar.html"> post no sidebar </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-left-sidebar.html"> post left sidebar </a>
                            </li>
                        </ul>
                    </li>
    
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">Pages </a>
                        <ul class="dropdown-menu fade-up">
                            <li>
                                <a class="dropdown-item" href="about.html"> About </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="author.html"> author </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="login.html"> Login </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="register.html"> Sign up </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="page404.html"> Page 404 </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html"> Contact </a>
                    </li>
                   
                </ul>
            </div>
            <!--/-->
    
            <!--navbar-right-->
            <div class="navbar-right ml-auto">
                <div class="theme-switch-wrapper">
                    <label class="theme-switch" for="checkbox">
                        <input type="checkbox" id="checkbox" />
                        <div class="slider round"></div>
                    </label>
                </div>
                <div class="social-icones">
                    <ul class="list-inline">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
    
                <div class="search-icon">
                    <i class="icon_search"></i>
                </div>
    
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
    <!--/-->

    <!--grid-layout-->
    <section class="section pt-85">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!--Post-1-->
                    <div class="post-card">
                        <div class="post-card-image">
                            <a href="post-default.html">
                                <img src="{{ asset("frontendassets/img/blog/20.jpg") }}" alt="">
                            </a>
                        </div>
                        <div class="post-card-content">
                            <a href="blog-grid.html" class="categorie">Livestyle</a>
                            <h5>
                                <a href="post-default.html">How to Choose Outfits for Work for woman and men</a>
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
                </div>
                
              
            </div>
        </div>
    </section>
    <!--/-->

    <!--newslettre-->
    <section class="newslettre">
        <div class="container-fluid">
            <div class="newslettre-width text-center">
                <div class="newslettre-info">
                    <h5>Subscribe to our Newslatter</h5>
                    <p> Sign up for free and be the first to get notified about new posts. </p>
                </div>
                <form action="#" class="newslettre-form">
                    <div class="form-flex">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your email adress" required="required">
                        </div>
                        <button class="submit-btn" type="submit">Subscribe</button>
                    </div>
                </form>
                <div class="social-icones">
                    <ul class="list-inline">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>Facebook</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>Twitter </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>Instagram </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>Youtube</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <!--footer-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright">
                        <p>© Copyright 2021
                            <a href="#">AssiaGroupe</a>, All rights reserved.</p>
                    </div>
                    <div class="back">
                        <a href="#" class="back-top">
                            <i class="arrow_up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--Search-form-->
    <div class="search">
        <div class="container-fluid">
            <div class="search-width  text-center">
                <button type="button" class="close">
                    <i class="icon_close"></i>
                </button>
                <form class="search-form" action="#">
                    <input type="search" value="" placeholder="What are you looking for?">
                    <button type="submit" class="search-btn">search</button>
                </form>
            </div>
        </div>
    </div>
    <!--/-->

    

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset("frontendassets/js/jquery-3.5.0.min.js") }}"></script>
    <script src="{{ asset("frontendassets/js/popper.min.js") }}"></script>
    <script src="{{ asset("frontendassets/js/bootstrap.min.js") }}"></script>

    <!-- JS Plugins  -->
    <script src="{{ asset("frontendassets/js/ajax-contact.js") }}"></script>
    <script src="{{ asset("frontendassets/js/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("frontendassets/js/switch.js") }}"></script>
    
    <!-- JS main  -->
    <script src="{{ asset("frontendassets/js/main.js") }}"></script>


</body>
</html>