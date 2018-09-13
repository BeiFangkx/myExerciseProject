
@extends('layouts.home')
@section('content') 

<article>
    <h1 class="t_nav">
        <span>网站首页</span>
        <a href="/" class="n1">网站首页</a>
        <a href="/" class="n2">html5+css3</a>
    </h1>
  <div class="infos">
    <div class="newsview">
      <h3 class="news_title">{{ $article->articleTitle }}</h3>
        <div class="news_author">
            <span class="au01">
                <a href="">作者</a>
            </span>
            <span class="au02">{{ $article->inputTime }}</span>
            <span class="au03">
                共<b>{{ $article->readCount }}</b>人围观
            </span>
        </div>
        <div class="news_about">
            <strong>简介</strong>
            {{ $article->articleDesc }}
        </div>
        <div class="news_infos"> 
            {{ $article->articleContent }}
        </div>
    </div>
    <div class="share"> </div>
<!--     <div class="nextinfo">
    <p>上一篇<a href=""></a></p>
    <p>下一篇<a href=""></a></p>
</div>
<div class="otherlink">
    <h2>相关文章</h2>
    <ul>
        <li>
            <a href="" title=""></a></li>
        <li><a href="" title=""></a></li>
    </ul>
</div> -->
    <div class="news_pl">
        <h2>评论</h2>
        <ul>
            <div class="gbko"> </div>
        </ul>
    </div>


  </div>

   @include('layouts.sidebar')
</article>

@endsection