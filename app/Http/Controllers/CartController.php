<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function list()
    {
        // dd(\Cart::getContent());

        return view('extern.cart', [
            'items' => \Cart::getContent()
        ]);
    }

    public function add(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => abs($request->qnt),
            'attributes' => array(
                'image' => $request->image
            ),
        ]);

        return redirect()->route('cart.list')->with('success', "Produto [{$request->name}] adicionado ao carrinho com sucesso");
    }

    public function remove(Request $request)
    {
        $item = \Cart::get($request->id);

        \Cart::remove($request->id);

        return redirect()->route('cart.list')->with('warning', "Produto [{$item->name}] removido do carrinho com sucesso");
    }

    public function update(Request $request)
    {
        \Cart::update($request->id, [
            'quantity' => [
                'relative' => false,
                'value' => abs($request->qnt)
            ]
        ]);

        $item = \Cart::get($request->id);

        return redirect()->route('cart.list')->with('success', "Produto [{$item->name}] actualizado no carrinho com sucesso");
    }

    public function clear()
    {
        \Cart::clear();
        return redirect()->route('cart.list')->with('info', "Acção realizada com sucesso, seu carrinho está vazio");
    }
}
