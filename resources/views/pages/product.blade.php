@extends('layouts.app')

@section('title', 'Home')

@section('content')

    @include('partials.header')


    <style>
        .block-4-image {
            width: 100%;
            height: 260px; /* можешь менять */
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-img-fixed {
            width: 100%;
            height: 100%;
            object-fit: contain; /* или cover — см. ниже */
        }

        .product-thumb {
            border: 2px solid transparent;
            transition: 0.2s ease;
        }

        .product-thumb:hover {
            border-color: #7971ea;
        }

        .active-thumb {
            border-color: #7971ea;
        }
    </style>



    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span>
                    <strong class="text-black">{{ $product->title }}</strong>
                    </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">

                {{-- IMAGE --}}
                <div class="col-md-6">

                    {{-- Главное изображение --}}
                    <div class="mb-3 text-center">
                        <img id="mainProductImage"
                             src="{{ asset('storage/' . $product->main_image) }}"
                             alt="{{ $product->title }}"
                             class="img-fluid border rounded"
                             style="max-height: 420px; object-fit: contain;">
                    </div>

                    {{-- Миниатюры --}}
                    <div class="d-flex flex-wrap gap-2 justify-content-center">

                        {{-- Главное фото --}}
                        <img src="{{ asset('storage/' . $product->main_image) }}"
                             class="img-thumbnail product-thumb active-thumb"
                             style="width: 80px; height: 80px; object-fit: contain; cursor: pointer;"
                             onclick="changeImage(this)">

                        {{-- Галерея --}}
                        @foreach($product->gallery ?? [] as $image)
                            @if($image !== $product->main_image)
                                <img src="{{ asset('storage/' . $image) }}"
                                     class="img-thumbnail product-thumb"
                                     style="width: 80px; height: 80px; object-fit: contain; cursor: pointer;"
                                     onclick="changeImage(this)">
                            @endif
                        @endforeach

                    </div>
                </div>


                {{-- INFO --}}
                <div class="col-md-6">

                    <h2 class="text-black">{{ $product->title }}</h2>

                    @if($product->description)
                        <p>
                            {{ $product->description }}
                        </p>
                    @endif

                    @if($product->price)
                        <p>
                            <strong class="text-primary h4">
                                {{ number_format($product->price, 0, ',', ' ') }} ₽
                            </strong>
                        </p>
                    @endif

                    <p>
                        <a href="#"
                           class="buy-now btn btn-sm btn-primary open-modal">
                            Buy now
                        </a>
                    </p>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @if($product->desc1)
                    <p>{{ $product->desc1 }}</p>
                @endif

                @if($product->desc2)
                    <p>{{ $product->desc2 }}</p>
                @endif

                @if($product->desc3)
                    <p>{{ $product->desc3 }}</p>
                @endif
            </div>
        </div>
    </div>

    <div class="site-section block-3 site-blocks-2 bg-light">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-7 site-section-heading text-center pt-4">
                    <h2>Featured Products</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="nonloop-block-3 owl-carousel">

                        @foreach($products as $item)
                            <div class="item">
                                <div class="block-4 text-center">

                                    <figure class="block-4-image">
                                        <img
                                            src="{{ asset('storage/' . $item->main_image) }}"
                                            alt="{{ $item->title }}"
                                            class="img-fluid"
                                        >
                                    </figure>

                                    <div class="block-4-text p-4">
                                        <h3>
                                            <a href="{{ route('product.show', $item->slug) }}">
                                                {{ $item->title }}
                                            </a>
                                        </h3>

                                        @if($item->description)
                                            <p class="mb-0">
                                                {{ \Illuminate\Support\Str::limit(strip_tags($item->description), 60) }}
                                            </p>
                                        @endif

                                        @if($item->price)
                                            <p class="text-primary font-weight-bold">
                                                {{ number_format($item->price, 0, ',', ' ') }} ₽
                                            </p>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>

        </div>
    </div>

    @include('partials.modal')
@include('partials.footer')


    <script>
        function changeImage(el) {
            const mainImg = document.getElementById('mainProductImage');
            mainImg.src = el.src;

            document.querySelectorAll('.product-thumb')
                .forEach(img => img.classList.remove('active-thumb'));

            el.classList.add('active-thumb');
        }
    </script>

@endsection
