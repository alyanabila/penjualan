<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function listproduct(){
    	$products = product::all(); 
    	return view('product')->with('data',$products);
    }
}
