@extends('layouts.frontend.main-layout')

@section('title', 'PILTOTAGE DE PROJET')

@section('content')

    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100"
             style="background: url('{{ asset("frontend/images/bg/about.jpg")}}') center;">
        <div class="bg-overlay bg-gradient-overlay"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-12">
                    <div class="title-heading text-center">
                        <small class="text-white-50 mb-1 fw-medium text-uppercase mx-auto">Services</small>
                        <h5 class="heading fw-semibold mb-0 page-heading text-white">PILOTAGE DE PROJETS</h5>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="position-middle-bottom">
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('index_page',[app()->getLocale()]) }}">Accueil</a>
                        </li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('transformation_digital_page',[app()->getLocale()]) }}">Transformation &
                                Organisation</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pilotage de Projet</li>
                    </ul>
                </nav>
            </div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Start -->
    <section class="section">
        <div class="container" style="max-width: 90% !important;">
            <div class="row">
                @include('layouts.frontend.services-ecima-consulting')

                <div class="col-lg-8 col-md-6">
                    <div class="row" id="grid">
                        <div class="col-lg-12 mb-4 pb-2 picture-item">
                            <div class="section-title text-center mb-4 pb-2">
                                <h4 class="title fw-semibold mb-3">PILOTAGE DE PROJETS</h4>
                                <p class="text-muted para-desc mx-auto mb-0"></p>
                            </div>
                            <div class="card blog blog-primary shadow rounded overflow-hidden">

                                <div class="image position-relative overflow-hidden">
                                    <img src="{{ asset("frontend/images/ecima/img24.jpg")}}" class="img-fluid" alt="">

                                    <div class="blog-tag">
                                        <a href="javascript:void(0)" class="badge bg-light">Transformation Digital</a>
                                    </div>
                                </div>

                                <div class="card-body content">
                                    <p class=" mt-2 mb-2" style="text-align: justify">Une fois votre projet défini, une
                                        nouvelle phase débute : <strong>l’exécution.</strong> Le pilotage entre en jeu
                                        pour assurer la performance des opérations et activités menées tout au long du
                                        projet.</p>
                                    <p class=" mt-2 mb-2" style="text-align: justify">Le rôle des consultants ECIMA va
                                        donc consister à collecter l’ensemble de données, les analyser, décider et
                                        mettre en œuvre le cas échéant les actions nécessaires pour que le projet
                                        atteigne les objectifs qui lui ont été assignés, et ceci dans le cadre
                                        initialement défini en termes de qualité, coûts et délais lors de la phase de
                                        cadrage.
                                        Nos consultants en charge de la supervision de votre projet vont donc garder
                                        constamment sous surveillance l’écart existant entre le prévisionnel et le
                                        réalisé.</p>
                                    <p class=" mt-2 mb-2" style="text-align: justify">La mission de pilotage des projets
                                        est primordiale. Notre savoir-faire en la matière va permettre de réduire
                                        considérablement le risque d’échec. En effet, la vie d’un projet n’est pas un
                                        long fleuve tranquille. Il est rare que tout se passe exactement comme prévu.
                                        Tout au long de la phase de réalisation, il est nécessaire de mettre un peu
                                        d’huile dans les rouages, voire réajuster la mécanique. Il s’agira là de l’une
                                        des clés de la réussite de votre projet, et nous sommes là pour vous conduire
                                        vers ce succès.
                                    </p>
                                    <br>

                                    <h4 class="title fw-bold mb-3" style="text-align: center">LE CYCLE DE PILOTAGE</h4>

                                    <p class=" mt-2 mb-2" style="text-align: justify">Le pilotage se structure autour de points de fixation planifiés. C'est le cas avec un COPIL qui se réunit à la fin de chaque étape clé (ou lors de l'atteinte d'un jalon ) pour valider le passage à la suivante. En dehors de son rôle au sein du COPIL, le chef de projet assure quant à lui les missions de pilotage au quotidien.</p>
                                    <p class=" mt-2 mb-2" style="text-align: justify">Cette organisation offre l'agilité nécessaire à l'équipe pour intervenir sans délai lorsque le besoin s'en fait sentir et l'assise d'une prise de recul indispensable à des décisions structurantes à travers les séances du comité de pilotage.</p>

                                    <br>
                                    <h5 class="title fw-semibold mb-3">NOTRE MÉTHODE</h5>
                                    <p style="text-align: justify">Pour mener à bien les projets de ses clients, ECIMA
                                        propose une méthodologie centrée sur :</p>
                                    <ul>
                                        <li style="text-align: justify">Une formalisation claire des objectifs
                                            stratégiques du projet et un pilotage par ces objectifs
                                        </li>
                                        <li style="text-align: justify">Une organisation et un dispositif de gouvernance
                                            et d’animation adaptés à chaque phase du projet et optimisant la
                                            mobilisation de toutes les ressources et parties prenantes
                                        </li>
                                        <li style="text-align: justify">La mise en œuvre d’outils opérationnels de
                                            pilotage pour mieux suivre l’avancement du projet.
                                        </li>
                                    </ul>

                                    <div class="row">
                                        <div class="col-md-6"></div>
                                        <div class="col-md-6"></div>
                                    </div>


                                </div>
                            </div>
                        </div><!--end col-->

                    </div><!--end row-->


                </div><!--end col-->

            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->


@endsection

