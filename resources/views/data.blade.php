@extends('/layout/main')

@section('judul', 'ABOUT')

  
@section('isi')
<br>
<a class="btn btn-success" style="width: 100px; height: 40px; text-align: center;" href="{{ url('/about') }}" role="button">Back</a>
<a class="btn btn-success" style="width: 100px; height: 40px; text-align: center;" href="{{ url('/') }}" role="button">Home</a>

<a class="btn btn-success" style="width: 100px; height: 40px; text-align: center;" href="{{ url('/sejarah') }}" role="button">Next</a>
<h2>Halaman Data!</h2>
<br>
<h3 style="text-align: center;">Berikut Pendataan 6 Gunung di Indonesia yang dikenali diseluruh dunia</h3>
<br>
<table class="table">
              <thead class="table-dark" style="text-align: center;">
                 <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Gunung</th>
                  <th scope="col">Jenis Gunung</th>
                  <th scope="col">Tinggi Puncak</th>
                  <th scope="col">Lokasi</th>
                  <th scope="col">Sejarah</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Jaya Wijaya</td>
                  <td>Igir batu gamping</td>
                  <td>4.484 meter</td>
                  <td>Papua</td>
                 <td>
                  <a class="btn btn-success" href="{{ url('/sejarah') }}" role="button">Selengkapnya</a>
                  </td>
                </tr>

                <tr>
                  <th scope="row">2</th>
                  <td>Kelimutu</td>
                  <td>gunung kompleks</td>
                  <td>1.639 meter</td>
                  <td>Pulau Flores, NTT</td>
                 <td>
                  <a class="btn btn-success" href="{{ url('/sejarah') }}" role="button">Selengkapnya</a>
                  </td>
                </tr>

                <tr>
                  <th scope="row">3</th>
                  <td>Ijen</td>
                  <td>Stratovolcano</td>
                  <td>2.779 meter</td>
                  <td>Perbatasan antara Banyuwangi dengan Bondowoso</td>
                 <td>
                  <a class="btn btn-success" href="{{ url('/sejarah') }}" role="button">Selengkapnya</a>
                  </td>
                </tr>

                <tr>
                  <th scope="row">4</th>
                  <td>Bromo</td>
                  <td>Kerucut bara</td>
                  <td>2.329 meter</td>
                  <td>Jawa Timur</td>
                 <td>
                  <a class="btn btn-success" href="{{ url('/sejarah') }}" role="button">Selengkapnya</a>
                  </td>
                </tr>

                <tr>
                  <th scope="row">5</th>
                  <td>Rinjani</td>
                  <td>Gunung berapi maar (aktif)</td>
                  <td>3.726 meter</td>
                  <td>Lombok, NTB</td>
                 <td>
                  <a class="btn btn-success" href="{{ url('/sejarah') }}" role="button">Selengkapnya</a>
                  </td>
                </tr>

                <tr>
                  <th scope="row">6</th>
                  <td>Kerinci</td>
                  <td>Stratovolcano</td>
                  <td>3.805 meter</td>
                  <td>Jambi, Sumatera Barat</td>
                 <td>
                  <a class="btn btn-success" href="{{ url('/sejarah') }}" role="button">Selengkapnya</a>
                  </td>
                </tr>
              </tbody>

            </table>


@endsection()
