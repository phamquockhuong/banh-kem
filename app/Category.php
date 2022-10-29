<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'id_category';
    protected $table ='categories';
    protected $fillable = ['name','name_en','parent_id','status'];
    protected $dates = ['deleted_at'];
    protected $with =['name_parent'];

    // public function ()
    // {
    // 	return $this->hasOne('App\Category', 'parent_id', 'id_category');
    // }
    #belongsTo
    public function name_parent(){
    	return $this->hasOne('App\Category','id_category','parent_id');
    }
}
