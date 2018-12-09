<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;
use App\Models\Prod\Prod;
use App\Models\News\News;

class Category extends Model
{
    public function getUrl()
    {
        return siteUrl('/ch'.$this->id.'/');
    }

    public function hasLatestOneNew()
    {
        return $this->hasNews()->orderBy('id', 'desc');
    }

    public function hasNews()
    {
        return $this->hasMany(News::class, 'category_id', 'id');
    }
}
