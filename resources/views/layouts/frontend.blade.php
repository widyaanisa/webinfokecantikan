<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Beauty Daily - {{$title}}</title>

    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="images/logo web.png">
    
    <link rel="stylesheet" href="{{ asset('/css/tampilan.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/login.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  </head>

  <body>
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

    
        @yield ('container')
  
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
