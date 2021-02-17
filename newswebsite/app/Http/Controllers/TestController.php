<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/*
 * 册数数据库增删改查
 * */
class TestController extends Controller
{
    public function  testinsertuser(){
        return DB::table('user')->insert(['id'=>2,'username'=>'dz','password'=>'dz']);
    }
    public function  testdeleteuser(){
        return DB::table('user')->delete('2');
    }
    public function  testmodifuser(){
        return DB::table('user')->where('id',2)->update(['username'=>'wly','password'=>'wly']);
    }
    public function  testqueryuser(){
        return DB::table('user')->get();
    }

}
