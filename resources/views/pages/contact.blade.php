@extends('layouts.app')

@section('seo_title', $contact->seo_title)
@section('seo_description', $contact->seo_description)
@section('seo_keywords', $contact->seo_keywords)

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
                    <h2 class="text-fit wow">Контакты</h2>
                    <h1 class="">Контакты – напишите мне</h1>
                    @include('partials/menu')
                </div>
            </section>

            <section class="no-top">
                <div class="container">
                    <div class="row g-4 gx-5">
                        <div class="col-lg-8 offset-lg-2 wow fadeInUp" data-wow-delay=".3s">

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

                            <p>Whether you have a question, a suggestion, or just want to say hello,
                                this is the place to do it. Please fill out the form below with your details and message,
                                and we'll get back to you as soon as possible.
                            </p>


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
                                <input type="hidden" name="subject" class="form-control"  value="page-contact">

                                <div id='submit' class="mt20">
                                    <input type='submit' id='send_message' value='Send Message' class="btn-main btn-line">
                                </div>

                                <div id="success_message" class='success'>
                                    Your message has been sent successfully. Refresh this page if you want to send more messages.
                                </div>
                                <div id="error_message" class='error'>
                                    Sorry there was an error sending your form.
                                </div>
                            </form>

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
