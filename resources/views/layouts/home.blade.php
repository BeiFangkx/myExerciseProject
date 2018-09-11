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

    {{-- 包含页头 --}}
    @include('layouts.header')
     
    {{-- 继承后插入的内容 --}}
    @yield('content')

    <div class="blank"></div>

    {{-- 包含页脚 --}}
    @include('layouts.footer')

    <script src="{{ URL::asset('js/nav.js') }}"></script>
    </body>

</html>
