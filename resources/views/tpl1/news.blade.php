@extends('tpl1.layouts.app')
@section('content')
<div id="content-article">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8 col-lg-8 cont-left">
        <div id="detail-article">
          <div class="da-title">
            <h2>{{$ret['new']->title}}</h2>
          </div>
          <div class="article-author"></div>
          <div class="data-article">
            <p type="Content">{{$ret['new']->content}}</p>
          </div>
        </div>
      </div>
      <div class="wrap-right pull-right">
        @include('tpl1.layouts.latest_news')
      </div>
    </div>
  </div>
</div>
<div class="go-top0" id="gotopbtn">
  <i class="icon icon-top"></i>
</div>
@endsection