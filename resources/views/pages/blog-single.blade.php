@extends('layouts.app')

@section('seo_title', $post->seo_title)
@section('seo_description', $post->seo_description)
@section('seo_keywords', $post->seo_keywords)

@section('content')





    <style>
        .text-format {
            white-space: pre-line;
        }

        ol, ul {
            padding-left: 2rem!important;
        }

        .blog-read .post-text {
            padding: 0;
            font-size: 20px;
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

                    <div class="row g-4 gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="mb-2">
                                <div class="d-inline fs-14 fw-bold me-3"><i class="icofont-tag text-white me-2"></i>Tips &amp; Tricks</div>
                                <div class="d-inline fs-14 fw-600"><i class="icofont-ui-calendar text-white me-2"></i>{{ $post->published_at }}</div>
                            </div>
                            <h1>{{ $post->title }}</h1>
                        </div>

                        <div class="col-lg-6">
                            <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </section>



            <section class="no-top">
                <div class="container">
                    <div class="row g-4 gx-5">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="blog-read">

                                <div class="post-text">

                                    <div style="">
                                        {!! $post->content !!}
                                    </div>

                                </div>

                            </div>

                            <div class="spacer-single"></div>

                            <div id="blog-comment">
                                {{--<h4>Comments (5)</h4>

                                <div class="spacer-half"></div>

                                <ol>
                                    <li>
                                        <div class="avatar">
                                            <img src="images/testimonial/1.webp" alt="" ></div>
                                        <div class="comment-info">
                                            <span class="c_name">Merrill Rayos</span>
                                            <span class="c_date id-color">2 days ago</span>
                                            <span class="c_reply"><a href="#">Reply</a></span>
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                        <ol>
                                            <li>
                                                <div class="avatar">
                                                    <img src="images/testimonial/2.webp" alt="" ></div>
                                                <div class="comment-info">
                                                    <span class="c_name">Jackqueline Sprang</span>
                                                    <span class="c_date id-color">2 days ago</span>
                                                    <span class="c_reply"><a href="#">Reply</a></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                                    explicabo.</div>
                                            </li>
                                        </ol>
                                    </li>

                                    <li>
                                        <div class="avatar">
                                            <img src="images/testimonial/3.webp" alt="" ></div>
                                        <div class="comment-info">
                                            <span class="c_name">Sanford Crowley</span>
                                            <span class="c_date id-color">2 days ago</span>
                                            <span class="c_reply"><a href="#">Reply</a></span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                        <ol>
                                            <li>
                                                <div class="avatar">
                                                    <img src="images/testimonial/4.webp" alt="" ></div>
                                                <div class="comment-info">
                                                    <span class="c_name">Lyndon Pocekay</span>
                                                    <span class="c_date id-color">2 days ago</span>
                                                    <span class="c_reply"><a href="#">Reply</a></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                                    explicabo.</div>
                                            </li>
                                        </ol>
                                    </li>

                                    <li>
                                        <div class="avatar">
                                            <img src="images/testimonial/5.webp" alt="" ></div>
                                        <div class="comment-info">
                                            <span class="c_name">Aleen Crigger</span>
                                            <span class="c_date id-color">2 days ago</span>
                                            <span class="c_reply"><a href="#">Reply</a></span>

                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                    </li>
                                </ol>--}}

                                <div class="spacer-single"></div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="no-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="subtitle wow fadeInUp" data-wow-delay=".3s">Related Post</div>
                        </div>
                        <div class="col-lg-10 wow fadeInUp" data-wow-delay=".4s">
                            <div class="row g-4">

                                @foreach($relatedPosts as $related)

                                    <div class="col-lg-6">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-sm-3">
                                                <img src="{{ asset('storage/'.$related->image) }}" alt="{{ $related->title }}">
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="mb-2">
                                                    <span>
                                                        <i class="icofont-tag"></i>
                                                        {{ $related->category }}
                                                    </span>

                                                                                        <span>
                                                        <i class="icofont-ui-calendar"></i>
                                                        {{ $related->created_at->format('d M Y') }}
                                                    </span>

                                                </div>
                                                <h4>
                                                    <a href="{{ route('blog.show', $related->slug) }}">
                                                        {{ $related->title }}
                                                    </a>
                                                </h4>

                                            </div>
                                        </div>
                                    </div>

                                @endforeach

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
                        <input type="hidden" name="subject" class="form-control"  value="Форма со страницы детальной  блог {{ $post->title }}">

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
