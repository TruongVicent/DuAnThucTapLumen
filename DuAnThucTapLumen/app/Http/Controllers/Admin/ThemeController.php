<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ThemeController extends Controller{


    public function index(){
        return view('Admin.Layouts.Theme.ListTheme');
    }
    public function add(){
        return view('Admin.Layouts.Theme.AddTheme');
    }
    public function edit(){
        return view('Admin.Layouts.Theme.EditTheme');
    }
}
