@extends('layouts.app')

@section('seo_title', $post->seo_title)
@section('seo_description', $post->seo_description)
@section('seo_keywords', $post->seo_keywords)

@section('content')





    <style>
        .text-format {
            white-space: pre-line;
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
                    <h1 class="text-fit wow">Блог</h1>
                    @include('partials/menu')
                </div>
            </section>

            <section class="no-top">
                <div class="container">
                    <div class="row g-4 gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="mb-2">
                                <div class="d-inline fs-14 fw-bold me-3"><i class="icofont-tag text-white me-2"></i>Tips &amp; Tricks</div>
                                <div class="d-inline fs-14 fw-600"><i class="icofont-ui-calendar text-white me-2"></i>{{ $post->published_at }}</div>
                            </div>
                            <h2>{{ $post->title }}</h2>
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

                                <div id="comment-form-wrapper">
                                    <h4>Leave a Comment</h4>
                                    <div class="comment_form_holder">
                                        <form id="contact_form" name="form1" method="post" action="#">

                                            <label>Name</label>
                                            <input type="text" name="name" id="name" class="form-control no-border" >

                                            <label>Email <span class="req">*</span></label>
                                            <input type="text" name="email" id="email" class="form-control no-border" >
                                            <div id="error_email" class="error">Please check your email</div>

                                            <label>Message <span class="req">*</span></label>
                                            <textarea cols="10" rows="10" name="message" id="message" class="form-control no-border"></textarea>
                                            <div id="error_message" class="error">Please check your message</div>
                                            <div id="mail_success" class="success">Thank you. Your message has been sent.</div>
                                            <div id="mail_failed" class="error">Error, email not sent</div>

                                            <p id="btnsubmit">
                                                <input type="submit" id="send" value="Send" class="btn-line w-100px" ></p>
                                        </form>
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
                            <div class="subtitle wow fadeInUp" data-wow-delay=".3s">Related Post</div>
                        </div>
                        <div class="col-lg-10 wow fadeInUp" data-wow-delay=".4s">
                            <div class="row g-4">

                                <div class="col-lg-6">
                                    <div class="relative">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-sm-3">
                                                <div class="post-image">
                                                    <img alt="" src="images/blog/1.webp" class="lazy">
                                                </div>
                                            </div>

                                            <div class="col-sm-9">
                                                <div class="mb-2">
                                                    <div class="d-inline fs-14 fw-bold me-3"><i class="icofont-tag text-white me-2"></i>Tips &amp; Tricks</div>
                                                    <div class="d-inline fs-14 fw-600"><i class="icofont-ui-calendar text-white me-2"></i>18 Mar 2024</div>
                                                </div>
                                                <h4><a href="blog-single.html">Mastering Modern Web Design: Trends and Techniques for 2024</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                              

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
