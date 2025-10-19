<div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <img src="{{ $product->image }}" alt="" class="w-full h-64 object-cover">
        </div>
        <div>
            <h2 class="text-2xl font-bold">{{ $product->name }}</h2>
            <p class="mt-2">{{ $product->description }}</p>
            <p class="mt-4 font-semibold">{{ number_format($product->price, 2) }} Kz</p>
            <div class="mt-4">
                <input type="number" min="1" wire:model="qty" class="border p-2 w-24">
                <button wire:click="addToCart" class="ml-2 px-4 py-2 bg-blue-600 text-white rounded">Adicionar ao carrinho</button>
            </div>
        </div>
    </div>
</div>
