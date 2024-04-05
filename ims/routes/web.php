<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inventroy', function () {
    return view('inventory.inventory-home');
});

Route::get('/inventroy-single', function () {
    return view('inventory.inventory-single');
});

Route::get('/brand', function () {
    return view('brand.brand-home');
});

Route::get('/customer', function () {
    return view('customer.customer-home');
});

Route::get('/customer-form', function () {
    return view('customer.customer-form');
});

Route::get('/customer-info', function () {
    return view('customer.customer-info');
});

Route::get('/customer-single', function () {
    return view('customer.customer-single');
});

Route::get('/invoice', function () {
    return view('invoice.invoice-home');
});

Route::get('/invoice-form', function () {
    return view('invoice.invoice-form');
});

Route::get('/invoice-info', function () {
    return view('invoice.invoice-info');
});

Route::get('/quotation', function () {
    return view('quotation.quotation-home');
});

Route::get('/quotation-info', function () {
    return view('quotation.quotation-info');
});

Route::get('/quotation-single', function () {
    return view('quotation.quotation-info');
});

Route::get('/supplier', function () {
    return view('supplier.supplier-home');
});









