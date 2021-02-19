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
 *路由文件    Route:: 路由方式 回调函数或者视图或者控制器  数组会自动转成json
 */
Route::get('/', function () {
    return view('login');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/users',['\App\Http\Controllers\UserController\UserController','test']);

Route::get('/testinsertuser',[TestController::class,'testinsertuser']);
Route::get('/testdeleteuser',[TestController::class,'testdeleteuser']);
Route::get('/testmodifuser',[TestController::class,'testmodifuser']);
Route::get('/testqueryuser',[TestController::class,'testqueryuser']);

Route::get('/testredisquery',[TestController::class,'testredisquery']);

Route::get('/test1',function (){
    $id = request("id");//?后的参数
});

Route::get('/test2',function (){
    return redirect();
});

Route::get('/test2/{id}',function ($id){  //获取 url 中的参数
    return redirect();
});

Route::get('/test',function (){
    $id = request("id");

    return view('wecome',['id'=>$id]);
});



