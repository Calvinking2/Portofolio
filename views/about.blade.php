@extends('/layout/main')


@section('judul','About')
  
@section('isi')

  <div class="container">

    <div class="row">
      <div class="col">
        <div class="text-white text-zone">
          <div class="text-zone-content">
            <h1>About Me</h1>
            <span>
              Halo nama saya Calvin, saya dalah seorang programmer dari sekolah SMK Telkom
              Saya bisa memprogram dengan bahasa Java,Pyhton dan sedikit C++ tidak hanya itu saya juga bisa mendesign web
              And if you are visiter from outside Indonesia, don't worry i can speak English well
            </span>
          </div>    
        </div>
      </div>
      <div class="col">
        <div class="main">
          <img src="/images/me.png" class="img-fluid w-75" style="  filter: grayscale(100%);" alt="IT'S ME"></img>
        </div>
      </div>
    </div>

    <div class="container text-white" style="margin-left: 230px;width: 90%;">
      <h1 class="text-center text-white" style="padding-right: 70px;">Pendidikan</h1>
      <div class="row row-cols-1 row-cols-md-3 g-4 mt-4" >
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">SD</h5>
              <p class="card-text">Saya Bersekolah di SD Santo Fransiskus selama 6 tahun disana</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">SMP</h5>
              <p class="card-text">Saya bersekolah di SMP Santo Fransiskus selama 3 tahun</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">SMK</h5>
              <p class="card-text">Saya bersekolah di SMK Telkom Jakarta berjurusan Rekayasa Perangkat Lunak dan mudah-mudahan lulus :v</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Kuliah</h5>
              <p class="card-text">Coming soon to Binus</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <br>
  <br>


@endsection


