<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestfulController extends Controller
{
    const NETWORK_SUCCESS = 200;
    const NETWORK_NOT_FOUND = 404;
    const INTERNAL_ERROR = 500;

    public function success($data, $status=self::NETWORK_SUCCESS){
        return $this->jsonResponse($data, $status);
    }

    public function fail($data, $status=self::NETWORK_NOT_FOUND){
        return $this->jsonResponse($data, $status);
    }

    public function jsonResponse($data, $status=200){
        return response()->json([
            'status' => $status,
            'data' => $data,
        ]);
    }
}
