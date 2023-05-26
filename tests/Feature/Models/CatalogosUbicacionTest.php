<?php

use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Pais;

test('catálogo de paises', function () {
    array_search(config('app.env'), ['local', 'testing']) !== false
            ? $cantidadPaises = 1
            : $cantidadPaises = 249;

    $this->assertDatabaseCount('paises', $cantidadPaises);
});

test('catálogo de estados', function () {
    $this->assertDatabaseCount('estados', 32);
});

test('catálogo de municipios', function () {
    $this->assertDatabaseCount('municipios', 2463);
});

