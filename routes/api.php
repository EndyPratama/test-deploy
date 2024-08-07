<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::controller(StudentController::class)->prefix('student')->group(function(){
    Route::get('/', 'listStudent')->name('listStudent');
});

Route::get('/',function (){
    return response()->json("Test-SVC",200);
});

Route::get('/ping',function (){
    return response()->json("PONG!!!",200);
});

Route::get('/p',function (){
    return response()->json("Dilarang P P P !!!",200);
});

Route::get('/woi',function (){
    return response()->json("Oiii !!!",200);
});
