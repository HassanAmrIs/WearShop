<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;

class AdminController extends Controller
{
    public function product(){
        return view('admin.product');
    }
    public function uploadproduct(Request $request){
        $data = new product;
        $image = $request->file;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('productimage', $imagename);

        $data->image= $imagename;

        $data->title = $request->title;
        $data->category = $request->category;
        $data->price = $request->price;
        $data->description = $request->des;
        $data->quantity = $request->quantity;

        $data->save();

        return redirect()->back()->with('message', 'Product Added Successfully');
    }
 
    public function showproduct()
    {
        $data= product::all();

        return view('admin.showproduct', compact('data'));
    }
    public function deleteproduct($id)
    {
        $data= product::find($id);
        $data->delete();

        return redirect()->back()->with('message', 'Product Deleted');
    }
    public function updateview($id)
    {
        $data= product::find($id);
        return view('admin.updateview', compact('data'));
    }
    public function updateproduct(Request $request ,$id)
    {
        $data= product::find($id);
        //$data = new product;
        $image = $request->file;
        // if there is image need to change then execute that code
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->file->move('productimage', $imagename);

            $data->image= $imagename;
        }

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->des;
        $data->quantity = $request->quantity;

        $data->save();

        return redirect()->back()->with('message', 'Product Updated Successfully');
    }
    public function showorder()
    {
        $order=order::all();


        return view('admin.showorder',compact('order'));
    }
    public function deleteorder($id)
    {
        $data= order::find($id);
        $data->delete();

        return redirect()->back()->with('message', 'Order Deleted');
    }
    public function updatestatus($id)
    {
        $order=order:: find($id);
        $order->status='delivered';
        $order->save();

        return redirect()->back();
    }
    public function viewuser(){
        $data= user::all();

        return view('admin.viewuser', compact('data'));
    }
    public function deleteuserview($id)
    {
        $data= user::find($id);
        $data->delete();

        return redirect()->back()->with('message', 'Product Deleted');
    }
}

