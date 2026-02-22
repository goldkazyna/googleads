<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('home');
});

Route::post('/order', [OrderController::class, 'send'])->name('order.send');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (\Illuminate\Http\Request $request) {
    if ($request->email === 'goldkazyna5@gmail.com' && $request->password === '123123123') {
        $request->session()->put('authenticated', true);
        return redirect()->route('dashboard');
    }
    return back()->with('error', 'Неверный email или пароль');
})->name('login.post');

Route::post('/logout', function (\Illuminate\Http\Request $request) {
    $request->session()->forget('authenticated');
    return redirect()->route('login');
})->name('logout');

Route::get('/dashboard', function () {
    if (!session('authenticated')) {
        return redirect()->route('login');
    }
    return view('dashboard');
})->name('dashboard');
