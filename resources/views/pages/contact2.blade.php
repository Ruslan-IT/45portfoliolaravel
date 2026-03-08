@extends('layouts.app')

@section('title', 'Contact')

@section('content')

    @include('partials.header')

    <style>
        .contact-thumb{
            max-width: 350px;
        }


        .header-height {
            min-height: 155px;
        }

        @media (max-width: 767px) {
            .header-height {
                min-height: 95px;
            }
        }
    </style>





    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0">
                    <a href="/">Home</a>
                    <span class="mx-2 mb-0">/</span>
                    <strong class="text-black">Contact</strong>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section">
        <div class="container">
            <div class="row">

                {{-- FORM --}}
                <div class="col-md-7">
                    <h2 class="h3 mb-3 text-black">Get In Touch</h2>

                    <form  id="contact-form" action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <input type="hidden" name="page" value="contact">

                        <div class="p-3 p-lg-5 border">

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="text-black">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="text-black">Phone <span class="text-danger">*</span></label>
                                    <input type="text" name="phone" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="text-black">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label class="text-black">Subject</label>
                                <input type="text" name="subject" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label class="text-black">Message</label>
                                <textarea name="message" rows="5" class="form-control" required></textarea>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary btn-lg btn-block submit" type="submit">
                                    Send Message
                                </button>

                            </div>

                        </div>
                    </form>
                </div>

                {{-- CONTACT INFO --}}
                <div class="col-md-5 ml-auto">
                    <div class="p-4 border mb-3">
                        <span class="d-block text-primary h6 text-uppercase">Address</span>
                        <p class="mb-0">{{ $siteSettings->address }}</p>
                    </div>

                    <div class="p-4 border mb-3">
                        <span class="d-block text-primary h6 text-uppercase">Phone</span>
                        <p class="mb-0">
                            <a href="tel:{{ $siteSettings->phone }}">{{ $siteSettings->phone }}</a>
                        </p>
                    </div>

                    <div class="p-4 border mb-3">
                        <span class="d-block text-primary h6 text-uppercase">Email</span>
                        <p class="mb-0">
                            <a href="mailto:{{ $siteSettings->email }}">{{ $siteSettings->email }}</a>
                        </p>
                    </div>

                    <div class="p-4 border">
                        <span class="d-block text-primary h6 text-uppercase">Website</span>
                        <p class="mb-0">
                            <a href="{{ url('/') }}">{{ url('/') }}</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>




    @include('partials.footer')

@endsection
