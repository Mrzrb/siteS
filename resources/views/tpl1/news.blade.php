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
    
  
<div class="widget widget_ztmao_postlist2"><div class="box-moder hot-article"><h3>最新文章</h3></div>    <div class="box-moder hot-article">
      <span class="span-mark"></span>
    <ul class="hots-post-widget">
        <stl:contents topLevel="0" scope="All" isImage="true" totalNum="5" groupChannelNot="not" order="AddDate">
      <li>
        <div class="mod-thumb">
          <stl:a target="_blank">
            <img class="xyscale" src="{Content.ImageUrl}" alt="{Content.Title}"/>
          </stl:a>
        </div>
        <div class="project-content">
          <stl:a target="_blank"><stl:content type="Title"></stl:content></stl:a>
        </div>
        </li>
        </stl:contents>
    </ul>
    </div>
    <div class="placeholder"></div>
</div></div>    </div>
  </div>
</div>
<div class="go-top0" id="gotopbtn">
  <i class="icon icon-top"></i>
</div>
@endsection