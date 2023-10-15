<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules\Exists;
use PhpParser\Node\Stmt\TryCatch;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index()
    {
        try{ return view(
            'products.index',
            [
                'products' => Product::all()
            ]);
        } catch(\Illuminate\Database\QueryException $e) {
            Log::error('Database error: '. $e->getMessage());
            
            return redirect('/error')->with('error' => 'Database Error, Try again later!');
        }
       
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

            return redirect('/home')->with('success', 'Product uploded successfully');

        } catch (\Throwable $th) {
            Log::error('upload Error: '. $th->getMessage());
            return redirect()->back()->with('error', 'Failed to upload product. Please try again.');
        }


    }

    /**
     * Display the specified product.
     *
     * @param int $id 
     * 
     * @return mixed
     */
    public function show($id)
    {
        try {
            $product = Product::findOrFail($id);
            return view('
            products.show',
                [
                    'product' => $product
                ]
            );
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e){
            Log::error($e->getMessage(),[$e->getCode()]);
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
}