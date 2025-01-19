<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request, $id) {
        $cart = $request->session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]+=1; 
        } else {
            $cart[$id]=1;
        }
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }
    //Finish this add.

    public function show(Request $request) {
        $cart= $request->session()->get('cart', []);
        $products = Product::findMany(array_keys($cart));
        $total = $this->totalCalc($cart);
        return view('cart.show', compact('cart', 'products', 'total'));
    }
    //Finish this show.

    private function totalCalc($cart) {
        $products = Product::findMany(array_keys($cart));
        $total = 0;
        foreach($products as $item) {
            $total = $item->price * $cart[$item->id];
        }
        return $total;
    }
}
