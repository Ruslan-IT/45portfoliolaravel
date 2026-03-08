<header class="site-navbar" role="banner">

    {{-- TOP BAR --}}
    <div class="site-navbar-top">
        <div class="container">
            <div class="row align-items-center">

                {{-- SEARCH --}}
                <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">

                </div>

                {{-- LOGO --}}
                <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                    <div class="site-logo">
                        <a href="/" class="js-logo-clone">
                            <img src="{{ asset('assets/images/logo.png') }}" style="width: 180px" alt="Logo">
                        </a>
                    </div>
                </div>

                {{-- ICONS --}}
                <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                    <div class="site-top-icons">

                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- MAIN NAV --}}
    <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
            <ul class="site-menu js-clone-nav d-none d-md-block">

                <li class="{{ request()->is('/') ? 'active' : '' }}">
                    <a href="/">Home</a>
                </li>

                {{-- CATEGORIES --}}
                <li class="has-children">
                    <a href="{{ route('category.index') }}">Categories</a>
                    <ul class="dropdown">

                        @foreach($categories as $category)
                            <li class="{{ $category->children->count() ? 'has-children' : '' }}">
                                <a href="{{ route('category.show', $category->slug) }}">
                                    {{ $category->name }}
                                </a>

                                {{-- SUBCATEGORIES --}}
                                @if($category->children->count())
                                    <ul class="dropdown">
                                        @foreach($category->children as $child)
                                            <li>
                                                <a href="{{ route('category.show', $child->slug) }}">
                                                    {{ $child->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif

                            </li>
                        @endforeach

                    </ul>
                </li>

                <li><a href="/contacts">Contact</a></li>

            </ul>
        </div>
    </nav>

</header>
