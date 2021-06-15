<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empresa;
class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empresa::firstOrCreate([
            'ruc'=>'10010010010',
            'razon_social' => 'MI EMPRESA',
            'nombre_comercial' => 'MI EMPRESA',
            'direccion_principal' => 'HUANUCO',
            'ubigeo' =>'HUÁNUCO - HUÁNUCO - HUÁNUCO'
        ]);


    }
}
