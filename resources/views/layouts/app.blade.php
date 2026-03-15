<!DOCTYPE html>
<html lang="ru">
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
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/png">

    <!-- CSS -->
    <link rel="preload" href="/assets/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="/assets/css/plugins.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="/assets/css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="/assets/css/coloring.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="/assets/css/colors/scheme-01.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

    <noscript>
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/css/plugins.css" rel="stylesheet">
        <link href="/assets/css/style.css" rel="stylesheet">
        <link href="/assets/css/coloring.css" rel="stylesheet">
        <link href="/assets/css/colors/scheme-01.css" rel="stylesheet">
    </noscript>

</head>
<body class="dark-scheme">
<!-- Основной контент -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function(m,e,t,r,i,k,a){
        m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
    })(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=107214250', 'ym');

    ym(107214250, 'init', {ssr:true, webvisor:true, clickmap:true, ecommerce:"dataLayer", referrer: document.referrer, url: location.href, accurateTrackBounce:true, trackLinks:true});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/107214250" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

    @yield('content')


<script src="/assets/js/plugins.js" defer></script>
<script src="/assets/js/designesia.js" defer></script>
<script src="/assets/js/custom-marquee.js" defer></script>
</body>
</html>
