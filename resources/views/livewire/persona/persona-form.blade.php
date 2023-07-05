<div x-data="{ modelOpen: false }">
    <button @click="modelOpen =!modelOpen" class="flex items-center justify-center px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
        <svg class="w-5 h-5 mx-1.5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
        </svg>
    
        <span class="mx-1.5">Agregar Persona</span>
    </button>

    <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
            <div x-cloak @click="modelOpen = false" x-show="modelOpen" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0" 
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" 
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
            ></div>

            <div x-cloak x-show="modelOpen" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl rtl:text-right 2xl:max-w-2xl"
            >
                <div class="flex items-center justify-between">
                    <h1 class="text-xl font-medium text-gray-800 ">Agregar Persona</h1>

                    <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>
                </div>

                <p class="mt-2 text-sm text-gray-500 ">
                    Las personas agregadas podrán crear una cuenta de usuario en el sistema.
                </p>

                <form class="mt-5">
                    <div>
                        <x-form.input
                            wire:model.lazy="nombre"
                            name="nombre"
                            placeholder="Nombre de la persona"
                            value="{{ old('nombre') ?? (isset($persona) ? $persona->nombre : '') }}"
                        />
                    </div>

                    <div class="mt-4">
                        <x-form.input 
                            wire.model.lazy="tel_celular"
                            name="tel_celular"
                            label="Teléfono Celular"
                            placeholder="Teléfono a 10 dígitos (sin comas, guiones o espacios)"
                            type="tel"
                            pattern="[0-9]{10}"
                            value="{{ old('tel_celular') ?? (isset($persona) ? $persona->tel_celular : '') }}"
                        />
                    </div>

                    <div class="mt-4">
                        <x-form.input
                            wire.model.lazy="tel_fijo"
                            name="tel_fijo"
                            label="Teléfono Fijo"
                            placeholder="(Opcional)"
                            type="tel"
                            pattern="[0-9]{10}"
                            value="{{ old('tel_fijo') ?? (isset($persona) ? $persona->tel_fijo : '') }}"
                        />
                    </div>

                    <div class="mt-4">
                        <x-form.select
                            wire.model.lazy="vivienda_id"
                            name="vivienda_id"
                            label="No. Vivienda"
                            agregar-valor-vacio=true
                            :options="$viviendas"
                            value-key-name="numero"
                            :selected-value="isset($persona) ? $persona->viviendas->first()->id : ''"
                        />
                    </div>
                    
                    <div class="mt-4">
                        <x-form.radio name="tipo" label="Inquilino" value="Inquilino" :checked-value="isset($persona) ? $persona->viviendas->first()->pivot->tipo : null" />
                        <x-form.radio name="tipo" label="Dueño" value="Dueño" class="mt-4" :checked-value="isset($persona) ? $persona->viviendas->first()->pivot->tipo : null" />
                        @error('tipo')
                            <span class="text-xs text-red-600 dark:text-red-400">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    
                    <div class="flex justify-end mt-6">
                        {{-- <x-form.button type="button" wire:click.prevent="save()" texto="Guardar">
                        </x-form.button> --}}
                        <button type="submit" wire:click.prevent="save()" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
