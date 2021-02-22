@props([
    'name',
    'avatarUrl',
    'twitterHandle',
])

<div class="flex justify-center">
    <a
        href="https://twitter.com/{{ $twitterHandle }}" 
        target="_blank" 
        rel="noopener noreferrer" 
        class="flex items-center space-x-4 group"
    >
        <div class="flex w-16 h-16 rounded-full p-1 border border-gray-300 group-hover:border-primary-500 transition-colors duration-200">
            <img src="{{ $avatarUrl }}" class="w-full h-full rounded-full" alt="{{ $name }}" />
        </div>
        <span class="flex flex-col">
            <span class="text-lg md:text-xl leading-tight">{{ $name }}</span>
            <span class="text-gray-500 group-hover:text-primary-700 transition-colors duration-200">{{ '@'.$twitterHandle }}</span>
        </span>
    </a>
</div>