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
    		$products = Product::active()
                    ->searchBy($_REQUEST['query'])			    	
			    	->paginate(12);
    	}else{
    		$products = Product::active()->paginate(12);
    	}
    	
    	return view('front.home.search',compact('products'));
    }
   
}
