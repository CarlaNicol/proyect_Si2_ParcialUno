<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function index(){

        $orders = Order::query()->where('status', '<>', 1);

        if (request('status')) {
            $orders->where('status', request('status'));
        }

        $orders = $orders->get();


        $pendiente = Order::where('status', 1)->count();
        $recibido = Order::where('status', 2)->count();
        $enviado = Order::where('status', 3)->count();
        $entregado = Order::where('status', 4)->count();
        $anulado = Order::where('status', 5)->count();

        return view('admin.orders.index', compact('orders', 'pendiente', 'recibido', 'enviado', 'entregado', 'anulado'));
    }  

    public function show(Order $order){
        return view('admin.orders.show', compact('order'));
    }

    public function destroy(Order $order)
{
    // Verifica que el usuario sea el autor del pedido
    $this->authorize('author', $order);

    // Recupera los items del pedido
    $items = json_decode($order->content);

    // Itera sobre los items para actualizar la cantidad de cada producto
    foreach ($items as $item) {
        $product = Product::find($item->product_id);
        $product->increment('quantity', $item->quantity);
    }

    // Elimina el pedido de la base de datos
    $order->delete();

    // Redirecciona a la página de lista de pedidos
    return redirect()->route('orders.index');
}

}
