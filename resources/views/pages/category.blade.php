@extends('layouts.app')

@section('title', 'Главная')

@section('content')


    @include('partials.header')

    <style>
        /* Одинаковая высота карточек */
        .single-aboss-product {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        /* Фиксированная зона под картинку */
        .pro-img {
            width: 100%;
            height: 260px;
            overflow: hidden;
        }

        /* Картинка всегда одного размера */
        .pro-img img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        /* Контент растягивается одинаково */
        .pro-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            padding: 15px;
        }

        /* Текст не ломает высоту */
        .pro-content p {
            flex-grow: 1;
            margin-bottom: 10px;
        }

        /* Кнопка всегда внизу */
        .pro-cart {
            margin-top: auto;
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
                    <a href="/category">Categories</a>
                    <span class="mx-2 mb-0">/</span>
                    <strong class="text-black">{{ $category->name }}</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="single-product-section">
            <!-- Breadcrumb Area End Here -->
            <!-- Shop Page Start -->
            <div class="main-shop-page white-bg ptb-80">
                <div class="container">
                    <!-- Row End -->
                    <div class="row">

                        <!-- Product Categorie List Start -->
                        <div class="col-lg-12 col-md-8">

                            <!-- Grid & List View Start -->

                            <div class="shop-area mb-all-40">
                                <div class="tab-content Products-area">

                                    {{-- GRID VIEW --}}
                                    <div id="grid-view" class="tab-pane fade show active">
                                        <div class="row">

                                            @forelse($products as $product)
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <!-- Single Product Start -->
                                                    <div class="single-aboss-product mb-3 h-100">

                                                        {{-- IMAGE --}}
                                                        <div class="pro-img">
                                                            <a href="{{ route('product.show', $product->slug) }}">
                                                                <img
                                                                    src="{{ asset('storage/' . $product->main_image) }}"
                                                                    alt="{{ $product->title }}"
                                                                    class="img-fluid"
                                                                >
                                                            </a>

                                                            <div class="pro-actions">

                                                            </div>

                                                            {{-- NEW badge --}}
                                                            @if($product->is_new ?? false)
                                                                <span class="badge badge-danger position-absolute"
                                                                      style="top:10px; left:10px;">
                                                        NEW
                                                    </span>
                                                            @endif
                                                        </div>

                                                        {{-- CONTENT --}}
                                                        <div class="pro-content d-flex flex-column justify-content-between">
                                                            <h4>
                                                                <a href="{{ route('product.show', $product->slug) }}">
                                                                    {{ $product->title }}
                                                                </a>
                                                            </h4>

                                                            {{-- DESCRIPTION --}}
                                                            @if(!empty($product->description))
                                                                <p class="small text-muted">
                                                                    {{ \Illuminate\Support\Str::limit(strip_tags($product->description), 80) }}
                                                                </p>
                                                            @endif

                                                            <div class="pro-price-cart mt-auto">
                                                                <div class="pro-cart">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                            @empty
                                                <div class="col-12 text-center">
                                                    <p>Products not found</p>
                                                </div>
                                            @endforelse

                                        </div>
                                    </div>
                                    {{-- GRID VIEW END --}}

                                </div>
                            </div>


                        </div>
                        <!-- product Categorie List End -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Shop Page End -->
        </div>
    </div>








    @include('partials.footer')


@endsection


