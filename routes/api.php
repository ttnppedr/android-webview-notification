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
        'user_id'   => $request->user()->id,
        'device_id' => $data['device_id'],
    ]);

    return response(null, 201);
})->middleware('auth:sanctum');

Route::post('/notify', function (Request $request) {
    \Illuminate\Support\Facades\Log::info('notify');
    $deviceId = $request->user()->devices()->latest()->first()->device_id;
    $encoded
    = base64_encode(config('services.jpush.app_key').':'.config('services.jpush.master_secret'));

    $redirectUrl = config('app.url').'/main';

    $data = [
        'platform'     => 'android',
        'audience'     => ['registration_id' => [$deviceId]],
        'notification' => [
            'android' => [
                'title' => 'title',
                'alert'  => 'alert',
                'intent' => [
                    'url' => "intent:#Intent;action=android.intent.action.VIEW;component=com.example.todo/.SecondActivity;S.url=$redirectUrl;end",
                ],
            ],
        ],
    ];
    Log::info(json_encode($data));

    $res = \Illuminate\Support\Facades\Http::asJson()
        ->withHeader('Authorization', "Basic $encoded")
        ->post(config('services.jpush.url').'/v3/push', $data)
        ->json();

    Log::info(json_encode($res));

    return response(null, 200, ['HX-Refresh' => 'true']);
})->middleware('auth:sanctum');
