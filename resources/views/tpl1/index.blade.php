@extends('tpl1.layouts.app')
@section('content')
<div id="top-pic">
  <div class="container">
    <div class="row" style="padding-top: 20px;margin-bottom: -20px;">
      <div class="col-sm-12 col-md-6 col-lg-6 pic-left">
        <div class="swiper-container bannerbox">
          <div class="swiper-wrapper">
            <div class="swiper-slide banlist"> <img src="./upload/images/2017/6/29913228.png" onClick="window.location.href='./contents/139/923.html'" alt="与《冈仁波齐》一起艰难修行：导演张杨背后的三个商人" /> </div>
          
            <div class="swiper-slide banlist"> <img src="./upload/images/2017/6/2992257394.png" onClick="window.location.href='./contents/139/922.html'" alt="手术方案可以用AI全程设计了，科幻离现实还有多远？" /> </div>
          
            <div class="swiper-slide banlist"> <img src="./upload/images/2017/6/29929562.png" onClick="window.location.href='./contents/139/921.html'" alt="孔令辉刘国梁相继被“废”，苟局长对国乒动刀到底想干啥？" /> </div>
          </div>
          <div class="swiper-pagination bannav"></div>
          <div class="swiper-button-next banleft"><i class="iconfont icon-gengduo bannerjb"></i></div>
          <div class="swiper-button-prev banright"><i class="iconfont icon-fanhui bannerjb"></i></div>
        </div>
      </div>
      

      	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 pic-mid">
          <ul>
            <!--foreach-->
            <li><a href="./contents/139/920.html"> <img src="./upload/images/2017/6/2993920646.png" alt="别动我们的刘国梁" />
              <div class="pic-title">
                <h4>别动我们的刘国梁</h4>
              </div>
              </a>
            </li>
            <!--end-->
          </ul>
        </div>

      	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 pic-right">
        <ul>
        
          <li><a href="./contents/139/918.html"> <img src="./upload/images/2017/6/3014615543.png" alt="被妖魔化的《王者荣耀》" />
            <div class="pic-title">
              <h4>被妖魔化的《王者荣耀》</h4>
            </div>
            </a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!--主要内容 -->
<div id="cont-list">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8 col-lg-8 cont-left">
        <div id="hour24" class="clearfix">
          <div class="hour24-title">
            <h3>科技动态</h3>
          </div>
          
          @foreach($prods as $prod)
          <div class="col-sm-12 col-md-6 col-lg-6 hour24-left">
          
            <div class="hour24-left-img"> <a href="./images/timthumb (5).jpg" title="{{$prod->title}}" target="_blank"> <img src="./images/timthumb (5).jpg" alt="{{$prod->title}}" /> </a> </div>
            <h3 class="htitle-color" style="font-weight: 400;"><a href="./contents/131/928.html">{{$prod->name}}</a></h3>
            <div class="mob-author">   
            <span class="time"><i class="iconfont icon-shijian"></i>  {{$prod->created_at}}</span>   
            <span class="time liulan"><i class="iconfont icon-faxian"></i> 今日头条</span>
            </div>
            <div class="mob-sub"> {{mb_substr($prod->detail, 0, 20)}}</div>
          
          </div>
          @endforeach
 
          <!-- <div class="col-sm-12 col-md-6 col-lg-6 hour24-right">
            <ul>
              <li class="clearfix"> <a href="./contents/131/929.html" title="无人机市场这么火，自拍型无人机如何突围场景？" target="_blank">
                <div class="h24-r-img"> <img src="./upload/images/2017/6/29181112260.png" alt="无人机市场这么火，自拍型无人机如何突围场景？" /> </div>
                </a>
                <div class="h24-r-text"> <a href="./contents/131/929.html" title="无人机市场这么火，自拍型无人机如何突围场景？" target="_blank"> <span class="h24-r-title">无人机市场这么火，自拍型无人机如何突围场景？</span> </a>
                  <p class="mob-author"> <span class="time"><i class="iconfont icon-shijian"></i> 2017-06-29</span>   <span class="time"><i class="iconfont icon-faxian"></i> 梦想城</span></p>
                </div>
              </li>
            </ul>
          </div> -->
          
        </div>
        <!--最新文章 -->
        <div class="la-title">
          <h3>最新文章</h3>
        </div>
        @foreach($news as $new)
          <div class="la-list02 line-botm clearfix">
            <div class="la-l-img"> 
              <a href="./contents/141/965.html" target="_blank"> 
                <img class="xyscale" src="./upload/images/2017/6/20172446227.jpg" alt="{{$new->title}}"> </img>
              </a> 
            </div>
            <div class="la-r-text">
              <h3> 
                <a href="./contents/141/965.html" class="htitle-color" target="_blank">{{$new->title}}</a> 
              </h3>
              <div class="mob-author"> 
                <span class="time">
                  <i class="iconfont icon-mulutubiao"></i> 
                  <a href="./contents/141/965.html" style="color: #bbb;">{{$new->category->name}}</a> 
                </span> 
                <span class="time">
                  <i class="iconfont icon-shijian"></i> 
                  {{$new->created_at}}
                </span> 
                <span class="time liulan">
                  <i class="iconfont icon-faxian"></i> 
                </span> 
              </div>
              <div class="mob-sub"></div>


              <div class="tags">
                <i class="iconfont icon-biaoqian"></i>
                <!--tag-->
                <a href="./utils/tags.html?tagName=uber" rel="tag">uber</a>
              </div>
            </div>
          </div>
        @endforeach
          <div id="page">
          {{$news->links()}}
          </div>

        
        
        
      </div>
      <div class="wrap-right pull-right">
        <div class="widget widget_ztmao_hotpost2">
          <div class="box-moder hot-article">
            <h3>热评文章</h3>
          </div>
          <div class="box-moder hot-article"> <span class="span-mark"></span>
            <ul class="hots-post-widget">
              <li>
                <div class="mod-thumb"> <a href="./contents/131/931.html" target="_blank"> <img class="xyscale" src="./images/timthumb (5).jpg" alt="人工智能创业到底能不能挣钱，可盈利的机会又在哪儿？" /> </a> </div>
                <div class="project-content"> <a href="./contents/131/931.html" target="_blank">人工智能创业到底能不能挣钱，可盈利的机会又在哪儿？</a> </div>
              </li>
            
            </ul>
          </div>
          <div class="placeholder"></div>
        </div>
        <div class="widget widget_ztmao_mostviews">
          <div class="box-moder hot-article">
            <h3>最热点击文章</h3>
          </div>
          <div class="box-moder hot-article"> <span class="span-mark"></span>
            <ul class="hots-post-widget">
              @foreach($hotNews as $hot)
              <li>
                <div class="hot-article-img"> <a href="./contents/131/925.html" target="_blank"> <img class="xyscale" src="./upload/images/2017/6/2985515978.jpg" alt="{{$hot->title}}" /> </a> </div>
                <a href="./contents/131/925.html" class="transition" target="_blank">{{$hot->title}}</a> 
              </li>
              @endforeach
            
            </ul>
          </div>
          <div class="placeholder"></div>
        </div>
        <div class="box-moder hot-tag ztmao-lianjie">
          <h3>友情链接</h3>
          <span class="span-mark"></span>
          <div class="search-history search-hot">
            <ul>
              <li><a href="http://developer.siteserver.cn/" target="_blank">开发者中心</a></li>
            </ul>
          </div>
        </div>
        <div class="placeholder"></div>
      </div>
    </div>
  </div>
</div>
@endsection