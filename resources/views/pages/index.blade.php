@extends('layouts.app')

@section('seo_title', $homePage->seo_title)
@section('seo_description', $homePage->seo_description)
@section('seo_keywords', $homePage->seo_keywords)

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

                   {{-- <h1 class="text-fit wow">Разработка сайтов под ключ</h1>--}}
                    <h2 class="text-fit wow"> Сайты </h2>
                    <h1 class=""> Разработка сайтов  </h1>


                    @include('partials/menu')

                </div>


                <div class="spacer-double"></div>

                <div class="container">
                    <div class="spacer-double d-lg-none d-sm-block"></div>
                    <div class="row align-items-center g-4 gx-5">

                        @php
                            $availableWork = $sections->firstWhere('slug', 'available-work');
                        @endphp

                        @if($availableWork)

                            @foreach($availableWork->items as $item)

                                <div class="col-lg-6">
                                    <div class="relative">
                                        <div class="subtitle wow fadeInUp" data-wow-delay=".3s"> {{ $availableWork->title }}</div>
                                        <h2 class="lh-1 wow fadeInUp" data-wow-delay=".4s"> {{ $item->title }}</h2>
                                    </div>
                                    <p class="lead wow fadeInUp" data-wow-delay=".5s">

                                        {{ $item->description }}

                                    </p>

                                    <div class="spacer-10"></div>

                                    <a class="w-150px btn-line wow fadeIn" data-wow-delay=".6s" href="about.html">About Me</a>

                                </div>



                                <div class="col-lg-6">
                                    <img src="{{ asset('storage/' . $item->image) }}" class="w-100 wow fadeInUp" data-wow-delay=".6s" alt="">
                                </div>

                            @endforeach

                        @endif

                    </div>

                    <div class="spacer-double"></div>

                    <div class="row g-4">
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count text-center fs-15 wow fadeInRight" data-wow-delay=".0s">
                                <h3 class="fs-48 mb-1"><span class="timer" data-to="8240" data-speed="3000">0</span></h3>
                                <div class="fs-15">Hours of Works</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count text-center fs-15 wow fadeInRight" data-wow-delay=".2s">
                                <h3 class="fs-48 mb-1"><span class="timer" data-to="315" data-speed="3000">0</span></h3>
                                <div class="fs-15">Projects Done</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count text-center fs-15 wow fadeInRight" data-wow-delay=".4s">
                                <h3 class="fs-48 mb-1"><span class="timer" data-to="250" data-speed="3000">0</span></h3>
                                <div class="fs-15">Satisfied Customers</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count text-center fs-15 wow fadeInRight" data-wow-delay=".6s">
                                <h3 class="fs-48 mb-1"><span class="timer" data-to="32" data-speed="3000">0</span></h3>
                                <div class="fs-15">Awards Winning</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="no-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="subtitle wow fadeInUp" data-wow-delay=".3s">About Me</div>
                        </div>
                        <div class="col-lg-10">
                            @foreach($sections as $section)
                                @if($section->slug === 'about')

                                    <h2 class="lh-1  wow fadeInUp" data-wow-delay=".4s">
                                        {{ $section->title }}
                                    </h2>
                                    <div class="row g-4 wow fadeInUp" data-wow-delay=".5s">
                                        @foreach($section->items as $item)
                                            <div class="col-sm-6">
                                                <p>
                                                    {{ $item->description }}
                                                </p>
                                            </div>


                                        @endforeach
                                    </div>

                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>


            @php
                $what_l_do = $sections->firstWhere('slug', 'what-l-do');
            @endphp

            @if($what_l_do)
                <section class="no-top">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-4  wow fadeInRight" data-wow-delay=".3s">
                            <div class="p-3 h-100 d-lg-block d-sm-none text-light jarallax">



                                @if($what_l_do->image)
                                    <img src="{{ asset('storage/' . $what_l_do->image) }}" class="jarallax-img"  alt="">
                                @endif

                                <h3 class="abs-centered m-0">{{ $what_l_do->title  }}</h3>
                            </div>
                            <div class="subtitle d-lg-none d-sm-block">What I Do</div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row g-4">

                                @php $k= 8; @endphp

                                @if($section->meta)
                                    @foreach($section->meta as $field)

                                        <div>
                                            <strong>{{ $field['label'] }}:</strong>
                                            {{ $field['value'] }}
                                        </div>

                                    @endforeach

                                @endif

                                 @foreach($what_l_do->items  as $key => $item)

                                    <div class="col-lg-6 col-sm-6 wow fadeInRight" data-wow-delay=".{{$k}}s">
                                        <div class="relative">
                                            <h4>{{ $item->title  }}</h4>
                                            <p>
                                                {{ $item->description }}
                                            </p>
                                            @if($item->meta)
                                                @foreach($item->meta as $field)

                                                    <div>
                                                        {{ $field['label'] }}
                                                        {{ $field['value'] }}
                                                    </div>

                                                @endforeach
                                            @endif
                                        </div>
                                    </div>





                                    @php $k++; @endphp

                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endif;


            @php
                $works = $sections->firstWhere('slug', 'works');

            @endphp

            <section class="no-top">
                <div class="container">
                    <div class="row g-4 gx-5">
                        <div class="col-lg-2">
                            <div class="subtitle ms-3 wow fadeInUp" data-wow-delay=".3s">
                                {{ $works->title }}
                            </div>
                        </div>
                        <div class="col-lg-10 wow fadeInUp" data-wow-delay=".4s">
                            <h2>
                                {{ $works->description }}
                            </h2>
                        </div>
                    </div>

                    <div class="spacer-single"></div>
                </div>

                <div class="container">

                    @php $w= 1; @endphp



                        <div class="row g-4 wow fadeInRight" data-wow-delay=".5s">

                            @foreach($works->items as $key => $item)

                                @if($w === 1)

                                <div class="col-lg-4">
                                    <div class="hover relative overflow-hidden text-light">
                                        <a href="work-single.html" class="overflow-hidden d-block relative">
                                            <h2 class="fs-40 abs-centered z-index-1 hover-op-0">{{$item->title}}</h2>

                                            <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid hover-scale-1-2" alt="">

                                            <div class="absolute bottom-0 w-100 p-4 d-flex text-white justify-content-between">
                                                <div class="d-tag-s2">{{$item->description}}</div>

                                                @if($item->meta)
                                                    @foreach($item->meta as $field)

                                                        <div class="fw-bold">
                                                            {{ $field['value'] }}
                                                        </div>

                                                    @endforeach

                                                @endif

                                            </div>
                                        </a>
                                    </div>
                                </div>

                                @else

                                <div class="col-lg-4">
                                    <div class="hover relative overflow-hidden text-light">
                                        <a href="work-single.html" class="overflow-hidden d-block relative">
                                            <h2 class="fs-40 abs-centered z-index-1 hover-op-0">{{$item->title}}</h2>

                                            <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid hover-scale-1-2" alt="">

                                            <div class="absolute bottom-0 w-100 p-4 d-flex text-white justify-content-between">
                                                <div class="d-tag-s2">{{$item->description}}</div>
                                                @if($item->meta)
                                                    @foreach($item->meta as $field)

                                                        <div class="fw-bold">
                                                            {{ $field['value'] }}
                                                        </div>

                                                    @endforeach

                                                @endif
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                @endif

                                @php $w++; @endphp

                            @endforeach

                        </div>




                </div>
            </section>

            <section class="text-light no-top">
                <div class="wow fadeInRight d-flex">
                    <div class="de-marquee-list wow">
                        <div class="d-item">
                            <span class="d-item-txt">CUSTOM WEBSITE DESIGN</span>
                            <span class="d-item-txt">E-COMMERCE WEBSITE</span>
                            <span class="d-item-txt">LANDING PAGE DESIGN</span>
                            <span class="d-item-txt">FRONT-END DEVELOPMENT</span>
                            <span class="d-item-txt">BACK-END DEVELOPMENT</span>
                            <span class="d-item-txt">CONTENT MANAGEMENT SYSTEM</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="no-top">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-2">
                            <div class="subtitle ms-3 wow fadeInUp" data-wow-delay=".3s">From the Blog</div>
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

                                <div class="col-lg-6">
                                    <div class="relative">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-sm-3">
                                                <div class="post-image">
                                                    <img alt="" src="images/blog/2.webp" class="lazy">
                                                </div>
                                            </div>

                                            <div class="col-sm-9">
                                                <div class="mb-2">
                                                    <div class="d-inline fs-14 fw-bold me-3"><i class="icofont-tag text-white me-2"></i>Tips &amp; Tricks</div>
                                                    <div class="d-inline fs-14 fw-600"><i class="icofont-ui-calendar text-white me-2"></i>18 Mar 2024</div>
                                                </div>
                                                <h4><a href="blog-single.html">The Art of User Experience: Designing Websites That Delight</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="relative">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-sm-3">
                                                <div class="post-image">
                                                    <img alt="" src="images/blog/3.webp" class="lazy">
                                                </div>
                                            </div>

                                            <div class="col-sm-9">
                                                <div class="mb-2">
                                                    <div class="d-inline fs-14 fw-bold me-3"><i class="icofont-tag text-white me-2"></i>Tips &amp; Tricks</div>
                                                    <div class="d-inline fs-14 fw-600"><i class="icofont-ui-calendar text-white me-2"></i>18 Mar 2024</div>
                                                </div>
                                                <h4><a href="blog-single.html">Responsive Design Best Practices: Making Your Website Mobile-Friendly</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="relative">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-sm-3">
                                                <div class="post-image">
                                                    <img alt="" src="images/blog/4.webp" class="lazy">
                                                </div>
                                            </div>

                                            <div class="col-sm-9">
                                                <div class="mb-2">
                                                    <div class="d-inline fs-14 fw-bold me-3"><i class="icofont-tag text-white me-2"></i>Tips &amp; Tricks</div>
                                                    <div class="d-inline fs-14 fw-600"><i class="icofont-ui-calendar text-white me-2"></i>18 Mar 2024</div>
                                                </div>
                                                <h4><a href="blog-single.html">Typography in Web Design: Choosing Fonts That Make an Impact</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="relative">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-sm-3">
                                                <div class="post-image">
                                                    <img alt="" src="images/blog/5.webp" class="lazy">
                                                </div>
                                            </div>

                                            <div class="col-sm-9">
                                                <div class="mb-2">
                                                    <div class="d-inline fs-14 fw-bold me-3"><i class="icofont-tag text-white me-2"></i>Tips &amp; Tricks</div>
                                                    <div class="d-inline fs-14 fw-600"><i class="icofont-ui-calendar text-white me-2"></i>18 Mar 2024</div>
                                                </div>
                                                <h4><a href="blog-single.html">Web Design Mistakes to Avoid: Common Pitfalls and How to Fix Them</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="relative">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-sm-3">
                                                <div class="post-image">
                                                    <img alt="" src="images/blog/6.webp" class="lazy">
                                                </div>
                                            </div>

                                            <div class="col-sm-9">
                                                <div class="mb-2">
                                                    <div class="d-inline fs-14 fw-bold me-3"><i class="icofont-tag text-white me-2"></i>Tips &amp; Tricks</div>
                                                    <div class="d-inline fs-14 fw-600"><i class="icofont-ui-calendar text-white me-2"></i>18 Mar 2024</div>
                                                </div>
                                                <h4><a href="blog-single.html">Creating Accessible Websites: Why Inclusive Design Matters</a></h4>
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
