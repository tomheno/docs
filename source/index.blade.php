@extends('_layouts.main')

@section('header')
    <div class="px-6 pb-32 md:pb-64">
        <div class="max-w-screen-lg mx-auto text-center space-y-5 lg:space-y-10">
            <h1 class="text-primary-700 text-4xl md:text-5xl lg:text-6xl xl:text-7xl">{{ $page->siteDescription }}</h1>
            <div class="max-w-prose mx-auto">
                <p class="sm:text-lg md:text-xl">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
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
    <div class="px-6 py-12 md:py-24 space-y-12 md:space-y-24">
        <section aria-label="Filament video walkthrough" class="max-w-screen-xl mx-auto -mt-20 md:-mt-44">
            <div 
                x-data="{ playing: false }"
                x-init="$watch('playing', value => {
                    if (value === true) {
                        $refs.video.play()
                    } else {
                        $refs.video.pause()
                    }
                    
                })"
                class="relative bg-gray-900 rounded md:rounded-lg overflow-hidden shadow-lg"
            >
                <video 
                    muted
                    loop
                    x-ref="video"
                    @click="playing = false"
                >
                    <source src="/assets/media/fpo-screen-recording.mp4" type="video/mp4">
                </video>
                <button 
                    class="absolute inset-0 rounded md:rounded-lg bg-black bg-opacity-20 flex items-center justify-center text-primary-700 hover:text-primary-500 transition-colors duration-200"
                    x-show="playing === false"
                    @click="playing = true"
                >
                    <span>
                        <span class="sr-only">Play Video</span>
                        <span class="bg-white rounded-full w-24 h-24 shadow-lg flex items-center justify-center">
                            <x-icon-play class="w-10 h-10" />
                        </span>
                    </span>
                </button>
            </div>
        </section>
        <section aria-labelledby="heading-resources" class="px-6">
            <div class="max-w-screen-lg mx-auto space-y-12">
                <div class="text-center space-y-6">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl">Resources</h2>
                    <div class="max-w-prose mx-auto">
                        <p class="sm:text-lg md:text-xl text-secondary-200">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection