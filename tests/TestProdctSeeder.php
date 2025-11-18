// database/seeders/ProductSeeder.php
<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        
        $categories = [
            'Smartphones',
            'Laptops', 
            'Tablets',
            'Headphones',
            'Smartwatches',
            'Cameras',
            'Gaming Consoles',
            'Computer Components'
        ];

        $images = [
            'assets/images/product-item1.jpg',
            'assets/images/product-item2.jpg',
            'assets/images/product-item3.jpg',
            'assets/images/product-item4.jpg',
            'assets/images/product-item5.jpg',
            'assets/images/product-item6.jpg',
            'assets/images/product-item7.jpg',
            'assets/images/product-item8.jpg',
            'assets/images/product-item9.jpg',
            'assets/images/product-item10.jpg',
        ];
        
        $brands = [
            'Apple', 'Samsung', 'Sony', 'Dell', 'HP', 'Lenovo', 
            'Asus', 'Acer', 'Microsoft', 'Google', 'Xiaomi', 'Huawei'
        ];
        
        $products = [];
        
        for ($i = 0; $i < 50; $i++) {
            $category = $faker->randomElement($categories);
            $brand = $faker->randomElement($brands);

            // name
            // slug
            // price
            // status
            // description
            // image

            $name = $this->generateProductName($category, $brand, $faker);
            
            $products[] = [
                'name' => $name,
                'slug' => Str::slug($name),
                'price' => $this->generateProductPrice($category, $faker),
                'status' => random_int(0, 1),
                'description' => $this->generateProductDescription($category, $brand, $faker),
                'image' => $images[random_int(0, 9)],
                    
                'id_user' => User::pluck('id')->random(),
                'id_category' => Category::pluck('id')->random(),

                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }
        
        DB::table('products')->insert($products);
    }
    
    private function generateProductName($category, $brand, $faker)
    {
        $models = [
            'Smartphones' => ['Galaxy', 'iPhone', 'Xperia', 'Poco', 'Mate', 'Pixel'],
            'Laptops' => ['ProBook', 'ThinkPad', 'ZenBook', 'Inspiron', 'MacBook', 'Surface'],
            'Tablets' => ['Tab', 'iPad', 'MediaPad', 'Galaxy Tab', 'Mi Pad'],
            'Headphones' => ['QuietComfort', 'WH-1000', 'AirPods', 'FreeBuds', 'Buds'],
        ];
        
        $model = $faker->randomElement($models[$category] ?? ['Standard']);
        $version = $faker->randomElement(['Pro', 'Max', 'Lite', 'Plus', 'Ultra', '']);
        
        return "{$brand} {$model} {$version} {$faker->randomNumber(2)}";
    }
    
    private function generateProductDescription($category, $brand, $faker)
    {
        $descriptions = [
            'Smartphones' => "O {$brand} oferece desempenho excecional com uma câmara de alta resolução e bateria de longa duração.",
            'Laptops' => "Este {$brand} é perfeito para trabalho e entretenimento, com processador rápido e ecrã de alta qualidade.",
            'Headphones' => "Experimente som de alta fidelidade com estes headphones {$brand} com cancelamento de ruído ativo.",
        ];
        
        $baseDescription = $descriptions[$category] ?? "Produto de qualidade da marca {$brand} para todas as suas necessidades.";
        
        return $baseDescription . " " . $faker->paragraph(2);
    }
    
    private function generateProductPrice($category, $faker)
    {
        $priceRanges = [
            'Smartphones' => [299.99, 1299.99],
            'Laptops' => [499.99, 2499.99],
            'Tablets' => [199.99, 899.99],
            'Headphones' => [49.99, 399.99],
            'Smartwatches' => [99.99, 599.99],
            'Cameras' => [299.99, 1999.99],
            'Gaming Consoles' => [299.99, 499.99],
            'Computer Components' => [29.99, 999.99],
        ];
        
        $range = $priceRanges[$category] ?? [19.99, 499.99];
        
        return $faker->randomFloat(2, $range[0], $range[1]);
    }
    
    private function generateSpecifications($category, $faker)
    {
        $specs = [];
        
        switch ($category) {
            case 'Smartphones':
                $specs = [
                    'screen_size' => $faker->randomElement(['6.1"', '6.7"', '6.4"', '5.8"']),
                    'storage' => $faker->randomElement(['64GB', '128GB', '256GB', '512GB']),
                    'ram' => $faker->randomElement(['4GB', '6GB', '8GB', '12GB']),
                    'camera' => $faker->randomElement(['12MP', '48MP', '64MP', '108MP']),
                    'battery' => $faker->randomElement(['4000mAh', '4500mAh', '5000mAh']),
                ];
                break;
                
            case 'Laptops':
                $specs = [
                    'processor' => $faker->randomElement(['Intel i5', 'Intel i7', 'AMD Ryzen 5', 'AMD Ryzen 7']),
                    'ram' => $faker->randomElement(['8GB', '16GB', '32GB']),
                    'storage' => $faker->randomElement(['256GB SSD', '512GB SSD', '1TB SSD']),
                    'screen_size' => $faker->randomElement(['13.3"', '14"', '15.6"', '17"']),
                    'graphics' => $faker->randomElement(['Integrated', 'NVIDIA GTX 1650', 'NVIDIA RTX 3060']),
                ];
                break;
                
            default:
                $specs = [
                    'color' => $faker->colorName(),
                    'weight' => $faker->randomFloat(2, 0.1, 5) . 'kg',
                    'warranty' => $faker->randomElement(['1 year', '2 years', '3 years']),
                ];
        }
        
        return json_encode($specs);
    }
}