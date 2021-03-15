@extends('/layout/main')

@section('judul', 'MAIN')

  
@section('isi')
<br>
<a class="btn btn-success" style="width: 100px; height: 40px; text-align: center;" href="{{ url('/data') }}" role="button">Back</a>
<a class="btn btn-success" style="width: 100px; height: 40px; text-align: center;" href="{{ url('/') }}" role="button">Home</a>
<a class="btn btn-success" style="width: 100px; height: 40px; text-align: center;" href="{{ url('/video') }}" role="button">Next</a>


<h2>Halaman Sejarah!</h2>
<br>
<h3><p style="text-align: center;"> Berikut Sejarah 6 Pegunungan Indonesia yang dikenali diseluruh dunia</p>
</h3>
<br>
<table class="table">
              <thead class="table-dark">
                 <tr style="text-align: center;">
                  <th scope="col">No</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Gunung</th>
                  <th scope="col">Sejarah</th>
                  <th scope="col">Video</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td><img src="{{url('/jaya.jpg')}}" class="card-img-top" alt="1" style="width: 250px; height: 120px;"></td>
                  <td>Jaya Wijaya</td>
                  <td>Menurut Hari, Pegunungan Jayawijaya terbentuk saat terjadi benturan antara lempeng benua Australia dengan Lempeng Pasifik pada Zaman Miocene Tengah. “Itu sekitar 15 juta tahun yang lalu,” ujar dia kepada Tempo </td>
                 <td>
                  <a class="btn btn-success" href="{{url('video')}}" >Selengkapnya</a>
                  
                  </td>
                </tr>

                <tr>
                  <th scope="row">2</th>
                  <td><img src="{{url('/kalimutu.jpg')}}" class="card-img-top" alt="1" style="width: 250px; height: 120px;"></td>
                  <td>Kelimutu</td>
                  <td>Sesuai namanya, gunung ini mempunyai tiga buah danau kawah dengan warna air yang berbeda-beda. Gunung Kelimutu mempunyai arti “Gunung Mendidih”. Arti itu diambil dari kata keli yang artinya gunung dan mutu yang artinya mendidih. Menurut legenda masyarakat sekitar, danau tersebut merupakan tempat angker </td>
                 <td>
                  <a class="btn btn-success" href="{{url('video')}}" >Selengkapnya</a>
                  
                  </td>
                </tr>

                <tr>
                  <th scope="row">3</th>
                  <td><img src="{{url('/ijen.jpg')}}" class="card-img-top" alt="1" style="width: 250px; height: 140px;"></td>
                  <td>Ijen</td>
                  <td>Nama Ijen mulai dikenal dunia sejak kedatangan dua turis asal Perancis, Nicolas Hulot dan istrinya Katia Kraft pada tahun 1971. Mereka menuliskan kisah pesona Kawah Ijen beserta kerasnya kehidupan para penambang bongkahan belerang di majalah Geo,Perancis. Dua hal inilah yang menjadi daya tarik utama  bagi para wisatawan dan fotografer dunia. 
Nama Gunung Ijen juga disebut-sebut tatkala seorang pangeran dari Kerajaan Wilis bergerilya melawan VOC dari balik lereng pegunungan Ijen pada masa penjajahan. Meski akhirnya kalah, kisah  ini membuktikan Ijen sebagai tempat persembunyian yang ideal bagi para pejuang Blambangan. Tanahnya yang bergunung-gunung dan dipenuhi hutan lebat, sungguh menakutkan bagi orang luar. Kesan angker begitu melekat di wilayah tak bertuan ini.</td>
                 <td>
                  <a class="btn btn-success" href="{{url('video')}}" >Selengkapnya</a>
                  
                  </td>
                </tr>

                <tr>
                  <th scope="row">4</th>
                  <td><img src="{{url('/bromo.jpg')}}" class="card-img-top" alt="1" style="width: 250px; height: 120px;"></td>
                  <td>Bromo</td>
                  <td>Gunung Bromo berasal dari nama Brahma yaitu Gunung yang dianggap Suci oleh masyarakat suku tengger. Kemudian orang jawa menyebutnya Gunung Bromo. Suku tengger  adalah masyarakat asli yang berada di kawasan kaki gunung bromo semeru yang berasal dari penduduk pribumi kerajaan majapahit.</td>
                 <td>
                  <a class="btn btn-success" href="{{url('video')}}" >Selengkapnya</a>
                  
                  </td>
                </tr>

                <tr>
                  <th scope="row">5</th>
                  <td><img src="{{url('/rinjani.jpg')}}" class="card-img-top" alt="1" style="width: 250px; height: 120px;"></td>
                  <td>Rinjani</td>
                  <td>Nama Gunung Rinjani  dari beberapa data disampaikan berasal dari nama Dewi Rinjani yang merupakan anak Datu Taun dan Dewi Mas (Saroni.tt:28). Namun, data lainnya menyatakan bahwa nama Gunung Rinjani sangat mungkin berasal dari kata Rara Anjani yang berubah menjadi Renjani dan selanjutnya menjadi Rinjani seperti yang dikenal sekarang ini (Herman dkk, 1990/1991:23)</td>
                 <td>
                  <a class="btn btn-success" href="{{url('video')}}" >Selengkapnya</a>
                  
                  </td>
                </tr>

                <tr>
                  <th scope="row">6</th>
                  <td><img src="{{url('/kerinci.jpg')}}" class="card-img-top" alt="1" style="width: 250px; height: 120px;"></td>
                  <td>Kerinci</td>
                  <td>Gunung Kerinci tercatat meletus pertama kali pada tahun 1838.  Letusan tersebut berasal dari kawah pusat Gunung Kerinci.  Setidaknya, selama tahun 1800-an atau abad ke 19, gunung ini telah meletus sebanyak lima kali.  Selain itu, pada 19 Januari dan 18 Maret 1938, terjadi letusan preatik di kawah pusat yang membentuk kerucut kecil di dasar kawah.
</td>
                 <td>
                  <a class="btn btn-success" href="{{url('video')}}" >Selengkapnya</a>
                  
                  </td>
                </tr>


              </tbody>

            </table>



@endsection()