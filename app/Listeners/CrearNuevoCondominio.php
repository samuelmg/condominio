<?php

namespace App\Listeners;

use App\Models\Condominio;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CrearNuevoCondominio
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Registered $event): void
    {
        $condominio = new Condominio();
        $condominio->condominio = "Condominio de " . ucfirst(explode(' ', $event->user->name, 2)[0]);
        $condominio->save();
        $event->user->condominios()->attach($condominio, ['role' => 'Administrador']);
    }
}
