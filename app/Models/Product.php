<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Product extends Model {
	const ACTIVE 	= 1;
	const INACTIVE  = 0;

  	protected $fillable = [
	  	'product_name',
	  	'price',
	  	'sale_price',
	 	'images',
		'short_description',
		'description'
	];

	public static function scopeActive($query) {		
		return $query->where('products.status', self::ACTIVE);
	}

	public function scopeInActive($query) {
		return $query->where('products.status', self::INACTIVE);
	}

	public function scopeSortBy($query,$sort_value){
		if($sort_value == 'high'){
			$query->orderBy('price','desc');
		}elseif($sort_value == 'low'){
			$query->orderBy('price','asc');
		}elseif($sort_value == 'name'){
			$query->orderBy('product_name','asc');
		}else{
			$query->orderBy('id','desc');
		}
		return $query;
	}

	public function scopeSearchBy($query,$string){
		return $query->where('product_name','LIKE', '%'.$string.'%')
			    	->orWhere('short_description','LIKE', '%'.$string.'%')
			    	->orWhere('description','LIKE', '%'.$string.'%');
	}
}
