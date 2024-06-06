<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class OrderController extends Controller{


    public function index(){
        return view('Admin.Layouts.Order.ListOrder');
    }
    public function edit(){
        return view('Admin.Layouts.Order.EditOrder');
    }
}