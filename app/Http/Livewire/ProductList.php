<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;

    public $search = '';
    public $category = null;
    public $minPrice;
    public $maxPrice;

    protected $queryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = Product::query();

        if ($this->search) {
            $query->where('name', 'like', '%'.$this->search.'%');
        }

        $products = $query->paginate(6);

        return view('livewire.product-list', [
            'products' => $products,
        ]);
    }
}
