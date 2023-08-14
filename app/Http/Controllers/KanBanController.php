<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KanBanController extends Controller
{
    public function AddNewProject(Request $request)
    {
        $request->validate([
        'name'      => 'required|string|max:255',
        'image'     => 'required|image',
        'email'     => 'required|string|email|max:255|unique:users',
        'phone'     => 'required|min:11|numeric',
        'status'    => 'required|string|max:255',
        'role_name' => 'required|string|max:255',
        'password'  => 'required|string|min:8|confirmed',
        'password_confirmation' => 'required',
    ]);
}

}
