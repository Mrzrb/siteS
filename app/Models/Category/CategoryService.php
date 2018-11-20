<?php

namespace App\Models\Category;

class CategoryService {
    public static function getTopNav($num = 5){
      return Category::latest()->limit($num)->get();
    }
}