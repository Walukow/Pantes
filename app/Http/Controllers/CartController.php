<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $products = Product::all();

        foreach ($products as $product) {
            if ($product->stock == 0) {
                Cart::where('product_id', $product->id)->delete();
            }
        }
        $carts = Cart::where('user_id', Auth::user()->id)->with('product')->get();
        return view('cart', compact('carts'));
    }
    
    public function actCart(Request $request)
    {
        // dd($request);

        if($request->action === 'buy')
        {
            $request->validate([
                'id' => 'required|numeric',
                'product_id' => 'required|numeric',
                'total' => 'required|numeric',
            ]);
            
    
            $product = Product::where('id', $request->product_id)->firstOrFail();
    
            $newStock = $product->stock - $request->total;
    
            $product->update([
                'stock' => $newStock
            ]);
    
            Cart::where('id', $request->id)->delete();
    
            Order::create([
                'product_id' => $request->product_id,
                'user_id' => Auth::user()->id,
                'total' => $request->total,
            ]);
    
            return redirect()->route('transaction')->with('info', 'Thanks for purchasing.');
        }
        else if($request->action === 'delete')
        {
            $request->validate([
                'id' => 'required|numeric'
            ]);
    
            $cart = Cart::find($request->id);
    
            if ($cart) {
                $cart->delete();
                return redirect()->route('cart')->with('info', 'Cart item deleted.');
            } else {
                return redirect()->route('cart')->with('info', 'Cart item not found.');
            }
        }
    }
    public function storeAll()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        dd($carts);
        foreach ($carts as $cart)
        {
        }
    }
}
