@extends('_layouts.base')

@section('body')
    <header class="relative bg-white text-gray-700">
        <a href="#main" class="sr-only">Skip to main content</a>
        <img src="/assets/media/bg-illustrations@2x.jpg" alt="Illustrations" class="absolute top-0 left-0 w-full h-full object-cover object-bottom opacity-20" />
        <nav class="relative px-6 py-12 lg:py-24">
            <ol class="max-w-screen-lg mx-auto relative flex justify-between md:text-lg">
                <li class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <a href="/" rel="home" class="transition-colors duration-200 hover:text-primary-700">
                        <x-logo :alt="$page->siteName" class="w-36 h-auto" />
                    </a>
                </li>
                <li>
                    <a 
                        href="{{ $page->projectUrl }}" 
                        class="hover:text-primary-700 transition-colors duration-200"
                        target="_blank"
                        rel="noreferrer noopener"
                    >
                        <x-icon-github class="w-7 h-7" />
                    </a>
                </li>
                <li><a href="#" class="font-mono hover:text-primary-700 transition-colors duration-200">Documentation</a></li>
            </ol>
        </nav>
        <div class="relative">
            @yield('header')
        </div>
    </header>
    <main id="main">
        @yield('main')
    </main>
    <footer role="contentinfo" class="text-center relative bg-primary-900 text-white px-6 py-8 md:py-16">
        <img src="/assets/media/bg-illustrations@2x.jpg" alt="Illustrations" class="absolute top-0 left-0 w-full h-full object-cover opacity-20" />
        <div class="relative max-w-screen-sm mx-auto md:flex md:justify-between space-y-2 md:space-y-0 md:space-x-8">
            <p>
                Built with 
                <a href="https://jigsaw.tighten.co" target="_blank" rel="noopener noreferrer" class="underline font-medium hover:text-primary-200 transition-colors duration-200">Jigsaw</a> 
                &amp; 
                <a href="https://tailwindcss.com" target="_blank" rel="noopener noreferrer" class="underline font-medium hover:text-primary-200 transition-colors duration-200">Tailwind CSS</a>.
            </p>

            <ul class="inline-flex space-x-2">
                <li>
                    <a 
                        href="{{ $page->projectUrl }}" 
                        class="underline font-medium hover:text-primary-200 transition-colors duration-200"
                        target="_blank"
                        rel="noreferrer noopener"
                    >
                        Github
                    </a>
                </li>
                <li aria-hidden="true">&bull;</li>
                <li>
                    <a href="#" class="underline font-medium hover:text-primary-200 transition-colors duration-200">Documentation</a>
                </li>
            </ul>
        </div>
    </footer>
@endsection