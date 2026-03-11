@extends('layouts.app')

@section('seo_title', $page->seo_title)
@section('seo_description', $page->seo_description)
@section('seo_keywords', $page->seo_keywords)

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
                    <h2 class="text-fit wow">Услуги</h2>
                    @include('partials/menu')
                </div>
            </section>

            <section class="no-top">
                <div class="container">
                    <h1>
                        Услуги по разработке и продвижению сайтов
                    </h1>
                    <div class="row g-5">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="row g-4">


                                @foreach($services as $service)
                                    <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="relative">
                                            <h4>{{ $service->title }}</h4>
                                            <p>{{ $service->description }}</p>
                                        </div>
                                    </div>
                                @endforeach





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
