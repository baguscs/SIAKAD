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
        $data = array(
            array(
                'role' => 'Admin',
            ),
            array(
                'role' => 'Guru',
            ),
        );
        foreach ($data as $value) {
            Role::create($value);
        }
    }
}
