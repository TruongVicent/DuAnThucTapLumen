<?php
namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

use App\Models\Theme;

class ProductController extends Controller{


    public function index(){
        $product = Theme::all();
        return view('Client.Layouts.Product', compact('product'));
    }
}