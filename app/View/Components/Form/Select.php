<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Select extends Component
{
    public Collection $options;
    public $name;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $label,
        public bool $agregarValorVacio = false,
        $options,
        $valueKeyName,
        public string $selectedValue = '',
    )
    {
        $this->options = $this->prepararColeccion($options, $valueKeyName);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.select');
    }

    /**
     * Genera una colección estandar que se puede utilizar en la vista
     * 
     * La colección se crea utilizando el id y el nombre de la llave que se utilizará como valor
     *
     * @param Collection $collection
     * @param [type] $valueKeyName
     */
    private function prepararColeccion(Collection $collection, $valueKeyName): Collection
    {
        return $collection->mapWithKeys(function ($item, $key) use ($valueKeyName) {
            return [$item['id'] => $item[$valueKeyName]];
        });
    }
}
