@extends('layouts.frontend.main-layout')

@section('content')

    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" style="background: url('images/bg/about.jpg') center;">
        <div class="bg-overlay bg-gradient-overlay"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-12">
                    <div class="title-heading text-center">
                        <small class="text-white-50 mb-1 fw-medium text-uppercase mx-auto">Who we are?</small>
                        <h5 class="heading fw-semibold mb-0 page-heading text-white">About Our Company</h5>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="position-middle-bottom">
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html">Starty</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ul>
                </nav>
            </div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Start -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <img src="images/about.jpg" class="img-fluid rounded shadow" alt="">
                </div><!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title ms-lg-5">
                        <h4 class="title mb-3">We are a creative design studio!</h4>
                        <p class="text-muted">This prevents repetitive patterns from impairing the overall visual impression and facilitates the comparison of different typefaces. Furthermore, it is advantageous when the dummy text is relatively realistic so that the layout impression of the final publication is not compromised.</p>
                        <ul class="list-unstyled text-muted mb-0">
                            <li class="mb-0"><span class="text-dark h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Beautiful and easy to understand animations</li>
                            <li class="mb-0"><span class="text-dark h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                            <li class="mb-0"><span class="text-dark h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Theme advantages are pixel perfect design</li>
                        </ul>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow p-4 rounded features features-classic feature-primary">
                        <i class="uil uil-airplay h1 mb-0 text-primary"></i>

                        <div class="content my-3 border-bottom">
                            <a href="page-single-service.html" class="title h5 text-dark">Developing strategy</a>

                            <p class="text-muted mt-3">It is said that song composers of the past used dummy texts as lyrics when writing to sing with the melody.</p>
                        </div>

                        <a href="page-single-service.html" class="d-flex align-items-center justify-content-between">
                            <span class="fw-medium text-dark">Read More</span>
                            <i class="mdi mdi-arrow-right"></i>
                        </a>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="card shadow p-4 rounded features features-classic feature-primary">
                        <i class="uil uil-atom h1 mb-0 text-primary"></i>

                        <div class="content my-3 border-bottom">
                            <a href="page-single-service.html" class="title h5 text-dark">Blazing performance</a>

                            <p class="text-muted mt-3">It is said that song composers of the past used dummy texts as lyrics when writing to sing with the melody.</p>
                        </div>

                        <a href="page-single-service.html" class="d-flex align-items-center justify-content-between">
                            <span class="fw-medium text-dark">Read More</span>
                            <i class="mdi mdi-arrow-right"></i>
                        </a>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2 mt-lg-0 pt-lg-0">
                    <div class="card shadow p-4 rounded features features-classic feature-primary">
                        <i class="uil uil-users-alt h1 mb-0 text-primary"></i>

                        <div class="content my-3 border-bottom">
                            <a href="page-single-service.html" class="title h5 text-dark">Customer satisfaction</a>

                            <p class="text-muted mt-3">It is said that song composers of the past used dummy texts as lyrics when writing to sing with the melody.</p>
                        </div>

                        <a href="page-single-service.html" class="d-flex align-items-center justify-content-between">
                            <span class="fw-medium text-dark">Read More</span>
                            <i class="mdi mdi-arrow-right"></i>
                        </a>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container-fluid px-0 mt-100 mt-60">
            <div class="bg-half-260" style="background: url('images/cta.jpg') top;">
                <div class="bg-overlay"></div>
                <div class="play-icon">
                    <a href="javascript:void(0)" data-type="youtube" data-id="yba7hPeTSjk" class="play-btn lightbox">
                        <i class="mdi mdi-play text-primary rounded-circle bg-white shadow"></i>
                    </a>
                </div>
            </div>
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="tiny-single-item">
                        <div class="tiny-slide px-md-5">
                            <div class="card client-testi text-center">
                                <img src="images/client/01.jpg" class="avatar avatar-small rounded-pill mx-auto" alt="">

                                <div class="card-body pb-0 content">
                                    <p class="h5 fw-normal text-muted fst-italic">" The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout. "</p>

                                    <div class="name mt-4">
                                        <small class="text-uppercase fw-semibold d-block">Johnny Rosario</small>
                                        <small class="text-muted">C.E.O</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide px-md-5">
                            <div class="card client-testi text-center">
                                <img src="images/client/02.jpg" class="avatar avatar-small rounded-pill mx-auto" alt="">

                                <div class="card-body pb-0 content">
                                    <p class="h5 fw-normal text-muted fst-italic">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others - which creates a distinct visual impression. "</p>

                                    <div class="name mt-4">
                                        <small class="text-uppercase fw-semibold d-block">Gale Larose</small>
                                        <small class="text-muted">Manager</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide px-md-5">
                            <div class="card client-testi text-center">
                                <img src="images/client/03.jpg" class="avatar avatar-small rounded-pill mx-auto" alt="">

                                <div class="card-body pb-0 content">
                                    <p class="h5 fw-normal text-muted fst-italic">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. If the fill text is intended to illustrate the characteristics of different typefaces. "</p>

                                    <div class="name mt-4">
                                        <small class="text-uppercase fw-semibold d-block">Shelly Goodman</small>
                                        <small class="text-muted">Manager</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <!-- Partners start -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-2 col-6 text-center">
                    <img src="images/client/logo-1.svg" class="img-fluid" alt="">
                </div><!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center">
                    <img src="images/client/logo-2.svg" class="img-fluid" alt="">
                </div><!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center">
                    <img src="images/client/logo-3.svg" class="img-fluid" alt="">
                </div><!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center">
                    <img src="images/client/logo-4.svg" class="img-fluid" alt="">
                </div><!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center">
                    <img src="images/client/logo-5.svg" class="img-fluid" alt="">
                </div><!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center">
                    <img src="images/client/logo-6.svg" class="img-fluid" alt="">
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- Partners End -->

        <div class="container-fluid mt-100 mt-60">
            <div class="row">
                <div class="col-12 px-0">
                    <div class="tiny-six-item">
                        <div class="tiny-slide">
                            <div class="card team team-primary">
                                <div class="card-img">
                                    <img src="images/client/09.jpg" class="img-fluid" alt="">
                                    <div class="card-overlay"></div>
                                </div>
                                <div class="team-content">
                                    <a href="javascript:void(0)" class="h6 name text-uppercase d-block mb-0 text-white">Dennis Rosario</a>
                                    <small class="text-white">C.E.O</small>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="card team team-primary">
                                <div class="card-img">
                                    <img src="images/client/10.jpg" class="img-fluid" alt="">
                                    <div class="card-overlay"></div>
                                </div>
                                <div class="team-content">
                                    <div class="name">
                                        <a href="javascript:void(0)" class="h6 name text-uppercase d-block mb-0 text-white">Billy Gregory</a>
                                        <small class="text-white">Manager</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="card team team-primary">
                                <div class="card-img">
                                    <img src="images/client/11.jpg" class="img-fluid" alt="">
                                    <div class="card-overlay"></div>
                                </div>
                                <div class="team-content">
                                    <div class="name">
                                        <a href="javascript:void(0)" class="h6 name text-uppercase d-block mb-0 text-white">Connie Dunton</a>
                                        <small class="text-white">Manager</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="card team team-primary">
                                <div class="card-img">
                                    <img src="images/client/12.jpg" class="img-fluid" alt="">
                                    <div class="card-overlay"></div>
                                </div>
                                <div class="team-content">
                                    <div class="name">
                                        <a href="javascript:void(0)" class="h6 name text-uppercase d-block mb-0 text-white">Alberta Petty</a>
                                        <small class="text-white">Manager</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="card team team-primary">
                                <div class="card-img">
                                    <img src="images/client/13.jpg" class="img-fluid" alt="">
                                    <div class="card-overlay"></div>
                                </div>
                                <div class="team-content">
                                    <div class="name">
                                        <a href="javascript:void(0)" class="h6 name text-uppercase d-block mb-0 text-white">Shirley Garcia</a>
                                        <small class="text-white">Manager</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="card team team-primary">
                                <div class="card-img">
                                    <img src="images/client/14.jpg" class="img-fluid" alt="">
                                    <div class="card-overlay"></div>
                                </div>
                                <div class="team-content">
                                    <div class="name">
                                        <a href="javascript:void(0)" class="h6 name text-uppercase d-block mb-0 text-white">Michael Wheeler</a>
                                        <small class="text-white">Manager</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="counter-box position-relative text-center">
                        <h2 class="mb-0 display-1 fw-bold title-dark mt-2 opacity-05"><span class="counter-value" data-target="5458">3</span></h2>
                        <span class="counter-head fw-semibold title-dark position-absolute top-50 start-50 translate-middle">Investment Projects</span>
                    </div><!--end counter box-->
                </div><!--end col-->

                <div class="col-md-3 col-6">
                    <div class="counter-box position-relative text-center">
                        <h2 class="mb-0 display-1 fw-bold title-dark mt-2 opacity-05"><span class="counter-value" data-target="15">1</span></h2>
                        <span class="counter-head fw-semibold title-dark position-absolute top-50 start-50 translate-middle">Years of Experience</span>
                    </div><!--end counter box-->
                </div><!--end col-->

                <div class="col-md-3 col-6">
                    <div class="counter-box position-relative text-center">
                        <h2 class="mb-0 display-1 fw-bold title-dark mt-2 opacity-05"><span class="counter-value" data-target="54">0</span></h2>
                        <span class="counter-head fw-semibold title-dark position-absolute top-50 start-50 translate-middle">Offices in the World</span>
                    </div><!--end counter box-->
                </div><!--end col-->

                <div class="col-md-3 col-6">
                    <div class="counter-box position-relative text-center">
                        <h2 class="mb-0 display-1 fw-bold title-dark mt-2 opacity-05"><span class="counter-value" data-target="214">3</span></h2>
                        <span class="counter-head fw-semibold title-dark position-absolute top-50 start-50 translate-middle">Successful Cases</span>
                    </div><!--end counter box-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->


@endsection
