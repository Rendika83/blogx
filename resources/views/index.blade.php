@extends('/layout/main')

@section('judul', 'INDEX')

  
@section('isi')

<p><h2>Halo, Selamat Datang!</h2></p>
<br>

<!-- <img src="{{url('/Rendika11.jpg')}}"  alt="MyImage"> -->
<h3 style="font-variant: small-caps; text-align: center;">Berikut 6 Pegunungan di Indonesia yang paling dikenali diseluruh dunia!</h3>
<br>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{url('/7gunung.jpg')}}" class="d-block w-100" alt="index">
    </div>
    <div class="carousel-item">
      <img src="{{url('/bromo.jpg')}}" class="d-block w-100" alt="bromo">
    </div>
    <div class="carousel-item">
      <img src="{{url('/ijen.jpg')}}" class="d-block w-100" alt="ijen">
    </div>
    <div class="carousel-item">
      <img src="{{url('/jaya.jpg')}}" class="d-block w-100" alt="jaya">
    </div>
    <div class="carousel-item">
      <img src="{{url('/kalimutu.jpg')}}" class="d-block w-100" alt="kalimutu">
    </div>
    <div class="carousel-item">
      <img src="{{url('/kerinci.jpg')}}" class="d-block w-100" alt="ijen">
    </div>
    <div class="carousel-item">
      <img src="{{url('/rinjani.jpg')}}" class="d-block w-100" alt="jaya">
    </div>
    

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<p>
<h4 style="font-style: oblique;;">Untuk Detail nya, klik tombol dibawah ini</h4></p>


<a class="btn btn-success" style="width: 180px; height: 40px; text-align: center;" href="{{ url('/about') }}" role="button">Selengkapnya</a>


@endsection()
   
