<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function removeItem(Request $request, $id)
{
    Cart::remove($id);
    return redirect()->back()->with('success_message', 'El producto ha sido eliminado del carrito.');
}

}
