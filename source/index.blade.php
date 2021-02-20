@extends('_layouts.main')

@section('header')
    <div class="px-6 pb-32 md:pb-64">
        <div class="max-w-screen-lg mx-auto text-center space-y-5 lg:space-y-10">
            <h1 class="text-primary-700 text-4xl md:text-5xl lg:text-6xl xl:text-7xl">{{ $page->siteDescription }}</h1>
            <div class="max-w-prose mx-auto">
                <p class="sm:text-lg md:text-xl">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
            </div>
            <x-button-copy-command command="composer require filament/filament" />
        </div>
    </div>
@endsection

@section('main')
    <div class="px-6 py-12 md:py-24 space-y-12 md:space-y-24">
        <section aria-label="Filament video walkthrough" class="max-w-screen-lg mx-auto -mt-20 md:-mt-44">
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
            <div class="max-w-screen-xl mx-auto space-y-12 lg:space-y-24">
                <div class="text-center space-y-6">
                    <h2 id="heading-resources" class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl">Resources</h2>
                    <div class="max-w-prose mx-auto">
                        <p class="sm:text-lg md:text-xl text-secondary-200">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
                    </div>
                    <x-button-copy-command command="php artisan make:filament-resource Customer" />
                </div>
                <article aria-labelledby="heading-resource-tables" class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6 lg:gap-12">
                    <div class="col-span-1 space-y-4">
                        <h3 class="text-lg md:text-xl lg:text-2xl xl:text-3xl">Tables</h3>
                        <div class="space-y-4">
                            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
                            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
                        </div>
                    </div>
                    <div class="col-span-1 xl:col-span-2 space-y-4">
                        <div class="rounded-lg shadow-lg overflow-hidden">
                            <img src="/assets/media/resource-table@2x.jpg" alt="Resource table" />
                        </div>
                        <div>
                            <div class="relative p-4 md:p-8 bg-gray-800 rounded-lg shadow-lg md:max-w-prose mx-auto md:-mt-44 max-h-80 overflow-auto">
<pre class="line-numbers"><code class="language-php">public static function columns()
{
    return [
        Columns\Text::make('title')
            ->sortable()
            ->options(static::$titleOptions),
        Columns\Text::make('name')
            ->searchable()
            ->sortable()
            ->primary(),
        Columns\Text::make('email')
            ->searchable()
            ->sortable()
            ->url(fn($customer) => "mailto:$customer->email"),
        Columns\Text::make('phone')
            ->searchable()
            ->url(fn($customer) => "tel:$customer->tel"),
    ];
}</code></pre>
                            </div>
                        </div>
                    </div>
                </article>
            </div>   
        </section>
    </div>
@endsection