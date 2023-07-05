@props([
    'texto'
])
<div>
    @empty($icon)
        <button
            {{ $attributes->merge(['type' => 'button']) }}
            class="flex items-center justify-center px-4 py-2.5 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50"
            >
            <span>{{ $texto }}</span>
        </button>
    @endempty

    @isset($icon)
        <button
            {{ $attributes->merge(['type' => 'button']) }}
            class=" px-4 py-2.5 mt-4 text-sm tracking-wide -mx-1 text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50"
            >
            <div class="flex items-center justify-center">
                {{ $icon }}
                <span class="mx-1">{{ $texto }}</span>
            </div>
        </button>
    @endisset
</div>
