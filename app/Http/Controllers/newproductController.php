<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newproductController extends Controller
{
    public function index(){
    	$newproduct = "makanan";
    	return view('newproduct')->with('newproduct', $newproduct);
    }
}
