@extends('layouts.app')

@section('title', 'Home')

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
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section class="no-top">

                <div class="text-fit-wrapper">
                    <h2 class="text-fit wow">{{$work->title}}</h2>
                    <h1 class=""> {{$work->title}} </h1>

                    @include('partials/menu')


                </div>
            </section>

            <section class="no-top">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-2">
                            <div class="subtitle wow fadeInUp" data-wow-delay=".3s">Project Details</div>
                        </div>

                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row g-4 gx-5 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="col-sm-6">
                                            <h4>Overview</h4>
                                            <p class="no-bottom">
                                                {{ $work->overview }}
                                            </p>
                                        </div>

                                        <div class="col-sm-6">
                                            <h4>Objectives</h4>
                                            <ul class="ul-style-2">

                                                @foreach($work->objectives as $item)

                                                    <li>{{ $item['title']  }}</li>

                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>

                                    <div class="spacer-double"></div>

                                    <div class="row g-4 gx-5 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="col-lg-3 col-sm-2">
                                            <h6>Category</h6>
                                            {{ $work->category }}
                                        </div>

                                        <div class="col-lg-3 col-sm-2">
                                            <h6>Awards</h6>
                                            {{ $work->awards }}
                                        </div>

                                        <div class="col-lg-3 col-sm-2">
                                            <h6>Client</h6>
                                            {{ $work->client }}
                                        </div>

                                        <div class="col-lg-3 col-sm-2">
                                            <h6>Year</h6>
                                            {{ $work->year }}
                                        </div>
                                    </div>

                                    <div class="spacer-double"></div>

                                    <div class="row g-4 wow fadeInUp" data-wow-delay=".7s">

                                        @php

                                        //dd($work->gallery)

                                        @endphp

                                        @foreach($work->gallery as $image)

                                            <div class="col-lg-6">
                                                <div class="hover relative overflow-hidden text-light">

                                                    <a href="{{ asset('storage/'.$image['image']) }}" class="image-popup overflow-hidden d-block relative">

                                                        <img src="{{ asset('storage/'.$image['image']) }}" class="img-fluid hover-scale-1-2" alt="">

                                                        <div class="absolute bottom-0 w-100 p-4 d-flex text-white justify-content-between">
                                                            <div class="d-tag-s2">{{ $image['tag'] }}</div>
                                                            <div class="fw-bold text-uppercase">{{ $image['title'] }}</div>
                                                        </div>

                                                    </a>

                                                </div>
                                            </div>

                                        @endforeach


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="no-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="subtitle wow fadeInUp" data-wow-delay=".3s">Client Says</div>
                        </div>
                        <div class="col-lg-10 wow fadeInUp" data-wow-delay=".4s">
                            <h2 class="lh-1"> {{ $work->testimonial_text }}</h2>

                            <p> {{ $work->testimonial_author }}</p>
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
