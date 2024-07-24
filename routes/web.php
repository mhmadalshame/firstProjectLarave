<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowProfile;
use App\Http\Controllers\admin\AdminservicesController;
use App\Http\Controllers\admin\AdminDecisionController;
use App\Http\Controllers\admin\AdminDecisionTypeController;


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

$w='mohumad';

$vig=["tometo","panana","orange"];
Route::get('/', function () {
    $s=array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    return view('login',["w"=>$s]);
},);
Route::get('/hi', function () {
    return "<h1>hi</h1>";
});
Route::get('/hi1',[ShowProfile::class,"getage",] );

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::resource("admin/sevices",AdminservicesController::class);
Route::resource("admin/decision",AdminDecisionController::class);
Route::resource("admin/decisiontype",AdminDecisionTypeController::class);

Route::post("admin/sevices/serach",[AdminservicesController::class,"serach"])->name("sevices.serach");
Route::post("admin/decision/serach",[AdminDecisionController::class,"serach"])->name("decision.serach");
Route::post("admin/decisiontype/serach",[AdminDecisionTypeController::class,"serach"])->name("decisiontype.serach");



