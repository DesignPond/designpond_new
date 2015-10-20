@extends('frontend.layouts.master')
@section('content')

    <div id="about">
        <div class="text-center">
            <div class="container">

                @if( $errors->has() || Session::has('status'))
                    <?php $class  = ($errors->has() ? 'warning' : Session::get('status')); ?>
                    <?php $status = ( $class == 'danger' || $class == 'info' ? $class : 'warning' ); ?>
                    <div class="alert alert-dismissable alert-{{ $status }}">
                        @foreach($errors->all() as $message)
                            <p>{{ $message }}</p>
                        @endforeach
                        @if(Session::has('message'))
                            <p>{!! Session::get('message') !!}</p>
                        @endif
                    </div>
                @endif

                <div class="m-t-xl">
                    <div class="text-uc h1 font-bold inline">
                        <div class="pull-left m-r-sm "> Hello! <span class="font-thin text-muted">Je m’appelle Cindy</span></div>
                    </div>
                </div>
                <div class="text-center wrapper col-md-8 col-md-push-2">
                    <p class="m-t-xl m-b-xl">
                        <img height="100px" class="thumbnail" style="margin: 0 auto;" src="{{ asset('frontend/images/cindy.jpg') }}" />
                    </p>
                    <h3 class="text-info">Conceptrice Multimédia et Web Développeur</h3>
                    <p class="m-t-xl">
                        Développeur web et chef de projet pour la <a href="http://unine.ch/droit.ch">Faculté de droit de l'Université de Neuchâtel</a> <br/>
                        Indépendante pour divers clients, petites entreprises et associations sur des projets de toutes tailles.<br/>
                    </p>
                    <p class="m-t-sm"><i class="fa fa-star"></i></p>
                    <p class="m-t-sm m-b-xl">Spécialisée en développement d'applications web PHP/MySQL.</p>
                </div>

            </div>
        </div>
    </div>

    <div class="bg-white-only">
        <a name="work"></a>
        <div class="container">
            <div class="row m-t-xl text-center">
                <h3 class="text-info">Quelques réalisations</h3>
                <h4 class="m-t-xl"><i class="fa fa-code fa-2x text-info"></i></h4>
            </div>
            <div class="row">
                <div class="col-sm-3 text-center wrapper-sm">
                    <p class="m-b-lg m-t-lg box">
                        <a target="_blank" href="http://www.tribunauxcivils.ch"><img src="{{ asset('frontend/web/tc.jpg') }}" class="thumbnail" alt="" /></a>
                        <a class="btn btn-info btn-block" target="_blank" href="http://www.tribunauxcivils.ch">www.tribunauxcivils.ch</a>
                    </p>
                </div>
                <div class="col-sm-3 text-center wrapper-sm">
                    <p class="m-b-lg m-t-lg box">
                        <a target="_blank" href="http://www.rjne.ch"><img src="{{ asset('frontend/web/rjne.jpg') }}" class="thumbnail" alt="" /></a>
                        <a class="btn btn-info btn-block" target="_blank" href="http://www.rjne.ch">www.rjne.ch</a>
                    </p>
                </div>
                <div class="col-sm-3 text-center wrapper-sm">
                    <p class="m-b-lg m-t-lg box">
                        <a target="_blank" href="http://www.droitdutravail.ch"><img src="{{ asset('frontend/web/ddt.jpg') }}" class="thumbnail" alt="" /></a>
                        <a class="btn btn-info btn-block" target="_blank" href="http://www.droitdutravail.ch">www.droitdutravail.ch</a>
                    </p>
                </div>
                <div class="col-sm-3 text-center wrapper-sm">
                    <p class="m-b-lg m-t-lg box">
                        <a target="_blank" href="http://www.drozmotos.ch"><img src="{{ asset('frontend/web/praticien.jpg') }}" class="thumbnail" alt="" /></a>
                        <a class="btn btn-info btn-block" target="_blank" href="http://www.drozmotos.ch">www.droitpraticien.ch</a>
                    </p>
                </div>
            </div>
            <div class="row m-b-xl">
                <div class="col-sm-3 text-center wrapper-sm">
                    <p class="m-b-lg m-t-lg box">
                        <a target="_blank" href="http://www.droitenschemas.ch"><img src="{{ asset('frontend/web/des.jpg') }}" class="thumbnail" alt="" /></a>
                        <a class="btn btn-info btn-block" target="_blank" href="http://www.droitenschemas.ch">www.droitenschemas.ch</a>
                    </p>
                </div>
                <div class="col-sm-3 text-center wrapper-sm">
                    <p class="m-b-lg m-t-lg box">
                        <a target="_blank" href="http://www.alumnine-droit.ch"><img src="{{ asset('frontend/web/uninext.jpg') }}" class="thumbnail" alt="" /></a>
                        <a class="btn btn-info btn-block" target="_blank" href="http://www.alumnine-droit.ch">www.alumnine-droit.ch</a>
                    </p>
                </div>
                <div class="col-sm-3 text-center wrapper-sm">
                    <p class="m-b-lg m-t-lg box">
                        <a target="_blank" href="http://www.janohair.ch"><img src="{{ asset('frontend/web/jano.jpg') }}" class="thumbnail" alt="" /></a>
                        <a class="btn btn-info btn-block" target="_blank" href="http://www.janohair.ch">www.janohair.ch</a>
                    </p>
                </div>
                <div class="col-sm-3 text-center wrapper-sm">
                    <p class="m-b-lg m-t-lg box">
                        <a target="_blank" href="http://www.cie-anadyomene.com"><img src="{{ asset('frontend/web/cieana.jpg') }}" class="thumbnail" alt="" /></a>
                        <a class="btn btn-info btn-block" target="_blank" href="http://www.cie-anadyomene.com">www.cie-anadyomene.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="b-t b-light">
        <a name="cours"></a>
        <div class="container">
            <div class="row m-t-xl text-center">
                <h3 class="text-info">Besoin d'aide?</h3>
                <h4 class="m-t-xl"><i class="fa fa-book fa-2x text-info"></i></h4>
            </div>
            <div class="row m-t-xl m-b-xl">

                <div class="col-sm-7">
                    <h3 class="font-thin m-b-lg">Besoin de <span class="text-info">conseils</span> ou de <span class="text-info">cours particuliers</span> ?</h3>

                    <h4 class="m-b-lg">J'offre:</h4>

                    <p><i class="fa fa-fw fa-angle-right"></i>Cours de programmation (PHP/MySql) pour débutants.</p>
                    <p><i class="fa fa-fw fa-angle-right"></i>Introduction à la <a href="https://fr.wikipedia.org/wiki/Programmation_orient%C3%A9e_objet" target="_blank">programmation orienté objet</a></p>
                    <p><i class="fa fa-fw fa-angle-right"></i>Introduction aux test unitaires avec <a href="https://phpunit.de" target="_blank">PHPUnit</a></p>
                    <p><i class="fa fa-fw fa-angle-right"></i>Bases de données et architecture</p>
                    <p><i class="fa fa-fw fa-angle-right"></i>Webdesign (HTML/CSS + Photoshop)</p>

                </div>
                <div class="col-sm-5">

                    <h3 class="font-thin m-b-lg">Contactez-moi</h3>

                    <form class="form" method="post" action="{{ url('sendMessage') }}">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label class="control-label"><strong>Prénom/Nom</strong></label>
                            <input type="text" required class="form-control" name="nom" placeholder="Prénom/Nom">
                        </div>

                        <div class="form-group">
                            <label class="control-label"><strong>Email</strong></label>
                            <input type="email" required class="form-control" name="email" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label class="control-label"><strong>Message</strong></label>
                            <textarea class="form-control" name="remarque" rows="3"></textarea>
                        </div>

                        <div class="radio">
                            <label><input type="radio" required name="information" value="conseils" checked>Demande de conseils</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" required name="information" value="cours particuliers">Demande de cours particuliers</label>
                        </div>

                        <div class="text-right"><button type="submit" class="btn btn-info">Envoyer</button></div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@stop