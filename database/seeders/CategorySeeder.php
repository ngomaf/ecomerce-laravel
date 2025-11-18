<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('pt_PT');

        $categories = [
            ['name' => 'Smartphones', 'slug' => Str::slug('Smartphones'), 'description' => $faker->paragraph()],
            ['name' => 'Laptops', 'slug' => Str::slug('Laptops'), 'description' => $faker->paragraph()],
            ['name' => 'Tablets', 'slug' => Str::slug('Tablets'), 'description' => $faker->paragraph()],
            ['name' => 'Headphones', 'slug' => Str::slug('Headphones'), 'description' => $faker->paragraph()],
            ['name' => 'Smartwatches', 'slug' => Str::slug('Smartwatches'), 'description' => $faker->paragraph()],
            ['name' => 'Cameras', 'slug' => Str::slug('Cameras'), 'description' => $faker->paragraph()],
            ['name' => 'Gaming Consoles', 'slug' => Str::slug('Gaming Consoles'), 'description' => $faker->paragraph()],
            ['name' => 'Computer Components', 'slug' => Str::slug('Computer Components'), 'description' => $faker->paragraph()],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category['name'],
                'slug' => $category['slug'],
                'description' => $category['description'],
            ]);
        }
    }
}
