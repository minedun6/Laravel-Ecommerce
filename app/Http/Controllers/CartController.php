<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;
use Cart;

class CartController extends Controller
{
    public function postAddToCart(Request $request)
    {
        $product = Product::findorFail($request->input('productId'));
        $quantity = $request->input('quantity');

        Cart::insert([
            'id' => $product->id,
            'name' => $product->title,
            'price' => $product->price,
            'quantity' => $quantity,
            'image' => $product->img,
            'description' => $product->description
        ]);
        flash()->success('Your Product has been added to the cart');
        return redirect()->back();
    }

    public function cart()
    {
        return view('pages.cart');
    }

    public function patchUpdateCart(Request $request)
    {
        $item = Cart::item($request->input('identifier'));
        $item->quantity = $request->input('qty');
        flash()->success('This item was successfully updated.');
    }

    public function deleteFromCart(Request $request)
    {
        $item = Cart::item($request->input('productIdent'));
        $item->remove();
        flash()->error('This item was successfully removed from your cart.');
        return redirect()->back();
    }

}
