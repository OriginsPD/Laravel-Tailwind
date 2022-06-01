<?php

use App\Http\Livewire\Admin\AdminIndex;
use App\Http\Livewire\Admin\Meals;
use App\Http\Livewire\Home\LandingPage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', LandingPage::class)->name('home');
Route::get('/Admin', AdminIndex::class)->name('admin.dashboard');
Route::get('/Admin/Meals', Meals::class)->name('admin.meals');
