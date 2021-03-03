@props([
    'quote',
    'source',
    'avatarUrl',
    'twitterHandle',
])

<blockquote {{ $attributes->merge(['class' => 'relative']) }}>
    <x-icon-quote class="absolute top-0 left-0 w-20 h-20 transform -translate-x-4 -translate-y-8 opacity-50 lg:-translate-x-8 lg:-translate-y-16 lg:h-32 lg:w-32 text-secondary-900" aria-hidden="true" />
    
    <div class="relative flex flex-col items-center space-y-3 lg:space-y-6">
        <p class="flex space-x-1 text-xl lg:text-2xl">
            <span class="-ml-1">&ldquo;</span>
            <span>{{ $quote }} &rdquo;</span>
        </p>
    
        <cite class="not-italic lg:transform lg:-translate-x-8">
            <a 
                href="https://twitter.com/{{ $twitterHandle }}" 
                target="_blank" 
                rel="noopener noreferrer" 
                class="flex items-center space-x-4 group"
            >
                <div class="flex w-16 h-16 p-1 transition-colors duration-200 border-2 border-opacity-50 rounded-full border-secondary-500 group-hover:border-primary-500">
                    <img src="{{ $avatarUrl }}" class="w-full h-full rounded-full" alt="{{ $source }}" />
                </div>
                <span class="flex flex-col">
                    <span class="text-lg leading-tight">{{ $source }}</span>
                    <span class="transition-colors duration-200 text-secondary-500 group-hover:text-primary-500">{{ '@'.$twitterHandle }}</span>
                </span>
            </a>
        </cite>
    </div>
</blockquote>