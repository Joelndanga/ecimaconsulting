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
                        <h5 class="heading fw-semibold mb-0 page-heading text-white">Excellence Operationelle</h5>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="position-middle-bottom">
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('index_page',[app()->getLocale()]) }}">Accueil</a>
                        </li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('organisation_processus',[app()->getLocale()]) }}">Organisation & Processus</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Excellence Operationelle</li>
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
                                <h4 class="title fw-semibold mb-3">EXCELLENCE OPERATIONELLE</h4>
                                <p class="text-muted para-desc mx-auto mb-0"></p>
                            </div>
                            <div class="card blog blog-primary shadow rounded overflow-hidden">

                                <div class="image position-relative overflow-hidden">
                                    <img src="{{ asset("frontend/images/ecima/sport03.jpg")}}" class="img-fluid" alt="">

                                    <div class="blog-tag">
                                        <a href="javascript:void(0)" class="badge bg-light">Nos Services</a>
                                    </div>
                                </div>

                                <div class="card-body content">
                                    <a href="" class="h5 title text-dark d-block mb-0">ENGAGEZ VOTRE ORGANISATION VERS + DE PERFORMANCE, ET + DE RENTABILITÉ</a>
                                    <br>
                                    <p class=" mt-2 mb-2" style="text-align: justify">Bien que certains auteurs décrivent la démarche d’excellence opérationnelle comme une philosophie alors que d’autres la voient comme une démarche d’amélioration continue, nous allons essayer de simplifier les choses.</p>

                                    <p class=" mt-2 mb-2" style="text-align: justify">On peut considérer l’excellence opérationnelle comme un objectif recherché par les entreprises souhaitant améliorer leurs rendements en implantant des processus d’amélioration continue. Levier de compétitivité pour les entreprises, ce projet d’amélioration continue permet de réduire les risques opérationnels en applications des objectifs stratégiques.</p>

                                    <p class=" mt-2 mb-2" style="text-align: justify">Soulignons qu’il existe plusieurs techniques et méthode d’amélioration qui traitent la notion d’excellence opérationnelle comme le modèle EFQM, le Lean ou encore le Lean manufacturing, Lean manager, Lean six sigma, PDCA, Kaizen, Juste à temps, Kanban. Notons que tous ces termes gestionnaires ont une finalité commune : l’excellence opérationnelle pour instaurer une conduite du changement pour améliorer la performance et assurer une productivité opérationnelle.</p>

                                    <p class=" mt-2 mb-2" style="text-align: justify">Démarche systématique et méthodique menée dans une entreprise, l’excellence opérationnelle repose sur des améliorations opérationnelles visant à maximiser les performances industrielles de tous les intervenants de l’entreprise (responsable amélioration continue).</p>

                                    <p class=" mt-2 mb-2" style="text-align: justify">Il s’agit d’une philosophie permettant la résolution des problèmes et l’optimisation des processus. Chaque acteur opérationnel va être mobilisé afin de fournir les bonnes pratiques et les processus d’optimisation dans l’atteinte de la performance collective.</p>

                                    <p class=" mt-2 mb-2" style="text-align: justify">Pour atteindre les objectifs de l’amélioration opérationnelle, certaines théories, plans d’action et des projets d’amélioration continue sont appliqués. Voici les 3 fondamentaux leviers que nous trouvons les plus intéressants à implanter dans un programme d’amélioration continue.</p>



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
