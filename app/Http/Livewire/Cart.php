<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public $cart = [];

    protected $listeners = ['cartUpdated' => 'loadCart'];

    public function mount()
    {
        $this->loadCart();
    }

    public function loadCart()
    {
        $this->cart = session()->get('cart', []);
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
            $this->loadCart();
            $this->emit('cartUpdated');
        }
    }

    public function updateQuantity($id, $qty)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = max(1, (int) $qty);
            session()->put('cart', $cart);
            $this->loadCart();
            $this->emit('cartUpdated');
        }
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
