<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class profileController extends Controller
{
    public function index(){
    	return view('profile');
    }
}
