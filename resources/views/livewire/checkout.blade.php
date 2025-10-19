<div class="bg-white p-6 rounded shadow">
    <h3 class="font-bold mb-4">Checkout</h3>

    @if(session('error'))
        <div class="p-2 bg-red-100 text-red-800">{{ session('error') }}</div>
    @endif

    @if(session('message'))
        <div class="p-2 bg-green-100 text-green-800">{{ session('message') }}</div>
    @endif

    <div>
        <button wire:click="placeOrder" class="px-4 py-2 bg-blue-600 text-white rounded">Confirmar Encomenda</button>
    </div>
</div>
