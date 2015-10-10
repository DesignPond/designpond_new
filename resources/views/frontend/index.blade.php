@extends('frontend.layouts.master')
@section('content')


    <div class="bg-primary dk">
        <div class="text-center wrapper">
            <div class="m-t-xl m-b-xl">
                <div class="text-uc h1 font-bold inline">
                    <div class="pull-left m-r-sm text-white"> Hello! <span class="font-thin text-muted">Je m’appelle Cindy</span></div>
                </div>
            </div>
        </div>
    </div>
    <div id="about">
        <div class="container">
            <div class="m-t-xl m-b-xl text-center wrapper">
                <h3>Conceptrice Multimédia et Web Développeur</h3>
                <p class="text-muted">
                    Je travaille en tant que développeur web pour la Faculté de droit de l'Université de Neuchâtel et en tant qu'indépendante
                    pour divers clients, petites entreprises et associations sur des projets de toutes tailles.
                </p>
            </div>
            <div class="row m-t-xl m-b-xl text-center">
                <div class="col-sm-4">
                    <p class="h3 m-b-lg">
                        <i class="fa fa-code fa-3x text-info"></i>
                    </p>
                    <div class="">
                        <h4 class="m-t-none">Development</h4>
                        <p class="text-muted m-t-lg">
                            Développement d'applications web, e-commerce et CMS en PHP/MySQL et/ou Javascript
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <p class="h3 m-b-lg">
                        <i class="fa fa-cogs fa-3x text-info"></i>
                    </p>
                    <div class="">
                        <h4 class="m-t-none">Wordpress</h4>
                        <p class="text-muted m-t-lg">
                            Développement pour Wordpress thèmes, plugins, et shortcodes
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <p class="h3 m-b-lg">
                        <i class="fa fa-lightbulb-o fa-3x text-info"></i>
                    </p>
                    <div class="">
                        <h4 class="m-t-none">Consulting</h4>
                        <p class="text-muted m-t-lg">
                            Consulting en développement web et design/print
                        </p>
                    </div>
                </div>
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
                           <img src="{{ asset('frontend/images/cindy.jpg') }}" alt="Cindy Leschaud" />
                        </p>

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

    <div class="bg-white-only">
        <div class="container">
            <div class="m-t-xl m-b-xl">

            </div>
            <div class="row m-b-xl">
                <div class="col-sm-4">
                    <span class="fa-stack fa-2x pull-left m-r m-t-xs">
                      <i class="fa fa-circle fa-stack-2x text-info"></i>
                      <i class="fa fa-stack-1x fa-inverse">1</i>
                    </span>
                    <div class="clear">
                        <h4>Lightweight with Rich Components</h4>
                        <p class="text-muted text-sm">We only choose the lightweight plugins, but with rich functions. we use tiny components, css and js size is first consideration. <br><br>This project ues HTML5 and CSS3 to build the components and widgets. the pages use header, nav, section to build the layout.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <span class="fa-stack fa-2x pull-left m-r m-t-xs">
                      <i class="fa fa-circle fa-stack-2x text-info"></i>
                      <i class="fa fa-stack-1x fa-inverse">2</i>
                    </span>
                    <div class="clear">
                        <h4>Keep Updating with Great Support</h4>
                        <p class="text-muted text-sm">This project is based on Bootstrap 3. the sleek, intuitive, and powerful mobile-first front-end framework for faster and easier web development. we will keep it updated to Bootstrap.<br><br> <a href="#" class="text-primary">More...</a></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <span class="fa-stack fa-2x pull-left m-r m-t-xs">
                      <i class="fa fa-circle fa-stack-2x text-info"></i>
                      <i class="fa fa-stack-1x fa-inverse">3</i>
                    </span>
                    <div class="clear">
                        <h4>HTML5 & CSS3 with Clean Design</h4>
                        <ul class="m-b-xl fa-ul">

                            <li><i class="fa fa-li fa-check text-muted"></i>HTML5/CSS3</li>
                            <li><i class="fa fa-li fa-check text-muted"></i>PHP/MySQL</li>
                            <li><i class="fa fa-li fa-check text-muted"></i>Javascript/JQuery</li>
                            <li><i class="fa fa-li fa-check text-muted"></i>Laravel</li>
                            <li><i class="fa fa-li fa-check text-muted"></i>Wordpress</li>
                            <li><i class="fa fa-li fa-check text-muted"></i>Git</li>
                            <li><i class="fa fa-li fa-check text-muted"></i>Photoshop</li>
                            <li><i class="fa fa-li fa-check text-muted"></i>Illustrator</li>
                            <li><i class="fa fa-li fa-check text-muted"></i>Indesign</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop