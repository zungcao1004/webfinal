<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Category;
use App\Models\Brand;
use App\Http\Requests\ProductFormRequest;

class ProducController extends Controller
{
    public function index()
    {
        return view('admin.products.index');
    }

    public function create()
    {

        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.products.create', compact('categories', 'brands'));
    }

    public function store(ProductFormRequest $request)
    {
        $validatedData = $request->validated();

        $category = Category::findOrFail($validatedData['category_id']);

        $product = $category->products()->create([
            'category_id' => $validatedData['category_id'],
            'name' => $validatedData['name'],
            'slug' => Str::slug($validatedData['slug']),
            'brand' => $validatedData['brand'],
            'small_description' => $validatedData['small_description'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'old_price' => $validatedData['old_price'],
            'quantity' => $validatedData['quantity'],
            'quantity' => $validatedData['quantity'],
            'trending' => $request->trending == true ? '1' : '0',
            'status' => $request->status == true ? '1' : '0',
            'meta_title' => $validatedData['meta_title'],
            'meta_keyword' => $validatedData['meta_keyword'],
            'meta_description' => $validatedData['meta_description'],
        ]);

        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/products';

            foreach ($request->files('image') as $imageFile) {
                $extension = $imageFile->getExtension();
                $filename = time() . '.' . $extension();
                $imageFile->move($uploadPath, $filename);
                $finalImagePathName = $uploadPath . '-' . $filename;
                $product->productImages()->create([
                    'product_id' => $product->id,
                    'image' => $finalImagePathName,
                ]);
            }

            return redirect('admin/products')->with('message', 'Product Added Successfully');
        }
    }
}