@extends('layouts.user')


@section('user-content')


<link href="{{ asset('theme-assets/sweetalert/sweetalert2.css') }}" rel="stylesheet">
<script src="{{ asset('theme-assets/sweetalert/sweetalert2.js') }}"></script>
@include('pesan')
<!-- Navbar -->
<nav class="navbar sticky-top navbar-expand-lg navbar-light">
	<div class="container">
		<a class="navbar-brand page-scroll" href="#home">BeasiswaApps</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav ml-auto">
				<a class="nav-item nav-link page-scroll" href="#home"><span class="fa fa-home"></span> Home</a>
				<a class="nav-item nav-link page-scroll" href="#card"><span class="fa fa-university"></span> Beasiswa</a>
        <a class="nav-item nav-link page-scroll" href="#testimoni"><span class="fa fa-info-circle"></span> About</a>
        <a class="nav-item nav-link page-scroll" href="{{ route('pengumuman.index') }}"><span class="fa fa-info-circle"></span> Pengumuman</a>
        @if(Route::has('login'))
        @auth
        <a class="nav-item nav-link page-scroll" href="{{ route('beranda.index') }}"><span class="fa fa-sign-in"></span> Admin page</a>
        @else
        <a class="nav-item nav-link page-scroll" href="{{ route('login') }}"><span class="fa fa-sign-in"></span> Admin Login</a>
        @endauth
        @endif

      </div>
    </div>
  </div>
</nav>
<!-- Akhir Navbar -->

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid back">
	<div class="container">
		<h1 class="display-4">Ayo <span>Daftarkan</span> Dirimu<br></h1>
		<a href="" class="btn btn-primary tombol"><span class="fa fa-check-circle"> Sign In to Our Newsletter</span></a>
	</div>
</div>
<!-- Akhir Jumbotron -->

<!-- Container -->
<div class="container">

	<!-- Info Panel -->
	<div class="row justify-content-center">
		<div class="col-10 info-panel">
			<div class="row">
				<div class="col-lg">
					<img src="{{ asset('theme-assets/user/img/choose.png') }}" alt="employee" class="float-left">
					<h4>choose</h4>
					<p>Pilih beasiswa yang<br>kamu inginkan</p>
				</div>
				<div class="col-lg">
					<img src="{{ asset('theme-assets/user/img/signup.jpg') }}" alt="High-Res" class="float-left">
					<h4>sign up</h4>
					<p>Daftar dan isi biodata dirimu dengan benar</p>
				</div>
				<div class="col-lg">
					<img src="{{ asset('theme-assets/user/img/enjoy.jpg') }}" alt="Security" class="float-left">
					<h4>enjoy</h4>
					<p>Nikmati Manfaat Beasiswanya</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Akhir Info Panel -->

	<!-- Workingspace -->
    <!-- <div class="row workingspace">
      <div class="col-lg-6">
        <img src="img/workingspace.png" alt="Workingspace" class="img-fluid">
      </div>
      <div class="col-lg-5">
        <h3>you <span>work</span> like at <span>home</span></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, ex. Nobis rem illo cum, sit!</p>
        <a href="" class="btn btn-primary tombol">Gallery</a>
      </div>
    </div> -->
    <section class="beasiswa" id="card">
      <?php 

      $kon = mysqli_connect("localhost","root","","db_beasiswa");
      $query = mysqli_query($kon,"SELECT * FROM info_beasiswa");
      $data = mysqli_fetch_array($query,MYSQLI_ASSOC);
      date_default_timezone_set('Asia/Jakarta');
      $today = strtotime(date("Y-m-d"));
      $tgl_akhir = strtotime($data['tgl_berakhir']);

      if($today < $tgl_akhir){
        $rute = "/daftarppa";
      }else{
        $rute = "/gagaldaftar";
      }
      ?>
      <h1>Beasiswa Yang Tersedia</h1>
      <div class="kontain">
        <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="kartu">

            <a href="<?= $rute ?>"><h2><span class="fa fa-money"> PPA</span></h2></a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="kartu">
          <a href="bidikmisi.html"><h2> <span class="fa fa-gg"> Bidikmisi</span></h2></a>
        </div>
      </div>

    </div>
  </div>    
</section>
<!-- Akhir Workingspace -->

<!-- Testimonial -->
<section class="testimonial" id="testimoni">
  <div class="row justify-content-center">
    <div class="col-lg-8">
    <h5>"Barang siapa yang menapaki suatu jalan dalam rangka menuntut ilmu, maka Allah akan memudahkan baginya jalan menuju surga." (HR. Ibnu Majah & Abu Dawud)</h5>
  </div>
</div>
<div class="row justify-content-center">
  <div class="col-lg-6 justify-content-center d-flex">
  <figure class="figure">
    <img src="{{ asset('theme-assets/user/img/img4.jpg') }}" class="figure-img img-fluid rounded-circle utama" alt="Testi 2">
    <figcaption class="figure-caption">
    <h5>Abdurraghib Segaf Suweleh</h5>
    <p style="margin-top: 10px">Web Designer</p>
  </figcaption>
</figure>
</div>
</div>
</section>
<!-- Akhir Testimonial -->

<!-- Footer -->
<div class="row footer">
 <div class="col text-center">
  <p style="margin-bottom: 20px">&copy; 2020<strong><a href="https://universitasbumigora.ac.id/"> Universitas Bumigora</a></strong>. All Right Reserved</p>
</div>
</div>
<!-- Akhir Footer -->

</div>
<!-- Akhir Container -->
@endsection