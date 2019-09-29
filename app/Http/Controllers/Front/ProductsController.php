<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller {
    
    function index() {
    		
    	if(isset($_REQUEST['sortBy']) && $_REQUEST['sortBy'] != '') {
    		
    		if($_REQUEST['sortBy'] == 'name'){
    			$sort_by = 'product_name';
    			$value   = 'asc';	
    		}elseif($_REQUEST['sortBy'] == 'high'){
    			$sort_by = 'price';
    			$value   = 'desc';
    		}elseif($_REQUEST['sortBy'] == 'low'){
    			$sort_by = 'price';
    			$value   = 'asc';
    		}else{
    			$sort_by = 'id';
    			$value   = 'asc';
    		}
    	}else{
    		$sort_by = 'id';
			$value   = 'asc';			
    	}

	    $products = Product::where('status',1)
	    			->orderBy($sort_by,$value)
	    			->paginate(8);	

    	return view('front.products.index',compact('products'));
    }

    function show(Product $product) {
    	return view('front.products.show', compact('product'));
    }

}
