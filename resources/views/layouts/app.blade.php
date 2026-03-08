<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('seo_title', config('app.name'))</title>

    <meta name="description" content="@yield('seo_description', 'Personal portfolio website')">
    <meta name="keywords" content="@yield('seo_keywords', 'portfolio, web developer')">
    <meta name="author" content="{{ config('app.name') }}">

    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph (Facebook / Telegram / LinkedIn) -->
    <meta property="og:title" content="@yield('seo_title', config('app.name'))">
    <meta property="og:description" content="@yield('seo_description', 'Personal portfolio website')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('seo_image', asset('images/seo-preview.jpg'))">
    <meta property="og:site_name" content="{{ config('app.name') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('seo_title', config('app.name'))">
    <meta name="twitter:description" content="@yield('seo_description', 'Personal portfolio website')">
    <meta name="twitter:image" content="@yield('seo_image', asset('images/seo-preview.jpg'))">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">

    <!-- CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap">
    <link href="/assets/css/plugins.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/coloring.css" rel="stylesheet">
    <link id="colors" href="/assets/css/colors/scheme-01.css" rel="stylesheet">

</head>
<body class="dark-scheme">
<!-- Основной контент -->

    @yield('content')


<script src="/assets/js/plugins.js"></script>
<script src="/assets/js/designesia.js"></script>
<script src="/assets/js/custom-marquee.js"></script>
</body>
</html>
