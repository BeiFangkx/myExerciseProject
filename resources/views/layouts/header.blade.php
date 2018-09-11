<header>
  <div class="tophead">
    <div class="logo"><a href="/">个人记录博客</a></div>
    <!--         <div id="mnav">
        <h2><span class="navicon"></span></h2>
        <ul>
            <li><a href="index.html">首页</a></li>
        </ul>
    </div> -->
    <nav class="topnav" id="topnav">
        <ul>
            @foreach ($menus as $menu)
            <li><a href="{{ $menu->menuName }}">{{ $menu->menuName }}</a></li>
            @endforeach
        </ul>
    </nav>
  </div>
</header>