<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
	protected $primaryKey = 'id_size';
    protected $table ='size_products';
    protected $fillable = ['id_product','size'];

}
