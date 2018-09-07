<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <meta charset="utf-8">
    <title>blog</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('css/base.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/m.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/modernizr.js"></script>
    <![endif]-->
    <script>
    window.onload = function ()
    {
        var oH2 = document.getElementsByTagName("h2")[0];
        var oUl = document.getElementsByTagName("ul")[0];
        oH2.onclick = function ()
        {
            var style = oUl.style;
            style.display = style.display == "block" ? "none" : "block";
            oH2.className = style.display == "block" ? "open" : ""
        }
    }
    </script>
    </head>
    <body>
    <header>
      <div class="tophead">
        <div class="logo"><a href="/">bolg图片</a></div>
        <div id="mnav">
            <h2><span class="navicon"></span></h2>
            <ul>
                <li><a href="index.html">首页</a></li>
            </ul>
        </div>
        <nav class="topnav" id="topnav">
            <ul>
                <li><a href="index.html">首页1</a></li>
            </ul>
        </nav>
      </div>
    </header>
    <div class="picshow">
        <ul>
            <li>
                <a href="/">
                    <i><img src="{{ URL::asset('images/b01.jpg')}}"></i>
                    <div class="font">
                        <h3>导航图片</h3>
                    </div>
                </a>
            </li>
            <li>
                <a href="/">
                    <i><img src="{{ URL::asset('images/b01.jpg')}}"></i>
                    <div class="font">
                        <h3>导航图片</h3>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <article>
        <div class="blogs">
            <li> 
                <span class="blogpic">
                    <a href="/">
                        <img src="{{ URL::asset('images/text02.jpg')}}">
                    </a>
                </span>
                <h3 class="blogtitle">
                    <a href="/">文档标题</a>
                </h3>
                <div class="bloginfo">
                    <p>...文章信息</p>
                </div>
                <div class="autor">
                    <span class="lm">
                        <a href="/" title="CSS3|Html5" target="_blank" class="classname">CSS3|Html5</a>
                    </span>
                    <span class="dtime">2018-05-04</span>
                    <span class="viewnum">1<a href="/">0</a>1</span>
                    <span class="readmore"><a href="/">1</a></span>
                </div>
            </li>
        </div>
        <div class="sidebar">
            <div class="about">
                <div class="avatar"> 
                    <img src="{{ URL::asset('images/avatar.jpg')}}" alt=""> 
                </div>
                <p class="abname">dancesmile | 名字</p>
                <p class="abposition">职位</p>
                <div class="abtext"> 简介</div>
            </div>
            <div class="search">
                <form action="" method="post" name="searchform" id="searchform">
                    <input name="keyboard" id="keyboard" class="input_text" value="输入..." 
                    style="color: rgb(153, 153, 153);" onfocus="if(value=='')
                    {this.style.color='#000';value=''}" onblur="if(value=='')
                    {this.style.color='#999';value=''}" type="text">
                    <input name="show" value="title" type="hidden">
                    <input name="tempid" value="" type="hidden">
                    <input name="tbname" value="news" type="hidden">
                    <input name="Submit" class="input_submit" value="搜索" type="submit">
                </form>
            </div>
            <div class="cloud">
                <h2 class="hometitle">标签</h2>
                <ul>
                    <a href="/">php</a> 
                    <a href="/">并发</a> 
                    <a href="/">前端</a> 
                </ul>
            </div>
            <div class="paihang">
                <h2 class="hometitle">点击排行</h2>
                <ul>
                    <li>
                        <b><a href="/download/div/2015-04-10/746.html" target="_blank">...</a></b>
                        <p><i><img src="{{ URL::asset('images/t02.jpg')}}"></i>...</p>
                    </li>
                </ul>
            </div>
            <div class="paihang">
                <h2 class="hometitle">站长推荐</h2>
                <ul>
                    <li>
                        <b><a href="/download/div/2015-04-10/746.html" target="_blank">...</a></b>
                        <p><i><img src="{{ URL::asset('images/t02.jpg') }}"></i>...</p>
                    </li>
                </ul>
            </div>
            <div class="links">
                <h2 class="hometitle">友情链接</h2>
                <ul>
                    <li><a href="http://www.yangqq.com" title="1">1</a></li>
                    <li><a href="http://www.yangqq.com" title="1">1</a></li>
                    <li><a href="http://www.yangqq.com" title="1">1</a></li>
              </ul>
            </div>
            <div class="weixin">
                <h2 class="hometitle">微信</h2>
                <ul>
                    <img src="{{ URL::asset('images/wx.jpg') }}">
                </ul>
            </div>
        </div>
    </article>
    <div class="blank"></div>
    <footer>
        <p>Design by <a href="/"></a> <a href="/">-1</a></p>
    </footer>
    <script src="{{ URL::asset('js/nav.js') }}"></script>
    </body>

</html>
