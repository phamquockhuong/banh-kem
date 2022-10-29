<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends Model
{
	protected $table ='product_translations';
	protected $fillable = ['name','title','description', 'product_id','locale'];
	protected $with =['translation'];

    public function translation(){
    	return $this->hasOne('App\Product','id_product','product_id');
    }
    
}
