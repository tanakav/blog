<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/app.css">

  <title>Blog - @yield('title')</title>
</head>

<body>
  <header>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">golB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="{{route('welcome')}}">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="{{route('post.index')}}">Postagens</a>
            <a class="nav-item nav-link" href="{{route('post.reports')}}">Relatórios</a>
            <a class="nav-item nav-link" href="{{route('user.contact')}}">Contato</a>
            @guest
            <a href="{{route('login')}}" class="nav-item btn btn-outline-dark">Login/Register</a>
            @else
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{auth()->user()->name}}
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="" href="{{route('post.create')}}">Novo post</a>
                <a class="" href="{{route('user.posts')}}">Profile</a>
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="">Logout</button>
                </form>
              </div>
            </div>
            @endguest

          </div>
        </div>
      </nav>
    </div>
  </header>

  <main>
    <div class="container">
      <h2 class="text-center">@yield('title')</h2>
      @yield('content')
    </div>

  </main>

  <footer>
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.js"></script>

    <!-- <script src="/js/app.js"></script> -->
  </footer>
</body>

</html>