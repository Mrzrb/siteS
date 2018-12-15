@if(isset($ret['latestNews']))
<div class="widget widget_ztmao_postlist2">
  <div class="box-moder hot-article">
    <h3>最新文章</h3>
  </div>
  <div class="box-moder hot-article">
    <span class="span-mark"></span>
    <ul class="hots-post-widget">
      @foreach($ret['latestNews'] as $new)
      <div topLevel="0" scope="All" isImage="true" totalNum="5" groupChannelNot="not" order="AddDate">
        <li>
          <div class="mod-thumb">
            <a target="_blank" href="{{$new->getUrl()}}">
              <img class="xyscale" src="{{$new->img_url}}" alt="{{$new->title}}" />
            </a>
          </div>
          <div class="project-content">
            <a target="_blank" href="{{$new->getUrl()}}">
              <p type="Title">{{mb_substr($new->content, 0, 30)}}</p>
            </a>
          </div>
        </li>
      </div>
      @endforeach
    </ul>
  </div>
  <div class="placeholder"></div>
</div>
@endif