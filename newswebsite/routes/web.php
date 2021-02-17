<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers;
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
/**
 *路由文件    Route:: 路由方式 回调函数或者视图或者控制器
 */
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    echo "dssdsd'd's";
});

Route::get('/testinsertuser',[TestController::class,'testinsertuser']);
Route::get('/testdeleteuser',[TestController::class,'testdeleteuser']);
Route::get('/testmodifuser',[TestController::class,'testmodifuser']);
Route::get('/testqueryuser',[TestController::class,'testqueryuser']);



