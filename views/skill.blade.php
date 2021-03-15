@extends('/layout/main')


@section('judul','Skill')
  
@section('isi')

	<div class="container">

		<div class="container text-white " style=";margin-left: 300px;width: 80%;">
	      <h1 class="text-center text-white" style="padding-right: 30px;padding-top: 100px;">My Skill</h1>
	      <div class="row row-cols-1 row-cols-md-2 g-4 mt-4 text-center" style="background-color: #171515">
	        <div class="col d-flex justify-content-center">
	            <div class="card-body w-75">
	              <h5 class="card-title">Web Design</h5>
	              <p class="card-text">Untuk web design saya sudah cukup handal dalam UI/UX tetapi masih kurang didalam backend
	              </p>
	            </div>
	        </div>
	        <div class="col d-flex justify-content-center">
	            <div class="card-body w-75">
	              <h5 class="card-title">Game Developer</h5>
	              <p class="card-text">Coming Soon</p>
	            </div>
	        </div>
	        <div class="col d-flex justify-content-center">
	            <div class="card-body w-75">
	              <h5 class="card-title">Programming</h5>
	              <p class="card-text">Untuk Programming saya mengetahui Java,C++,Python</p>
	            </div>
	        </div>
	        <div class="col d-flex justify-content-center">
	            <div class="card-body w-75">
	              <h5 class="card-title">English</h5>
	              <p class="card-text">Untuk Bahasa Inggris saya cukup pandai dari percakapan maupun membaca</p>
	            </div>
	        </div>
	      </div>
	    </div>

	    <div class="container text-white " style=";margin-left: 300px;width: 80%;">
	    	 <h1 class="text-center text-white" style="padding-right: 30px;padding-top: 100px;">Skill Level</h1>

			<span>Web Design</span>
	    	<div class="progress">
			  <div class="progress-bar" role="progressbar"  style="width: 75%;background-color: #8739F9" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
			</div>

			<span>Game Developer</span>
			<div class="progress">
			  <div class="progress-bar" role="progressbar" style="width: 25%;background-color: #8739F9" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
			  </div>
			</div>

			<span>Programming</span>
			<div class="progress">
			  <div class="progress-bar" role="progressbar" style="width: 50%;background-color: #8739F9" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
			  </div>
			</div>

			<span>English</span>
			<div class="progress">
			  <div class="progress-bar" role="progressbar" style="width: 90%;background-color: #8739F9" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
			  </div>
			</div>

	    </div>

	    <br><br>
	    <br><br>
	    <br><br>
	    <br>
   
  	</div>

@endsection