<?php
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;

class ProductsController extends Controller {
    function index(){
        return view('front.products.index');
    }
    function show(){
    	return view('front.products.show');
    }
   
}
