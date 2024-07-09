<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

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
        return view('Client.Layouts.Login');
    }
}