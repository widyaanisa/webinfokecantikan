<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Beauty Daily - {{$title}}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="images/logo web.png">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/tampilan.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/login.css')}}">
  </head>

  <body>

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/"><h2>Beauty <em>Daily</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Article") ? 'active' : '' }}" href="/article">Article</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Review") ? 'active' : '' }}" href="/review">Review</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Login") ? 'active' : '' }}" href="/login">Login or Signup</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div class="container">
        @yield ('container')
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>

</html>
