<?php

namespace App\Http\Controllers\Site\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News\NewsService;
class CategoryController extends Controller
{
    public function index(Request $request, int $id){
      $news = NewsService::newsPaginationByCategory(20, $id);
      $ret['hotNews'] = NewsService::hotNews(5);
      return view(env('tplSN').'.channel')->withNews($news)->withRet($ret);
    }
}
