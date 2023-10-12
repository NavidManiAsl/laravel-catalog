<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\StoreProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     * @return View
     */
    public function index()
    {
        return view('products.index');
    }

    /**
     * Show the form for creating a new product.
     * @return View
     */
    public function create()
    {
       return view('products.create');
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(StoreProductRequest $request)
    {
      
    }

    /**
     * Display the specified product.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
