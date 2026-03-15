@extends('layouts.app')


@section('seo_title', $blogSeo->seo_title)
@section('seo_description', $blogSeo->seo_title)
@section('seo_keywords', $blogSeo->seo_title)

@section('content')

    <style>
        ol, ul {
            padding-left: 2rem!important;
        }
    </style>

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
                    <h2 class="text-fit wow">Блог</h2>
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

                    <h1> {{ $blogSeo->h1 }} </h1>
                    <div class="row g-5">
                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                            <div class="row g-4">

                                @foreach($posts as $post)
                                <div class="col-lg-6">
                                    <div class="relative">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-sm-3">
                                                <div class="post-image">
                                                    <img alt=""
                                                         src="{{ asset('storage/'.$post->image) }}"
                                                         loading="lazy"
                                                         class="lazy">
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
                        <input type="hidden" name="subject" class="form-control"  value="Форма со страницы блога">

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
