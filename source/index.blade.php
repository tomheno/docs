@extends('_layouts.main')

@section('content')
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
                class="relative overflow-hidden rounded shadow-lg md:rounded-lg"
            >
                <video
                    poster="/assets/media/video-thumbnail.jpg"
                    x-ref="video"
                    @click="playing = false"
                >
                    <source src="/assets/media/video.mp4" type="video/mp4">
                </video>
                <button 
                    class="absolute inset-0 flex items-center justify-center w-full h-full transition-colors duration-200 bg-black rounded md:rounded-lg bg-opacity-20 text-primary-700 hover:text-primary-500"
                    x-show="playing === false"
                    @click="playing = true"
                >
                    <span class="sr-only">Play Video</span>
                    <span class="flex items-center justify-center w-24 h-24 bg-white rounded-full shadow-lg">
                        <x-icon-play class="w-10 h-10" />
                    </span>
                </button>
            </div>
        </div>
    </section>
    <section aria-labelledby="heading-resources" class="px-6">
        <div class="max-w-screen-xl mx-auto space-y-12 lg:space-y-24 xl:space-y-32">
            <div class="space-y-12 lg:space-y-24">
                <div class="space-y-8 text-center">
                    <h2 id="heading-resources" class="text-3xl lg:text-4xl xl:text-5xl">Resourceful by design.</h2>

                    <div class="mx-auto max-w-prose">
                        <p class="sm:text-lg md:text-xl">Resource files tell Filament about how administrators will interact with your data. They provide a simple API to structure interactive tables, define complex forms and set up granular permissions for your users.</p>
                    </div>
                    <x-button-command command="php artisan make:filament-resource Customer" />
                </div>

                <x-feature 
                    title="Tables" 
                    :image="[
                        'src' => '/assets/media/tables@2x.jpg',
                        'alt' => 'Table'
                    ]"
                >
<x-slot name="code">
public static function table(Table $table)
{
    return $table
        ->columns([
            Columns\Text::make('name')
                ->searchable()
                ->sortable()
                ->primary(),
            Columns\Text::make('email')
                ->searchable()
                ->sortable()
                ->url(fn ($customer) => "mailto:{$customer->email}"),
            Columns\Text::make('birthday')
                ->sortable()
                ->date(),
        ]);
}
</x-slot>
                <p>Build complex and interactive tables, complete with sort, search and filter functionalities, easily.</p>
                <a class="btn" href="/docs/resources/#tables">Learn More</a>
            </x-feature>

                <x-feature 
                    title="Forms" 
                    :image="[
                        'src' => '/assets/media/forms@2x.jpg',
                        'alt' => 'Form'
                    ]"
                >
<x-slot name="code">
public static function form(Form $form)
{
    return $form
        ->schema([
            Components\Grid::make([
                Components\BelongsToSelect::make('customer_id')
                    ->relationship('customer', 'name')
                    ->required(),
                Components\DateTimePicker::make('deliver_at')
                    ->withoutSeconds(),
            ]),
            Components\FileUpload::make('invoice'),
            Components\RichEditor::make('notes'),
        ]);
}
</x-slot>
                <p>Craft intuitive forms using a wide range of field types, using our simple, class-based form builder.</p>
                <p>Generate date pickers, searchable select menus, rich text editors and file upload fields with just one line of PHP.</p>
                <a class="btn" href="/docs/resources/#forms">Learn more</a>
            </x-feature>

                <x-feature 
                    title="Relation Managers"
                    :image="[
                        'src' => '/assets/media/relation-managers@2x.jpg',
                        'alt' => 'Relation Manager'
                    ]"
                >
<x-slot name="code">
public static function relations()
{
    return [
        RelationManagers\ProductsRelationManager::class,
    ];
}
</x-slot>
                <p>Create, edit and delete related records without leaving the page, using a relation manager.</p>
                <a class="btn" href="/docs/resources/#relations-has-many">Learn More</a>
            </x-feature>
        </div>   
    </section>
</div>
<section aria-label="Testimonials" class="px-6 py-12 text-white bg-gray-800 md:py-24 lg:py-32">
    <div class="grid max-w-screen-lg grid-cols-1 gap-16 mx-auto md:grid-cols-2">
        <x-blockquote
            quote="Filament is the Swiss Army Knife dashboard for TALL stack applications. Just sit down, install and you'll have a full CMS in two shakes."
            source="Jorge González"
            avatar-url="https://avatars.githubusercontent.com/u/4632429?s=128&v=4"
            twitter-handle="iksaku2"
        />

        <x-blockquote
            quote="Filament is a great CMS solution for both technical and non-technical users, and the fluent API is a developer's dream!"
            source="Lars Klopstra"
            avatar-url="https://avatars.githubusercontent.com/u/25669876?s=128&v=4"
            twitter-handle="larsklopstra"
        />
    </div>
</section>
<section aria-labelledby="heading-authors" class="px-6 py-12 md:py-24">
    <div class="grid max-w-5xl grid-cols-1 gap-6 mx-auto lg:grid-cols-4 lg:gap-12">
        <h2 id="heading-authors" class="text-3xl text-center lg:text-left text-primary-700 lg:text-4xl">Design &amp; development</h2>
        <div class="grid sm:grid-cols-3 gap-4 lg:col-span-3 md:gap-12">
            <x-author
                name="Dan Harrin"
                avatar-url="https://avatars.githubusercontent.com/u/41773797?s=128&v=4"
                twitter-handle="danjharrin"
            />

            <x-author
                name="Ryan Scherler"
                avatar-url="https://avatars.githubusercontent.com/u/881938?s=128&v=4"
                twitter-handle="ryanscherler"
            />

            <x-author
                name="Ryan Chandler"
                avatar-url="https://avatars.githubusercontent.com/u/41837763?s=128&v=4"
                twitter-handle="ryangjchandler"
            />
        </div>
    </div>
@endsection