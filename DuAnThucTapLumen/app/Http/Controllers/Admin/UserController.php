<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserController extends Controller{


    public function index(){
        return view('Admin.Layouts.User.ListUser');
    }
    public function add(){
        return view('Admin.Layouts.User.AddUser');
    }
    public function edit(){
        return view('Admin.Layouts.User.EditUser');
    }
    public function signin(){
        return view('Admin.Layouts.User.Login');
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
            return redirect('/dashboard');
        } else {
            return response()->json(['status' => 'fail'], 401);
        }
    }
}