<?php
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\Product;
class HomeController extends Controller {

    function index(){
        return view('front.home.index');
    }

    function search(){
    	if(isset($_REQUEST['query']) && $_REQUEST['query'] != ''){
    		$products = Product::where('status',1)
			    	->where('product_name','LIKE', '%'.$_REQUEST['query'].'%')
			    	->orWhere('short_description','LIKE', '%'.$_REQUEST['query'].'%')
			    	->orWhere('description','LIKE', '%'.$_REQUEST['query'].'%')
			    	->paginate(12);
    	}else{
    		$products = Product::where('status',1)->paginate(12);
    	}
    	// dd($products);
    	return view('front.home.search',compact('products'));
    }
   
}
