<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Sim system') - 模拟室管理系统</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('layouts._header')

    <div class="container">
      <div class="col-md-offset-1 col-md-10">
          @include('shared._messages')

          @yield('content')
      </div>
    </div>
    @include('layouts._footer')
  </body>
</html>
