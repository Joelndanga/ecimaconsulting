@extends('layouts.frontend.main-layout')

@section('additional_meta')

    <meta property="og:image" content="{{ asset('frontend/images/logo/ecima_logo.png')}}"/>

    <meta property="og:description" content=""/>

    <meta property="og:keywords" content="ECIMA CONSULTING : Cabinet de conseil en management, modernisation et innovation des organisations."/>

    <meta property="og:url" content="{{ route('home', app()->getLocale() ) }}"/>

    <meta property="og:title" content="Ecima Consulting"/>

@endsection

@section('content')
    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" style="background: url('/frontend/images/eg/ecima-group.jpg') center;">
        <div class="bg-overlay bg-gradient-overlay"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-12">
                    <div class="title-heading text-center">
                        <h5 class="heading fw-semibold page-heading text-white title-dark">LE GROUPE ECIMA</h5>
                        <p class="text-white-50 para-desc mx-auto mb-0">Nous sommes présents dans plusieurs secteurs d'activités</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
            <div class="position-middle-bottom">
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                        <li class="breadcrumb-item"><a href="#">ACCUEIL</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ECIMA GROUP</li>
                    </ul>
                </nav>
            </div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Start -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 p-4 text-center rounded features features-classic feature-primary">

                        <div class="content">
                            <a href="" class="title text-dark h5">Intermediation D'Affaires</a>

                            <p class="text-muted mb-0 mt-3" style="text-align: justify"> Notre approche méthodique et transparente garantit que toutes les parties impliquées sont alignées sur des objectifs communs et bénéficient d'une relation durable.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-4 mt-sm-0 pt-sm-0">
                    <div class="card border-0 p-4 text-center rounded features features-classic feature-primary">

                        <div class="content">
                            <a href="#" class="title text-dark h5">Réseau & Télécom</a>

                            <p class="text-muted mb-0 mt-3" style="text-align: justify">Des collaborations basées sur le cloud aux capacités de travail à distance, le paysage des réseaux et des télécommunications est devenu une infrastructure essentielle pour les entreprises.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-4 mt-lg-0 pt-lg-0">
                    <div class="card border-0 p-4 text-center rounded features features-classic feature-primary">

                        <div class="content">
                            <a href="#" class="title text-dark h5">Sécurité IT</a>

                            <p class="text-muted mb-0 mt-3" style="text-align: justify">Découvrez notre service de cybersécurité avancée chez Ecima Consulting, conçu pour protéger vos activités numériques et vos données sensibles.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-4">
                    <div class="card border-0 p-4 text-center rounded features features-classic feature-primary">

                        <div class="content">
                            <a href="page-single-service.html" class="title text-dark h5">Recrutement</a>

                            <p class="text-muted mb-0 mt-3" style="text-align: justify">Notre approche de recrutement est centrée sur la compréhension approfondie de votre culture d'entreprise, de vos besoins spécifiques et de vos aspirations futures. </p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-4">
                    <div class="card border-0 p-4 text-center rounded features features-classic feature-primary">


                        <div class="content">
                            <a href="#" class="title text-dark h5">Energie Renouvelable</a>

                            <p class="text-muted mb-0 mt-3" style="text-align: justify" >Lorsque vous choisissez notre service d'énergie renouvelable, vous faites le choix de réduire votre empreinte carbone tout en optimisant vos coûts énergétiques.</p>
                        </div>
                    </div>
                </div><!--end col-->

            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-lg-4">
                    <ul class="nav nav-pills nav-justified flex-column bg-transparent mb-0" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link rounded shadow active" id="pills-cloud-tab" data-bs-toggle="pill" href="#pills-cloud" role="tab" aria-controls="pills-cloud" aria-selected="false">
                                <div class="text-start p-4">
                                    <h5>Intermediation D'affaire</h5>
                                    <p class="mb-0 text-muted tab-para mt-3">Nous proposons des services de faisabilité de projets et d'études de marché.</p>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->

                        <li class="nav-item mt-4 pt-2">
                            <a class="nav-link rounded shadow" id="pills-smart-tab" data-bs-toggle="pill" href="#pills-smart" role="tab" aria-controls="pills-smart" aria-selected="false">
                                <div class="text-start p-4">
                                    <h5>Réseau & Télecommunication</h5>
                                    <p class="mb-0 text-muted tab-para mt-3">Nous garantissons un environnement numérique robuste et protégé</p>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->

                        <li class="nav-item mt-4 pt-2">
                            <a class="nav-link rounded shadow" id="pills-apps-tab" data-bs-toggle="pill" href="#pills-apps" role="tab" aria-controls="pills-apps" aria-selected="false">
                                <div class="text-start p-4">
                                    <h5>Recrutement</h5>
                                    <p class="mb-0 text-muted tab-para mt-3">Notre service de recrutement : votre succès, notre expertise</p>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->

                    </ul><!--end nav pills-->
                </div><!--end col-->

                <div class="col-lg-8 mt-4 pt-2 mt-lg-0 pt-lg-0">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-cloud" role="tabpanel" aria-labelledby="pills-cloud-tab">
                            <div class="card blog blog-image blog-primary shadow rounded overflow-hidden">
                                <div class="card-img">
                                    <img src="/frontend/images/eg/1.jpeg" class="img-fluid" alt="">
                                    <div class="card-overlay"></div>

                                    <div class="position-absolute top-0 start-0 mt-3 ms-4">
                                        <a href="javascript:void(0)" class="badge text-bg-light">Finance</a>
                                    </div>
                                </div>
                                <div class="content px-4">
                                    <a href="https://investment.ecimaconsulting.com/" target="_blank" class="h5 title d-block mb-0 text-white title-dark">Intermediation d'affaire</a>

                                    <div class="d-flex author align-items-center mt-3">
                                        <p class="para-desc text-white-50 mb-0">Faciliter la mise en relation entre les apporteurs d'affaires et les bailleurs de fonds internationaux privés afin d'assurer le meilleur dévelopement de vos affaires.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end teb pane-->

                        <div class="tab-pane fade" id="pills-smart" role="tabpanel" aria-labelledby="pills-smart-tab">
                            <div class="card blog blog-image blog-primary shadow rounded overflow-hidden">
                                <div class="card-img">
                                    <img src="/frontend/images/eg/2.jpg" class="img-fluid" alt="">
                                    <div class="card-overlay"></div>

                                    <div class="position-absolute top-0 start-0 mt-3 ms-4">
                                        <a href="javascript:void(0)" class="badge text-bg-light">Télécommunication</a>
                                    </div>
                                </div>
                                <div class="content px-4">
                                    <a href="http://www.cistel-solutions.com/en/transmission-4/" target="_blank" class="h5 title d-block mb-0 text-white title-dark">Réseau & Télécommunication</a>

                                    <div class="d-flex author align-items-center mt-3">
                                        <p class="para-desc text-white-50 mb-0">Découvrez notre expertise en matière de réseau et de sécurité chez ECIMA Consulting, assurant la protection et la performance optimale de votre infrastructure informatique</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end teb pane-->

                        <div class="tab-pane fade" id="pills-apps" role="tabpanel" aria-labelledby="pills-apps-tab">
                            <div class="card blog blog-image blog-primary shadow rounded overflow-hidden">
                                <div class="card-img">
                                    <img src="/frontend/images/eg/3.jpg" style="width: 100%; object-fit: cover" class="img-fluid" alt="">
                                    <div class="card-overlay"></div>

                                    <div class="position-absolute top-0 start-0 mt-3 ms-4">
                                        <a href="javascript:void(0)" class="badge text-bg-light">Resources Humaines</a>
                                    </div>
                                </div>
                                <div class="content px-4">
                                    <a href="https://recrutement.ecimaconsulting.com/" target="_blank" class="h5 title d-block mb-0 text-white title-dark">Recrutement</a>

                                    <div class="d-flex author align-items-center mt-3">
                                        <p class="para-desc text-white-50 mb-0">Nous identifions les talents exceptionnels pour renforcer votre équipe et favoriser la croissance de votre entreprise.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end teb pane-->
                    </div><!--end tab content-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
        <div class="row">
            <div class="col-lg-8 mb-4 pb-2 mb-lg-0 pb-lg-0">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-energy" role="tabpanel" aria-labelledby="pills-energy-tab">
                        <div class="card blog blog-image blog-primary shadow rounded overflow-hidden">
                            <div class="card-img">
                                <img src="/frontend/images/eg/4.jpg" class="img-fluid" alt="">
                                <div class="card-overlay"></div>

                                <div class="position-absolute top-0 start-0 mt-3 ms-4">
                                    <a href="javascript:void(0)" class="badge text-bg-light">Energie</a>
                                </div>
                            </div>
                            <div class="content px-4">
                                <a href="http://www.cistel-solutions.com/en/renewable-energy/" target="_blank" class="h5 title d-block mb-0 text-white title-dark">Energie Renouvelable</a>

                                <div class="d-flex author align-items-center mt-3">
                                    <p class="para-desc text-white-50 mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century.</p>
                                </div>
                            </div>
                        </div>
                    </div><!--end teb pane-->


                    <div class="tab-pane fade" id="pills-security" role="tabpanel" aria-labelledby="pills-security-tab">
                        <div class="card blog blog-image blog-primary shadow rounded overflow-hidden">
                            <div class="card-img">
                                <img src="/frontend/images/eg/5.png" class="img-fluid" alt="">
                                <div class="card-overlay"></div>

                                <div class="position-absolute top-0 start-0 mt-3 ms-4">
                                    <a href="javascript:void(0)" class="badge text-bg-light">IT</a>
                                </div>
                            </div>
                            <div class="content px-4">
                                <a href="http://www.cistel-solutions.com/en/information-system-security/" target="_blank" class="h5 title d-block mb-0 text-white title-dark">Sécurité IT</a>

                                <div class="d-flex author align-items-center mt-3">
                                    <p class="para-desc text-white-50 mb-0">Faites confiance à Ecima Consulting pour renforcer votre posture de cybersécurité et vous permettre de naviguer en toute confiance dans le monde numérique en constante évolution.</p>
                                </div>
                            </div>
                        </div>
                    </div><!--end teb pane-->
                </div><!--end tab content-->
            </div><!--end col-->
            <div class="col-lg-4">
                <ul class="nav nav-pills nav-justified flex-column bg-transparent mb-0" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link rounded shadow active" id="pills-energy-tab" data-bs-toggle="pill" href="#pills-energy" role="tab" aria-controls="pills-energy" aria-selected="false">
                            <div class="text-start p-4">
                                <h5>Energie Renouvelable</h5>
                                <p class="mb-0 text-muted tab-para mt-3">Pionniers de la durabilité énergétique.</p>
                            </div>
                        </a><!--end nav link-->
                    </li><!--end nav item-->


                    <li class="nav-item mt-4 pt-2">
                        <a class="nav-link rounded shadow" id="pills-security-tab" data-bs-toggle="pill" href="#pills-security" role="tab" aria-controls="pills-security" aria-selected="false">
                            <div class="text-start p-4">
                                <h5>Sécurité IT</h5>
                                <p class="mb-0 text-muted tab-para mt-3">Nous offrons une gamme complète de services de cybersécurité.</p>
                            </div>
                        </a><!--end nav link-->
                    </li><!--end nav item-->
                </ul><!--end nav pills-->
            </div><!--end col-->
        </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->
@endsection
