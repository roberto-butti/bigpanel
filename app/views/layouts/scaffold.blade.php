<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Big Panel</title>
  @include('partials.assets')
</head>
<body>
	@if ( isset($menu) ? $menu : false )
  @include('partials.menu')
  @endif

  @if (Session::has('message'))
    <div class="flash alert">
      <p>{{ Session::get('message') }}</p>
    </div>
  @endif

  <div class="container">
    @yield('main')
  </div>
  @include('partials.js-end')
</body>
</html>