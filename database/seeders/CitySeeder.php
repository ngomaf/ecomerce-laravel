<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CitySeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('pt_PT'); // Português de Portugal
        
        $provinces = DB::table('provinces')->pluck('id');
        
        $citiesData = [];
        
        foreach ($provinces as $provinceId) {
            // Gerar 3-8 cidades por província
            $numberOfCities = $faker->numberBetween(3, 8);

            $cities = [
                'Luanda', 'Viana', 'Cacuaco', 'Lobito', 'Benguela',
                'Lubango', 'Cuito', 'Menongue', 'Malanje'
            ];
            
            for ($i = 0; $i < $numberOfCities; $i++) {
                $citiesData[] = [
                    'province_id' => $provinceId,
                    'name' => $cities[random_int(0, 8)],
                    'postal_code' => $faker->postcode(),
                ];
            }
        }
        
        DB::table('cities')->insert($citiesData);
    }
}