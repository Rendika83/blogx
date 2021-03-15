@extends('/layout/main')

@section('judul', 'ABOUT')

  
@section('isi')
<br>
<a class="btn btn-success" style="width: 100px; height: 40px; text-align: center;" href="{{ url('/') }}" role="button">Back</a>
<a class="btn btn-success" style="width: 100px; height: 40px; text-align: center;" href="{{ url('/data') }}" role="button">Next</a>

<h2>Halaman About</h2>
<br>
<h3><p style="text-align: center;">Berikut 6 Pegunungan di Indonesia yang sudah dikenali diseluruh Dunia</p>
</h3>
<br>

<div class="container">
  <div class="row">
    <div class="col-sm">
          <div class="card" style="width: 18rem;">
            <img src="{{url('/jaya.jpg')}}" class="card-img-top" alt="1">
        
          <div class="card-body">
            <h5 class="card-title">1. Gunung Jaya Wijaya</h5>
            <p class="card-text">Termasuk dalam seven summits alias 7 puncak tertinggi di dunia dari 7 benua, Puncak Cartensz atau lebih dikenal Cartensz Pyramid memiliki ketinggian 4.884 mdpl. Karena ketinggiannya tersebut</p>
            
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
            Selengkapnya
            </button>
          </div>
          
          </div>

    </div>
    <div class="col-sm">
          <div class="card" style="width: 18rem;">
            <img src="{{url('/kalimutu.jpg')}}" class="card-img-top" alt="1">
        
          <div class="card-body">
            <h5 class="card-title">2. Gunung Kelimutu</h5>
            <p class="card-text">Gunung yang terkenal ketiga danau kawahnya ini memang begitu banyak menarik wisatawan dunia, karena warna air danaunya tersebut yang dapat berubah-berubah warna.
            Adapun perubahan warnanya pernah berwarna putih, bahkan hitam.</p>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal2">Selengkapnya</a>
          
          </div>
        
          </div>
    </div>

    <div class="col-sm">
          <div class="card" style="width: 18rem;">
            <img src="{{url('/ijen.jpg')}}" class="card-img-top" alt="1">
        
          <div class="card-body">
            <h5 class="card-title">3. Gunung Ijen</h5>
            <p class="card-text">Gunung yang satu ini terkenal di kalangan wisatawan asing karena semburan api berwarna biru di kawahnya. Tak heran hal ini cukup menarik perhatian wisatawan asing, karena semburan blue fire hanya ada di dua lokasi di dunia, yakni di Eslandia dan di Ijen.</p>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal3">Selengkapnya</a>
          </div>
        
          </div>
    </div>

    
    </div>
<br>
    <div class="row">
    <div class="col-sm">
          <div class="card" style="width: 18rem;">
            <img src="{{url('/bromo.jpg')}}" class="card-img-top" alt="1">
        
          <div class="card-body">
            <h5 class="card-title">4. Gunung Bromo</h5>
            <p class="card-text">Keindahan gunung bromo di mata dunia sudah tidak diragukan lagi, 
            terbukti di tahun 2017 lalu wisatawan mancanegara yang berkunjung ke Gunung Bromo hampir mencapai 23 ribu pengunjung. Meski merupakan gunung berapi yang masih aktif, namun Gunung bromo ini termasuk 3 gunung terbaik di dunia  </p>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal4">Selengkapnya</a>
          </div>
        
          </div>

    </div>
    <div class="col-sm">
          <div class="card" style="width: 18rem;">
            <img src="{{url('/rinjani.jpg')}}" class="card-img-top" alt="1">
        
          <div class="card-body">
            <h5 class="card-title">5. Gunung Rinjani</h5>
            <p class="card-text">Gunung Rinjani yang begitu megah dan indah memang sudah tidak asing lagi dimata para pendaki, 
            termasuk para pendaki mancanegara. Salah satu yang membuat Gunung Rinjani tampak begitu indah dan megah adalah karena keberadaan Danau Segara Anak yang terletak di atas gunung Rinjani. </p>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal5">Selengkapnya</a>
          </div>
        
          </div>
    </div>

    <div class="col-sm">
          <div class="card" style="width: 18rem;">
            <img src="{{url('/kerinci.jpg')}}" class="card-img-top" alt="1">
        
          <div class="card-body">
            <h5 class="card-title">6. Gunung Kerinci</h5>
            <p class="card-text">Gunung Kerinci merupakan gunung berapi aktif tertinggi se-Asia Tenggara. Gunung Kerinci dengan ketinggian 3.805 mdpl ini masih begitu asri. 
            Bahkan kita akan disuguhkan oleh pemandangan kawah dengan air berwarna kekuningan yang sungguh mempesona. </p>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal6">Selengkapnya</a>
          </div>
        
          </div>
    </div>

    

    
    </div>
  </div>



@endsection()
   

<!-- modal 1 -->    
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gunung Jaya Wijaya</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <table class="table">
              <thead class="table-dark">
                 <tr style="text-align: center;">
                  <th scope="col">No</th>
                  <th scope="col">Lokasi</th>
                  <th scope="col">Sejarah</th>
                  <th scope="col">Tinggi Puncak</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Papua</td>
                  <td>Menurut Hari, Pegunungan Jayawijaya terbentuk saat terjadi benturan antara lempeng benua Australia dengan Lempeng Pasifik pada Zaman Miocene Tengah. “Itu sekitar 15 juta tahun yang lalu,” ujar dia kepada Tempo </td>
                  <td>4.484 meter</td>                
                 
                  
                </tr>
                </tbody>

            </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- modal 2 -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gunung Kelimutu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <table class="table">
              <thead class="table-dark">
                 <tr style="text-align: center;">
                  <th scope="col">No</th>
                  <th scope="col">Lokasi</th>
                  <th scope="col">Sejarah</th>
                  <th scope="col">Tinggi Puncak</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">2</th>
                  <td>Pulau Flores, NTT</td>
                  <td>Sesuai namanya, gunung ini mempunyai tiga buah danau kawah dengan warna air yang berbeda-beda. Gunung Kelimutu mempunyai arti “Gunung Mendidih”. Arti itu diambil dari kata keli yang artinya gunung dan mutu yang artinya mendidih. Menurut legenda masyarakat sekitar, danau tersebut merupakan tempat angker </td>
                  <td>1.639 meter</td>
                 
                  
                </tr>
                </tbody>

            </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- modal 3 -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gunung Ijen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <table class="table">
              <thead class="table-dark">
                 <tr style="text-align: center;">
                  <th scope="col">No</th>
                  <th scope="col">Lokasi</th>
                  <th scope="col">Sejarah</th>
                  <th scope="col">Tinggi Puncak</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">3</th>
                  <td>Perbatasan antara Banyuwangi dengan Bondowoso</td>
                  <td>Nama Ijen mulai dikenal dunia sejak kedatangan dua turis asal Perancis, Nicolas Hulot dan istrinya Katia Kraft pada tahun 1971. Mereka menuliskan kisah pesona Kawah Ijen beserta kerasnya kehidupan para penambang bongkahan belerang di majalah Geo,Perancis. Dua hal inilah yang menjadi daya tarik utama  bagi para wisatawan dan fotografer dunia. 
Nama Gunung Ijen juga disebut-sebut tatkala seorang pangeran dari Kerajaan Wilis bergerilya melawan VOC dari balik lereng pegunungan Ijen pada masa penjajahan. Meski akhirnya kalah, kisah  ini membuktikan Ijen sebagai tempat persembunyian yang ideal bagi para pejuang Blambangan. Tanahnya yang bergunung-gunung dan dipenuhi hutan lebat, sungguh menakutkan bagi orang luar. Kesan angker begitu melekat di wilayah tak bertuan ini.</td>                  <td>2.779 meter</td>
                 
                  
                </tr>
                </tbody>

            </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- modal 4 -->
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gunung Bromo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <table class="table">
              <thead class="table-dark">
                 <tr style="text-align: center;">
                  <th scope="col">No</th>
                  <th scope="col">Lokasi</th>
                  <th scope="col">Sejarah</th>
                  <th scope="col">Tinggi Puncak</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">4</th>
                  <td>Jawa Timur</td>
                  <td>Gunung Bromo berasal dari nama Brahma yaitu Gunung yang dianggap Suci oleh masyarakat suku tengger. Kemudian orang jawa menyebutnya Gunung Bromo. Suku tengger  adalah masyarakat asli yang berada di kawasan kaki gunung bromo semeru yang berasal dari penduduk pribumi kerajaan majapahit.</td>
                  <td>2.329 meter</td>
                 
                  
                </tr>
                </tbody>

            </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gunung Rinjani</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <table class="table">
              <thead class="table-dark">
                 <tr style="text-align: center;">
                  <th scope="col">No</th>
                  <th scope="col">Lokasi</th>
                  <th scope="col">Sejarah</th>
                  <th scope="col">Tinggi Puncak</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">5</th>
                  <td>Lombok, NTB</td>
                  <td>Nama Gunung Rinjani  dari beberapa data disampaikan berasal dari nama Dewi Rinjani yang merupakan anak Datu Taun dan Dewi Mas (Saroni.tt:28). Namun, data lainnya menyatakan bahwa nama Gunung Rinjani sangat mungkin berasal dari kata Rara Anjani yang berubah menjadi Renjani dan selanjutnya menjadi Rinjani seperti yang dikenal sekarang ini (Herman dkk, 1990/1991:23)</td>
                  <td>3.726 meter</td>
                 
                  
                </tr>
                </tbody>

            </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gunung Kerinci</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <table class="table">
              <thead class="table-dark">
                 <tr style="text-align: center;">
                  <th scope="col">No</th>
                  <th scope="col">Lokasi</th>
                  <th scope="col">Sejarah</th>
                  <th scope="col">Tinggi Puncak</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">6</th>
                  <td>Jambi, Sumatera Barat</td>
                  <td>Gunung Kerinci tercatat meletus pertama kali pada tahun 1838.  Letusan tersebut berasal dari kawah pusat Gunung Kerinci.  Setidaknya, selama tahun 1800-an atau abad ke 19, gunung ini telah meletus sebanyak lima kali.  Selain itu, pada 19 Januari dan 18 Maret 1938, terjadi letusan preatik di kawah pusat yang membentuk kerucut kecil di dasar kawah.
                  <td>3.805 meter</td>
                 
                  
                </tr>
                </tbody>

            </table>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>