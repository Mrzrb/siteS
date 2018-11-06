<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category\Category;

class News extends Model
{
    public function category(){
      return $this->belongsTo(Category::class, 'category_id');
    }
}
