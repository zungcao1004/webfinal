<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Slider;

class FrontEndController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('status', '0')->get();
        return view('frontend.index', compact('sliders'));
    }

    public function categories()
    {
        $categories = Category::where('status', '0')->get();
        return view('frontend.collections.category.index', compact('categories'));
    }

    public function products($category_slug)
    {
        $category = Category::where('slug', $category_slug)->first();
<<<<<<< HEAD
        if ($category) {
            return view('frontend.collections.products.index', compact('category'));
        } else {
            return redirect()->back();
        }
    }

    public function productView(string $category_slug, string $product_slug)
    {
        $category = Category::where('slug', $category_slug)->first();
        if ($category) {
            $product = $category->products()->where('slug', $product_slug)->where('status', '0')->first();
            if ($product) {
                return view('frontend.collections.products.view', compact('product', 'category'));
            }
=======

        if ($category) {
            $products = $category->products()->get();

            return view('frontend.collections.products.index', compact('products', 'category'));
>>>>>>> be5a8301880f2deef97ce645c6da40304d7f49bf
        } else {
            return redirect()->back();
        }
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> be5a8301880f2deef97ce645c6da40304d7f49bf
