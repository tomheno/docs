@props([
    'command',
    'language' => 'language-bash',
])

<button 
    {{ $attributes->merge([
        'type' => 'button',
        'class' => 'py-4 px-6 rounded bg-gray-800 text-sm inline-flex items-center space-x-2 group',
        'x-data' => "{ command: '$command' }", 
        '@click' => '$clipboard(command)',
    ]) }}
>
    <span class="font-mono text-gray-500">$</span>
    <pre><code class="{{ $language }}">{{ $command }}</code></pre>
    <span class="sr-only">Click to copy to clipboard</span>
    <x-icon-copy class="w-5 h-5 text-gray-500 group-hover:text-white" aria-hidden="true" />
</button>