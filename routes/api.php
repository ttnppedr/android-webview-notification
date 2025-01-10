<?php

use App\Models\UserDevices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

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
    \Illuminate\Support\Facades\Log::info('notify');

    return response(null, 200, ['HX-Refresh' => 'true']);
})->middleware('auth:sanctum');
