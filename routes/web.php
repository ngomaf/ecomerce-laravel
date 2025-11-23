<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/produto', [ProductController::class, 'index']);
Route::get('/produto/{slug}', [ProductController::class, 'details']);
Route::get('/produto/categoria/{slug}', [ProductController::class, 'category']);

Route::get('/carrinho', [CartController::class, 'list'])->name('cart.list');
Route::post('/carrinho', [CartController::class, 'add']);
Route::post('/carrinho/remover', [CartController::class, 'remove']);
Route::post('/carrinho/actualizar', [CartController::class, 'update']);
Route::get('/carrinho/limpar', [CartController::class, 'clear']);

Route::view('/login', 'login.logger')->name('login');
Route::post('/auth', [LoginController::class, 'auth']);
Route::get('/sair', [LoginController::class, 'logout']);
Route::view('/criar', 'login.create');
Route::post('/salvar', [LoginController::class, 'store']);

Route::view('/sobre', 'extern.about');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::redirect('/admin', '/admin/dashboard');
