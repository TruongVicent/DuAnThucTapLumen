<?php
namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class ProductController extends Controller{


    public function index(){
        return view('Client.Layouts.Product');

    }
}