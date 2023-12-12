<?php

namespace Database\Seeders;

use App\Models\Sitio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SitioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* Sitio::create([
            'id' => 1,
            'nombre' => 'lago',
            'descripcion' => 'es un lugar muy hermoso y lleno de vida',
            'imagen' => 'imagen lago',
            'precios' => '125',
            'region_id' => 1        
        ]);

        Sitio::create([
            'id' => 2,
            'nombre' => 'serpiente',
            'descripcion' => 'es un lugar lleno de serpiente',
            'imagen' => 'imagen serpiente',
            'precios' => '5',
            'region_id' => 1        
        ]);

        Sitio::create([
            'id' => 3,
            'nombre' => 'cerro',
            'descripcion' => 'es un lugar muy raro y sin  vida',
            'imagen' => 'imagen cerro',
            'precios' => '126',
            'region_id' => 2
        ]);

        Sitio::create([
            'id' => 4,
            'nombre' => 'montaña',
            'descripcion' => 'es un lugar lleno de montaña',
            'imagen' => 'imagen montaña',
            'precios' => '99',
            'region_id' => 2
        ]); */


        Sitio::create([
            'id' => 11,
            'nombre' => 'lago',
            'descripcion' => 'es un lugar muy hermoso y lleno de vida',
            'imagen' => 'imagen lago',
            'precios' => '125',
            'region_id' => 1        
        ]);

        Sitio::create([
            'id' => 22,
            'nombre' => 'serpiente',
            'descripcion' => 'es un lugar lleno de serpiente',
            'imagen' => 'imagen serpiente',
            'precios' => '5',
            'region_id' => 1        
        ]);

        Sitio::create([
            'id' => 33,
            'nombre' => 'cerro',
            'descripcion' => 'es un lugar muy raro y sin  vida',
            'imagen' => 'imagen cerro',
            'precios' => '126',
            'region_id' => 2
        ]);

        Sitio::create([
            'id' => 44,
            'nombre' => 'montaña',
            'descripcion' => 'es un lugar lleno de montaña',
            'imagen' => 'imagen montaña',
            'precios' => '99',
            'region_id' => 2
        ]);

    }
}
