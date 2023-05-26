<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estados')->insert([
            ['id' => 1, 'pais_id' => 484, 'estado' => 'Aguascalientes', 'abr' => 'Ags.'],
            ['id' => 2, 'pais_id' => 484, 'estado' => 'Baja California', 'abr' => 'BC'],
            ['id' => 3, 'pais_id' => 484, 'estado' => 'Baja California Sur', 'abr' => 'BCS'],
            ['id' => 4, 'pais_id' => 484, 'estado' => 'Campeche', 'abr' => 'Camp.'],
            ['id' => 5, 'pais_id' => 484, 'estado' => 'Coahuila de Zaragoza', 'abr' => 'Coah.'],
            ['id' => 6, 'pais_id' => 484, 'estado' => 'Colima', 'abr' => 'Col.'],
            ['id' => 7, 'pais_id' => 484, 'estado' => 'Chiapas', 'abr' => 'Chis.'],
            ['id' => 8, 'pais_id' => 484, 'estado' => 'Chihuahua', 'abr' => 'Chih.'],
            ['id' => 9, 'pais_id' => 484, 'estado' => 'Ciudad de México', 'abr' => 'CDMX'],
            ['id' => 10, 'pais_id' => 484, 'estado' => 'Durango', 'abr' => 'Dgo.'],
            ['id' => 11, 'pais_id' => 484, 'estado' => 'Guanajuato', 'abr' => 'Gto.'],
            ['id' => 12, 'pais_id' => 484, 'estado' => 'Guerrero', 'abr' => 'Gro.'],
            ['id' => 13, 'pais_id' => 484, 'estado' => 'Hidalgo', 'abr' => 'Hgo.'],
            ['id' => 14, 'pais_id' => 484, 'estado' => 'Jalisco', 'abr' => 'Jal.'],
            ['id' => 15, 'pais_id' => 484, 'estado' => 'México', 'abr' => 'Mex.'],
            ['id' => 16, 'pais_id' => 484, 'estado' => 'Michoacán de Ocampo', 'abr' => 'Mich.'],
            ['id' => 17, 'pais_id' => 484, 'estado' => 'Morelos', 'abr' => 'Mor.'],
            ['id' => 18, 'pais_id' => 484, 'estado' => 'Nayarit', 'abr' => 'Nay.'],
            ['id' => 19, 'pais_id' => 484, 'estado' => 'Nuevo León', 'abr' => 'NL'],
            ['id' => 20, 'pais_id' => 484, 'estado' => 'Oaxaca', 'abr' => 'Oax.'],
            ['id' => 21, 'pais_id' => 484, 'estado' => 'Puebla', 'abr' => 'Pue.'],
            ['id' => 22, 'pais_id' => 484, 'estado' => 'Querétaro', 'abr' => 'Qro.'],
            ['id' => 23, 'pais_id' => 484, 'estado' => 'Quintana Roo', 'abr' => 'Q. Roo'],
            ['id' => 24, 'pais_id' => 484, 'estado' => 'San Luis Potosí', 'abr' => 'SLP'],
            ['id' => 25, 'pais_id' => 484, 'estado' => 'Sinaloa', 'abr' => 'Sin.'],
            ['id' => 26, 'pais_id' => 484, 'estado' => 'Sonora', 'abr' => 'Son.'],
            ['id' => 27, 'pais_id' => 484, 'estado' => 'Tabasco', 'abr' => 'Tab.'],
            ['id' => 28, 'pais_id' => 484, 'estado' => 'Tamaulipas', 'abr' => 'Tamps.'],
            ['id' => 29, 'pais_id' => 484, 'estado' => 'Tlaxcala', 'abr' => 'Tlax.'],
            ['id' => 30, 'pais_id' => 484, 'estado' => 'Veracruz de Ignacio de la Llave', 'abr' => 'Ver.'],
            ['id' => 31, 'pais_id' => 484, 'estado' => 'Yucatán', 'abr' => 'Yuc.'],
            ['id' => 32, 'pais_id' => 484, 'estado' => 'Zacatecas', 'abr' => 'Zac.'],
        ]);
    }
}
