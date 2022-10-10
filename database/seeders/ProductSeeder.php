<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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
    }
}
