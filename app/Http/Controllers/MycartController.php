<?php

namespace App\Http\Controllers;

use App\Models\Mycart;
use Illuminate\Http\Request;

class MycartController extends Controller
{
    public function add_item(Request $request)
    {
        $alert='true';
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
}
