<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Employee;
use App\Models\Registration;

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

Route::get('/employees', function (){
    return Employee::all();
});

Route::get('/employee/{id}', [EmployeeController::class,'show'])->where(['id' => '[0-9]+']);

Route::get('/registrations', function (){
    return Registration::all();
});




Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




