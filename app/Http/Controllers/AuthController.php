<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }


    public function loginPost(Request $request)
    {

        $request->validate([
            'email' => "required|email",
            'password' => "required",
        ]);


        $credentials = $request->only('email', 'password');

        try {
            if (Auth::attempt($credentials)) {
                return redirect()->intended(route("tasks"));
            }
            return back()->with('error', 'login failed');
        } catch (\RuntimeException $e) {
            if (strpos($e->getMessage(), 'Bcrypt') !== false) {
                return back()->with('error', 'login failed');
            }
            throw $e;
        }
    }



    public function register()
    {
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {
        $request->validate([
            'name' => "required",
            'email' => "required|email|unique:users,email",
            'password' => "required|min:8|confirmed",
        ]);

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        $user = new User([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password)
        ]);

        if ($user->save()) {
            return redirect(route('login'))->with("success", "User created successfully");
        } else {
            redirect(route('register'))->with("error", "Failed to register account");
        }
    }
}
