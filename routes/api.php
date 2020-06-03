<?php

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

Route::post('/jsonrpc', function (Illuminate\Http\Request $request, \Tochka\JsonRpc\JsonRpcServer $server) {
    // dd($request->getContent());
    return $server->handle(
        $request->getContent(),
        'default',
        'JsonRpc',
        'Api'
    );
});