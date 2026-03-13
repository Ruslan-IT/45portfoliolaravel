@extends('layouts.app')

@section('seo_title', $work->seo_title)
@section('seo_description', $work->seo_description)
@section('seo_keywords', $work->seo_keywords)

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
                    <h2 class="text-fit wow">Мои работы</h2>
                    <h1 class=""> {{$work->title}} </h1>

                    @include('partials/menu')


                </div>
            </section>

            <section class="no-top">
                <div class="container">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <div class="row g-4">
                        <div class="col-lg-2">
                            <div class="subtitle wow fadeInUp" data-wow-delay=".3s">Project Details</div>
                        </div>

                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row g-4 gx-5 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="col-sm-6">
                                            <h4>Обзор</h4>
                                            <p class="no-bottom">
                                                {{ $work->overview }}
                                            </p>
                                        </div>

                                        <div class="col-sm-6">
                                            <h4>Цели</h4>
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

            <section class="contact">
                <div class="container">

                    <h2>
                        Давайте создадим ваш сайт
                    </h2>

                    <h3>
                        Заполните форму ниже и расскажите о вашем проекте.
                        Я отвечу вам в ближайшее время и предложу варианты реализации.
                    </h3>

                    <form  id="contact_form" action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <input type="hidden" name="page" value="contact">
                        <div class="row gx-4">
                            <div class="col-lg-6 col-md-6 mb10">
                                <div class="field-set">
                                    <span class="d-label fw-bold">Name</span>
                                    <input type="text" name="name" id="name" class="form-control no-border" placeholder="Your Name" required>
                                </div>

                                <div class="field-set">
                                    <span class="d-label fw-bold">Phone</span>
                                    <input type="text" name="phone" id="phone" class="form-control no-border" placeholder="Your Phone" required>
                                </div>

                                <div class="field-set">
                                    <span class="d-label fw-bold">Email</span>
                                    <input type="text" name="email" id="email" class="form-control no-border" placeholder="Your Email" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="field-set mb20">
                                    <span class="d-label fw-bold">Message</span>
                                    <textarea name="message" id="message" class="form-control no-border" placeholder="Your Message" required></textarea>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="subject" class="form-control"  value="Форма со страницы детальной  работы {{ $work->testimonial_text }}">

                        <div id='submit' class="mt20">
                            <input type='submit' id='send_message' value='Send Message' class="btn-main btn-line">
                        </div>

                        <div id="success_message" class='success'>
                            Спасибо! Ваше сообщение успешно отправлено. Мы свяжемся с вами в ближайшее время.
                        </div>
                        <div id="error_message" class='error'>
                            Sorry there was an error sending your form.
                        </div>
                    </form>

                </div>
            </section>

        </div>
        <!-- content close -->

        <!-- footer begin -->
        @include('partials/footer')
        <!-- footer close -->
    </div>




@endsection
