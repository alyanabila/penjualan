<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class postController extends Controller
{
    public function create(){
    	return view('newproduct');
    }

	public function store(request $request);
	
	    $validatedData = $request->validate([
	        'kode' => 'required|unique:posts',
	        'name' => 'required',
	        'price' => 'required',
	        'description' => 'required|max:255',
	        'category' => 'required',
	        'gambar' => 'required',
	    ]);
	
	    // The blog post is valid...
}