@extends('/layout/main')

@section('judul', 'MAIN')

  
@section('isi')
<br>
<a class="btn btn-success" style="width: 100px; height: 40px; text-align: center;" href="{{ url('/sejarah') }}" role="button">Back</a>
<a class="btn btn-success" style="width: 100px; height: 40px; text-align: center;" href="{{ url('/') }}" role="button">Home</a>

<h2>Halaman Video!</h2>
<br>
<h3><p style="text-align: center;"> Berikut Video 6 Pegunungan Indonesia yang dikenali diseluruh dunia</p>
<br>
<iframe width="500" height="320" src="https://www.youtube.com/embed/YhyUXyG2_B0" frameborder="0" 
allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
allowfullscreen class="d-block w-100" style="height: 700px;"></iframe>

@endsection()