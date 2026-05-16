<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/auth-common.css') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  @yield('css')
</head>
<body>
  <div class=center>
  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo" href="/">
        Fashionablylate
      </h1>
    </div>
    <div class="page-links">
    @yield('links')
    </div>
  </header>

  <h2 class="main__font">
  @yield('page_title')
  </h2>

  <main>
    @yield('content')
  </main>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>