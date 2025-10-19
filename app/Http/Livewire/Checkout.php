<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class Checkout extends Component
{
    public $cart;

    public function mount()
    {
        $this->cart = session()->get('cart', []);
        if (empty($this->cart)) {
            session()->flash('error', 'O carrinho está vazio.');
        }
    }

    public function placeOrder()
    {
        if (!Auth::check()) {
            session()->flash('error', 'Necessita autenticar-se para finalizar a compra.');
            return;
        }

        $total = 0;
        foreach ($this->cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        $order = Order::create([
            'user_id' => Auth::id(),
            'items' => $this->cart,
            'total' => $total,
        ]);

        session()->forget('cart');
        $this->emit('cartUpdated');
        session()->flash('message', 'Encomenda realizada com sucesso!');
    }

    public function render()
    {
        return view('livewire.checkout');
    }
}
