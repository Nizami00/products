<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::latest()->take(10)->get();

        return view('index', [
            'products' => $products
        ]);
    }

    public function show(Product $product)
    {
        return view('show', [
            'product' => $product
        ]);
    }


    public function create()
    {
        return view('create');
    }

    public function store()
    {
        Product::create($this->validateProduct());

        return redirect('/');

    }

    public function edit(Product $product)
    {

        return view('edit', compact('product'));
    }

    public function update(Product $product)
    {

        Product::where('id', $product->id)->update($this->validateProduct());

        return redirect(route('products.show', $product));
    }


    public function delete(Product $product)
    {
        DB::table('products')->where('id', $product->id)->delete();

        return redirect('/');

    }

    private function validateProduct()
    {
        request()->merge([
            'price' => request()->get('price') * 100,
        ]);

        return request()->validate([
            'name' => 'required',
            'size' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);
    }

}
