@extends('layouts.app')

@section('title', 'Главная')

@section('content')


    @include('partials.header')

    <style>
        .category-item .image img {
            width: 100%;        /* изображение растягивается по ширине колонки */
            height: 200px;      /* фиксированная высота всех картинок */
            object-fit: cover;  /* обрезка лишнего, чтобы заполнить контейнер */
            border-radius: 8px; /* опционально, чтобы красиво закруглить */
        }

        .category-img {
            width: 100%;
            height: 200px; /* фиксированная высота */
            object-fit: cover;
            border-radius: 8px;
        }
        .tag-btn {
            position: absolute;
            top: 10px;
            left: 10px;
            background: #28a745;
            color: #fff;
            padding: 3px 8px;
            font-size: 0.75rem;
            border-radius: 4px;
            z-index: 10;
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

                </div>
            </div>
        </div>
    </div>


    <div class="single-product-section site-section">
        <div class="main-shop-page white-bg ptb-80">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">

                        <div class="shop-area mb-all-40">
                            <div class="tab-content Products-area">

                                <div id="grid-view" class="tab-pane fade show active">
                                    <div class="row">

                                        @forelse($categories as $category)
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <!-- Single Category Start -->
                                                <div class="single-aboss-product mb-3 h-100 d-flex flex-column">

                                                    {{-- IMAGE --}}
                                                    <div class="pro-img">
                                                        <a href="{{ route('category.show', $category->slug) }}">
                                                            <img
                                                                src="{{ asset('storage/' . $category->main_image) }}"
                                                                alt="{{ $category->name }}"
                                                                class="img-fluid category-img"
                                                            >
                                                        </a>

                                                        {{-- NEW badge --}}
                                                        @if($category->is_new ?? false)
                                                            <span class="badge badge-danger position-absolute"
                                                                  style="top:10px; left:10px;">
                                                            NEW
                                                        </span>
                                                        @endif
                                                    </div>

                                                    {{-- CONTENT --}}
                                                    <div class="pro-content d-flex flex-column justify-content-between text-center flex-grow-1">
                                                        <br>
                                                        <h4>
                                                            <a href="{{ route('category.show', $category->slug) }}">
                                                                {{ $category->name }}
                                                            </a>
                                                        </h4>

                                                        @if(!empty($category->description))
                                                            <p class="small text-muted">
                                                                {{ \Illuminate\Support\Str::limit(strip_tags($category->description), 80) }}
                                                            </p>
                                                        @endif

                                                        <div class="pro-price-cart mt-auto">
                                                            <div class="pro-cart">

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- Single Category End -->
                                            </div>
                                        @empty
                                            <div class="col-12 text-center">
                                                <p>Категории не найдены</p>
                                            </div>
                                        @endforelse

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>







    @include('partials.footer')


@endsection


