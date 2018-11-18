<div class="go-top0" id="gotopbtn" > <i class="icon icon-top"></i></div>
<div class="footer" id="footer">
  <div class="container">
    <div class="row">
      <div class=" col-sm-12 col-md-6 col-lg-6 footer-left">
        <div class="footer-icon-list pull-right0">
          <ul>
            <a href="javascript:">
            <li class="Qr-code-footer">
              <div class="app-qrcode"> <img src="./upload/images/2017/6/17173412614.jpg" width="130" height="130" /> </div>
              <i class="icon icon-footer icon-footer-wx"></i> </li>
            </a> <a href="http://t.qq.com/siteserver2011" target="_blank">
            <li><i class="icon icon-footer icon-footer-inter"></i></li>
            </a> <a href="http://developer.siteserver.cn/" target="_blank">
            <li><i class="icon icon-footer icon-footer-rss"></i></li>
            </a>
          </ul>
        </div>
      </div>
      <div class=" col-sm-12 col-md-6 col-lg-6  footer-right">
        <div class="copy-right">
          <div class="footer-tag-list"> 
          <!-- <a href="http://stl.siteserver.cn/" target="_blank">关于我们</a>  -->
          <!-- <a href="http://docs.siteserver.cn/getting-started/index.html" target="_blank">加入我们</a>  -->
          <!-- <a href="http://blog.siteserver.cn/" target="_blank">联系我们</a>  -->
          <a>友情链接</a> 
  
          
          </div>
          <span>
          @if(isset($friend_links) && count($friend_links) > 0)
            @foreach($friend_links as $link)
            <a href="">模板建站</a>
            @endforeach
          @endif
          </span> 
          </div>
      </div>
    </div>
  </div>
</div>