<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showController extends Controller
{
	public function showProducts(){
		return view('showproduct');
	}
}


public function store(Request $request){
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
    public function show(request $request, $id)
    {
    	$findproduct = product::find($id);
    	return view('showproduct')->with('product', $findproduct);
    }
    public function update(request $request, $id){
                if ($request->ajax()){
        $newproduct = product::find($request->id);
        $newproduct->no_products = $request->kode;
        $newproduct->name = $request->name;
        $newproduct->price = $request->price;
        $newproduct->description = $request->description;
        $newproduct->category = $request->category;
        $newproduct->image = $request->gambar;

        $newproduct->update();
        return response($newproduct);
        }

    }
    
    public function delete(Request $request){
        if ($request->ajax()){
            Member::destroy($request->id);
        }
    }