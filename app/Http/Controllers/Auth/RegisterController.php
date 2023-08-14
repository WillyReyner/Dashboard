<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function user_register()
    {
        return view('user_management.user_register');
    }

    public function register()
    {
        return view('auth.register');
    }
    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'role_name' => 'required|max:255',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
            'user' => 'required|max:255',
            'phone' => 'required',
        ]);

        // $request->validate([
        //     'name' => 'required|max:255',
        //     'role_name' => 'required|max:255',
        //     'email' => 'required|email|max:255|unique:users',
        //     'password' => ['required', 'confirmed', Password::min(8)
        //             ->mixedCase()
        //             ->letters()
        //             ->numbers()
        //             ->symbols()
        //             ->uncompromised(),
        //     'password_confirmation' => 'required',
        //     ],
        // ]);

        User::create([
            'name'      => $request->name,
            'avatar'    => $request->image,
            'email'     => $request->email,
            'role_name' => $request->role_name,
            'password'  => Hash::make($request->password),
            'user' => $request->user,
            'phone' => $request->phone,
        ]);
        Toastr::success('Create new account successfully :)','Success');
        return redirect('login');
    }
}
