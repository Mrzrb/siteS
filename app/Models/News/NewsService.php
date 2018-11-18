<?php

namespace App\Models\News;

class NewsService {
    public static function newsPagination($num){
        return News::latest()->paginate($num);
    }

    public static function hotNews($num){
        return News::orderBy('click_num', 'desc')->limit($num)->get();
    }

    public static function relatedNews($num){
        
    }

    public static function newsPaginationByCategory(int $num, int $categoryId){
        return News::latest()->with('category')->where('category_id', $categoryId)->paginate($num);
    }

}