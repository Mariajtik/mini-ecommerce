<div class="bg-white p-4 rounded shadow">
    <h3 class="font-bold mb-2">Seu Carrinho</h3>
    @if(empty($cart))
        <p>O carrinho está vazio.</p>
    @else
        <table class="w-full">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Subtotal</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $id => $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>
                        <input type="number" value="{{ $item['quantity'] }}" wire:change="updateQuantity({{ $id }}, $event.target.value)" min="1" class="w-20">
                    </td>
                    <td>{{ number_format($item['price'] * $item['quantity'], 2) }} Kz</td>
                    <td><button wire:click="remove({{ $id }})" class="text-red-600">Remover</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4 text-right">
            <a href="/checkout" class="px-4 py-2 bg-green-600 text-white rounded">Finalizar Compra</a>
        </div>
    @endif
</div>
