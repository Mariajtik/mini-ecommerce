<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductDetail extends Component
{
    public Product $product;
    public $qty = 1;

    public function mount(Product $product)
    {
        $this->product = $product;
    }

    public function addToCart()
    {
        $cart = session()->get('cart', []);
        $id = $this->product->id;

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $this->qty;
        } else {
            $cart[$id] = [
                'name' => $this->product->name,
                'quantity' => $this->qty,
                'price' => $this->product->price,
                'image' => $this->product->image,
            ];
        }

        session()->put('cart', $cart);
        $this->emit('cartUpdated');
        session()->flash('message', 'Produto adicionado ao carrinho!');
    }

    public function render()
    {
        return view('livewire.product-detail');
    }
}
