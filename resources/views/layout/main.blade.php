<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>@yield('judul')</title>
  </head>
  <body style = "background-color: white;">

  <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <a class="navbar-brand" href="/">Mount</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/about') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/data') }}">Data</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="{{ url('/sejarah') }}" >Sejarah</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/video') }}">Video</a>
            </li>
           
            </ul>
        </div>
        </nav>

       

<br>
<br>
<!-- <nav aria-label="breadcrumb ">
  <ol class="breadcrumb bg-transparent">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/about') }}">About</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/data') }}">Data</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/sejarah') }}">Sejarah</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/video') }}">Video</a></li>
    
  </ol>
</nav> -->
@yield('isi')
</div>

<div class="container"><footer>Copyright Reserved 2021</footer></div>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>