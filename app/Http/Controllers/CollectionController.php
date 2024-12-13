<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index() 
    {
        $categories = Category::with('products')->get();
        return view('collection', compact('categories'));
    }
    public function store(Request $request) 
    {
        $request->validate([
            'product_id' => 'required',
            'user_id' => 'required',
        ]);

        if(Cart::where('product_id', $request->product_id)->where('user_id', $request->user_id)->first())
        {
            return redirect()->route('collection')->with('info', 'Product already on cart');
        }

        Cart::create([
            'product_id' => $request->product_id,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('collection')->with('info', 'Product added');
    }
}
