<?php

namespace App\Http\Controllers\Site\Prod;

use App\Exceptions\CategoryNotFoundException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Prod\Prod;
use App\Models\Category\Category;
use App\Models\TdkTpl\TdkService;
use App\Models\News\NewsService;

class ProdController extends Controller
{
    //
    public function index(Request $request, Category $ch, Prod $prod)
    {
        if ($prod->category_id != $ch->id) {
            throw new CategoryNotFoundException('类型未找到');
        }
        NewsService::latestNews($prod->id);

        $ret['prod'] = $prod;
        $ret['category'] = $ch;
        $ret['latestNews'] = \App\Models\News\NewsService::latestNews($prod->id);
        $ret['tdk'] = TdkService::getSiteProdTdk($prod->toArray());
        return view(env('tplSN').'.prod')->withRet($ret);
    }
}
