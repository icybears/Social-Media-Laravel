
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>LikeMinded: Find and Join Like Minded People</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('css/cover.css') }}" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
            <a class="navbar-brand masthead-brand" href="#">LikeMinded</a>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="/register">Register</a>            
            <a class="nav-link" href="/login">Login</a>
          </nav>
        </div>
      </header>
      

      <main role="main" class="inner cover">
        <h1 class="cover-heading">LikeMinded</h1>
        <p class="lead">Find and Join Like Minded People and Discuss your Favorite Topics</p>
        <p class="lead">
          <div><a href="/register" class="btn btn-lg btn-secondary">Register</a></div>
          <a href="/login" class="">Already have an account ? Login</a>          
        </p>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p class="text-white"> &copy; 2018 Sabercrafts </p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>
