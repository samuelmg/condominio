<?php

namespace Database\Seeders;

use App\Models\Condominio;
use App\Models\Persona;
use App\Models\User;
use App\Models\Vivienda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CondominioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Condominio::factory()
            ->hasAttached(
                User::factory()
                    ->state(function (array $attributes) {
                        return ['email' => 'admin@test.com', 'tel' => '1122334455'];
                    })
                    ->withPersonalTeam(),
                ['role' => 'Administrador']
            )
            ->has(
                Vivienda::factory()
                    ->hasAttached(
                        Persona::factory()
                            ->state(function (array $attributes, Vivienda $vivienda) {
                                return ['condominio_id' => $vivienda->condominio_id];
                            }),
                        ['tipo' => fake()->randomElement(['Dueño', 'Inquilino'])]
                    )
                    ->count(30)
                )
            ->create();
    }
}
