@extends('layouts.frontend.main-layout')

@section('content')

    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" style="background: url('{{ asset('frontend/images/ecima/img31.jpeg')}}') center;">
        <div class="bg-overlay bg-gradient-overlay"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">

                <div class="col-12">
                    <div class="title-heading text-center">
                        <small class="text-white-50 mb-1 fw-medium text-uppercase mx-auto">Qui Sommes Nous ?</small>
                        <h5 class="heading fw-semibold mb-0 page-heading text-white">A Propos De Nous</h5>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="position-middle-bottom">
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('index_page',[app()->getLocale()]) }}">Ecima Consulting</a></li>
                        <li class="breadcrumb-item active" aria-current="page">A Propos De Nous</li>
                    </ul>
                </nav>
            </div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <img src="{{ asset('frontend/images/ecima/img1.jpeg')}}" class="img-fluid rounded shadow" alt="">
                </div><!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0 ">
                    <div class="section-title ms-lg-5">
                        <h4 class="title mb-3">Nous Sommes Une Entreprise Creative!</h4>
                        <p class="text-muted">ECIMA Consulting est une société de conseil en management, modernisation et innovation des organisations. Nous nous voulons d'être présents dans tous les secteurs économiques et partenaires de directions métiers et fonctionnelles. Nous accompagnons nos clients sur:</p>
                        <ul class="list-unstyled text-muted mb-0">
                            <li class="mb-0"><span class="text-dark h5 me-2"><i class="mdi mdi-arrow-right"></i></span>Nous accompagnons les entreprise pour qu'elles deviennent plus performantes.</li>
                            <li class="mb-0"><span class="text-dark h5 me-2"><i class="mdi mdi-arrow-right"></i></span>Nous accompagnons les entreprise dans la formalisation, l'optimisation et la digitalisation de leurs processus.</li>
                            <li class="mb-0"><span class="text-dark h5 me-2"><i class="mdi mdi-arrow-right"></i></span>Améliorer les Savoir Faire et les Savoir Etre de vos équipes pour une meilleure efficacité et compétitivité.</li>
                        </ul>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </section><!--end container-->

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow p-4 rounded features features-classic feature-primary">
                    <i class="uil uil-users-alt h1 mb-0 text-primary"></i>

                        <div class="content my-3 border-bottom">
                            <a href="http://www.ecimadigital.ecimaconsulting.com/" class="title h5 text-dark">Data Intelligence</a>

                            <p class="text-muted mt-3">Accompagner votre entreprise dans la maitrise et la valorisation de son patrimoine data.</p>
                        </div>

                        <a href="http://www.ecimadigital.ecimaconsulting.com/" class="d-flex align-items-center justify-content-between">
                            <span class="fw-medium text-dark">En Savoir Plus</span>
                            <i class="mdi mdi-arrow-right"></i>
                        </a>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="card shadow p-4 rounded features features-classic feature-primary">
                    <i class="uil uil-users-alt h1 mb-0 text-primary"></i>
                        <div class="content my-3 border-bottom">
                            <a href="http://www.ecimadigital.ecimaconsulting.com/" class="title h5 text-dark">Audit SI</a>

                            <p class="text-muted mt-3">Evaluer l'efficacité, la performance, la pérennité et la sécurité de l'information avec les objectifs stratégique.</p>
                        </div>

                        <a href="http://www.ecimadigital.ecimaconsulting.com/" class="d-flex align-items-center justify-content-between">
                            <span class="fw-medium text-dark">En Savoir Plus</span>
                            <i class="c"></i>
                        </a>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2 mt-lg-0 pt-lg-0">
                    <div class="card shadow p-4 rounded features features-classic feature-primary">
                        <i class="uil uil-users-alt h1 mb-0 text-primary"></i>

                        <div class="content my-3 border-bottom">
                            <a href="http://www.ecimadigital.ecimaconsulting.com/" class="title h5 text-dark">Representation</a>

                            <p class="text-muted mt-3">Accompagner et représenter les camerounais de la diaspora et capitaux étrangers dans leurs projets.</p>
                        </div>

                        <a href="http://www.ecimadigital.ecimaconsulting.com/" class="d-flex align-items-center justify-content-between">
                            <span class="fw-medium text-dark">En Savoir Plus</span>
                            <i class="mdi mdi-arrow-right"></i>
                        </a>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>

        <section class="section bg-light overflow-hidden">
            <div class="container ">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-8">
                        <div class="section-title text-md-start text-center mb-4 pb-2">
                            <h4 class="title fw-semibold mb-3">Acquérez les compétences de demain.</h4>
                            <p class="para-desc text-muted mb-0">Montez en compétences, et grandissez professionnellement
                                grâce aux formations d'ECIMA FORMATION</p>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-5 col-md-4 d-none d-md-block">
                        <div class="text-md-end text-center">
                            <a href="{{ route('contact_page',[app()->getLocale()]) }}" class="btn btn-primary">Contactez
                                Nous</a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section>



    <!-- End -->


@endsection
