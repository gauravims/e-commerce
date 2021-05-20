<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;



class ProductController extends Controller
{
    function index(){
        $data = Product::all();
        return view('product',['products'=>$data]);
    }

    function detail($id){
        $data= Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function search(Request $request){
     $data = Product::where('name','like','%'.$request->input('query').'%')->get();
        return view('search',['products'=>$data]);

    }
    function addToCart(Request $request){
        
        if($request->session()->has('user')){
            $cart = new Cart;
            $cart->user_id=$request->session()->get('user')['id'];
            $cart->product_id=$request->product_id;
            $cart->save();
            return redirect('/');
            
        }else{
            return redirect('login');
        }

 
    }
    static function cartItem(){
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
 
    function cartlist(){
        $userId=Session::get('user')['id'];
        $products =DB::table('carts')
        ->join('products', 'carts.product_id', '=', 'products.id')
        ->where('carts.user_id',$userId)
        ->select('products.*','carts.id as carts_id')
        ->get();

        return view('cartlist',['products'=>$products]);
    }

    function removeCart($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function orderNow(){
        $userId=Session::get('user')['id'];
        $total = $products =DB::table('carts')
        ->join('products', 'carts.product_id', '=', 'products.id')
        ->where('carts.user_id',$userId)
        ->sum('products.price');

        return view('ordernow',['total'=>$total]);
    }

    function orderPlace(Request $request){
        $userId=Session::get('user')['id'];
       $allCart= Cart::where('user_id',$userId)->get();
       foreach($allCart as $cart){
        $order = new Order;
        $order->product_id=$cart['product_id'];
        $order->user_id=$cart['user_id'];
        $order->status="pending";
        $order->payment_method=$request->payment;
        $order->payment_status="pending";
        $order->address=$request->address;
        $order->save();
        Cart::where('user_id',$userId)->delete();
        
       }
       return redirect('/');
    }

    function myOrders(){
        $userId=Session::get('user')['id'];
        $orders= $products =DB::table('orders')
        ->join('products', 'orders.product_id', '=', 'products.id')
        ->where('orders.user_id',$userId)
        ->get();

        return view('myorders',['orders'=>$orders]);
    }
    
}
