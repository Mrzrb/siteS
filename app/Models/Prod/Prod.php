<?php

namespace App\Models\Prod;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category\Category;

class Prod extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function getUrl()
    {
        return siteUrl('/pr'.$this->category_id.'/'.$this->id.'.html');
    }
}
