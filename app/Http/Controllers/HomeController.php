<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function signup()
    {
        return view('signup', ["title" => "signup or login", 'serverTime' => now()->format('H:i:s')]);
    }

    public function signOrLogin(Request $req)
    {
        $mode = $req->input("mode");
        $email = $req->input("email");
        $password = $req->input("password");

        if($mode == "login"){
            $user = User::where("email", $email)->first();
    
            if($user && Hash::check($password, $user->password)){
                $req->session()->put("username", $user->username);
                $req->session()->put("email", $user->email);
                return redirect()->route("game");
            }
            else{
                return redirect()->route("signup")->with("msg", "invalid credentials");
            }
        }
        else{
            $username = $req->input("username");
            $hashPassword = Hash::make($password);
            User::create([
                "username" => $username,
                "email" => $email,
                "password" => $hashPassword
            ]);
            $req->session()->put("username", $username);
            $req->session()->put("email", $email);
            return redirect()->route("game");
        }

    }

    public function logout(Request $req)
    {
        $req->session()->flush();
        return redirect()->route("signup");
    }
}
