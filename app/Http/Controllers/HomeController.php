<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

class HomeController extends Controller
{
    public function redirect(){
        $usertype= Auth::user()->usertype;
        if($usertype == '1'){
            return view('admin.home');
        }
        else{
            // all data in product table will be stored in variable data 
            $data = product::paginate(8);
            $user = auth()->user();
            $count = cart::where('phone',$user->phone)->count();
            // send data while viewing user.home
            return view('user.home', compact('data', 'count'));
        }
    }
    public function profile(){
        return view('profile.show');
    }
    public function index(){
        
        if(Auth::id())
        {
	        return redirect('redirect');
        }
        else{
            // all data in product table will be stored in variable data 
            $data = product::paginate(8);
            // send data while viewing user.home
            return view('user.home', compact('data'));
        }
    }
    public function women(){

        // all women data in product table will be stored in variable data 
        $data = product::where('category', 'Like','%'.'women'.'%')->get();
        // send data while viewing user.home
        return view('user.women', compact('data'));
    }
    public function men(){
        // all men data in product table will be stored in variable data 
        $data = product::where('category', 'Like','men'.'%')->get();
        // send data while viewing user.home
        return view('user.men', compact('data'));
    }
    public function footwear(){
        // all footwear data in product table will be stored in variable data 
        $data = product::where('category', 'Like','%'.'footwear'.'%')->get();
        // send data while viewing user.home
        return view('user.footwear', compact('data'));
    }
    public function accessories(){
        // all accessories data in product table will be stored in variable data 
        $data = product::where('category', 'Like','%'.'accessories'.'%')->get();
        // send data while viewing user.home
        return view('user.accessories', compact('data'));
    }
    public function search(Request $request){
      
        $search = $request->search;
        if($search == ''){
            $data = product::paginate(8);
            // send data while viewing user.home
            return view('user.home', compact('data'));
        }
        $data = product::where('title', 'Like','%'.$search.'%')->get();

        return view('user.home', compact('data'));
    }
    public function addcart(Request $request ,$id)
    {
        if(Auth::id())
        {
            $user = auth()->user();
            $product = product::find($id);
            $cart = new cart;
            $cart->name = $user->name;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            
            $cart->product_title = $product->title;

            $cart->price = $product->price;
            $cart->quantity = $request->quantity;
            $cart->save();
           
            return redirect()->back()->with('message', 'Product Added to Cart Successfully');
        }
        else
        {
            return redirect('login');
        }
    }
    public function showcart()
    {
        $user = auth()->user();

        $cart=cart::where('phone', $user->phone)->get();
        $count = cart::where('phone',$user->phone)->count();
            
        return view('user.showcart', compact( 'cart'));
    }
    public function delete($id)
    {
        $data = cart::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }
    public function confirmorder(Request $request)
    {
        $user= auth()->user();
        $name = $user->name;
        $phone = $user->phone;
        $address = $user->address;

        foreach($request->productname as $key=>$productname) 
        {
            $order= new order;
            $order->product_name=$request->productname[$key];
            $order->price=$request->price[$key];
            $order->quantity=$request->quantity[$key];
            $order->name= $name;
            $order->phone= $phone;
            $order->address= $address;
            $order->status='not delivered';

            $order->save();

            
        }

        DB::table('carts')->where('phone', $phone)->delete();

        return redirect()->back()->with('message', 'Product Ordered Successfully');

    }
    
}
