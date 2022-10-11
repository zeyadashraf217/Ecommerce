<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// $category_id= Category::where('name', 'women')->first()->id;
// $product_picker = Product::where('category_id',$category_id)->get()->take(8);
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::get();
        return view('product.product',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::get();
        return view('product.create_product',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create(['name' => $request->name , 'price' => $request->price , 'quantity' => $request->quantity , 'category_id' => $request->category_id]);
        $product
        ->addMediaFromRequest('image')
        ->toMediaCollection();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('product.product_show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product= Product::find($id);
        $categories=Category::get();
        return view('product.update_product',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product= Product::find($id);
        $product->update(['name' => $request->name , 'price' => $request->price , 'quantity' => $request->quantity , 'category_id' => $request->category_id]);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return back();
    }
    public function all_products()
    {
        $product_picker = Product::inRandomOrder()->get()->take(8);
        $random_products= Product::inRandomOrder()->get()->take(8);
        return view('/homepage',compact('product_picker','random_products'));
    }
    public function women_products()
    {
        $category_id= Category::where('name', 'women')->first()->id;
        $product_picker = Product::where('category_id',$category_id)->get()->take(8);
        $random_products = Product::inRandomOrder()->get()->take(8);
        return view('/homepage',compact('product_picker','random_products'));
    }
    public function men_products()
    {
        $category_id= Category::where('name', 'men')->first()->id;
        $product_picker = Product::where('category_id',$category_id)->get()->take(8);
        $random_products = Product::inRandomOrder()->get()->take(8);
        return view('/homepage',compact('product_picker','random_products'));
    }
    public function kids_products()
    {
        $category_id= Category::where('name', 'kids')->first()->id;
        $product_picker = Product::where('category_id',$category_id)->get()->take(8);
        $random_products = Product::inRandomOrder()->get()->take(8);
        return view('/homepage',compact('product_picker','random_products'));
    }
    public function search(Request $request)
    {
        $category_id= Category::where('name', 'kids')->first()->id;
        $product_picker = Product::where('category_id',$category_id)->get()->take(8);
        $random_products = Product::inRandomOrder()->get()->take(8);
        if($request->ajax()) {
            $output = '';
            $products = Product::where('name', 'LIKE', '%'.$request->searchs.'%')->get()->take(3);
                            if($products) {

                                foreach($products as $product) {
                    $output .=
                     '
                     <form action="'. route("product.show",$product->id) .'">
                    <button  class="list-group-item list-group-item-action btn btn-link" >
                    <img src="'. $product->getFirstMediaUrl() .'" alt="" height="150px" width="120px">
                    <span class="ps-5 h4">   '.$product->name.' </span>
                    <span class="ps-5 h4">  '.$product->price .' </span>
                    </button>
                    </form>
                    <div class="pt-1"></div>
                  ';
        if(!$request->searchs){
            $output = '';
        }

                }

                return response()->json($output);

            }

        }

        return view('/homepage',compact('product_picker','random_products'));

    }

}


