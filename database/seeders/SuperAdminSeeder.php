<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = [
            'nomor_induk' => '66133366',
            'email' => 'superadmin@admin.com',
            'password'=> Hash::make('superadminpassw0rd445125'),
            'role_id' => '1',
        ];
        User::insert($superadmin);
    }
}
