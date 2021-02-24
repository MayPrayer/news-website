<?php


namespace App\Http\Controller;

use Illuminate\Support\Facades\DB;
class LoginController
{
    public function vifuser(Request $request){
        $data = $request->getContent();
        $data = json_decode($data);
        $user =DB::table('nw_users')->where('username',  $data->username)->where('password', $data->password)->get();
        //如果没查到
        dd($user);
        return $user;
    }


}
