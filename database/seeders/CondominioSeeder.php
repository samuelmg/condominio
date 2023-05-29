<?php

namespace Database\Seeders;

use App\Models\Condominio;
use App\Models\User;
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
            ->hasAttached(User::factory(), ['role' => 'Administrador'])
            ->count(3)
            ->create();
    }
}
