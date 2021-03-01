@extends('_layouts.base')

@section('header')
    <div class="relative">
        <a href="#main" class="sr-only">Skip to main content</a>
        <img src="/assets/media/bg-illustrations@2x.jpg" alt="Illustrations" class="absolute top-0 left-0 object-cover object-bottom w-full h-full opacity-20" />
        <nav class="relative px-6 py-12 font-normal lg:py-24">
            <ol class="relative flex justify-between max-w-screen-xl mx-auto">
                <li class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2">
                    <a href="/" rel="home" class="transition-colors duration-200 hover:text-primary-700">
                        <x-logo :alt="$page->siteName" class="h-auto w-36" />
                    </a>
                </li>
                <li>
                    <a 
                        href="{{ $page->projectUrl }}" 
                        class="transition-colors duration-200 hover:text-primary-700"
                        target="_blank"
                        rel="noreferrer noopener"
                    >
                        <x-icon-github class="w-7 h-7" />
                    </a>
                </li>
                <li><a href="/docs" class="transition-colors duration-200 hover:text-primary-700">
                    <span class="hidden sm:inline">Documentation</span>
                    <abbr title="Documentation" class="sm:hidden">Docs</abbr>
                </a></li>
            </ol>
        </nav>
        <div class="relative">
            <div class="px-6 pb-32 md:pb-64">
                <div class="max-w-screen-lg mx-auto space-y-5 text-center lg:space-y-10">
                    <h1 class="text-4xl text-primary-700 md:text-5xl lg:text-6xl xl:text-7xl">{{ $page->siteDescription }}</h1>
                    <div class="mx-auto max-w-prose">
                        <p class="sm:text-lg md:text-xl">Filament is a content management framework for rapidly building a beautiful administration interface designed for humans.</p>
                    </div>
                    <x-button-command command="composer require filament/filament" />
                </div>
            </div>        
        </div>
    </div>
@endsection

@section('main')
    <div class="py-12 space-y-12 text-white md:py-24 lg:py-32 bg-secondary-900 md:space-y-24">
        @yield('content')
    </div>
@endsection