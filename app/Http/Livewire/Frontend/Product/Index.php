<?php

namespace App\Http\Livewire\Frontend\Product;

<<<<<<< HEAD
use App\Models\Product;
=======
>>>>>>> be5a8301880f2deef97ce645c6da40304d7f49bf
use Livewire\Component;

class Index extends Component
{

<<<<<<< HEAD
    public $products, $category, $brandInputs = [];

    protected $queryString = [
        'brandInputs' => ['except' => '', 'as' => 'brand'],
    ];

    public function mount($category)
    {
        $this->category = $category;
    }


    public function render()
    {
        $this->products = Product::where('category_id', $this->category->id)
            ->when($this->brandInputs, function ($q) {
                $q->whereIn('brand', $this->brandInputs);
            })
            ->where('status', '0')
            ->get();
        return view('livewire.frontend.product.index', [
            'products' => $this->products,
            'category' => $this->category,
        ]);
    }
}
=======
    public function mount($products, $category)
    {
        $this->products = $products;
        $this->category = $category;
    }

    public function render()
    {
        return view('livewire.frontend.product.index', [
            'products' => $this->products,
            'category' => $this->category
        ]);
    }
}
>>>>>>> be5a8301880f2deef97ce645c6da40304d7f49bf
