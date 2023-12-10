<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ClientPhoneController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SaleDetailController;
use App\Models\Supplier;

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

Route::get('/', function () {
    #$suppliers = Supplier::all(); // Fetch suppliers data
    #return view('suppliers/index', compact('suppliers'));
    return view('welcome'); // Assuming you have a welcome.blade.php view for your homepage
});

// Resource routes for suppliers
Route::resource('suppliers', SupplierController::class);

// Resource routes for clients
Route::resource('clients', ClientController::class);

// Resource routes for client addresses
Route::resource('addresses', AddressController::class);

// Resource routes for client phones
Route::resource('clientPhones', ClientPhoneController::class);

// Resource routes for categories
Route::resource('categories', CategoryController::class);

// Resource routes for products
Route::resource('products', ProductController::class);

// Resource routes for sales
Route::resource('sales', SaleController::class);

// Resource routes for sale details
Route::resource('saleDetails', SaleDetailController::class);

// You can add more routes here as needed
