<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $categories = Category::all();
        $dateFormatter = function(string $date, string $standard = 'd M Y') 
        {
            return \Carbon\Carbon::parse($date)->format($standard);
        };

        view()->share('globCats', $categories);
        view()->share('dateFormatter', $dateFormatter);
    }
}
