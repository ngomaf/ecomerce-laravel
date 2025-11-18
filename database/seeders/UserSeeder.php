<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $firstName1 = 'Ngoma';
        $middleLastName1 = 'Develop Tec';
        
        $firstName2 = 'Rosa';
        $middleLastName2 = 'Consolante Conso';
        
        $firstName3 = 'Zany';
        $middleLastName3 = 'Analista Analise';
        
        $users = [
            [
                'firstName' => $firstName1,
                'middleEndLastName' => $middleLastName1,
                'slug' => Str::slug("{$firstName1} {$middleLastName1}"),
                'email' => 'ngoma.tec@mtec.ao',
                'password' => bcrypt('Ngoma123'),
            ],
            [
                'firstName' => $firstName2,
                'middleEndLastName' => $middleLastName2,
                'slug' => Str::slug("{$firstName2} {$middleLastName2}"),
                'email' => 'rosa.conso@mtec.ao',
                'password' => bcrypt('Rosa123'),
            ],
            [
                'firstName' => $firstName3,
                'middleEndLastName' => $middleLastName3,
                'slug' => Str::slug("{$firstName3} {$middleLastName3}"),
                'email' => 'zany.analise@mtec.ao',
                'password' => bcrypt('Zany123'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
