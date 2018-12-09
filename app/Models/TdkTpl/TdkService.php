<?php

namespace App\Models\TdkTpl;
use App\Http\Controllers\Extension\SingletonTrait;
use App\Exceptions\TdkNotValidException;
class TdkService{
  use SingletonTrait;

  const TDK_DELIMETER_START = '\{\+';
  const TDK_DELIMETER_END = '\+\}';

  const TDK_SITE_INDEX = '0';
  const TDK_SITE_NEWS = '1';
  const TDK_SITE_PROD = '2';

  public static function __callStatic($name, $args){
    $ret = self::getInstance()->$name(...$args);
    return $ret;
  }

  private function _isValidTdk(Array $tdk){
    if(array_key_exists('title', $tdk) && array_key_exists('keywords', $tdk) && array_key_exists('description', $tdk)){
      return true;
    }
    return false;
  }

  private function getAll(){
    return TdkTpl::orderBy('id', 'desc')->get();
  }

  private function parseTdk(Array $tdk, $model=null){
    if(!self::_isValidTdk($tdk)){
      return [
        'title' => '',
        'keywords' => '',
        'description' => '',
      ];
    }
    if(is_null($model)){
      return $tdk;
    }
    //需要解析
    foreach($tdk as $key => &$item){
      $pattern = '/'. self::TDK_DELIMETER_START . '(.*?)' . self::TDK_DELIMETER_END. '/';
      $item = preg_replace_callback($pattern, 
      function($match)use($model){
        return $model[$match[1]] ?? '';
      }
      ,$item);
    }
    return $tdk;
  }

  private function getSiteTdkType($type = self::TDK_SITE_INDEX){
    $ret = TdkTpl::where('type', $type)->orderBy('id', 'desc')->first();
    if(is_null($ret)){
      return [];
    }
    return json_decode($ret->tdk, true);
  }

  private function getSiteTdk($data = []){
    $type = self::getSiteTdkType();
    return self::parseTdk($type);
  }

  private function getSiteNewTdk($data = []){
    $type = self::getSiteTdkType(self::TDK_SITE_NEWS);
    return self::parseTdk($type, $data);
  }

  private function getSiteProdTdk($data = []){
    $type = self::getSiteTdkType(self::TDK_SITE_PROD);
    return self::parseTdk($type, $data);
  }



  /**  set 部分 */

  private function addOneTdk(int $type, Array $tdk){
    if(!self::_isValidTdk($tdk)){
      throw new TdkNotValidException('invalid format exception of tdk');
    }
    $item = TdkTpl::updateOrCreate(['type' => $type]);
    $item->type = $type;
    $item->tdk = json_encode($tdk);
    $item->save();
    return $tdk;
  }

}
