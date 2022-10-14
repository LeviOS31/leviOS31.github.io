<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AircraftController;
use App\Http\Controllers\GroundvehicleController;
use App\Http\Controllers\FleetController;
use App\Models\Aircraft;

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
Route::get('/aircraft', [AircraftController::class, 'index']);
Route::get('/aircraft/{parm}', [AircraftController::class, 'countryortype']);
Route::get('/aircraft/{parm}/{name}', [AircraftController::class, 'show']);
Route::get('/ground', [GroundvehicleController::class, 'index']);
Route::get('/fleet', [FleetController::class, 'index']);
