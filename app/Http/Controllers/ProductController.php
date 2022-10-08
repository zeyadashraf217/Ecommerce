<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        //
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
    public function addData()
    {
        Category::create(['name' => 'women']);
        Category::create(['name' => 'men']);
        Category::create(['name' => 'kids']);
        $categories = Category::get();
        foreach ($categories as $category)
        {
            for($i=1;$i<9;$i++)
            {
            $product = Product::create(['name' => 'item-'.$i , 'price' => '1000' , 'quantity' => '50' , 'category_id' => $category->id ]);
            $product
            ->addMedia(storage_path('images/'.$category->name.'/'.$i.'.jpg'))
            ->preservingOriginal()
            ->toMediaCollection();
         }

        }
      return back();
    }
    public function women_products()
    {
        $category_id= Category::where('name', 'women')->first()->id;
        $products = Product::where('category_id',$category_id)->get()->take(8);
        return view('/',compact('products'));
    }
    public function men_products()
    {
        $category_id= Category::where('name', 'men')->first()->id;
        $products = Product::where('category_id',$category_id)->get()->take(8);
        return view('/',compact('products'));
    }
    public function kids_products()
    {
        $category_id= Category::where('name', 'kids')->first()->id;
        $products = Product::where('category_id',$category_id)->get()->take(8);
        return view('/',compact('products'));
    }
}


