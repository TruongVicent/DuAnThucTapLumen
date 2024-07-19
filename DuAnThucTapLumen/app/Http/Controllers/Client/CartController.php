<?php
namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Cart_detail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class CartController extends Controller{
   
    public function index($id){
        $cartuser = Cart::where('user_id', $id)->first();
        
        // Kiểm tra nếu không tìm thấy giỏ hàng của người dùng
        if (!$cartuser) {
            return redirect('/home')->with('error', 'Cart not found.');
        }
        $cart = Cart_detail::where('cart_id', $cartuser->id)->get();
        if (!$cart) {
            return redirect('/home')->with('error', 'Cart not found.');
        }
        return view('Client.Layouts.Cart', compact('cart', 'cartuser'));
    }
    
    public function delete($id){
        $cartDetail = Cart_detail::find($id);
        
        // Kiểm tra nếu không tìm thấy chi tiết giỏ hàng
        if (!$cartDetail) {
            return redirect('/cart/' . Auth::user()->id);
        }
        $cartDetail->delete();
        return redirect('/cart/' . Auth::user()->id)->with('success', 'Cart item deleted successfully.');
    }
    
    public function addcart(Request $request){
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
        $cart->cart_id = $cartuser->id;
        $cart->theme_id = $request->theme_id;
        $cart->save();
    
        return redirect('/product')->with('success', 'Product added to cart successfully.');
    }
    
    
}