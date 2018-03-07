<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\Product;

class newproductController extends Controller
{
	public function newProducts()
	{
		return view('newproduct');
	}
          
    public function store(Request $request){

         $validator = Validator::make(request()->all(),[
            'kode' => 'required',
            'name' => 'required',
            'price' => 'required',
            'description' => 'required|max:255',
            'category' => 'required',
            'gambar' => 'required',
        ]);

        if ($validator->fails())
        {
        return redirect('new_product')
            ->withErrors($validator)
            ->withInput();
        }

    	$newproduct = new product;
    	$newproduct->no_products = $request->kode;
    	$newproduct->name = $request->name;
    	$newproduct->price = $request->price;
    	$newproduct->description = $request->description;
    	$newproduct->category = $request->category;
    	$newproduct->image = $request->gambar;
    	$newproduct->save();
    	return redirect ('list_products');
    }

    public function show(Request $request, $id)
    {
    	$findproduct = product::find($id);
    	return view('showproduct')->with('product', $findproduct);
    }
    public function edit(Request $request, $id)
    {
        $editproduct = product::find($id);
        $editproduct->no_products = $request->kode;
        $editproduct->name = $request->name;
        $editproduct->price = $request->price;
        $editproduct->description = $request->description;
        $editproduct->category = $request->category;
        $editproduct->image = $request->gambar;
        $editproduct->save();
        return redirect ('list_products');
    }
    
    public function destroy(Request $request, $id)
    {
        $deleteproduct = product::destroy($id);
        $deleteproduct->no_products = $request->kode;
        $deleteproduct->name = $request->name;
        $deleteproduct->price = $request->price;
        $deleteproduct->description = $request->description;
        $deleteproduct->category = $request->category;
        $deleteproduct->image = $request->gambar;
        $deleteproduct->save();
        return redirect ('list_products');
    }
}
