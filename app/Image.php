<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	protected $primaryKey = 'id_img';
    protected $table ='img_product';
    protected $fillable = ['id_product','image'];

}
