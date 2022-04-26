<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function registerStore(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'remember_token' => '1',
        ]);
        return redirect()->route('login')->with('success', "Register Successfully");
    }
}
