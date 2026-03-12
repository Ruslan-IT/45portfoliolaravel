@extends('layouts.app')

@section('seo_title', $about->seo_title)
@section('seo_description', $about->seo_description)
@section('seo_keywords', $about->seo_keywords)

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
                        <h2 class="text-fit wow">Обо мне</h2>
                        @include('partials/menu')
                    </div>
                </section>
                <section class="no-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="subtitle wow fadeInUp" data-wow-delay=".3s">Who I Am</div>
                            </div>
                            <div class="col-lg-10">

                                <h1 class="lh-1  wow fadeInUp" data-wow-delay=".4s">

                                    {{ $about->title }}

                                </h1>
                                <div class="row g-4 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="col-sm-6">
                                        <p>
                                            {!! nl2br(e($about->description)) !!}.
                                        </p>
                                    </div>

                                    <div class="col-sm-6">
                                        <p>

                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <section class="no-top">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-lg-2">
                                <div class="subtitle wow fadeInUp" data-wow-delay=".3s">My Skills</div>
                            </div>
                            <div class="col-lg-10">
                                <div class="row g-4 gx-5">

                                    @php
                                        $k = 4;
                                    @endphp

                                    @foreach($about->skills as $skill)


                                        <div class="col-sm-3 col-6 wow fadeInRight" data-wow-delay=".{{ $k  }}s">
                                            <div class="text-center">
                                                <img src="{{ asset('storage/'.$skill['logo']) }}" class="w-80px mb-3" alt="">
                                                <h4>{{ $skill['name'] }}</h4>
                                            </div>
                                        </div>



                                        @php
                                            $k++;
                                        @endphp

                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="no-top">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-lg-2">
                                <div class="subtitle wow fadeInUp" data-wow-delay=".3s">Coding Skills</div>
                            </div>
                            <div class="col-lg-10">
                                <div class="row g-4 gx-5">
                                    <div class="col-md-6 wow fadeInRight" data-wow-delay=".4s">
                                        <div class="d-skills-bar">
                                            <div class="d-bar">

                                                @foreach(collect($about->coding_skills)->take(3) as $skill)
                                                    <div class="d-skill" data-value="{{ $skill['value'] }}%">
                                                        <div class="d-info">
                                                            <span>{{ $skill['name'] }}</span>
                                                        </div>
                                                        <div class="d-progress-line">
                                                            <span class="d-fill-line"></span>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 wow fadeInRight" data-wow-delay=".5s">
                                        <div class="d-skills-bar">
                                            <div class="d-bar">

                                                @foreach(collect($about->coding_skills)->slice(3) as $skill)
                                                    <div class="d-skill" data-value="{{ $skill['value'] }}%">
                                                        <div class="d-info">
                                                            <span>{{ $skill['name'] }}</span>
                                                        </div>
                                                        <div class="d-progress-line">
                                                            <span class="d-fill-line"></span>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="no-top">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-lg-2">
                                <div class="subtitle wow fadeInUp" data-wow-delay=".3s">Опыт</div>
                            </div>
                            <div class="col-lg-10">
                                <div class="row g-4">
                                    @php
                                        $k = 4;
                                    @endphp
                                    @foreach($about->experiences as $exp)
                                        <div class="col-md-4 wow fadeInRight" data-wow-delay=".{{ $k  }}s">
                                            <h6>{{ $exp['period'] }}</h6>
                                            <h3>{{ $exp['position'] }}</h3>
                                            <p>{{ $exp['company'] }}</p>
                                        </div>

                                        @php
                                            $k++;
                                        @endphp
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                @if(!empty($about->education) && count($about->education) > 0)
                    <section class="no-top">
                        <div class="container">
                            <div class="row g-4">
                                <div class="col-lg-2">
                                    <div class="subtitle wow fadeInUp" data-wow-delay=".3s">Образование</div>
                                </div>
                                <div class="col-lg-10">
                                    @php $k = 4; @endphp
                                    @foreach($about->education as $edu)
                                        <div class="row g-4">
                                            <div class="col-md-4 wow fadeInRight" data-wow-delay=".{{ $k }}s">
                                                <h6>{{ $edu['year'] }}</h6>
                                                <h3>{{ $edu['degree'] }}</h3>
                                                <p>{{ $edu['school'] }}</p>
                                            </div>
                                        </div>
                                        @php $k++; @endphp
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                @endif

                <section class="no-top">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-lg-2">
                                <div class="subtitle wow fadeInUp" data-wow-delay=".3s">отзывы</div>
                            </div>
                            <div class="col-lg-10">
                                <div class="owl-3-cols-dots owl-carousel owl-theme wow fadeInUp" data-wow-delay=".4s">
                                    @foreach($about->testimonials as $t)
                                        <div class="item">
                                            <div class="de_testi s2">
                                                <blockquote>
                                                    <div class="de_testi_by">
                                                        <img src="{{ asset('storage/'.$t['image']) }}" class="circle" alt="">
                                                        <div>{{ $t['author'] }}<span>{{ $t['position'] }}</span></div>
                                                    </div>
                                                    <p>{{ Str::words($t['text'], 20, '...') }}</p>
                                                    <a href="https://freelance.ru/reviews/ruslanfazliev/">Все отзывы</a>
                                                </blockquote>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="no-top">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-md-3 col-sm-6 mb-sm-30">
                                <div class="de_count text-center fs-15 wow fadeInRight" data-wow-delay=".0s">
                                    <h3 class="fs-48 mb-1"><span class="timer" data-to="{{ $about->hours_of_works }}" data-speed="3000">0</span></h3>
                                    <div class="fs-15">Часов разработки</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-sm-30">
                                <div class="de_count text-center fs-15 wow fadeInRight" data-wow-delay=".2s">
                                    <h3 class="fs-48 mb-1"><span class="timer" data-to="{{ $about->projects_done }}" data-speed="3000">0</span></h3>
                                    <div class="fs-15">Реализованных проектов</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-sm-30">
                                <div class="de_count text-center fs-15 wow fadeInRight" data-wow-delay=".4s">
                                    <h3 class="fs-48 mb-1"><span class="timer" data-to="{{ $about->satisfied_customers }}" data-speed="3000">0</span></h3>
                                    <div class="fs-15">Довольных клиентов
                            </div>
                            <div class="col-md-3 col-sm-6 mb-sm-30">
                                <div class="de_count text-center fs-15 wow fadeInRight" data-wow-delay=".6s">
                                    <h3 class="fs-48 mb-1"><span class="timer" data-to="{{ $about->awards_winning }}" data-speed="3000">0</span></h3>
                                    <div class="fs-15">Года опыта</div>
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
