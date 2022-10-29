<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
	use SoftDeletes;
	use Translatable;
    
    
    protected $table ='products';
    public $translatedAttributes = ['name','description', 'product_id','locale'];
    protected $fillable=['id_category','price','sale','img_product','amount','status'];
    protected $with =['cate_name'];

    public function cate_name(){
    	return $this->hasOne('App\Category','id_category','id_category');
    }
    
}
