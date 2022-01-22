<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Struktur;

class StrukturSeeder extends Seeder
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
                'jabatan' => 'Kepala Sekolah',
                'status' => 'done',
            ),
        );
        foreach ($data as $value) {
            Struktur::create($value);
        }
    }
}
