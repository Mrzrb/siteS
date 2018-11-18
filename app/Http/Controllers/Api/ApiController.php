<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TdkTpl\TdkService;
use App\Models\News\NewsService;
class ApiController extends RestfulController
{
    public function test(Request $request){
        echo 111;
    }

    public function setTdk(Request $request){

        $data = $request->get('data',"{}");
        $data = TdkService::addOneTdk($data['type'], $data['tdk']);
        return $this->success($data);
    }
}
