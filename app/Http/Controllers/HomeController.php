<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category_id= Category::where('name', 'women')->first()->id;
        $product_picker = Product::where('category_id',$category_id)->get()->take(8);
        $random_products = Product::inRandomOrder()->get()->take(8);
        return view('/homepage',compact('product_picker','random_products'));
    }
}
