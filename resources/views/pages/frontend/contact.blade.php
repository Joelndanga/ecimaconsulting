@extends('layouts.frontend.main-layout')

@section('title', 'JOURNAL')

@section('content')

    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" style="background: url('{{ asset('frontend/images/ecima/img31.jpeg')}}') center;">
        <div class="bg-overlay bg-gradient-overlay"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-12">
                    <div class="title-heading text-center">
                        <small class="text-white-50 mb-1 fw-medium text-uppercase mx-auto">Ecima Consulting</small>
                        <h5 class="heading fw-semibold mb-0 page-heading text-white">Contactez Nous</h5>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="position-middle-bottom">
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('index_page',[app()->getLocale()]) }}">ECIMA CONSULTING</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ul>
                </nav>
            </div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Start -->
    <section class="section pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0 text-center features feature-clean bg-transparent">
                        <div class="icons text-primary text-center mx-auto">
                            <i class="uil uil-phone d-block rounded h3 mb-0"></i>
                        </div>
                        <div class="content mt-3">
                            <h5 class="footer-head">Téléphone</h5>
                            <p class="text-muted">Faites nous confiance pour l'optimisation de vos processus metier</p>
                            <a href="tel:+237694926164" class="text-foot">+237 694 926 164</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 text-center features feature-clean bg-transparent">
                        <div class="icons text-primary text-center mx-auto">
                            <i class="uil uil-envelope d-block rounded h3 mb-0"></i>
                        </div>
                        <div class="content mt-3">
                            <h5 class="footer-head">Email</h5>
                            <p class="text-muted">Commencez à travailler avec Ecima Consulting qui peut tout fournir</p>
                            <a href="mailto:contact@ecimaconsulting.com" class="text-foot">contact@ecimaconsulting.com</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 text-center features feature-clean bg-transparent">
                        <div class="icons text-primary text-center mx-auto">
                            <i class="uil uil-map-marker d-block rounded h3 mb-0"></i>
                        </div>
                        <div class="content mt-3">
                            <h5 class="footer-head">Localisation</h5>
                            <p class="text-muted">Douala Cameroun Akwa, <br>329 Rue Sylvanie</p>
                            <a href="https://goo.gl/maps/o7cdgya2Dc37hDVS6"
                               data-type="iframe" class="video-play-icon text-foot lightbox">Nous retrouvez sur google map</a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title mb-5 pb-2 text-center">
                        <h4 class="title mb-3">Prenez un rendez vous !</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Nos projets de conception sont simples et
                            profiteront grandement à votre entreprise. Apprenez-en plus sur notre travail !</p>
                    </div>
                    <div class="custom-form">
                        <form method="post" action="{{ route('admin_store_message_page') }}"
                              name="myForm">
                            @csrf
                            <p id="error-msg" class="mb-0"></p>
                            <div id="simple-msg"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Votre Noms <span class="text-danger">*</span></label>
                                        <input name="name" id="name" type="text" class="form-control"
                                               placeholder="Noms :">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Votre Email <span class="text-danger">*</span></label>
                                        <input name="email" id="email" type="email" class="form-control" placeholder="Email :">
                                    </div>
                                </div><!--end col-->

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Sujet de votre message</label>
                                        <input name="subject" id="subject" class="form-control" placeholder="Sujet :">
                                    </div>
                                </div><!--end col-->

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Message <span class="text-danger">*</span></label>
                                        <textarea name="contentt" id="comments" rows="4" class="form-control"
                                                  placeholder="Message :"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" id="submit" name="send" class="btn btn-primary">Envoyez
                                            votre message
                                        </button>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form>
                    </div><!--end custom-form-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container-fluid mt-100 mt-60">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="card map border-0">
                        <div class="card-body p-0">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15919.181608085106!2d9.6898324!3d4.0620861!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2scm!4v1652109071244!5m2!1sfr!2scm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

@endsection
