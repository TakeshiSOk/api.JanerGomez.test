<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GraduateController;
use App\Models\Country;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/graduates', [GraduateController::class, 'indexGraduate']);
Route::get('/country', [GraduateController::class, 'indexCountry']);
Route::get('/area', [GraduateController::class, 'indexArea']);
Route::get('/title', [GraduateController::class, 'indexTitle']);
Route::get('/graduates/company/{companyId}', [GraduateController::class, 'filterByCompany']);
Route::get('/graduates/area/{areaId}', [GraduateController::class, 'filterByArea']);
Route::get('/graduates/title/{titleId}', [GraduateController::class, 'filterByTitle']);



