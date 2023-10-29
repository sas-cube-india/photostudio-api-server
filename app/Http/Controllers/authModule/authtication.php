<?php

namespace App\Http\Controllers\authModule;

use App\Http\Controllers\Controller;
use App\Models\{adminuser};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class authtication extends Controller
{
    //

    public function login(Request $req)
    {
        $users = adminuser::where('email', $req->email)->orWhere('phone_no', $req->email)->first();

        if (!$users) {
            # code...
            return response(["msg" => "Users Not Found", "code" => 404], 200);
        }

        if (!($req->password == $users->password)) {
            # code...
            return response(["msg" => "Wrong Password", "code" => 404], 200);
        }
        // if (!Hash::check($req->password, $users->password)) {
        //     # code...
        //     return response(["msg" => "Wrong Password", "code" => 404], 200);
        // }
        return response([
            "msg" => "Login Successfully",
            "code" => 200,
            "user" => $users,
            "token" => Str::random(60),
        ], 200);
    }
    public function costomerlogin(Request $req)
    {
    }
    public function register(Request $req)
    {
    }
    public function otpvery(Request $req)
    {
    }
}
