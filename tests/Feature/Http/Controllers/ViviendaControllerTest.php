<?php

use App\Models\User;
use App\Models\Vivienda;
use Database\Seeders\DatabaseSeeder;

test('se listan viviendas de su condominio a roles autorizados', function () {
    $this->seed(DatabaseSeeder::class);
    $this->actingAs(User::first());

    expect(Vivienda::get())->toHaveCount(30);

    $response = $this->get(route('vivienda.index'));

    //Ve listado de viviendas o mensaje de que no hay viviendas
    $response->assertSeeInOrder(['Vivienda', 'Dueño/Inquilino', 'Estatus']);

    $response->assertStatus(200);
});
//roles autorizados: Tesorero, Administrador, Mesa Directiva

test('roles autorizados pueden ver el detalle de cualquier vivienda');

test('inquilinio o dueño solo pueden ver el detalle de sus viviendas');

test('se muestra formulario para capturar vivienda');

test('administrador puede generar viviendas');

test('administrador puede eliminar vivienda');
