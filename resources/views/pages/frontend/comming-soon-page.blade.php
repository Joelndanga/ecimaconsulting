@extends('layouts.frontend.main-layout')

@section('title', 'COMING SOON')

@section('content')
    <!-- Start -->
    <section class="position-relative" style="background: url('{{ asset('frontend/images/bg/comingsoon.jpg')}}') center;">
        <div class="bg-overlay opacity-7"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="d-flex flex-column min-vh-100 justify-content-center px-md-5 py-5 px-4">
                        <div class="text-center mt-md-5">
                            <a href="index.html"><img src="{{ asset('backend/images/ecima/ecima-group-logo.png')}}" height="48" alt=""></a>
                        </div>
                        <div class="title-heading text-center my-auto">
                            <h4 class="coming-soon fw-bold text-uppercase">Page sous maintenance</h4>
                            <p class="text-white-50 para-desc mx-auto mb-0"></p>

                            <div class="subcribe-form mt-4 pt-2">
                                <form action="https://shreethemes.in/starty/page-comingsoon.html">
                                    <input type="email" id="email" class="bg-white opacity-6 rounded shadow" required placeholder="Entrez votre adresse mail">
                                    <button type="submit" class="btn btn-primary" style="top: 2.5px;">Me Notifier</button>
                                </form>
                            </div>

                            <p class="text-white-50 mt-2"><span class="text-danger fw-bold">*</span>Me Notifier lorsque la page est ligne</p>
                        </div>
                        <div class="text-center mb-md-5">
                            <span class="text-white-50 h6">Suivez Nous</span>
                            <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-2">
                                <li class="list-inline-item"><a href="https://www.facebook.com/ecimaconsulting" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="https://twitter.com/ConsultingEcima" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.linkedin.com/company/ecima-consulting/" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                            </ul><!--end icon-->
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->

@endsection
