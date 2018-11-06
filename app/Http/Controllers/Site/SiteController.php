<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News\NewsService;
use App\Models\Prod\ProdService;
class SiteController extends Controller
{
    protected $news_limit = 20;
    protected $prod_limit = 20;
    protected $category_limit = 10;

    public function index(Request $request){
        $prods = ProdService::prodLatest($this->prod_limit);
        $news = NewsService::newsPagination($this->news_limit);
        $hotNews = NewsService::hotNews($this->news_limit);
        return view(env('tplSN').'.index')->withNews($news)
                            ->withProds($prods)
                            ->withHotNews($hotNews);
    }
}
