<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // GET: /login
    function viewLogin()
    {
        // Kiem tra xem da dang nhap hay chua ?
        if (Auth::check()) {
            // Da dang nhap
            $user = Auth::user();
            switch ($user->role) {
                case 'admin':
                    return redirect()->route('admin.home');
                    break;
                case 'customer':
                    return redirect()->route('customer.content');
                    break;
            }
        }
        // view dang nhap
        return view('auth.login');
    }


    // POST: /login
    function login(Request $request)
    {
        // Xu ly dang nhap
        $email = $request->get('email');
        $password = $request->get('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Xem vai tro cua nguoi nay
            $user = Auth::user();
            switch ($user->role) {
                case 'admin':
                    return redirect()->route('admin.home');
                    break;
                case 'customer':
                    return redirect()->route('customer.content');
                    break;
            }
        } else {
            // Chuyen huong ve login
            return redirect()->back();
        }
    }

    // POST: /dang xuat
    function logout()
    {
        Auth::logout();
        return redirect()->route('customer.content');
    }

    function viewRegister(){
        return view('auth.register');
    }

    public function saveRegister(Request $request)
    {
        $validate = $request->validate(
            [
                "name" => "required",
                "email" => "required|email|unique:users,email"
            ],
            [
                "name.required" => "Name is not empty",
                "email.unique" => "Email is already taken",

            ]
        );
//        $id = $request -> get('id');
        $name = $request -> get('name');
        $password = Hash::make($request->get('password'));
        $email = $request ->get('email');
        $phone = $request ->get('phone');

        $role = "customer";

        DB::table("users")-> insert([
            'name' => $name,
            'password'=> $password,
            'email' => $email,
            'phone' => $phone,
            'role' => $role
        ]);
        return redirect("/login");
    }
}

