<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller {
    
    function index() {

        $sort_value = isset($_REQUEST['sortBy']) ? $_REQUEST['sortBy'] : '';        

	    $products = Product::active()	    			
                    ->sortBy($sort_value)
	    			->paginate(8);	

    	return view('front.products.index',compact('products'));
    }

    function show(Product $product) {
    	return view('front.products.show', compact('product'));
    }

}
