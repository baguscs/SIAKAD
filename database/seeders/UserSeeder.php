<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
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
                'role_id' => '1',
                'pengguna_id' => '1',
                'email' => 123,
                'password' => Hash::make('admin')
            ),
        );
        foreach ($data as $value) {
            User::create($value);
        }
    }
}
