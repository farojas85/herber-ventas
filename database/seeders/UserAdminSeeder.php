<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empresa;
use App\Models\TipoDocumento;
use App\Models\Role;
use App\Models\Persona;
use App\Models\User;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empresa = Empresa::select('id')->where('ruc','10010010010')->first();

        $tipo_documento = TipoDocumento::select('id')->where('tipo','00')->first();

        $role = Role::select('id')->where('directriz','super-admin')->first();

        $persona = Persona::firstOrCreate([

        ]);

        $usuario = User::firstOrCreate([

        ]);
    }
}
