<?php

namespace Database\Seeders;

use App\Models\Institucion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstitucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Institucion::create(['clave'=> 1, 'valor' => "UTN"]);
        Institucion::create(['clave'=> 2, 'valor' => "COMEDOR"]);
        Institucion::create(['clave'=> 3, 'valor' => "GALERIA"]);
        Institucion::create(['clave'=> 4, 'valor' => "XBOX"]);
    }
}
