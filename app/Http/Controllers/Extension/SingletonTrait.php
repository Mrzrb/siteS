<?php

namespace App\Http\Controllers\Extension;

trait SingletonTrait{
  protected static $instance = null;

  public static function getInstance(){
    if (is_null(self::$instance)) {
      static::$instance = new static();
    }
    return static::$instance;
  }

  private function __construct(){
    
  }
}