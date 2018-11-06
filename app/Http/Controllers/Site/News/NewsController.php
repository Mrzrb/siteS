<?php

namespace App\Http\Controllers\Site\News;

use App\Exceptions\CategoryNotFoundException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News\News;
use App\Models\Category\Category;
class NewsController extends Controller
{
    //
    public function index(Request $request, Category $ch, News $new){
        if($new->category_id != $ch->id){
            throw new CategoryNotFoundException('类型未找到');
        }
        $ret['new'] = $new;
        $ret['category'] = $ch;
        return view(env('tplSN').'.news')->withRet($ret);
    }
}
