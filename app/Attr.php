<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attr extends Model
{
    protected $table ='attrs';
    protected $fillable = ['id_product','id_attr'];
}
