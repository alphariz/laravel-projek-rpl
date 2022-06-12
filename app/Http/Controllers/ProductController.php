<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('admin',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(),[
            'name' => ['required'],
            'stock' => ['required','numeric'],
            'price' => ['required','numeric'],
            'image' => ['required','mimes:png,jpg,jpeg'],
            // 'description' => ['required']
        ]);

        $file_name = $request->image->getClientOriginalName();
        $image = $request->image->storeAs('img',$file_name);

        Product::create([
            "name" => $request->name,
            "stock" => $request->stock,
            "price" => $request->price,
            "image_path" => $image,
            "description" => $request->description,
        ]);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product =  Product::findOrFail($id);
        return view('post.edit_product',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        Validator::make($request->all(),[
            'name' => ['required'],
            'stock' => ['required','numeric'],
            'price' => ['required','numeric'],
            // 'description' => ['required']
        ]);

        $product->update([
            "name" => $request->name,
            "stock" => $request->stock,
            "price" => $request->price,
            "description" => $request->description,
        ]);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
