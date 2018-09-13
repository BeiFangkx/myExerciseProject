
@extends('layouts.home')
@section('content') 

<article>
    <h1 class="t_nav">
        <span>网站首页</span>
        <a href="/" class="n1">网站首页</a>
        <a href="/" class="n2">文章</a>
    </h1>
    <div class="blogs">
        <div class="mt20"></div>

        @foreach ($artcles as $artcle)
        <li> 
            <span class="blogpic">
                <a href="/article/info/{{ $artcle->ID }}">
                    <img src="{{ $artcle->articleImg }}">
                </a>
            </span>
            <h3 class="blogtitle">
                <a href="/article/info/{{ $artcle->ID }}">{{ $artcle->articleTitle }}</a>
            </h3>
            <div class="bloginfo">
                <p>{{ $artcle->articleDesc }}</p>
            </div>
            <div class="autor">
                <span class="lm">
                    <a href="/" title="" target="_blank" class="classname">CSS3|Html5</a>
                </span>
                <span class="dtime">{{ $artcle->inputTime }}</span>
                <span class="viewnum"><a href="/">{{ $artcle->readCount }}</a></span>
                <span class="readmore"><a href="/article/info/{{ $artcle->ID }}">阅读更多</a></span>
            </div>
        </li>
        @endforeach

        {{ $artcles->links() }}
    </div>

    @include('layouts.sidebar')
</article>

@endsection