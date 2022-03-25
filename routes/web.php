<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\salonSpaController;

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
    return view('index');


Route::get('/index.blade.php',[salonSpaController::class,'homePage']{

});
Route::get('/about.blade.php', [salonSpaController::class,'about']  {
    
});

Route::get('/contact.blade.php', [salonSpaController::class,'contact']{
    
});

Route::get('/login.blade.php', [salonSpaController::class,'appointment']{
    
});