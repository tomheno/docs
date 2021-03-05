<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="bg-gray-800">
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
        <script src="{{ mix('js/main.js', 'assets/build') }}" defer></script>
        @stack('head')
    </head>
    <body 
        class="font-sans antialiased font-light text-gray-700 bg-white"
        x-data="{ mobileMenuIsOpen: false }"
        @keydown.window.escape="mobileMenuIsOpen = false" 
    >
        <header role="banner">
            @yield('header')
        </header>
        <main role="main">
            @yield('main')
        </main>
        <footer role="contentinfo" class="relative px-6 py-8 text-center text-white bg-primary-800 md:py-16">
            <img src="/assets/media/bg-illustrations@2x.jpg" alt="Illustrations" class="absolute top-0 left-0 object-cover w-full h-full opacity-20" />
            <div class="relative max-w-screen-xl mx-auto space-y-2 md:flex md:justify-between md:space-y-0 md:space-x-8">
                <p>
                    Built with 
                    <a href="https://jigsaw.tighten.co" target="_blank" rel="noopener noreferrer" class="font-medium underline transition-colors duration-200 hover:text-primary-200">Jigsaw</a> 
                    &amp; 
                    <a href="https://tailwindcss.com" target="_blank" rel="noopener noreferrer" class="font-medium underline transition-colors duration-200 hover:text-primary-200">Tailwind CSS</a>.
                </p>
    
                <ul class="inline-flex space-x-2">
                    <li>
                        <a 
                            href="{{ $page->projectUrl }}" 
                            class="font-medium underline transition-colors duration-200 hover:text-primary-200"
                            target="_blank"
                            rel="noreferrer noopener"
                        >
                            GitHub
                        </a>
                    </li>
                    <li aria-hidden="true">&bull;</li>
                    <li>
                        <a href="/docs" class="font-medium underline transition-colors duration-200 hover:text-primary-200">Documentation</a>
                    </li>
                </ul>
            </div>
        </footer>
    </body>
</html>
