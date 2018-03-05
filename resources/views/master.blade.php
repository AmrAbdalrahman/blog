<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>

    <!-- All CSS Plugins -->
    <link href="{!! asset('css/plugin.css') !!}"  rel="stylesheet" type="text/css" />
    <!-- Main CSS Stylesheet -->
    <link href="{!! asset('css/style.css') !!}"  rel="stylesheet" type="text/css" />
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">

    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>

<!-- Preloader Start -->
<div class="preloader">
    <div class="rounder"></div>
</div>
<!-- Preloader End -->

@include('template.header')
<div id="main">
    <div class="container">
        <div class="row">

            <!-- About Me (Left Sidebar) Start -->
            <div class="col-md-3">
                <div class="about-fixed">

                    <div class="my-pic">
                        <img src="{{url('images/pic/my-pic.png')}}" alt="">
                        <a href="javascript:void(0)" class="collapsed" data-target="#menu" data-toggle="collapse"><i class="icon-menu menu"></i></a>
                    </div>

                    <div class="my-detail">

                        <div class="white-spacing">
                            <h1>Amr Ahmed</h1>
                            <span>Web Developer</span>
                        </div>

                        <ul class="social-icon">
                            <li><a href="https://www.facebook.com/profile.php?id=100005312403958" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://github.com/AmrAlmagic" target="_blank" class="github"><i class="fa fa-github"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <!-- About Me (Left Sidebar) End -->
@yield('content')
        <!-- Blog Post (Right Sidebar) End -->

        </div>
    </div>
</div>
@include('template.footer')


<!-- Back to Top Start -->
<a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
<!-- Back to Top End -->


<!-- All Javascript Plugins  -->
<script type="text/javascript" src="{!! asset('js/jquery.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/plugin.js') !!}"></script>

<!-- Main Javascript File  -->
<script type="text/javascript" src="{!! asset('js/scripts.js') !!}"></script>


</body>
</html>
