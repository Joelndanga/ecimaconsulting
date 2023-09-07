@extends('layouts.frontend.main-layout')

@section('additional_meta')

    <meta property="og:image" content="{{ asset('frontend/images/logo/ecima_logo.png')}}"/>

    <meta property="og:description" content="ECIMA CONSULTING : Cabinet de conseil en management, modernisation et innovation des organisations."/>

    <meta property="og:keywords" content="ECIMA CONSULTING : Cabinet de conseil en management, modernisation et innovation des organisations."/>

    <meta property="og:url" content="{{ route('index_page', app()->getLocale() ) }}"/>

    <meta property="og:title" content="Ecima Consulting"/>

@endsection

@section('title', 'HOME')

@section('content')



    <!-- Hero Start -->
    <section class="home-slider position-relative">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active" data-bs-interval="6000">
                    <div class="bg-half-170 d-table w-100" style="background: url('{{ asset('frontend/images/bg/business.jpg')}}') top;">
                        <div class="bg-overlay"></div>
                        <div class="container">
                            <div class="row justify-content-center mt-5">
                                <div class="col-lg-12 text-center">
                                    <div class="title-heading mt-4">
                                        <h4 class="display-3 fw-bold text-white mb-3">BUSINESS INTELLIGENCE</h4>
                                        <p class="text-white-50 mx-auto para-desc">Suivre  et piloter l'activité de toute votre entreprise de partout où vous vous trouvez juste par un simple clic
                                        </p>

                                        <div class="mt-4 pt-2">

                                            <a href="{{ route('business_intelligence_page',[app()->getLocale()]) }}" class="btn btn-lg btn-primary">En Savoir Plus</a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end container-->
                    </div><!--end slide-->
                </div>

                

                <div class="carousel-item" data-bs-interval="6000">
                    <div class="bg-half-170 d-table w-100" style="background: url('{{ asset('frontend/images/bg/sport13.jpg')}}') top;">
                        <div class="bg-overlay"></div>
                        <div class="container">
                            <div class="row justify-content-center mt-5">
                                <div class="col-lg-12 text-center">
                                    <div class="title-heading mt-4">
                                        <h4 class="display-3 fw-bold text-white mb-3">Formation</h4>
                                        <p class="text-white-50 mx-auto para-desc">Améliorer le Savoir-faire et le Savoir-être de vos équipes pour une meilleure efficacité et compétitivité
                                        </p>

                                        <div class="mt-4 pt-2">
                                            <a href="https://formation.ecimaconsulting.com/" class="btn btn-lg btn-primary">En Savoir Plus</a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end container-->
                    </div><!--end slide-->
                </div>

                

                <div class="carousel-item" data-bs-interval=6000">
                    <div class="bg-half-170 d-table w-100" style="background: url('{{ asset('frontend/images/bg/sport14.jpg')}}') top;">
                        <div class="bg-overlay"></div>
                        <div class="container">
                            <div class="row justify-content-center mt-5">
                                <div class="col-lg-12 text-center">
                                    <div class="title-heading mt-4">
                                        <h4 class="display-3 fw-bold text-white mb-3">{{ __('menu_it_digital')}}</h4>
                                        <p class="text-white-50 mx-auto para-desc">Améliorer le Savoir-Faire et le Savoir-Etre de vos équipes pour une meilleure efficacité et compétitivité
                                        </p>

                                        <div class="mt-4 pt-2">
                                            <a href="https://ecimadigital.ecimaconsulting.com/" class="btn btn-lg btn-primary">En Savoir Plus</a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end container-->
                    </div><!--end slide-->
                </div>

            </div>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
               
            
            </div>
        </div>
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title fw-semibold mb-4">Nos Projets Recents</h4>
                        <p class="para-desc text-muted mx-auto mb-0"></p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-12">
                    <div class="tiny-five-item">
                        <div class="tiny-slide">
                            <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                                <div class="card-img position-relative">
                                    <a href="https://digifood.app/" >
                                        <img src="{{ asset('frontend/images/ecima/81.jpg')}}" class="img-fluid" alt="">
                                    </a>

                                    <div class="card-overlay"></div>

                                </div>
                                <div class="content pt-3">
                                    <a href="https://digifood.app/" class="text-dark h6 mb-0 d-block title">Digifood</a>
                                    <small class="text-muted fw-normal mb-0">Software</small>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="tiny-slide">
                            <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                                <div class="card-img position-relative">
                                    <img src="{{ asset('frontend/images/ecima/82.jpg')}}" class="img-fluid" alt="">
                                    <div class="card-overlay"></div>

                                </div>
                                <div class="content pt-3">
                                    <a href="https://www.ecimalearning.com/" class="text-dark h6 mb-0 d-block title">Ecima Learnings</a>
                                    <small class="text-muted fw-normal mb-0">Education</small>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="tiny-slide">
                            <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                                <div class="card-img position-relative">
                                    <img src="{{ asset('frontend/images/ecima/83.jpg')}}" class="img-fluid" alt="">
                                    <div class="card-overlay"></div>

                                </div>
                                <div class="content pt-3">
                                    <a href="https://www.cm.paruparti.fr/" class="text-dark h6 mb-0 d-block title">Cm.Paruparti</a>
                                    <small class="text-muted fw-normal mb-0">Annonces</small>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="tiny-slide">
                            <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                                <div class="card-img position-relative">
                                    <img src="{{ asset('frontend/images/ecima/90.jpg')}}" class="img-fluid" alt="">
                                    <div class="card-overlay"></div>

                                </div>
                                <div class="content pt-3">
                                    <a href="https://izipos.app/" class="text-dark h6 mb-0 d-block title">Izipos</a>
                                    <small class="text-muted fw-normal mb-0">Encaissement</small>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="tiny-slide">
                            <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                                <div class="card-img position-relative">
                                    <img src="{{ asset('frontend/images/ecima/86.jpg')}}" class="img-fluid" alt="">
                                    <div class="card-overlay"></div>

                                </div>
                                <div class="content pt-3">
                                    <a href="https://recrutement.ecimaconsulting.com/" class="text-dark h6 mb-0 d-block title">Ecima Recrutement</a>
                                    <small class="text-muted fw-normal mb-0">Recrutement</small>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="tiny-slide">
                            <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                                <div class="card-img position-relative">
                                    <img src="{{ asset('frontend/images/ecima/92.jpg')}}" class="img-fluid" alt="">
                                    <div class="card-overlay"></div>

                                </div>
                                <div class="content pt-3">
                                    <a href="https://blog.ecimaconsulting.com/public/fr/blog/accueil" class="text-dark h6 mb-0 d-block title">Focus Ecima</a>
                                    <small class="text-muted fw-normal mb-0">Journal</small>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="tiny-slide">
                            <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                                <div class="card-img position-relative">
                                    <img src="{{ asset('frontend/images/ecima/87.jpg')}}" class="img-fluid" alt="">
                                    <div class="card-overlay"></div>

                                </div>
                                <div class="content pt-3">
                                    <a href="https://formation.ecimaconsulting.com/" class="text-dark h6 mb-0 d-block title">Ecima Formation</a>
                                    <small class="text-muted fw-normal mb-0">Formation</small>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="tiny-slide">
                            <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                                <div class="card-img position-relative">
                                    <img src="{{ asset('frontend/images/ecima/88.jpg')}}" class="img-fluid" alt="">
                                    <div class="card-overlay"></div>

                                </div>
                                <div class="content pt-3">
                                    <a href="http://www.ecimadigital.ecimaconsulting.com/" class="text-dark h6 mb-0 d-block title">Ecima Digital</a>
                                    <small class="text-muted fw-normal mb-0">Development</small>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="tiny-slide">
                            <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                                <div class="card-img position-relative">
                                    <img src="{{ asset('frontend/images/ecima/89.jpg')}}" class="img-fluid" alt="">
                                    <div class="card-overlay"></div>

                                </div>
                                <div class="content pt-3">
                                    <a href="http://investment.ecimagroup.com/" class="text-dark h6 mb-0 d-block title">Ecima Investissement</a>
                                    <small class="text-muted fw-normal mb-0">Investissement</small>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title fw-semibold mb-4">Nos Offres</h4>
                        <p class="para-desc text-muted mx-auto mb-0">Explorez les différentes offres que nous mettons à votre disposition.</p>
                    </div>
                </div>

                <div class="col-12">
                    <div class="tiny-three-item">
                        <div class="tiny-slide">
                            <div class="card features features-modern feature-primary m-2">
                                <div class="card-img position-relative overflow-hidden">
                                    <img src="{{ asset('frontend/images/ecima/img4.jpg')}}" class="img-fluid rounded" alt="">
                                    <div class="overlay rounded"></div>
                                    <div class="content bg-transparent">
                                        <a href="http://www.ecimadigital.ecimaconsulting.com/" class="text-white small mb-0 d-block title">En Savoir Plus <i class="uil uil-arrow-right align-middle"></i></a>
                                    </div>
                                </div>

                                <div class="px-2 pt-4">
                                    <a href="http://www.ecimadigital.ecimaconsulting.com/" class="title text-dark h5">Transformation & Organisation</a>

                                    <p style="text-align: justify" class="text-muted mt-2 mb-0">Accompagnez votre entreprise dans sa transformation:
                                        <br>Nouvelle Strategie, Changement de business model, Changement Technique </p>


                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="card features features-modern feature-primary m-2">
                                <div class="card-img position-relative overflow-hidden">
                                    <img src="{{ asset('frontend/images/ecima/img2.jpg')}}" class="img-fluid rounded" alt="">
                                    <div class="overlay rounded"></div>
                                    <div class="content bg-transparent">
                                        <a href="http://www.ecimadigital.ecimaconsulting.com/" class="text-white small mb-0 d-block title">En Savoir Plus <i class="uil uil-arrow-right align-middle"></i></a>
                                    </div>
                                </div>

                                <div class="px-2 pt-4">
                                    <a href="http://www.ecimadigital.ecimaconsulting.com/" class="title text-dark h5">Data Intelligence</a>

                                    <p style="text-align: justify" class="text-muted mt-2 mb-0">Accompagner les entreprises dans leurs projets data intelligence pour la maitrise et la valorisation de leur patrimoine data.</p>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="card features features-modern feature-primary m-2">
                                <div class="card-img position-relative overflow-hidden">
                                    <img src="{{ asset('frontend/images/ecima/img8.jpg')}}" class="img-fluid rounded" alt="">
                                    <div class="overlay rounded"></div>
                                    <div class="content bg-transparent">
                                        <a href="http://www.ecimadigital.ecimaconsulting.com/" class="text-white small mb-0 d-block title">En Savoir Plus <i class="uil uil-arrow-right align-middle"></i></a>
                                    </div>
                                </div>

                                <div class="px-2 pt-4">
                                    <a href="http://www.ecimadigital.ecimaconsulting.com/" class="title text-dark h5">Architecture D'entreprise</a>

                                    <p style="text-align: justify" class="text-muted mt-2 mb-0">Analyser le Si en alignement avec la stratégie globale des entreprises: définir un plan de développement cohérent en phase avec la stratégie les métiers, les processus,la technologie….</p>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="card features features-modern feature-primary m-2">
                                <div class="card-img position-relative overflow-hidden">
                                    <img src="{{ asset('frontend/images/ecima/img7.jpg')}}" class="img-fluid rounded" alt="">
                                    <div class="overlay rounded"></div>
                                    <div class="content bg-transparent">
                                        <a href="http://www.ecimadigital.ecimaconsulting.com/" class="text-white small mb-0 d-block title">En Savoir Plus <i class="uil uil-arrow-right align-middle"></i></a>
                                    </div>
                                </div>

                                <div class="px-2 pt-4">
                                    <a href="http://www.ecimadigital.ecimaconsulting.com/" class="title text-dark h5">DIGITAL & LOGICIELS</a>

                                    <p style="text-align: justify" class="text-muted mt-2 mb-0">Accompagner les entreprises dans la formalisation, l'optimisation et la digitalisation de leurs processus</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

    </section><!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="section bg-black" >
        <div class="container-fluid" >
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title fw-semibold mb-4" style="color: white"> Nos produits</h4>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row justify-content-center">

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card blog blog-primary shadow rounded overflow-hidden">
                        <div class="image position-relative overflow-hidden">
                            <img src="{{ asset('frontend/images/ecima/img36.jpg')}}" class="img-fluid" alt="">

                            <div class="blog-tag">
                                <a href="https://formation.ecimaconsulting.com/" class="badge bg-light">Hub de restaurants</a>
                            </div>
                        </div>

                        <div class="card-body content">
                            <a href="https://digifood.app" style="text-align: center"  class="h5 title text-white d-block mb-0">DIGIFOOD</a>
                            <p class="text-muted mt-2 mb-2" style="text-align: justify">Un hub de restaurants 100% Camerounais. COmparez les offres de nos différents restaurateurs et commandez vos plats</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card blog blog-primary shadow rounded overflow-hidden">
                        <div class="image position-relative overflow-hidden">
                            <img src="{{ asset('frontend/images/ecima/img37.png')}}" class="img-fluid" alt="">

                            <div class="blog-tag">
                                <a href="https://www.cm.paruparti.fr/" class="badge bg-light">Site d'annonces</a>
                            </div>
                        </div>

                        <div class="card-body content">
                            <a href="https://www.cm.paruparti.fr/" style="text-align: center"  class="h5 title text-white d-block mb-0">PARUPARTI</a>
                            <p class="text-muted mt-2 mb-2" style="text-align: justify">Votre site des pétites annonces. Postez vos annonces, Vendez, Achetez, louez et échangez en toute sécurité sur cm.paruparti.fr.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card blog blog-primary shadow rounded overflow-hidden">
                        <div class="image position-relative overflow-hidden">
                            <img src="{{ asset('frontend/images/ecima/img40.png')}}" class="img-fluid" alt="">

                            <div class="blog-tag">
                                <a href="https://izipos.app/" class="badge bg-light">Logiciel d'encaissement</a>
                            </div>
                        </div>

                        <div class="card-body content">
                            <a href="https://izipos.app/" class="h5 title text-white d-block mb-0" style="text-align: center" >IZIPOS</a>
                            <p class="text-muted mt-2 mb-2" style="text-align: justify">Quelque soit votre type de commerce vous pourrez gérer vos ventes, vos stocks, vos produits et prestations, vos clients et vos fournisseurs .</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card blog blog-primary shadow rounded overflow-hidden">
                        <div class="image position-relative overflow-hidden">
                            <img src="{{ asset('frontend/images/ecima/img38.png')}}" class="img-fluid" alt="">

                            <div class="blog-tag">
                                <a href="https://www.ecimalearning.com/" class="badge bg-light">E-Learning</a>
                            </div>
                        </div>

                        <div class="card-body content">
                            <a href="https://www.ecimalearning.com/" style="text-align: center"  class="h5 title text-white d-block mb-0">ECIMALEARNING</a>
                            <p class="text-muted mt-2 mb-2" style="text-align: justify">ECIMA ONLINE CLASSROOM. Nous vous proposons d’excellentes formations en présentiel et en ligne afin d’accroitre votre productivité</p>
                        </div>
                    </div>
                </div><!--end col-->

            </div><!--end row-->
        </div><!--end container-->


    </section><!--end section-->
    <!-- End -->
    
    <!-- Start -->
    <section class="section bg-light overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title fw-semibold mb-3">Nos domaines de formation</h4>
                        <p class="text-muted para-desc mx-auto mb-0"></p>
                    </div>
                    {{--<div class="filters-group-wrap text-center">
                        <div class="filters-group">
                            <ul class="container-filter mb-0 categories-filter list-unstyled filter-options">
                                <li class="list-inline-item categories position-relative active" data-group="all">All</li>
                                <li class="list-inline-item categories position-relative" data-group="branding">Branding</li>
                                <li class="list-inline-item categories position-relative" data-group="designing">Designing</li>
                                <li class="list-inline-item categories position-relative" data-group="photography">Photography</li>
                                <li class="list-inline-item categories position-relative" data-group="development">Development</li>
                            </ul>
                        </div>
                    </div>--}}
                </div><!--end col-->
            </div><!--end row-->


            <div id="grid" class="row mt-4">
                <div class="col-md-3 col-12 spacing picture-item" data-groups='["branding"]'>
                    <div class="card portfolio portfolio-modern portfolio-primary rounded overflow-hidden">
                        <a href="https://formation.ecimaconsulting.com/category/marketing-digital/" >
                            <img src=" {{ asset('frontend/images/ecima/img14.jpeg')}} " class="img-fluid" alt="">
                        </a>
                        <div class="content text-center p-3">
                            <a href="https://formation.ecimaconsulting.com/category/marketing-digital/" class="text-dark h6 mb-0 d-block title">Marketing &
                                Digital </a>

                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-3 col-12 spacing picture-item" data-groups='["designing"]'>
                    <div class="card portfolio portfolio-modern portfolio-primary rounded overflow-hidden">
                        <a href="https://formation.ecimaconsulting.com/category/ressources-humaines/" >
                            <img src="{{ asset('frontend/images/ecima/img15.jpeg')}}" class="img-fluid" alt="">
                        </a>
                        <div class="content text-center p-3">
                            <a href="https://formation.ecimaconsulting.com/category/ressources-humaines/" class="text-dark h6 mb-0 d-block title">Ressources
                                Humaines</a>

                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-3 col-12 spacing picture-item" data-groups='["photography"]'>
                    <div class="card portfolio portfolio-modern portfolio-primary rounded overflow-hidden">
                        <a href="https://formation.ecimaconsulting.com/category/it/">
                            <img src="{{ asset('frontend/images/ecima/img16.jpeg')}}" class="img-fluid" alt="">
                        </a>
                        <div class="content text-center p-3">
                            <a href="https://formation.ecimaconsulting.com/category/it/" class="text-dark h6 mb-0 d-block title">Technologie de
                                l'information</a>

                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-3 col-12 spacing picture-item" data-groups='["development"]'>
                    <div class="card portfolio portfolio-modern portfolio-primary rounded overflow-hidden">
                        <a href="https://formation.ecimaconsulting.com/category/management-entreprise/" >
                            <img src="{{ asset('frontend/images/ecima/img17.jpeg')}}" class="img-fluid" alt="">
                        </a>
                        <div class="content text-center p-3">
                            <a href="https://formation.ecimaconsulting.com/category/management-entreprise/" class="text-dark h6 mb-0 d-block title">Management
                                D'entreprises</a>

                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-3 col-12 spacing picture-item" data-groups='["branding"]'>
                    <div class="card portfolio portfolio-modern portfolio-primary rounded overflow-hidden">
                        <a href="https://formation.ecimaconsulting.com/category/finance-comptabilite/">
                            <img src="{{ asset('frontend/images/ecima/img22.jpg')}}" class="img-fluid" alt="">
                        </a>
                        <div class="content text-center p-3">
                            <a href="https://formation.ecimaconsulting.com/category/finance-comptabilite/" class="text-dark h6 mb-0 d-block title">Finances &
                                Comptabilité</a>

                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-3 col-12 spacing picture-item" data-groups='["designing"]'>
                    <div class="card portfolio portfolio-modern portfolio-primary rounded overflow-hidden">
                        <a href="https://formation.ecimaconsulting.com/category/secretariat/" >
                            <img src="{{ asset('frontend/images/ecima/img19.jpeg')}}" class="img-fluid" alt="">
                        </a>
                        <div class="content text-center p-3">
                            <a href="https://formation.ecimaconsulting.com/category/secretariat/"
                               class="text-dark h6 mb-0 d-block title">Secretariat</a>

                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-3 col-12 spacing picture-item" data-groups='["photography"]'>
                    <div class="card portfolio portfolio-modern portfolio-primary rounded overflow-hidden">
                        <a href="https://formation.ecimaconsulting.com/category/qualite/">
                            <img src="{{ asset('frontend/images/ecima/img20.jpeg')}}" class="img-fluid" alt="">
                        </a>
                        <div class="content text-center p-3">
                            <a href="https://formation.ecimaconsulting.com/category/qualite/" class="text-dark h6 mb-0 d-block title">Qualité</a>

                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-3 col-12 spacing picture-item" data-groups='["development"]'>
                    <div class="card portfolio portfolio-modern portfolio-primary rounded overflow-hidden">
                        <a href="https://formation.ecimaconsulting.com/category/supply-chain-management/">
                            <img src="{{ asset('frontend/images/ecima/img21.jpeg')}}" class="img-fluid" alt="">
                        </a>
                        <div class="content text-center p-3">
                            <a href="https://formation.ecimaconsulting.com/category/supply-chain-management/" class="text-dark h6 mb-0 d-block title">Gestion de la
                                chaîne d'approvisionnement</a>

                        </div>
                    </div>
                </div><!--end col-->


            </div><!--end row-->


        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h6 class="text-primary">Blogs</h6>
                        <h4 class="title fw-semibold mt-2 mb-3">ACTUALITÉS ET ÉVÉNEMENTS RÉCENTS</h4>
                        <p class="text-muted para-desc mx-auto mb-0"></p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog blog-primary shadow rounded overflow-hidden">
                        <div class="image position-relative overflow-hidden">
                            <img src="{{ asset('frontend/images/blog/jojo.jpg')}}" class="img-fluid" alt="">

                            <div class="blog-tag">
                                <a href="https://formation.ecimaconsulting.com/" class="badge bg-light">Formation</a>
                            </div>
                        </div>

                        <div class="card-body content">
                            <a href="https://formation.ecimaconsulting.com/" class="h5 title text-dark d-block mb-0">Formation Ecima Consulting</a>
                            <p class="text-muted mt-2 mb-2">Améliorer les Savoir Faire et les Savoir Etre de vos équipes pour une meilleure efficacité et créativité.</p>
                            <a href="https://formation.ecimaconsulting.com/" class="link text-dark">En Savoir Plus <i class="uil uil-arrow-right align-middle"></i></a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog blog-primary shadow rounded overflow-hidden">
                        <div class="image position-relative overflow-hidden">
                            <img src="{{ asset('frontend/images/blog/jo.jpg')}}" class="img-fluid" alt="">

                            <div class="blog-tag">
                                <a href="https://www.ecimalearning.com/" class="badge bg-light">E-learning</a>
                            </div>
                        </div>

                        <div class="card-body content">
                            <a href="https://www.ecimalearning.com/" class="h5 title text-dark d-block mb-0">Ecima Online Classroom</a>
                            <p class="text-muted mt-2 mb-2">Apprenez à votre propre rythme la reflexion de l'équipe porte sur la progressivité de l'apprentissages.</p>
                            <a href="https://www.ecimalearning.com/" class="link text-dark">En Savoir Plus <i class="uil uil-arrow-right align-middle"></i></a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog blog-primary shadow rounded overflow-hidden">
                        <div class="image position-relative overflow-hidden">
                            <img src="{{ asset('frontend/images/blog/joel.jpg')}}" class="img-fluid" alt="">

                            <div class="blog-tag">
                                <a href="https://recrutement.ecimaconsulting.com/" class="badge bg-light">Recrutement</a>
                            </div>
                        </div>

                        <div class="card-body content">
                            <a href="https://recrutement.ecimaconsulting.com/" class="h5 title text-dark d-block mb-0">Recrutement Ecima Consulting</a>
                            <p class="text-muted mt-2 mb-2">Recruter pour vous, à l'internationale ou au Cameroun des profils à hauts potentiels et à long terme.</p>
                            <a href="https://recrutement.ecimaconsulting.com/" class="link text-dark">En Savoir Plus <i class="uil uil-arrow-right align-middle"></i></a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    <!-- CTA Start -->
    <div class="container-fluid px-0">
        <div class="py-5 position-relative" style="background: url('{{ asset('frontend/images/cta02.jpg')}}') center; background-attachment: fixed">
            <div class="bg-overlay bg-gradient-overlay"></div>
            <div class="container my-5">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-7">
                        <h6 class="display-6  mb-0 text-white fw-medium" style="font-size: 30px !important">Apprenez efficacement.<br>Faites
                            Avancer votre carrière.</h6>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-5 text-md-end mt-4 mt-sm-0">
                        <a href="{{ route('contact_page',[app()->getLocale()]) }}" class="btn btn-light">Rejoignez
                            nous.</a>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </div><!--end bg image-->
    </div><!--end container-->
    <!-- CTA End -->
    
    <!-- Start -->
    <section class="section"
             style="background: url('{{asset("frontend/images/cta06.png")}}') no-repeat right bottom; padding: 20px 0;">

        <div class="container ">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="card border-0">
                        <div class="card-body p-0">
                            <img src="{{ asset('frontend/images/svg/contact.svg')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-5 col-md-6 pt-2 pt-sm-0">
                    <div class="card bg-white shadow rounded border-0">
                        <div class="card-body">
                            <h4 class="card-title">Prenez un rendez-vous !</h4>
                            <div class="custom-form mt-4">
                                <form method="post"  name="myForm" action="{{ route('admin_store_message_page') }}">
                                    @csrf
                                    <p id="error-msg" class="mb-0"></p>
                                    <div id="simple-msg"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Votre noms <span class="text-danger">*</span></label>
                                                <input name="name" id="name" type="text" class="form-control"
                                                       placeholder="Noms :">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Votre courriel <span
                                                        class="text-danger">*</span></label>
                                                <input name="email" id="email" type="email" class="form-control"
                                                       placeholder="Courriel :">
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Sujet</label>
                                                <input name="subject" id="subject" class="form-control"
                                                       placeholder="Sujet :">
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Message <span
                                                        class="text-danger">*</span></label>
                                                <textarea name="contentt" id="comments" rows="3" class="form-control"
                                                          placeholder="Message :"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" id="submit" name="send" class="btn btn-primary">
                                                    Envoyez votre Message
                                                </button>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form>
                            </div><!--end custom-form-->
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->




@endsection
