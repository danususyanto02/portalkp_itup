<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['jenis_role' => 'Super Admin']);
        Role::create(['jenis_role' => 'Pejabat Prodi']);
        Role::create(['jenis_role' => 'Staf Prodi']);
        Role::create(['jenis_role' => 'Dosen']);
        Role::create(['jenis_role' => 'Mahasiswa']);
    }
}

