<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    //
    public function index() {

    	$products = [];
    	$products = Product::orderBy('created_at','desc')->paginate(10);
    	return view('products.index',compact('products'));
    }

    public function show($id) {

    	$product = Product::findOrFail($id);

    	return view('products.show')->with('product',$product);
    	
    }

    public function create() {
    	return view('products.create');
    }

    /**
     * @param Requests\CreateProductRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ProductRequest $request) {

        $product = Product::create($request->all());

        if($request->has('is_locked'))
        {
            $product->is_locked = 1;
        } else {
            $product->is_locked = 0;
        }

        if( $request->hasFile('image_name') )
        {
            $imageName = $product->id . '.' . $request->file('image_name')->getClientOriginalExtension();
            $request->file('image_name')->move('images',$imageName);
            $product->image_name = $imageName;

        }

        $product->save();

        return redirect('products');

    }

    public function edit($id) {

        $product = Product::findOrFail($id);

        return view('products.edit',compact('product'));
    }

    public function update( $id, ProductRequest $request) {

        $product = Product::findOrFail($id);

        if($request->has('is_locked'))
        {
            $product->is_locked = 1;
        } else {
            $product->is_locked = 0;
        }

        if( $request->hasFile('image_name') )
        {
            $imageName = $product->id . '.' . $request->file('image_name')->getClientOriginalExtension();
            $request->file('image_name')->move('images',$imageName);
            $product->image_name = $imageName;

        }

        $product->update($request->all());

        return redirect('products');
    }

    public function delete() {

    	return 'Method Ready()';

    }

}
