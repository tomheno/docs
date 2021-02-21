@props([
    'quote',
    'source',
    'avatarUrl',
    'twitterHandle',
])

<blockquote {{ $attributes->merge(['class' => 'relative']) }}>
    <x-icon-quote class="absolute top-0 left-0 transform -translate-x-4 lg:-translate-x-8 -translate-y-8 lg:-translate-y-16 h-20 lg:h-32 w-20 lg:w-32 text-secondary-900 opacity-50" aria-hidden="true" />
    
    <div class="relative flex flex-col items-center space-y-3 lg:space-y-6">
        <p class="text-xl lg:text-2xl flex space-x-1">
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
                <div class="flex w-16 h-16 rounded-full p-1 border-2 border-secondary-900 border-opacity-50 group-hover:border-primary-500 transition-colors duration-200">
                    <img src="{{ $avatarUrl }}" class="w-full h-full rounded-full" alt="{{ $source }}" />
                </div>
                <span class="flex flex-col">
                    <span class="text-lg leading-tight">{{ $source }}</span>
                    <span class="text-secondary-800 group-hover:text-primary-500 transition-colors duration-200">{{ '@'.$twitterHandle }}</span>
                </span>
            </a>
        </cite>
    </div>
</blockquote>