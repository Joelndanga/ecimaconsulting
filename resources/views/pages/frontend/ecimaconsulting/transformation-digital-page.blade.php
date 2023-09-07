@extends('layouts.frontend.main-layout')

@section('title', 'TRANSFORMATION DIGITAL')

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
                        <h5 class="heading fw-semibold mb-0 page-heading text-white">Transformation & Organisation</h5>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="position-middle-bottom">
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('index_page',[app()->getLocale()]) }}">Accueil</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Transformation & Organisation</li>
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
                                <h4 class="title fw-semibold mb-3">TRANSFORMATION ET ORGANISATION</h4>
                                <p class="text-muted para-desc mx-auto mb-0"></p>
                            </div>
                            <div class="card blog blog-primary shadow rounded overflow-hidden">

                                <div class="image position-relative overflow-hidden">
                                    <img src="{{ asset("frontend/images/ecima/img23.jpeg")}}" class="img-fluid" alt="">

                                    <div class="blog-tag">
                                        <a href="javascript:void(0)" class="badge bg-light">Nos Services</a>
                                    </div>
                                </div>

                                <div class="card-body content">
                                    <a href="" class="h5 title text-dark d-block mb-0">Accompagner l’entreprise à se
                                        transformer : nouvelle stratégie, changement de business model, changements
                                        technologiques, recherche d’efficacité, …</a>
                                    <p class="text-muted mt-2 mb-2" style="text-align: justify">Dans un monde marqué par
                                        des changements fréquents (restructurations et fusions, changement des
                                        comportements clients, évolutions technologiques, recherche persistante
                                        d’excellence opérationnelle et de réduction des coûts, évolutions des modèles
                                        d’affaire, …), la capacité à piloter et mener des transformations structurantes,
                                        rapides et réussies, en rupture avec l’existant, est devenue pour les
                                        entreprises un facteur décisif de performance et de pérennité.
                                        Les facteurs clés de réussite d’un projet de transformation sont principalement
                                        :</p>

                                    <ul>
                                        <li>de la prise en compte des différentes dimensions du projet : organisation,
                                            processus, système d’informations et outils, conduite du changement, …
                                        </li>
                                        <li>des équipes projet et hommes et femmes clés qui les conduisent</li>
                                    </ul>

                                    <br>
                                    <p class="text-muted mt-2 mb-2" style="text-align: justify">Nous aidons nos clients
                                        à conduire et réussir leurs projets de transformation de façon efficiente. Nous
                                        intervenons à toutes les étapes du projet : des phases d’études et de cadrage
                                        jusqu’à la mise en œuvre opérationnelle des organisations et solutions auprès
                                        des acteurs de l’entreprise.</p>
                                    <br>
                                    <h5 class="title text-dark d-block mb-0">NOTRE EXPERTISE</h5>
                                    <ul>
                                        <li>Organisation et pilotage de projet</li>
                                        <li>Cadrage et aide aux choix organisationnels, technologiques, …</li>
                                        <li>Optimisation des processus et intégration des séquences métiers au projet
                                        </li>
                                        <li>Controlling de projet de recette</li>
                                        <li>Conduite du changement</li>
                                        <li>MCO</li>
                                    </ul>

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

