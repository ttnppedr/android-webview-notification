<?php

use App\Models\UserDevices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email'    => 'required|email',
        'password' => 'required',
    ]);

    if (!Auth::attempt($credentials)) {
        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    $token = $request->user()->createToken('API Token')->plainTextToken;

    return response()->json(['token' => $token]);
});

Route::post('/devices', function (Request $request) {
    $data = $request->validate([
        'device_id' => 'required|string',
    ]);

    UserDevices::create([
        'user_id' => $request->user()->id,
        'device_id' => $data['device_id'],
    ]);

    return response(null, 201);
})->middleware('auth:sanctum');

Route::post('/notify', function (Request $request) {
    $request->user();

    return response('success', 200);
})->middleware('auth:sanctum');
