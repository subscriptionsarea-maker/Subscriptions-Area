<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/about', 'about');
Route::view('/plans', 'plans');

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Route::view('/order', 'order');
Route::post('/order', function (Request $request) {
    DB::table('orders')->insert([
        'plan_name' => $request->plan_name,
        'customer_name' => $request->customer_name,
        'customer_email' => $request->customer_email,
        'trx_id' => $request->trx_id,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    return back()->with('success', 'ধন্যবাদ! আপনার অর্ডারটি সফলভাবে জমা হয়েছে।');
});

Route::get('/admin', function () {
    $orders = DB::table('orders')->orderBy('id', 'desc')->get();
    return view('admin', ['orders' => $orders]);
});
