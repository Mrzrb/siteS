<?php

namespace App\Models\News;

use App\Models\Category\Category;

class NewsService
{
    public static function newsPagination($num)
    {
        return News::latest()->paginate($num);
    }

    public static function hotNews($num)
    {
        return News::orderBy('click_num', 'desc')->limit($num)->get();
    }

    public static function relatedNews($num)
    {
    }

    /**
     * 根据category_id来做站群映射
     */
    public static function latestNews($id, $num=5)
    {
        $news = collect();
        $total = Category::count();
        $categoryId = $id % $total + 1;
        $categories = Category::where('id', '>=', $categoryId)->with(['hasLatestOneNew'])->limit($num)->get();
        foreach ($categories as $category) {
            $new = $category->hasLatestOneNew->first();
            $new && $news->push();
        }
        return $news;
    }

    public static function newsPaginationByCategory(int $num, int $categoryId)
    {
        return News::latest()->with('category')->where('category_id', $categoryId)->paginate($num);
    }
}
