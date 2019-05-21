<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $primaryKey = 'category_id';
    public $timestamps=false;

    public function articles()
    {
        return $this->hasMany('App\Article', 'category_id');
    }

}
