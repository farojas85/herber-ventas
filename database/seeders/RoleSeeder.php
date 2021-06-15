<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::firstOrCreate(['nombre' => 'Super Usuario','directriz' => 'super-usuario']);
        $role = Role::firstOrCreate(['nombre' => 'Administrador','directriz' => 'administrador']);
        $role = Role::firstOrCreate(['nombre' => 'Vendedor','directriz' => 'vendedor']);
        $role = Role::firstOrCreate(['nombre' => 'Auxiliar','directriz' => 'auxiliar']);
    }
}
