<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;
use App\Models\Prod\Prod;
use App\Models\News\News;

class Category extends Model
{
    public function getUrl(){
        return url('/ch'.$this->id.'/');
    }
}
