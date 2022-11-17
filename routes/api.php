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

Route::middleware('auth:kratos')
    ->get('/user', fn (Request $request) => response()->json($request->user()));

Route::middleware('auth:kratos-database')
    ->get('/db-user', fn (Request $request) => response()->json($request->user()));
