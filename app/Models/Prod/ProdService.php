<?php

namespace App\Models\Prod;

class ProdService {
    public static function prodLatest($num){
        return Prod::latest()->limit($num)->get();
    }
}