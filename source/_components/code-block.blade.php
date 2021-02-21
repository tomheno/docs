@props([
    'language' => 'language-php',
    'numbered' => false,
    'line' => null,
])

<div 
    {{ $attributes->merge([
        'class' => 'relative p-3 md:p-6 bg-gray-800 rounded-lg shadow-lg',
        'x-data' => '',
    ]) }}
>   
    <pre 
        @if ($numbered)
            class="line-numbers"  
        @endif
        @if ($line)
            data-line="{{ $line }}"
        @endif
    >    
        <code class="{{ $language }}">         
            {{ $slot }}     
        </code>   
    </pre>
    <textarea x-ref="command" hidden>{{ $slot }}</textarea>
    <button 
        type="button" 
        @click="$clipboard($refs.command.value)" 
        class="absolute right-4 top-4 text-gray-400 hover:text-white"
    >
        <span class="sr-only">Click to copy code to clipboard</span>
        <x-icon-copy class="w-5 h-5" aria-hidden="true" />
    </button>
</div>
