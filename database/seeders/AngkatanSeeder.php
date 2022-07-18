<?php

namespace Database\Seeders;

use App\Models\Angkatan;
use Illuminate\Database\Seeder;

class AngkatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Angkatan::create([
            'thn_angkatan' => '2019'
        ]);
        Angkatan::create([
            'thn_angkatan' => '2020'
        ]);
        Angkatan::create([
            'thn_angkatan' => '2021'
        ]);
        Angkatan::create([
            'thn_angkatan' => '2022'
        ]);
    }
}
