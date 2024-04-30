<?php

use App\Http\Controllers\Venta2Controller;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ventas/complete_status', function (Request $request) {
    if (!$request->id) {
        return response(['message' => 'Venta no encontrada'], 404);
    }
    $venta = App\Models\Venta::find($request->id);
    $venta->estado = 1;
    $venta->save();
    return response(['message' => 'Venta #'. $request->id .' completada']);
});

Route::get('ventas', [Venta2Controller::class, 'index']);
