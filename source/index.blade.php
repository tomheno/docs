@extends('_layouts.main')

@section('header')
    <div class="px-6 pb-32 md:pb-64">
        <div class="max-w-screen-lg mx-auto space-y-5 text-center lg:space-y-10">
            <h1 class="text-4xl text-primary-700 md:text-5xl lg:text-6xl xl:text-7xl">{{ $page->siteDescription }}</h1>
            <div class="mx-auto max-w-prose">
                <p class="sm:text-lg md:text-xl">Filament is a content management framework for rapidly building a beautiful administration interface designed for humans.</p>
            </div>
            <x-button-command command="composer require filament/filament" />
        </div>
    </div>
@endsection

@section('main')
    <div class="py-12 space-y-12 md:py-24 lg:py-32 bg-secondary-900 md:space-y-24">
        <section aria-label="Filament walkthrough" class="px-6">
            <div class="max-w-screen-lg mx-auto -mt-32 md:-mt-56 lg:-mt-80">
                <div 
                    x-data="{ playing: false }"
                    x-init="$watch('playing', value => {
                        if (value === true) {
                            $refs.video.play()
                        } else {
                            $refs.video.pause()
                        }
                        
                    })"
                    class="relative overflow-hidden bg-gray-900 rounded shadow-lg md:rounded-lg"
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
                        class="absolute inset-0 flex items-center justify-center transition-colors duration-200 bg-gray-900 rounded md:rounded-lg bg-opacity-20 text-primary-700 hover:text-primary-500"
                        x-show="playing === false"
                        @click="playing = true"
                    >
                        <span>
                            <span class="sr-only">Play Video</span>
                            <span class="flex items-center justify-center w-24 h-24 bg-white rounded-full shadow-lg">
                                <x-icon-play class="w-10 h-10" />
                            </span>
                        </span>
                    </button>
                </div>
            </div>
        </section>
        <section aria-labelledby="heading-resources" class="px-6">
            <div class="max-w-screen-xl mx-auto space-y-12 lg:space-y-24 xl:space-y-32">
                <div class="space-y-6 text-center">
                    <h2 id="heading-resources" class="text-3xl lg:text-4xl xl:text-5xl">Resourceful by design.</h2>
                    <div class="space-y-8">
                        <div class="mx-auto max-w-prose">
                            <p class="sm:text-lg md:text-xl">Resource files tell Filament about how administrators will interact with your data. They provide a simple API to structure interactive tables, define complex forms and set up granular permissions for your users.</p>
                        </div>
                        <x-button-command command="php artisan make:filament-resource Customer" />
                    </div>
                </div>
                <x-feature 
                    title="Tables" 
                    :image="[
                        'src' => '/assets/media/resource-table@2x.jpg', 
                        'alt' => 'Resource Page Index Table'
                    ]"
                >
<x-slot name="code">
public static function table($table)
{
    return $table
        ->columns([
            Tables\Columns\Text::make('title')
                ->sortable()
                ->options(static::$titleOptions),
        ])
        ->filters([
            Tables\Filter::make('Title'),
        ]);
}
</x-slot>
                    <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
                    <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
                </x-feature>

                <x-feature 
                    title="Forms" 
                    :image="[
                        'src' => '/assets/media/resource-form@2x.jpg', 
                        'alt' => 'Resource Edit Form'
                    ]"
                >
<x-slot name="code">
public static function form($form)
{
    return $form
        ->schema([
            Forms\Components\Select::make('customer_id')
                ->relation('customer.name')
                ->placeholder('Select a customer')
                ->required(),
            Forms\Components\Relation::make('products')
                ->manager(RelationManagers\ProductsRelationManager::class),
        ]);
}
</x-slot>
                    <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
                    <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
                </x-feature>

                <x-feature 
                    title="Permissions" 
                    :image="[
                        'src' => '/assets/media/resource-permissions@2x.jpg', 
                        'alt' => 'Resource Page Index Table'
                    ]"
                >
<x-slot name="code">
public static function authorization()
{
    return [
        Roles\Guest::allow()->only(Pages\ListCustomers::class),
        Roles\Admin::allow(),
    ];
}
</x-slot>
                    <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
                    <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
                </x-feature>
            </div>   
        </section>
    </div>
    <section aria-label="Testimonials" class="px-6 py-12 md:py-24 lg:py-32">
        <div class="grid max-w-screen-lg grid-cols-1 gap-16 mx-auto md:grid-cols-2">
            <x-blockquote 
                quote="Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs."
                source="Ryan Chandler" 
                avatar-url="https://avatars.githubusercontent.com/u/41837763?s=128&u=18d547d57f020af52983d194b2dc8a7626942af9&v=4"
                twitter-handle="ryangjchandler"
            />
   
            <x-blockquote 
                quote="Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs."
                source="Roni Estein" 
                avatar-url="https://avatars.githubusercontent.com/u/8517475?s=128&v=4"
                twitter-handle="roniestein"
            />
        </div>
    </section>
    <section aria-labelledby="heading-authors" class="px-6 py-12 text-gray-700 bg-white md:py-24">
        <div class="grid max-w-screen-lg grid-cols-1 gap-6 mx-auto lg:grid-cols-3 lg:gap-12">
            <h2 id="heading-authors" class="text-3xl text-center lg:text-left text-primary-700 lg:text-4xl">Design &amp; development by</h2>
            <div class="grid grid-cols-2 gap-8 lg:col-span-2 md:gap-16">
                <x-author
                    name="Dan Harrin"
                    avatar-url="https://avatars.githubusercontent.com/u/41773797?s=128&u=2ec7b5195d66c092c3c8cb66e5123b0ca9ccafd5&v=4"
                    twitter-handle="danharrin"
                />

                <x-author
                    name="Ryan Scherler"
                    avatar-url="https://avatars.githubusercontent.com/u/881938?s=128&u=123ef56aaf15f3c02fc8b6669db8f64254cb1610&v=4"
                    twitter-handle="ryanscherler"
                />
            </div>
        </div>
    </section>
@endsection