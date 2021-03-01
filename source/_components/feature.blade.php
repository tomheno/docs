@props([
    'title',
    'image',
])

<article {{ $attributes->merge(['class' => 'grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-16']) }}>
    <div class="col-span-1">
        <div class="max-w-prose mx-auto space-y-4">
            <h3 class="text-2xl lg:text-3xl xl:text-4xl">{{ $title }}</h3>
            <div class="space-y-2">
                {{ $slot }}
            </div>
        </div>
    </div>
    <div class="col-span-1 lg:col-span-2 space-y-4 xl:space-y-0">
        @isset($image['src'])
            <div class="rounded-lg shadow-lg overflow-hidden">
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