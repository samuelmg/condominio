@props([
    'name',
    'label',
    'value',
    'checkedValue' => null,
])
<div {{ $attributes->merge(['class' => 'flex items-center']) }}>
    <input
        type="radio"
        name="{{ $name }}"
        id="radio-{{ $value }}"
        value="{{ $value }}"
        class="p-2 bg-white border border-gray-200 rounded-full focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"
        @checked(old($name, $checkedValue) == $value)
        >
    <label for="radio-{{ $value }}" class="block mx-2 text-gray-700 capitalize">{{ $label }}</label>
</div>
