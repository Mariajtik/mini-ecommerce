<div>
    <div class="mb-4">
        <input type="text" wire:model.debounce.500ms="search" placeholder="Pesquisar..." class="border p-2 rounded w-full" />
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach($products as $product)
        <div class="bg-white p-4 rounded shadow">
            <img src="{{ $product->image }}" alt="" class="w-full h-40 object-cover mb-2">
            <h3 class="font-bold">{{ $product->name }}</h3>
            <p class="text-sm">{{ Str::limit($product->description, 80) }}</p>
            <div class="mt-2 flex justify-between items-center">
                <span class="font-semibold">{{ number_format($product->price, 2) }} Kz</span>
                <a href="{{ route('product.show', $product) }}" class="text-blue-600">Ver</a>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-4">
        {{ $products->links() }}
    </div>
</div>
