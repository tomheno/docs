@props([
    'title',
    'image',
])

<article {{ $attributes->merge(['class' => 'grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-16']) }}>
    <div class="col-span-1">
        <div class="mx-auto space-y-4 max-w-prose">
            <h3 class="text-2xl lg:text-3xl xl:text-4xl">{{ $title }}</h3>
            <div class="space-y-6 text-lg">
                {{ $slot }}
            </div>
        </div>
    </div>
    <div class="col-span-1 space-y-4 lg:col-span-2 xl:space-y-0">
        @isset($image['src'])
            <div class="overflow-hidden rounded-lg shadow-lg">
                <img src="{{ $image['src'] }}" alt="{{ $image['alt'] ?? $title }}" />
            </div>
        @endisset
        @isset ($code)
            <div class="flex">
                <x-code-block class="flex-grow w-full max-w-3xl mx-auto md:-mt-36">
                    {{ $code }}
                </x-code-block>
            </div>
        @endisset
    </div>
</article>