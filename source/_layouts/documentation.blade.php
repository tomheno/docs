@extends('_layouts.base')

@section('header')
    <div class="relative p-6 bg-gray-100 border-b border-gray-200 md:py-12">
        <a href="#main" class="sr-only">Skip to main content</a>
        <img src="/assets/media/bg-illustrations@2x.jpg" alt="Illustrations" class="absolute top-0 left-0 object-cover object-bottom w-full h-full opacity-20" />
        <nav class="relative flex items-center justify-between max-w-screen-xl mx-auto">
            <a href="/" rel="home" class="transition-colors duration-200 hover:text-primary-700">
                <x-logo :alt="$page->siteName" class="h-auto w-36" />
            </a>
            <ul>
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
            </ul>
        </nav>
    </div>
@endsection

@section('main')
    <div class="px-6 py-8 lg:py-16">
        <div class="grid max-w-screen-xl grid-cols-1 gap-6 mx-auto lg:grid-cols-8 lg:gap-12">
            <nav class="lg:col-span-2">
                nav
            </nav>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3 lg:col-span-6 lg:gap-12">
                <div class="overflow-auto lg:col-span-2">
                    <div class="prose lg:prose-lg">
                        @yield('content')
                    </div>
                </div>
                @if ($page->toc)
                    <aside class="relative p-6 bg-gray-100 rounded lg:p-0 lg:rounded-none lg:bg-transparent">            
                        <div class="md:py-6 md:sticky md:top-0">
                            <h3 class="text-sm font-normal tracking-wider uppercase">On this page</h3>
                            <div class="prose-sm prose">
                                @markdown($page->toc)
                            </div>
                        </div>
                    </aside>
                @endif
            </div>
        </div>
    </div>
@endsection