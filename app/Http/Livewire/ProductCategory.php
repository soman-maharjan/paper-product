<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ProductCategory extends Component
{
    public $category = '';

    public function render()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('livewire.product-category',[
            'categories' => $categories,
            'products' => $products,
            'categoryProducts' => Product::where('category_id', $this->category)->get(),
        ]);
    }
}
