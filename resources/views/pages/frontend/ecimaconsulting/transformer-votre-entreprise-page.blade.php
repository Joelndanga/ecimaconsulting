@extends('layouts.frontend.main-layout')

@section('title', 'TRANSFORMER VOTRE ENTREPRISE')

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
                <h5 class="heading fw-semibold mb-0 page-heading text-white">TRANSFORMER VOTRE ENTREPRISE</h5>
            </div>
        </div><!--end col-->
    </div><!--end row-->

    <div class="position-middle-bottom">
        <nav aria-label="breadcrumb" class="d-block">
            <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('index_page',[app()->getLocale()]) }}">Accueil</a>
                </li>
                <li class="breadcrumb-item"><a
                        href="">Organisation & Processus</a></li>
                <li class="breadcrumb-item active" aria-current="page">Transformer votre entreprise</li>
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
                            <h4 class="title fw-semibold mb-3">TRANSFORMER VOTRE ENTREPRISE</h4>
                            <p class="text-muted para-desc mx-auto mb-0"></p>
                        </div>
                        <div class="card blog blog-primary shadow rounded overflow-hidden">

                            <div class="image position-relative overflow-hidden">
                                <img src="{{ asset("frontend/images/ecima/sport4.jpg")}}" class="img-fluid" alt="">

                                <div class="blog-tag">
                                    <a href="javascript:void(0)" class="badge bg-light">Nos Services</a>
                                </div>
                            </div>

                            <div class="card-body content">
                                <h5 class="title fw-semibold mb-3" style="text-align: center">DÉFINIR ET TRANSFORMER VOTRE ORGANISATION</h5>
                                <p class=" mt-2 mb-2" style="text-align: justify">Nous vous aidons à définir et transformer votre organisation actuelle (BU, service, unités, …) pour la rendre plus pérenne, plus agile et soucieuse pour l’Homme et l’environnement.</p>
                                <br>
                                <p class=" mt-2 mb-2" style="text-align: justify">Pour cela nous vous aidons à :</p>

                                <ul>
                                    <li style="text-align: justify">Définir et partager les objectifs stratégiques de votre organisation cible
                                    </li>
                                    <li style="text-align: justify">Vous benchmarker auprès d’autres organisations (ratios clés)
                                    </li>
                                    <li style="text-align: justify">Définir l’organisation cible dans toutes les dimensions : valeurs, process cibles, gouvernance, modèle de rôles, postes, organigramme, compétences attendues, espaces de travail, SI
                                    </li>
                                    <li style="text-align: justify">Transformer l’organisation actuelle : pilotage du projet de réorganisation, conduite du changement, stratégie RH – dialogue social, accompagnement à la mise en œuvre opérationnelle : sites, aménagement des locaux, coaching sur site, ajustement fin des processus, chantier SI, …
                                    </li>
                                    <li style="text-align: justify">Suivi et mesure de l’atteinte des objectifs (gains / KPI, satisfaction client, épanouissement des collaborateurs…)
                                    </li>
                                </ul>

                                <br>
                                <p class=" mt-2 mb-2" style="text-align: justify">Nos consultants sont présents au Cameroun, en France, en Cote d'ivoire et au Rwanda.</p>


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
