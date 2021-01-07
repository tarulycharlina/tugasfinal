<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Home - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('berita/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('berita/css/blog-home.css')}}" rel="stylesheet">

</head>

<body>
  @include('layouts.navigation')
  

  <!-- Page Content -->
  <div class="container">
    
    @yield('content')
    

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('berita/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('berita/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
