<?php
namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
class CartController extends Controller{
   
    public function index(Request $request){

        // if ($request->has('fullname')){
        //     return Cart::where($request->fullname)
        //                 ->orWhere('fullname', 'LIKE', '%' . $request->fullname . '%')->get();
        // }
        // else
       return Cart::all();
    }
    public function list(Request $request){

        // if ($request->has('fullname')){
        //     return Cart::where($request->fullname)
        //                 ->orWhere('fullname', 'LIKE', '%' . $request->fullname . '%')->get();
        // }
        // else
        return view('Client.Layouts.Cart');
    }
    public function show($id){
        return Cart::findOrFail($id);
     }

     public function store(Request $request){
        $input = $request->all();
        Cart::create($input);


        // $this->validate($request,[
        //     'verification' => 'required',
        //     'fullname' => 'required',
        //     'email' => 'required|unique:verification,fullname,email',
        //     'status' => 'required',
        // ]);

        return response()->json([
            'res' => true,
            'mesage' => 'tạo thành công',
        ]);
     }
     public function update($id, Request $request){
        $input = $request->all();
        $cart =Cart::find($id);
        $cart->update($input);
        return response()->json([
            'res' => true,
            'mesage' => 'Sửa thành công',
        ]);
     }
     public function delete($id, Request $request){
        $input = $request->all();
        $cart =Cart::find($id);
        $cart->delete($input);
        return response()->json([
            'res' => true,
            'mesage' => 'Xóa thành công',
        ]);
     }
}