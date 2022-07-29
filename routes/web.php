<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\liveness_detection_digidataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//send response (kirim data controller to api)

Route::post('/upload-livenessdetectiondigidata', 'App\Http\Controllers\liveness_detection_digidatacontroller@liveness_detection_digidatatest')->name('upload.livenessdetectiondigidata');
Route::post('/upload-livenessdetectionbigsize', 'App\Http\Controllers\liveness_detection_bigsizecontroller@liveness_detection_bigsizetest')->name('upload.livenessdetectionbigsize');



Route::get('/token', function () {

    $token = csrf_token();
    return response()->json(['token' => $token]);
    // return csrf_token(); 
});

Route::group(['prefix' => 'test'], function() use ($router){
    Route::controller(liveness_detection_digidataController::class)->group(function () {

        Route::post('liveness_detection','liveness_detection')->name('livenes.test');

    });
}); 