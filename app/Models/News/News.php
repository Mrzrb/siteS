<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category\Category;

class News extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function getUrl()
    {
        return siteUrl('/ch'.$this->category_id.'/'.$this->id.'.html');
    }
}
