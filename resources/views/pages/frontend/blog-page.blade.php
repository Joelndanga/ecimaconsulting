@extends('layouts.frontend.main-layout')

@section('title', 'JOURNAL')

@section('content')
<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('{{ asset('frontend/images/bg/blog01.jpg')}}') center;">
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <h5 class="heading fw-semibold page-heading text-white">{{ __('title_journal') }}</h5>
                    <p class="text-white-50 para-desc mx-auto mb-0">Our Latest Blog and News in Grid Layouts</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Hero End -->

<!-- Start -->
<section class="section">
    <div class="container">
        <div class="row">

            @foreach($posts as $post)
                @if($post->status == 1)
                    <div class="col-lg-4 col-md-6 mb-4 pb-2">
                        <div class="card blog blog-primary shadow rounded overflow-hidden">
                            <div class="image position-relative overflow-hidden">
                                <a href="{{ route('blog_single_page',[app()->getLocale(),$post->id]) }}">
                                    <img src="{{ asset($post->banner)}}" class="img-fluid" alt="" style="height: 260px;  object-fit:contain;" >
                                </a>

                                <div class="{{ route('blog_single_page',[app()->getLocale(),$post->id]) }}">
                                    <a href="javascript:void(0)" class="badge bg-light">{{$post->category->name_fr}}</a>
                                </div>
                            </div>

                            <div class="card-body content">
                                <a href="blog-detail-two.html" class="h5 title text-dark d-block mb-0">{{$post->title_fr}}</a>
                                <p class="text-muted mt-2 mb-2">{{$post->short_description_fr}}</p>
                                <a href="blog-detail-two.html" class="link text-dark">Read More <i class="uil uil-arrow-right align-middle"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                @endif
            @endforeach


        </div><!--end row-->

        <div class="d-flex justify-content-center">
            {!! $posts->links() !!}
        </div>

        <div class="row">
            <div class="col-12">
                <ul class="pagination justify-content-center mb-0">
                    @if($posts->currentPage() == 1)
                    <li class="page-item">
                        <a class="page-link" disabled="true" href="#" aria-label="Previous">
                            <span aria-hidden="true"><i class="mdi mdi-chevron-left mdi-18px"></i></span>
                        </a>
                    </li>
                    @else
                        <li class="page-item">
                            <a class="page-link"  href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="mdi mdi-chevron-left mdi-18px"></i></span>
                            </a>
                        </li>
                    @endif
                    @for($i=1; $i<=$posts->lastPage();$i++)
                        @if($posts->currentPage() == $i)
                            <li class="page-item"><a class="page-link active" href="#">{{$i}}</a></li>
                        @else
                            <li class="page-item"><a class="page-link" href="#">{{$i}}</a></li>
                        @endif

                    @endfor

                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="mdi mdi-chevron-right mdi-18px"></i></span>
                        </a>
                    </li>
                </ul>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

@endsection
