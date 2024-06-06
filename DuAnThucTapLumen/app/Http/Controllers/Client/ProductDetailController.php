<?php
namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class ProductDetailController extends Controller{


    public function index(){
        return view('Client.Layouts.ProductDetail');

    }
}