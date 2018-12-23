<?php

namespace App\Models\Prod;

class ProdService {
    public static function prodLatest($num){
        return Prod::inRandomOrder()->limit($num)->get();
    }

    public static function hotProds($num){
        return Prod::orderBy('created_at', 'desc')->limit($num)->get();
    }

    public static function relatedProds($num){
        
    }

    public static function newsPaginationByCategory(int $num, int $categoryId){
        return Prod::latest()->with('category')->where('category_id', $categoryId)->paginate($num);
    }

}