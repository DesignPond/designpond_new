<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>DesignPond</title>

    <meta name="description" content="DesignPond">
    <meta name="author" content="Cindy Leschaud | @DesignPond">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS Files
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700italic,700,800,800italic,300italic,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('frontend/css/animate.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('frontend/css/font.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('frontend/css/landing.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('frontend/css/app.css');?>">

    <!-- Javascript Files
    ================================================== -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

<body>
<!-- header -->
<header id="header" class="navbar navbar-fixed-top bg-white box-shadow b-b b-light"  data-spy="affix" data-offset-top="1">
    <div class="container">
        <div class="navbar-header">
            <a href="#" class="navbar-brand navbar-logo">
                <span style="color: #0f9d84;">Design</span><span class="text-muted">Pond</span>
            </a>
            <button class="btn btn-link visible-xs" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="landing.html">Home</a>
                </li>
                <li>
                    <a href="features.html">Features</a>
                </li>
                <li>
                    <a href="price.html">Plans & Pricing</a>
                </li>
                <li>
                    <a href="blog.html">Blog</a>
                </li>
                <li>
                    <div class="m-t-sm"><a href="signin.html" class="btn btn-link btn-sm">Sign in</a> <a href="signup.html" class="btn btn-sm btn-success m-l"><strong>Sign up</strong></a></div>
                </li>
            </ul>
        </div>
    </div>
</header>
<!-- / header -->
<section id="content">

    <!-- Contenu -->
    @yield('content')
    <!-- Fin contenu -->

</section>

<!-- footer -->
<footer id="footer">
    <div class="bg-primary text-center">
        <div class="container wrapper">
            <div class="m-t-xl m-b">
                For your faster and easier web development.
                <a href="http://themeforest.net/user/Flatfull/portfolio?ref=flatfull" target="_blank" class="btn btn-lg btn-dark b-white bg-empty m-sm">Download it</a>
                <a href="index.html" target="_blank" class="btn btn-lg btn-warning b-white bg-empty m-sm">Live Preview</a>
            </div>
        </div>
        <i class="fa fa-caret-down fa-4x text-primary m-b-n-lg block"></i>
    </div>
    <div class="bg-dark dker wrapper">
        <div class="container text-center m-t-lg">
            <div class="row m-t-xl m-b-xl">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <i class="fa fa-envelope-o fa-3x icon-muted"></i>
                    <h5 class="text-uc m-b m-t-lg">Mail Us</h5>
                    <p class="text-sm"><a href="mailto:hey@example.com">info@designpond.ch</a></p>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <div class="m-t-xl m-b-xl">
                <p>
                    <a href="https://www.facebook.com/cindyleschaud" class="btn btn-icon btn-rounded btn-facebook bg-empty m-sm">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="https://twitter.com/DesignPond" class="btn btn-icon btn-rounded btn-twitter bg-empty m-sm">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="https://ch.linkedin.com/in/cindyleschaud" class="btn btn-icon btn-rounded btn-gplus bg-empty m-sm">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </p>
                <p>
                    <a href="#content" data-jump="true" class="btn btn-icon btn-rounded btn-dark b-dark bg-empty m-sm text-muted"><i class="fa fa-angle-up"></i></a>
                </p>
            </div>
        </div>
    </div>
</footer>

<script src="<?php echo asset('frontend/js/slimscroll/jquery.slimscroll.min.js');?>"></script>
<script src="<?php echo asset('frontend/js/appear/jquery.appear.js');?>"></script>
<script src="<?php echo asset('frontend/js/scroll/smoothscroll.js');?>"></script>
<script src="<?php echo asset('frontend/js/landing.js');?>"></script>
<script src="<?php echo asset('frontend/js/app.js');?>"></script>
<script src="<?php echo asset('frontend/js/app.plugin.js');?>"></script>

</body>
</html>