<?php

namespace App\Http\Livewire\Persona;

use App\Models\Persona;
use App\Models\Vivienda;
use Livewire\Component;

class PersonaForm extends Component
{
    public $viviendas;
    public Persona $persona;
    public $nombre, $tel_celular, $tel_fijo, $vivienda_id, $tipo;
    public $showModal = false;

    function mount() : void {
        
        $this->viviendas = Vivienda::all()->sortBy('numero');   
    }

    public function render()
    {
        return view('livewire.persona.persona-form');
    }

    public function save() : void {
        $this->validate([
            'nombre' => 'required|min:3|max:255',
            'tel_celular' => 'required|unique:personas|string|min:10',
            'tipo' => 'required|string|max:20',
            'vivienda_id' => 'required|integer|min:1',
        ]);

        $this->persona = new Persona();
        $this->persona->nombre = $this->nombre;
        $this->persona->tel_celular = $this->tel_celular;
        $this->persona->tel_fijo = $this->tel_fijo;
        $this->persona->save();

        $this->persona->viviendas()->attach($this->vivienda_id, ['tipo' => $this->tipo]);

        $this->closeModal();
        // return redirect()->route('vecinos.index');
    }

    public function closeModal() : void
    {
        $this->showModal = false;
    }
}
