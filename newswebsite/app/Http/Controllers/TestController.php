<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/**
 * @OA\Info(
 *     title="测试数据库增删改查",
 *     version="0.0.1"
 * )
 */
class TestController extends Controller
{

    /**
     * @OA\Get(
     *     path="/testinsertuser",
     *     @OA\Response(response="200", description="测试插入一个用户")
     * )
     */
    public function  testinsertuser(){
        return DB::table('nw_users')->insert(['id'=>2,'username'=>'dz','password'=>'dz']);
    }
    public function  testdeleteuser(){
        return DB::table('nw_users')->delete('2');
    }
    public function  testmodifuser(){
        return DB::table('nw_users')->where('id',2)->update(['username'=>'wly','password'=>'wly']);
    }
    public function  testqueryuser(){
        return DB::table('nw_users')->get();
    }
    public function  testredisquery(){
        Redis::set('name', 'guwenjie');
        $values = Redis::get('name');
        dd($values);
    }
}
