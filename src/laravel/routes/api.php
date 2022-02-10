<?php

use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

// テストデータ
Route::get('/test', [TestController::class, 'index']);

// 複数テストデータ
Route::get('/items', function (Request $request) {
    $data = [
        [
            "id"          => 1,
            "name"        => "テスト１",
            "description" => "hoge",
            "created_at"  => "2022-02-10",
            "updated_at"  => "2022-02-10",
        ], [
            "id"          => 2,
            "name"        => "テスト２",
            "description" => "hege",
            "created_at"  => "2022-02-10",
            "updated_at"  => "2022-02-10",
        ],
    ];
    return response()->json($data);
});
