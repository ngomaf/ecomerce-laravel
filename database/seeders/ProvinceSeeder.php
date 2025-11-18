<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    public function run()
    {
        $provinces = [
            ['name' => 'Luanda', 'code' => 'LU'],
            ['name' => 'Benguela', 'code' => 'BG'],
            ['name' => 'Huambo', 'code' => 'BB'],
            ['name' => 'Huíla', 'code' => 'HL'],
            ['name' => 'Cuanza Sul', 'code' => 'KS'],
        ];

        foreach ($provinces as $province) {
            DB::table('provinces')->insert([
                'name' => $province['name'],
                'code' => $province['code'],
            ]);
        }
    }
}