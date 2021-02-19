<?php


namespace App\Http\Controller;


class LoginController
{
    public function vifuser(Request $request){
        $data = $request->getContent();
        $data = json_decode($data);
        dd($data);
    }


}
