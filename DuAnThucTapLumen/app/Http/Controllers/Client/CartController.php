<?php
namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Cart_detail;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller{
   
    public function index($id){
        $cartuser = Cart::where('user_id', $id)->first();
        $cart = Cart_detail::where('cart_id', $cartuser->id)->get();
        return view('Client.Layouts.Cart', compact('cart', 'cartuser'));
    }
     public function delete($id){
        $cartuser =Cart_detail::find($id);
        $cartuser->delete();
        return redirect('/cart/'. Auth::user()->id);
     }
     public function addcart(Request $request){
        // Lấy thông tin người dùng hiện tại
        $user = Auth::user();
    
        // Kiểm tra xem giỏ hàng của người dùng đã tồn tại hay chưa
        $cartuser = Cart::where('user_id', $user->id)->first();
    
        // Nếu giỏ hàng chưa tồn tại, tạo giỏ hàng mới
        if (!$cartuser) {
            $cartuser = new Cart();
            $cartuser->fullname = $user->name;
            $cartuser->email = $user->email;
            $cartuser->user_id = $user->id;
            $cartuser->save();
        }
    
        // Thêm sản phẩm vào chi tiết giỏ hàng
        $cart = new Cart_detail();
        $cart->theme_name = $request->theme_name;
        $cart->price = $request->price;
        $cart->thumbnail = $request->thumbnail;
        $cart->cart_id =  $cartuser->id;
        $cart->theme_id = $request->theme_id;
        $cart->save();
    
        return redirect('/product');
    }
    
}