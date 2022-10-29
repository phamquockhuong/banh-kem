<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SizeProduct extends Model
{
    protected $table ='size_products';
    protected $fillable = ['size','status'];
}
