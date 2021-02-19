<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="bg-secondary-900">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>
        <meta name="description" content="{{ $page->description }}">

        <meta property="og:site_name" content="{{ $page->siteName }}"/>
        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}"/>
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:image" content="/assets/img/logo.png"/>
        <meta property="og:type" content="website"/>

        <meta name="twitter:image:alt" content="{{ $page->siteName }}">
        <meta name="twitter:card" content="summary_large_image">

        <link rel="canonical" href="{{ $page->getUrl() }}">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Commissioner:wght@300;500&amp;family=JetBrains+Mono:ital@0;1&amp;display=swap">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body class="text-white font-sans font-light antialiased">
        @yield('body')
        <script src="{{ mix('js/main.js', 'assets/build') }}" defer></script>
        <script src="{{ mix('js/prism.js', 'assets/build') }}" defer></script>
    </body>
</html>
