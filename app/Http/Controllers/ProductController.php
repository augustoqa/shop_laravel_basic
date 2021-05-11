<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index')->with([
            'products' => $products,
        ]);
    }

    public function create()
    {
        return 'This is the form to create a product';
    }

    public function store()
    {
      
    }

    public function show($product)
    {
        $product = Product::findOrFail($product);
        
        return view('products.show')->with([
            'product' => $product
        ]);
    }

    public function edit($product)
    {
        return "Showing the form to edit the product with id ${product}";
    }

    public function update()
    {
        
    }

    public function destroy()
    {
        
    }
}
