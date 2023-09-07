@extends('layouts.frontend.main-layout')

@section('content')

    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" style="background: url('/frontend/images/bg/blog01.jpg') center;">
        <div class="bg-overlay bg-gradient-overlay"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-12">
                    <div class="title-heading text-center">
                        <h5 class="heading fw-semibold page-heading text-white title-dark">BUSINESS INTELLIGENCE</h5>
                        <p class="text-white-50 para-desc mx-auto mb-0">Suivre et piloter l'activité de toute votre
                            entreprise de partout
                            où vous vous trouvez juste par un simple clic</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
            <div class="position-middle-bottom">
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                        <li class="breadcrumb-item"><a href="#">ACCUEIL</a></li>
                        <li class="breadcrumb-item active" aria-current="page">NOTRE BI</li>
                    </ul>
                </nav>
            </div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-12 col-md-12 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title text-center mb-2 pb-2 ms-lg-5">
                        <h4 class="title mb-3 text-primary fw-semibold" style="font-size: 17px">NOTRE BUSINESS
                            INTELLIGENCE</h4>
                        <p class="text-justify mb-2" style="font-size: 17px; text-align: justify">Aujourd’hui dans un
                            contexte où les données de votre entreprise sont éclatées, volumineuses et complexes, il y a
                            un réel besoin de consolider et d’analyser ces dernières en un lieu centralisé pour pouvoir
                            avoir une vision globale de l’activité. L’objectif de notre solution sera de créer, à partir
                            de vos données, l’information pertinente à valeur ajoutée en temps réel pour vous aider dans
                            le <strong> pilotage optimal de l’entreprise et une prise de décision éclairée.</strong></p>
                        <p style="font-size: 17px;  text-align: justify"><span class="text-blue fw-bold">ECIMA CONSULTING</span>
                            est une société de veille économique et d'analyse de données les plus dynamiques des marchés
                            émergents.</p>
                    </div>
                </div><!--end col-->
                <div class="col-12 text-center">
                    <img src="/frontend/images/bi/pic.png" alt="Image Business Intelligence">
                    <p style="font-size: 17px;" class="mt-4 ">En tant qu'acteur dans le domaine de l'intelligence
                        d'affaires et de la gestion des risques d'entreprise, ECIMA CONSULTING fournit des solutions
                        technologiques basées sur le conseil et l’offre de solutions multisectorielles.</p>
                </div>
            </div><!--end row-->
        </div><!--end container-->
    </section>


    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <img src="/frontend/images/bi/pic2.jpg" class="img-fluid rounded shadow" alt="">
                </div><!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title ms-lg-5">
                        <h4 class="title mb-3">Vos gains</h4>

                        <ul class="list-unstyled  mb-0">
                            <li class="mb-2" style="text-align: justify"><span class="text-dark h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Lisibilité des tendances du marché et de l’efficacité des actions correctives.
                            </li>
                            <li class="mb-2" style="text-align: justify"><span class="text-dark h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Grâce à nos tableaux de bord intuitifs, flexibles et intelligents, vous avez accès à l’activité de votre entreprise en temps réelle partout où vous vous trouvez grâce à votre smartphone, tablette ou PC.
                            </li>
                            <li class="mb-2" style="text-align: justify"><span class="text-dark h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Uniformité du système de pilotage de la performance avec une vue à 360° de l’activité de votre groupe. En effet, vous aurez la visibilité et une vue centralisée sur l’activité de toute votre entreprise.
                            </li>
                            <li class="mb-2" style="text-align: justify"><span class="text-dark h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Efficacité dans la rapidité d’identification des problèmes rencontrés dans les départements opérationnels et filiales, et agilité dans la mise en place des mesures correctives
                            </li>
                        </ul>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>

@endsection
