<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller {
    
    public function index() {
    	$products = Product::orderBy('id','DESC')->get();
      
      return view('admin.products.index', compact('products'));
    }

    public function show() {
      $id = $_REQUEST['id'];
      $product = Product::where('id',$id)->first();

      return view('admin.products.show', compact('product'));
    }

    public function edit() {
      $id = $_REQUEST['id'];
      $product = Product::where('id',$id)->first();

      return view('admin.products.edit', compact('product'));
    }

    public function remove() {
      $id = $_REQUEST['id'];
      $product = Product::where('id',$id)->delete();
      
      return redirect('/admin/products')->with('success', 'Product has been deleted');
    }

    public function update(Request $request){
        $id = $request->get('id');
        $request->validate([
          'product_name'=>'required',
          'status'=>'required',
          'short_description'=> 'required',
          'description' => 'required'
        ]);

      $product_images = [];
      if( $request->hasfile('images') ){
            foreach($request->file('images') as $file) {
                $image_name = date("dmYHms").'_'.$file->getClientOriginalName();
                $file->move(public_path().'/back_end_admin/uploads', $image_name);
                $product_images[] = $image_name;
            }
        }
        
        $product = Product::find($id);

        $product = new Product([
          'product_name'    => $request->get('product_name'),
          'status'      => $request->get('status'),
          'short_description' => $request->get('short_description'),
          'description'   => $request->get('description'),
          'images'        => implode(",", $product_images)
      ]);

      $product->save();

      return redirect('/admin/products')->with('success', 'Product has been Updated');
        
    }
   
    public function create() {
   		return view('admin.products.create');
    }

    public function store(Request $request) {
   		$request->validate([
	        'product_name'=>'required',
	        'status'=>'required',
	        'short_description'=> 'required',
	        'description' => 'required'
      	]);

      $product_images = [];
   		if( $request->hasfile('images') ){
            foreach($request->file('images') as $file) {
                $image_name = date("dmYHms").'_'.$file->getClientOriginalName();
                $file->move(public_path().'/back_end_admin/uploads', $image_name);
                $product_images[] = $image_name;
            }
        }
        // print_r(implode(",", $product_images));exit;
      	$product = new Product([
	        'product_name' 		=> $request->get('product_name'),
	        'status'			=> $request->get('status'),
	        'short_description' => $request->get('short_description'),
	        'description'		=> $request->get('description'),
	        'images'     		=> implode(",", $product_images)
    	]);

	    $product->save();

      return redirect('/admin/products')->with('success', 'Product has been added');
   }
}
