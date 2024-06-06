<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class CategoryController extends Controller{


    public function index(){
        return view('Admin.Layouts.Category.ListCate');
    }
    public function add(){
        return view('Admin.Layouts.Category.AddCate');
    }
    public function edit(){
        return view('Admin.Layouts.Category.EditCate');
    }
}