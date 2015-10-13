@extends('frontend.layouts.master')
@section('content')

    <div id="about">
        <div class="text-center">
            <div class="container">

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
                    <ul class="m-t-lg m-b-xl">
                        <li class="text-danger">
                            <h4><i class="fa fa-gear"></i> &nbsp; Geek, nerd, chocolat et Laravel aficionado  &nbsp; <i class="fa fa-gear"></i></h4>
                        </li>
                    </ul>
                    <p class="m-t-xl m-b-xl">
                        Développeur web et chef de projet pour la <a href="http://unine.ch/droit.ch">Faculté de droit de l'Université de Neuchâtel</a> <br/>
                        Indépendante pour divers clients, petites entreprises et associations sur des projets de toutes tailles.
                    </p>
                    <p class="m-t-lg m-b-xl">Spécialisée en développement d'applications web en PHP/MySQL.</p>

                </div>

            </div>
        </div>
    </div>

    <div class="bg-white-only">
        <div class="container">
            <div class="row m-t-xl text-center">
                <h3 class="m-t-none text-uc">Quelques réalisations</h3>
                <h4 class="m-t-xl"><i class="fa fa-code fa-2x text-info"></i></h4>

            </div>
            <div class="row">
                <div class="col-sm-3 text-center wrapper-sm">
                    <p class="m-b-lg m-t-lg">
                        <a class="btn btn-info btn-block" target="_blank" href="http://www.tribunauxcivils.ch"><i class="fa fa-link"></i> www.tribunauxcivils.ch</a>
                    </p>
                </div>
                <div class="col-sm-3 text-center wrapper-sm">
                    <p class="m-b-lg m-t-lg">
                        <a class="btn btn-info btn-block" target="_blank" href="http://www.rjne.ch"><i class="fa fa-link"></i> www.rjne.ch</a>
                    </p>
                </div>
                <div class="col-sm-3 text-center wrapper-sm">
                    <p class="m-b-lg m-t-lg">
                        <a class="btn btn-info btn-block" target="_blank" href="http://www.droitdutravail.ch"><i class="fa fa-link"></i> www.droitdutravail.ch</a>
                    </p>
                </div>
                <div class="col-sm-3 text-center wrapper-sm">
                    <p class="m-b-lg m-t-lg">
                        <a class="btn btn-info btn-block" target="_blank" href="http://www.drozmotos.ch"><i class="fa fa-link"></i> www.droitpraticien.ch</a>
                    </p>
                </div>
            </div>
            <div class="row m-b-xl">
                <div class="col-sm-3 text-center wrapper-sm">
                    <p class="m-b-lg m-t-lg">
                        <a class="btn btn-info btn-block" target="_blank" href="http://www.droitenschemas.ch"><i class="fa fa-link"></i> www.droitenschemas.ch</a>
                    </p>
                </div>
                <div class="col-sm-3 text-center wrapper-sm">
                    <p class="m-b-lg m-t-lg">
                        <a class="btn btn-info btn-block" target="_blank" href="http://www.alumnine-droit.ch"><i class="fa fa-link"></i> www.alumnine-droit.ch</a>
                    </p>
                </div>
                <div class="col-sm-3 text-center wrapper-sm">
                    <p class="m-b-lg m-t-lg">
                        <a class="btn btn-info btn-block" target="_blank" href="http://www.janohair.ch"><i class="fa fa-link"></i> www.janohair.ch</a>
                    </p>
                </div>
                <div class="col-sm-3 text-center wrapper-sm">
                    <p class="m-b-lg m-t-lg">
                        <a class="btn btn-info btn-block" target="_blank" href="http://www.cie-anadyomene.com"><i class="fa fa-link"></i> www.cie-anadyomene.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

@stop