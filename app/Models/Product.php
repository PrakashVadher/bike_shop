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
}
