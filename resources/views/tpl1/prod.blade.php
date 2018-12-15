@extends('tpl1.layouts.app')
@section('content')
<div id="content-article">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8 col-lg-8 cont-left">
        <div id="detail-article">
          <div class="da-title">
            <h2>{{$ret['prod']->name}}</h2>
          </div>
          <div class="article-author"></div>
          <div class="data-article">
            @php
            $details = json_decode($ret['prod']->detail);
            $details = array_chunk($details, 2);
            @endphp
            @foreach($details as $detail)
            <div>
              @foreach($detail as $d)
              <span type="Content">{!! $d !!} </span>
              @endforeach
            </div>
            @endforeach
          </div>
        </div>
      </div>


      <div class="wrap-right pull-right">


        @include('tpl1.layouts.latest_news')
      </div>
    </div>
    <div class="detail-article-img">
      @php
      $imgList =array_chunk(json_decode($ret['prod']->img_list, true), 2);
      @endphp
      @foreach($imgList as $img)
      <div>
        @foreach($img as $i)
        @php
        $i = str_replace('//', '', $i);
        @endphp
        <img class='detail-img' src="http://{{$i}}" alt="">
        @endforeach
      </div>
      @endforeach
    </div>
  </div>
</div>
<div class="go-top0" id="gotopbtn">
  <i class="icon icon-top"></i>
</div>
@endsection