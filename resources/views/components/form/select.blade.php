<div>
    <label for="{{ $name }}" class="block text-sm text-gray-700 capitalize">{{ $label ?? $name }}</label>

    <select
        {{ $attributes->whereStartsWith('wire:model') }}
        name="{{ $name }}"
        class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"
    >
        @if($agregarValorVacio)
            <option value="0">---</option>
        @endif
        @foreach ($options as $id => $value)
            <option
                value="{{ $id }}"
                @selected((old($name) == $id) || (empty(old($name)) && $selectedValue == $id))
            >
                {{ $value }}
            </option>
            {{-- <option @selected( (old('vivienda_id') == $vivienda->id) || (isset($persona) ? $vivienda->id == $persona->viviendas->first()->id : false))>{{ $vivienda->numero }}</option> --}}
        @endforeach
    </select>
    @error($attributes->whereStartsWith('wire:model')->first() ?? $name)
        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
    @enderror
</div>
