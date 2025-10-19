<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController
{
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }
}
