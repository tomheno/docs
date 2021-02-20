@extends('_layouts.base')

@section('body')
    <header class="bg-white text-gray-700">
        <a href="#main" class="sr-only">Skip to main content</a>
        <nav class="px-6 py-12 lg:py-24">
            <ol class="max-w-screen-lg mx-auto relative flex justify-between md:text-lg">
                <li class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <a href="/" rel="home" class="transition-colors duration-200 hover:text-primary-700">
                        <x-logo :alt="$page->siteName" class="w-36 h-auto" />
                    </a>
                </li>
                <li><a href="#" class="hover:text-primary-700 transition-colors duration-200">Documentation</a></li>
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
            </ol>
        </nav>
        @yield('header')
    </header>
    <main id="main">
        @yield('main')
    </main>
@endsection