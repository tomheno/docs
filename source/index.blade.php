@extends('_layouts.main')

@section('header')
    <div class="px-6 pb-32 md:pb-64">
        <div class="max-w-4xl mx-auto text-center space-y-6 lg:space-y-12">
            <h1 class="text-primary-700 text-4xl md:text-5xl lg:text-6xl xl:text-7xl">{{ $page->siteDescription }}</h1>
            <div class="max-w-prose mx-auto">
                <p class="text-lg md:text-xl">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
            </div>
            <div x-data="{ input: '{{ $page->packageInstallCommand }}' }">
                <button type="button" @click="$clipboard(input)" class="py-3 px-6 rounded bg-gray-700 text-gray-400 text-sm md:text-base inline-flex items-center space-x-4 group">
                    <pre><code class="language-bash">{{ $page->packageInstallCommand }}</code></pre>
                    <span class="sr-only">Click to copy to clipboard</span>
                    <x-icon-copy class="w-5 h-5 group-hover:text-white" aria-hidden="true" />
                </button>
            </div>
        </div>
    </div>
@endsection

@section('main')
    Main content...
@endsection