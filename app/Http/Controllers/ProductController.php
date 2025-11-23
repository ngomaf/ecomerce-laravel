<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // dd(Product::where('status', true)->take(4)->get());

        return view('extern.products', [
            'products' => Product::where('status', true)->paginate(9),
            'productsMoreBuy' => Product::where('status', true)->take(4)->get(),
        ]);
    }

    public function details(string $slug)
    {
        return view('extern.product', [
            'product' => Product::where('slug', $slug)->first(),
        ]);
    }

    public function category(string $slug)
    {
        $category = Category::where('slug', $slug)->first();

        return view('extern.category', [
            'category' => $category,
            'products' => Product::where('category_id', $category->id)
                ->where('status', true)
                ->paginate(6)
        ]);
    }
}
