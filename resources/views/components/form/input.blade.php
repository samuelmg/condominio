@props([
    'name',
    'label' => null,
    'placeholder' => '',
])
<div>
    <label for="{{ $name }}" class="block text-sm text-gray-700 capitalize">{{ $label ?? $name }}</label>
    <input
        {{ $attributes->whereStartsWith('wire:model') }}
        {{ $attributes->merge(['type' => 'text']) }}
        @class([
            'block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border rounded-md focus:outline-none focus:ring focus:ring-opacity-40',
            'border-gray-200 focus:border-indigo-400 focus:ring-indigo-300' => true,
            'border-red-500 focus:border-red-400 focus:ring-red-300' => false,
            'border-green-500 focus:border-green-400 focus:ring-green-300' => false,
            ])
        name="{{ $attributes->whereStartsWith('wire:model')->first() ?? $name }}"
        placeholder="{{ $placeholder }}"
        >
    @error($attributes->whereStartsWith('wire:model')->first() ?? $name)
        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
    @enderror
</div>
