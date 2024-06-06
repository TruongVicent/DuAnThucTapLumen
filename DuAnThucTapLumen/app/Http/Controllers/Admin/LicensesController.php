<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class LicensesController extends Controller{


    public function index(){
        return view('Admin.Layouts.License.ListLicense');
    }
    public function add(){
        return view('Admin.Layouts.License.AddLicense');
    }
    public function edit(){
        return view('Admin.Layouts.License.EditLicense');
    }
}