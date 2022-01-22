<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengguna;

class PenggunaSeeder extends Seeder
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
                'struktur_id' => 1,
                'nama' => 'Chris Hemsworth',
                'nip' => 2345678,
                'alamat' => 'Jl. Jalan',
                'ttg' => 'Melbourne, 11 August 1983',
                'telpon' => '089231231231',
                'foto' => 'thor.jpg',
                'tamat' => 'S2 Aktor',
                'tugas' => 'Guru',
                'sejak' => '18 Januari 2021',
            ),
        );
        foreach ($data as $value) {
            Pengguna::create($value);
        }
    }
}
