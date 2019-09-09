<?php
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller {
    function index(){
	    $products = Product::latest()->paginate(8);	    
    	return view('front.products.index',compact('products'))
        ->with('i', (request()->input('page', 1) - 1) * 8);
        // return view('front.products.index');
    }
    function show(Product $product){    	
    	return view('front.products.show', compact('product'));
    }
   
}
