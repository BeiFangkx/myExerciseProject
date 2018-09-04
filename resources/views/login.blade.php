<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>登录</title>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <form method="POST" action="{{ route('login') }}">
                {{csrf_field()}}
                用户名:<input type = "" name = "username" />
                密码:  <input type = "" name = "password" />
                <input type = "submit" value="登录" />
            </form>
        </div>
    </body>
</html>
