<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
    //
    protected $primaryKey = 'article_id';

    public function category() {
        return $this->belongsTo('App\Category', 'category_id');
    }
   
}
