@extends('layouts.app')


@section('seo_title', 'Мой блог')
@section('seo_description', 'Мой блог: разработка сайтов, веб-сервисов и интернет-магазинов.')
@section('seo_keywords', 'Мой блог разработчика, разработка сайтов, веб проекты')



@section('content')



    <div id="wrapper">
        <div class="float-text show-on-scroll">
            <span><a href="#">Scroll to top</a></span>
        </div>
        <div class="scrollbar-v show-on-scroll"></div>

        <!-- page preloader begin -->
        <div id="de-loader"></div>
        <!-- page preloader close -->

        <!-- content begin -->
        <div class="section-dark no-bottom no-top" id="content">

            <div id="top"></div>

            <section class="no-top">

                <div class="text-fit-wrapper">
                    <h1 class="text-fit wow">My Blog</h1>
                    @include('partials/menu')
                </div>
            </section>

            <section class="no-top">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                            <div class="row g-4">

                                @foreach($posts as $post)
                                <div class="col-lg-6">
                                    <div class="relative">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-sm-3">
                                                <div class="post-image">
                                                    <img alt="" src="{{ asset('storage/'.$post->image) }}" class="lazy">
                                                </div>
                                            </div>

                                            <div class="col-sm-9">
                                                <div class="mb-2">
                                                    <div class="d-inline fs-14 fw-bold me-3"><i class="icofont-tag text-white me-2"></i>Tips &amp; Tricks</div>
                                                    <div class="d-inline fs-14 fw-600"><i class="icofont-ui-calendar text-white me-2"></i>{{ $post->published_at }}</div>
                                                </div>
                                                <h4><a href="{{ route('blog.show',$post->slug) }}">{{ $post->title }}</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                                <!-- pagination begin -->
                               {{-- <div class="col-lg-12 pt-3 text-center">
                                    <div class="d-inline-block">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item active" aria-current="page"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>--}}
                                <!-- pagination end -->

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- content close -->

        <!-- footer begin -->
        @include('partials/footer')
        <!-- footer close -->
    </div>



@endsection
