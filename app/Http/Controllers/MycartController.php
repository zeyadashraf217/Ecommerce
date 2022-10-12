<?php

namespace App\Http\Controllers;

use App\Models\Mycart;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MycartController extends Controller
{
    public function add_item(Request $request)
    {
        Mycart::create(['user_id'=> $request->user_id ,'product_id'=> $request->product_id , 'quantity' => $request->quantity]);
        return redirect()->route('women')->with('message', 'item has been added successfully!');

    }
    public function mycart()
    {
        $items= Mycart::get();
        return view('mycart',compact('items'));
    }
    public function destroy($id)
    {
        Mycart::find($id)->delete();
        return back();
    }
    public function checkout()
    {
        $total=0;
        $items= Mycart::get();
        $order=Order::create(['user_id' => Auth::user()->id,'total'=>0]);
        foreach ($items as $item)
        {
            if ($item->user_id == Auth::user()->id){
                $product_id=$item->product->id;
                $product =Product::find($product_id);
                $product->quantity = $product->quantity - $item->quantity;
                $product->save();
                $total+=$product->price * $item->quantity;
                OrderProduct::create(['order_id' => $order->id,'product_id'=>$product_id,'quantity'=>$item->quantity,'price'=>$product->price * $item->quantity]);
                Mycart::find($item->id)->delete();
            }
        }
        $order->total=$total;
        $order->save();
        return redirect()->route('women')->with('message', 'Order has been made successfully!');

    }
}
