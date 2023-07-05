<?php

namespace Database\Seeders;

use App\Models\Condominio;
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
                        return ['email' => 'admin@test.com'];
                    })
                    ->withPersonalTeam(),
                ['role' => 'Administrador']
            )
            ->has(Vivienda::factory()->count(30))
            // ->count(1)
            ->create();
    }
}
