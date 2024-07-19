<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class AuthController extends Controller
{
    public function __construct()
    {
        
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        try {
            $data = new User;
            $data->name = $request->get('name');
            $data->email = $request->get('email');
            $data->password = Hash::make($request->get('password'));
            $data->save();

            return redirect('/');
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to register!'], 422);
        }
    }
    public function signin(){
        return view('Client.Layouts.Login');
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $users = Auth::user();
            // dd($request->userid);
            return redirect('/');
        } else {
            return response()->json(['status' => 'fail'], 401);
        }
    }

    public function show()
    {
        $user = Auth::user();
        if ($user) {
            return view('Client.Layouts.Profile', compact('user'));
        } else {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
    }

    public function logout(Request $request)
    {
        $user = Auth::user();
        if ($user) {
            Auth::logout();
            return redirect('/');
        } else {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
    }
}
