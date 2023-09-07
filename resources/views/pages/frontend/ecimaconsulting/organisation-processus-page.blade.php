@extends('layouts.frontend.main-layout')

@section('title', 'TRANSFORMATION DIGITAL')

@section('content')

    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100"
             style="background: url('{{ asset("frontend/images/ecima/sport03.jpg")}}') center; background-size: cover">
        <div class="bg-overlay bg-gradient-overlay"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-12">
                    <div class="title-heading text-center">
                        <small class="text-white-50 mb-1 fw-medium text-uppercase mx-auto">Services</small>
                        <h5 class="heading fw-semibold mb-0 page-heading text-white">ORGANISATION & PROCESSUS</h5>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="position-middle-bottom">
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('index_page',[app()->getLocale()]) }}">Accueil</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">ORGANISATION & PROCESSUS</li>
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
                                <h4 class="title fw-semibold mb-3">ORGANISATION & PROCESSUS</h4>
                                <p class="text-muted para-desc mx-auto mb-0"></p>
                            </div>
                            <div class="card blog blog-primary shadow rounded overflow-hidden">

                                <div class="image position-relative overflow-hidden">
                                    <img src="{{ asset("frontend/images/ecima/img33.jpeg")}}" class="img-fluid" alt="">

                                    <div class="blog-tag">
                                        <a href="javascript:void(0)" class="badge bg-light">Nos Services</a>
                                    </div>
                                </div>

                                <div class="card-body content">
                                    <a href="" class="h3 title text-dark d-block mb-0" style="text-align: center">Processus organisationnel et système SMI</a>
                                    <br>
                                    <p class=" mt-2 mb-2" style="text-align: justify">Le <strong>processus organisationnel</strong> est un des trois principaux <strong>processus de direction</strong> de l'entreprise aux cotés du pilotage de la stratégie et du management opérationnel.</p>

                                    <p class=" mt-2 mb-2" style="text-align: justify">Ce processus assure le développement d'un <strong>système organisationnel</strong> efficace et le fait évoluer selon les enjeux stratégiques. Il détermine le management organisationnel et dispose de ses propres indicateurs.</p>
                                    <br>
                                    <p class=" mt-2 mb-2" style="text-align: justify">Nous accompagnons votre entreprise pour <strong>structurer le processus organisationnel.</strong> </p>

                                    <br>

                                    <h4 class=" text-dark d-block mb-0">Objectifs</h4>

                                    <h5 class=" text-dark d-block mb-0">Le processus organisationnel :</h5>
                                    <ul>
                                        <li>Structure l'organisation de l'entreprise.</li>
                                        <li>Fait évoluer l'organisation pour répondre aux enjeux stratégiques.</li>
                                        <li>Fait progresser la maturité et le savoir faire de l'organisation</li>
                                        <li>Capitalise le retour d'expérience.</li>
                                    </ul>

                                    <br>

                                    <h4 class=" text-dark d-block mb-0">Structurer le système organisationnel</h4>

                                    <p class=" mt-2 mb-2" style="text-align: justify" > <strong> Le processus organisationnel structure, formalise et diffuse </strong> les évolutions de l'organisation. Celle ci est est caractérisée par : </p>

                                    <ul>
                                        <li>L'établissement de la cartographie des processus.</li>
                                        <li>La formalisation de processus détaillés, incluant les processus de direction.</li>
                                        <li>La construction et la gestion d'un système de management.</li>
                                        <li>Un organigramme pour développer métiers et compétences au sein de l'organisation.</li>

                                        <li>L'affectation des pilotes de processus.</li>
                                        <li>Des procédures pour exécuter les processus.</li>
                                        <li>Des indicateurs de pilotage.</li>
                                        <li>Un tableau de bord.</li>
                                        <li>La mise en place de revues de processus et de revues de direction.</li>
                                    </ul>

                                    <p class=" mt-2 mb-2" style="text-align: justify" >Nous recommandons de construire le processus organisationnel autour de la revue de direction, à effectuer semestriellement dans le cas d'un SMQ simple. </p>
                                    <br>
                                    <h4 class=" text-dark d-block mb-0">Structurer le système organisationnel</h4>

                                    <p class=" mt-2 mb-2" style="text-align: justify">Le processus organisationnel est un des processus de direction, comme représenté dans la cartographie des processus ci contre. </p>

                                    <p class=" mt-2 mb-2" style="text-align: justify">L'organisation de l'entreprise n'est pas une donnée figée dans le temps. Elle doit évoluer en fonction de la stratégie, pour répondre aux enjeux de développement de l'entreprise.</p>

                                    <p class=" mt-2 mb-2" style="text-align: justify">Le processus organisationnel répond à la question : qu'est ce que l'organisation de l'entreprise est capable de faire, et que devra-t'elle être capable de faire dans 3 à 5 ans?</strong> </p>

                                    <br>

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

