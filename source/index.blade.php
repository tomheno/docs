@extends('_layouts.main')

@section('header')
    <div class="px-6 pb-32 md:pb-64">
        <div class="max-w-screen-lg mx-auto text-center space-y-5 lg:space-y-10">
            <h1 class="text-primary-700 text-4xl md:text-5xl lg:text-6xl xl:text-7xl">{{ $page->siteDescription }}</h1>
            <div class="max-w-prose mx-auto">
                <p class="sm:text-lg md:text-xl">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
            </div>
            <x-button-command command="composer require filament/filament" />
        </div>
    </div>
@endsection

@section('main')
    <div class="px-6 py-12 md:py-24 space-y-12 md:space-y-24">
        <section aria-label="Filament walkthrough" class="max-w-screen-lg mx-auto -mt-32 md:-mt-56">
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
            <div class="max-w-screen-xl mx-auto space-y-12 lg:space-y-24 xl:space-y-32">
                <div class="text-center space-y-8">
                    <h2 id="heading-resources" class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl">Resources</h2>
                    <div class="max-w-prose mx-auto">
                        <p class="sm:text-lg md:text-xl">Resources are the core of Filament, allowing you to define common features of your data model and associated permissions all in one place.</p>
                    </div>
                    <x-button-command command="php artisan make:filament-resource Customer" />
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
                    reverse
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
@endsection