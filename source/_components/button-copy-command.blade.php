@props([
    'command',
    'language' => 'language-bash',
])

<button 
    type="button" 
    x-data="{ command: '{{ $command }}' }" 
    @click="$clipboard(command)" 
    {{ $attributes->merge(['class' => 'py-3 px-6 rounded bg-gray-800 text-sm inline-flex items-center space-x-4 group']) }}
>
    <pre><span class="text-gray-500">$</span> <code class="{{ $language }}">{{ $command }}</code></pre>
    <span class="sr-only">Click to copy to clipboard</span>
    <x-icon-copy class="w-5 h-5 text-gray-500 group-hover:text-white" aria-hidden="true" />
</button>