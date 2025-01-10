<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::get('/home', function (Request $request) {
    $token = $request->input('token');

    if (!$token) {
        return redirect(route('login'));
    }

    return view('home', compact('token'));
})->name('home');

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email'    => 'required|email',
        'password' => 'required',
    ]);

    if (!Auth::attempt($credentials)) {
        return back();
    }

    $token =$request->user()->createToken('API Token')->plainTextToken;

    return redirect(route('home', compact('token')));
});
