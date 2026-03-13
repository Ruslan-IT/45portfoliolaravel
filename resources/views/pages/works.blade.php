@extends('layouts.app')

@section('seo_title', 'Портфолио: примеры разработки сайтов и интернет-магазинов - web-ruslan')
@section('seo_description', 'Портфолио реализованных проектов: разработка сайтов, веб-сервисов и интернет-магазинов - web-ruslan')
@section('seo_keywords', 'пример разработки сайта, разработка сайтов проекты, разработка сайта компании, разработка интернет магазина примеры, создание сайтов примеры работ - web-ruslan')

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
                    <h2 class="text-fit wow">Кейсы</h2>
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

                    <h1 class="">Мои работы — примеры разработанных сайтов</h1>
                    <div class="row g-4 wow fadeInUp" data-wow-delay=".3s">

                        @foreach($works as $work)

                            @php
                            //dd($work)

                            @endphp

                            <div class="col-lg-4">
                                <div class="hover relative overflow-hidden text-light">

                                    <a href="{{ route('work.show', $work->slug) }}" class="overflow-hidden d-block relative">

                                        <h2 class="fs-40 abs-centered z-index-1 hover-op-0">
                                            {{ $work->title }}
                                        </h2>

                                        <img src="{{ asset('storage/'.$work->image) }}"
                                             class="img-fluid hover-scale-1-2"
                                             alt="{{ $work->title }}">

                                        <div class="absolute bottom-0 w-100 p-4 d-flex text-white justify-content-between">

                                            <div class="d-tag-s2">
                                                {{ $work->category ?? 'Project' }}
                                            </div>

                                            <div class="fw-bold">
                                                {{ $work->year ?? $work->created_at->format('Y') }}
                                            </div>

                                        </div>

                                    </a>

                                </div>
                            </div>

                        @endforeach

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
                        <input type="hidden" name="subject" class="form-control"  value="Форма со страницы работы">

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
