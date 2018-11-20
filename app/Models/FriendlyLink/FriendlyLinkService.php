<?php

namespace App\Models\FriendlyLink;

use App\Models\FriendlyLink\FriendlyLink;

class FriendlyLinkService{
  public static function getFriendlyLinks(){
    return FriendlyLink::latest()->get();
  }
}