<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $primaryKey = 'id_category';
    protected $table ='categories';
    protected $fillable = ['name','parent_id','status'];

    public function name_parent()
    {
    	return $this->hasOne('App\Category','id_category','parent_id');
    }
}
