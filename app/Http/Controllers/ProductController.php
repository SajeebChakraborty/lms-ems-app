<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList(Request $request)
    {
        if($request->search==null)
        {
            $products=Product::paginate(10);
        }
        else
        {
            $products=Product::where('title','like',"%{$request->search}%")->paginate(10);
        }
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
    public function productEdit($productId)
    {
        $product=Product::where('id',$productId)->first();
        return view ('products.edit',compact('product'));
    }
    public function productUpdate(Request $request,$productId)
    {
        $productUpdate=Product::where('id',$productId)->update([
            'title' => $request->title,
            'quantity' => $request->quantity,
            'price' => $request->price
        ]);

        return redirect()->route('product.index');
    }
    public function productDelete($productId)
    {
        $productDelete=Product::where('id',$productId)->delete();

        return redirect()->route('product.index');
    }
}
