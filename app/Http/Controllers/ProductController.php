<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Support\Facades\Log;


class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     * Todo: Create error view
     */
    public function index()
    {
        try {
            return view(
                'products.index',
                [
                    'products' => Product::all()
                ]
            );
        } catch (\Illuminate\Database\QueryException $e) {
            Log::error('Database error: ' . $e->getMessage());

            return redirect('/error')->with('error', 'Database Error, Try again later!');
        }

    }

    /**
     * Show the form for creating a new product.
     * 
     */
    public function create()
    {
        try {
            return view('products.create');
        } catch (\Throwable $th) {
            Log::error('Unexpected error: ' . $th->getMessage());
        }
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(StoreProductRequest $request)
    {
        try {
            $newImageName = time() . '_' . $request->name . '.' . $request->file('image')->extension();

            $request->file('image')->move(public_path('images'), $newImageName);

            $product = Product::create([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'quantity' => $request->input('quantity'),
                'description' => $request->input('description'),
                'image' => $newImageName
            ]);

            return redirect('/products')->with('success', 'Product uploded successfully');

        } catch (\Throwable $th) {
            Log::error('upload Error: ' . $th->getMessage());
            return redirect()->back()->with('error', 'Failed to upload product. Please try again.');
        }


    }

    /**
     * Display the specified product.
     *
     * 
     * 
     * @return mixed
     */
    public function show(string $id)
    {
        try {
            $product = Product::findOrFail($id);
            return view('
            products.show',
                [
                    'product' => $product
                ]
            );
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            Log::error($e->getMessage(), [$e->getCode()]);
            return abort(404);
        }



    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(Product $product)
    {

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

    /**
     * 
     */
    public function search(Request $request)
    {
        try {
            $name = $request->input('searchQuery');
            $products = Product::where('name', 'like', '%' . $name . '%')->get();
            
            if ($products->isEmpty()) {
                return view('products.index',['products'=>[]])->with('notFound', 'Youre search gives no result!');
            }

            return view('.products.index', ['products' => $products->all()]);

        } catch (\Throwable $th) {
            
            Log::error('Unexpected Error: ' . $th->getMessage(), [$th->getTrace()]);
            redirect()->back()->with('error', 'Unexpected error try again later');
        }


    }


}