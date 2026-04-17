<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include ('partes.head')
</head>
<body>
  @include ('partes.navbar')

  <main>
    @yield ('content')
  </main>

  @include ('partes.footer')
</body>
</html>
