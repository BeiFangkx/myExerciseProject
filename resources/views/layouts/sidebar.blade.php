
<div class="sidebar">
    <div class="about">
        <div class="avatar"> 
            <img src="{{ $user['headImg'] }}" alt=""> 
        </div>
        <p class="abname">{{ $user['userName'] }} | 名字</p>
        <p class="abposition">{{ $user['userName'] }}</p>
        <div class="abtext">{{ $user['userDesc'] }}</div>
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
            @foreach ($labels as $labels)
            <a href="/">{{ $labels->labelName }}</a> 
            @endforeach
        </ul>
    </div>
<!--     <div class="paihang">
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
</div> -->
</div>
