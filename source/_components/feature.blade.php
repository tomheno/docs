@props([
    'reverse' => false,
    'title',
    'image',
])

@php($classes = $reverse ? ' lg:flex-row-reverse lg:space-x-reverse' : '')

<article {{ $attributes->merge(['class' => 'space-y-8 lg:space-y-0 lg:flex xl:items-center lg:space-x-16'.$classes]) }}>
    <div class="lg:flex-shrink-0 mx-auto max-w-prose lg:max-w-md space-y-6">
        <h3 class="text-3xl lg:text-4xl">{{ $title }}</h3>
        <div class="space-y-4">
            {{ $slot }}
        </div>
    </div>
    <div class="flex-grow space-y-4 xl:space-y-0">
        @isset($image['src'])
            <div class="rounded-lg shadow-lg overflow-hidden">
                <img src="{{ $image['src'] }}" alt="{{ $image['alt'] ?? $title }}" />
            </div>
        @endisset
        @isset ($code)
            <div>
                <x-code-block class="max-w-prose mx-auto xl:-mt-40">
                    {{ $code }}
                </x-code-block>
            </div>
        @endisset
    </div>
</article>