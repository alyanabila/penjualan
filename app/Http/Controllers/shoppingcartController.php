<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shoppingcartController extends Controller
{
    public function cart(){
    	return view('shoppingcart');
    }
}
