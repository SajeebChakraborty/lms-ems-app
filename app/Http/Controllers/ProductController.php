<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList()
    {
        $products=Product::all();
        return view('products.index', compact('products'));
    }
    public function productCreate()
    {
        return view('products.create');
    }
    public function productStore(Request $request)
    {
        Product::create([
            'title'=>$request->title,
            'quantity'=> $request->quantity,
            'price' => $request->price
        ]);

       return redirect()->route('product.index');
    }
}
