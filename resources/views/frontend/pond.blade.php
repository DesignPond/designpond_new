@extends('frontend.layouts.master')
@section('content')


    <div class="bg-primary dk">
        <div class="text-center wrapper">
            <div class="m-t-xl m-b-xl">
                <div class="text-uc h1 font-bold inline">
                    <div class="pull-left m-r-sm text-white"> Hello! <span class="font-thin text-muted">Je m’appelle Cindy</span></div>
                </div>
                <div class="h4 text-muted m-t-sm">Conceptrice Multimédia et Web Développeur</div>
            </div>
        </div>
        <div class="padder">
            <div class="hbox">
                <aside class="col-md-3 v-bottom text-right">
                    <div class="hidden-sm hidden-xs">
                        <section class="panel bg-dark inline m-b-n-lg m-r-n-lg aside-sm no-border device phone animated fadeInLeftBig">
                            <header class="panel-heading text-center">
                                <i class="fa fa-minus fa-2x m-b-n-xs block"></i>
                            </header>
                            <div>
                                <div class="m-l-xs m-r-xs">
                                    <img src="{{ asset('frontend/images/phone-2.png') }}" class="img-full" >
                                </div>
                            </div>
                        </section>
                    </div>
                </aside>
                <aside class="col-sm-10 col-md-6">
                    <section class="panel bg-dark m-b-n-lg no-border device animated fadeInUp">
                        <header class="panel-heading text-left">
                            <i class="fa fa-circle fa-fw"></i>
                            <i class="fa fa-circle fa-fw"></i>
                            <i class="fa fa-circle fa-fw"></i>
                        </header>
                        <img src="{{ asset('frontend/images/main.png') }}" class="img-full" >
                    </section>
                </aside>
                <aside class="col-md-3 v-bottom">
                    <div class="hidden-sm hidden-xs">
                        <section class="panel bg-light m-b-n-lg m-l-n-lg aside no-border device phone animated fadeInRightBig">
                            <header class="panel-heading text-center">
                                <i class="fa fa-minus fa-2x text-white m-b-n-xs block"></i>
                            </header>
                            <div class="">
                                <div class="m-l-xs m-r-xs">
                                    <img src="{{ asset('frontend/images/phone-1.png') }}" class="img-full" >
                                </div>
                            </div>
                        </section>
                    </div>
                </aside>
            </div>
        </div>
        <div class="dker pos-rlt">
            <div class="container wrapper">
                <div class="m-t-lg m-b-lg text-center">For your faster and easier web development.</div>
                <p class="text-center m-b-xl">
                    <a href="http://themeforest.net/user/Flatfull/portfolio?ref=flatfull" target="_blank" class="btn btn-lg btn-dark m-sm">Download it</a>
                    <a href="index.html" target="_blank" class="btn btn-lg btn-warning b-white bg-empty m-sm">Live Preview</a>
                </p>
            </div>
        </div>
    </div>
    <div id="about">
        <div class="container">
            <div class="m-t-xl m-b-xl text-center wrapper">
                <h3>Responsive web application and admin dashboard template</h3>
                <p class="text-muted">This web based app template give you much power to build your great application.</p>
            </div>
            <div class="row m-t-xl m-b-xl text-center">
                <div class="col-sm-4">
                    <p class="h3 m-b-lg">
                        <i class="fa fa-lightbulb-o fa-3x text-info"></i>
                    </p>
                    <div class="">
                        <h4 class="m-t-none">Web Application</h4>
                        <p class="text-muted m-t-lg">Many mobile app widgets and components, it's fully responsive, it can run on all the size of the screens. Start work on your great idea today!</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <p class="h3 m-b-lg">
                        <i class="fa fa-signal fa-3x text-info"></i>
                    </p>
                    <div class="">
                        <h4 class="m-t-none">Admin Dashboard</h4>
                        <p class="text-muted m-t-lg">It also can be used as admin dashboard, it has tables, charts and other useful components for system management, graph data shows and analysis.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <p class="h3 m-b-lg">
                        <i class="fa fa-rocket fa-3x text-info"></i>
                    </p>
                    <div class="">
                        <h4 class="m-t-none">App Landing</h4>
                        <p class="text-muted m-t-lg">This template also have a front end site that for your application landing, It have the features introduction, blog section, and a price table included.</p>
                    </div>
                </div>
            </div>
            <div class="m-t-xl m-b-xl text-center wrapper">
                <p class="h5">You can use it to build your
                    <span class="text-primary">Content manage system</span>,
                    <span class="text-primary">Travel app</span>,
                    <span class="text-primary">Medical app</span>...
                </p>
            </div>
        </div>
    </div>
    <div id="responsive" class="bg-dark">
        <div class="text-center">
            <div class="container">
                <div class="m-t-xl m-b-xl wrapper">
                    <h3 class="text-white">Your application will works no matter where you are</h3>
                    <p>You can use your application at anywhere in the world. <br>This template works on <span class="text-primary text-ul">mobile device</span> too.</p>
                </div>
                <div class="row m-t-xl m-b-xl">
                    <div class="col-sm-4 wrapper-xl" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
                        <p class="text-center h2 m-b-lg m-t-lg">
                    <span class="fa-stack fa-2x">
                      <i class="fa fa-circle fa-stack-2x text-dark"></i>
                      <i class="fa fa-mobile fa-stack-1x text-muted"></i>
                    </span>
                        </p>
                        <p>Mobile</p>
                    </div>
                    <div class="col-sm-4 wrapper-xl" data-ride="animated" data-animation="fadeInLeft" data-delay="600">
                        <p class="text-center h1 m-b-lg">
                    <span class="fa-stack fa-2x">
                      <i class="fa fa-circle fa-stack-2x text-dark"></i>
                      <i class="fa fa-tablet fa-stack-1x text-muted"></i>
                    </span>
                        </p>
                        <p>Tablet</p>
                    </div>
                    <div class="col-sm-4 wrapper-xl" data-ride="animated" data-animation="fadeInLeft" data-delay="900">
                        <p class="text-center h2 m-b-lg m-t-lg">
                    <span class="fa-stack fa-2x">
                      <i class="fa fa-circle fa-stack-2x text-dark"></i>
                      <i class="fa fa-desktop fa-stack-1x text-muted text-md"></i>
                    </span>
                        </p>
                        <p>Desktop</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white b-t b-light pos-rlt">
        <div class="container">
            <div class="row m-t-xl m-b-xl">
                <div class="col-sm-5 text-center clearfix m-t-xl"  data-ride="animated" data-animation="fadeInLeftBig">
                    <div class="h3 font-bold m-t-xl m-b-xl">
                        <i class="fa fa-circle text-primary fa-2x"></i>
                        <i class="fa fa-circle text-info fa-2x"></i>
                        <i class="fa fa-circle text-success fa-2x"></i>
                        <i class="fa fa-circle text-warning fa-2x"></i>
                        <i class="fa fa-circle text-danger fa-2x"></i>
                        <i class="fa fa-circle text-dark fa-2x"></i>
                        <i class="fa fa-circle text-light fa-2x"></i>
                    </div>
                </div>
                <div class="col-sm-7">
                    <h2 class="font-thin m-b-lg">Rich Components & Widgets</h2>
                    <p class="h4 m-b-lg l-h-1x">We create many components and widgets for your real application, we provide 8 default color palettes for you to create the colorful components.
                    </p>
                    <ul class="m-b-xl fa-ul">
                        <li><i class="fa fa-li fa-check text-muted"></i>369 Fontawesome icons</li>
                        <li><i class="fa fa-li fa-check text-muted"></i>+30 Jquery Components</li>
                        <li><i class="fa fa-li fa-check text-muted"></i>Application pages</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@stop