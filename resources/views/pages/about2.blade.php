@extends('layouts.app')

@section('title', 'Обо мне')

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
                        <h1 class="text-fit wow">About Me</h1>
                        @include('partials/menu')
                    </div>
                </section>
                <section class="no-top">
                    <div class="container">

                    <div class="row">
                        <div class="col-lg-2">
                            <div class="subtitle">Who I Am</div>
                        </div>
                        <div class="col-lg-10">
                            <h2>{{ $about->title }}</h2>
                            {!! nl2br(e($about->description)) !!}
                        </div>
                    </div>

                    <div class="row g-4 mt-4">
                        <div class="col-lg-2"><div class="subtitle">My Skills</div></div>
                        <div class="col-lg-10">
                            <div class="row">
                                @foreach($about->skills as $skill)
                                    <div class="col-sm-3 col-6 text-center">
                                        <img src="{{ asset($skill['logo']) }}" class="w-80px mb-2" alt="">
                                        <h4>{{ $skill['name'] }}</h4>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="row g-4 mt-4">
                        <div class="col-lg-2"><div class="subtitle">Coding Skills</div></div>
                        <div class="col-lg-10">
                            @foreach($about->coding_skills as $skill)
                                <div class="mb-2">
                                    <span>{{ $skill['name'] }}</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: {{ $skill['value'] }};"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Experiences --}}
                    <div class="row g-4 mt-4">
                        <div class="col-lg-2"><div class="subtitle">Experiences</div></div>
                        <div class="col-lg-10">
                            <div class="row">
                                @foreach($about->experiences as $exp)
                                    <div class="col-md-4">
                                        <h6>{{ $exp['period'] }}</h6>
                                        <h3>{{ $exp['position'] }}</h3>
                                        <p>{{ $exp['company'] }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- Education --}}
                    <div class="row g-4 mt-4">
                        <div class="col-lg-2"><div class="subtitle">Education</div></div>
                        <div class="col-lg-10">
                            <div class="row">
                                @foreach($about->education as $edu)
                                    <div class="col-md-4">
                                        <h6>{{ $edu['year'] }}</h6>
                                        <h3>{{ $edu['degree'] }}</h3>
                                        <p>{{ $edu['school'] }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- Testimonials --}}
                    <div class="row g-4 mt-4">
                        <div class="col-lg-2"><div class="subtitle">What They Say</div></div>
                        <div class="col-lg-10">
                            <div class="owl-carousel owl-theme">
                                @foreach($about->testimonials as $t)
                                    <div class="item">
                                        <blockquote>
                                            <div class="de_testi_by">
                                                <img src="{{ asset($t['image']) }}" class="circle" alt="">
                                                <div>{{ $t['author'] }}<span>{{ $t['position'] }}</span></div>
                                            </div>
                                            <p>{{ $t['text'] }}</p>
                                        </blockquote>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- Counters --}}
                    <div class="row g-4 mt-4 text-center">
                        <div class="col-md-3"><h3>{{ $about->hours_of_works }}</h3><div>Hours of Works</div></div>
                        <div class="col-md-3"><h3>{{ $about->projects_done }}</h3><div>Projects Done</div></div>
                        <div class="col-md-3"><h3>{{ $about->satisfied_customers }}</h3><div>Satisfied Customers</div></div>
                        <div class="col-md-3"><h3>{{ $about->awards_winning }}</h3><div>Awards Winning</div></div>
                    </div>

                </div>
                </section>
            </div>

        <!-- content close -->

        <!-- footer begin -->
        <footer>
            <div class="container-fluid">
                <div class="px-2">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <div class="d-menu-1 wow" data-wow-delay=".3s">
                                <ul>
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">Twitter</a></li>
                                    <li><a href="#">Instagram</a></li>
                                </ul>

                                <p class="no-bottom">All Right Reserved<br>Template By Designesia</p>

                            </div>
                        </div>

                        <div class="col-lg-6 text-lg-end">
                            <a href="contact.html">
                                <h2 class="fs-84 fw-800 pe-3 shuffle wow fadeInLeft" data-wow-delay=".3s">Let's Talk</h2>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
    </div>


@endsection
