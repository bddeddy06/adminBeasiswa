@extends('layouts.admin')

@section('content')

@include('pesan')
<style>
html, body{
	color: black;
}
</style>
<div class="content-wrapper-before"></div>
<div class="content-header row">
	<div class="content-header-left col-md-5 col-12 mb-2">
		<h3 class="content-header-title" style="text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.8); font-size: 22px">Rules Hasil Klasifikasi Data Training</h3>
	</div>
	<div class="content-header-right col-md-7 col-12">
		<div class="breadcrumbs-top float-md-right">
			<div class="breadcrumb-wrapper mr-1">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a>
					</li>
					<li class="breadcrumb-item active">C4.5 Rules
					</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="content-body"><!-- Basic Tables start -->
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">C4.5 Rules</h4>
					<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
					<div class="heading-elements">
						<ul class="list-inline mb-0">
							<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
							<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
							<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
							<li><a data-action="close"><i class="ft-x"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="card-content collapse show">
					<div class="card-body" style="font-family: courier new; margin-left: 50px">
						@include('c45')

						<?php

						$data2 = [];

						$attributes = [1 => "jumlah_sks", 2 => "jumlah_tanggungan", 3 => "ipk", 4 => 'penghasilan']; 

						$no = 0;
						foreach ($data as $dt_train) {
							$data2[$no][0] = $dt_train->jumlah_sks;
							$data2[$no][1] = $dt_train->jumlah_tanggungan;
							$data2[$no][2] = $dt_train->ipk;
							$data2[$no][3] = $dt_train->penghasilan;
							$data2[$no][4] = $dt_train->KET;
							$no++;
						}  
						
						$c45 = new C45; 

						$c45->setData($data2)->setAttributes($attributes); 

						$c45->hitung(); 

						
						

						$c45->printRules();

						$tp = 0;
						$tn = 0;
						$fp = 0;
						$fn = 0;

						?>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">C4.5 Accuracy using Confusion Matrix</h4>
					<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
					<div class="heading-elements">
						<ul class="list-inline mb-0">
							<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
							<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
							<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
							<li><a data-action="close"><i class="ft-x"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="card-content collapse show">
					<div class="card-body">
						<?php  
						$koneksi = mysqli_connect("localhost","root","","db_beasiswa");
						$sql2 = "SELECT * FROM meansub_dataset ORDER BY RAND() LIMIT 25";
						$query2 = mysqli_query($koneksi,$sql2);


						?>
						<p class="text-center">Tabel Data Testing</p>
						<table class="table table-bordered">
							<thead>
								<th>No</th>
								<th>ID</th>
								<th>Jumlah Tanggungan</th>
								<th>Penghasilan Orang tua</th>
								<th>Penghasilan Jumlah SKS</th>
								<th>IPK</th>
								<th>Keputusan Asli</th>
								<th>Keputusan Klasifikasi</th>
							</thead>
							<?php $no = 1; ?>
							<?php while ($data3 = mysqli_fetch_array($query2)) : ?>
								<?php 
								$data_testing = [$data3['jumlah_sks'],$data3['jumlah_tanggungan'],$data3['ipk'],$data3['penghasilan']]; 
								$kep = $c45->predictDataTesting($data_testing); 
								if ($kep == "LAYAK" && $data3['KET'] == "layak") {
									$tp = $tp + 1;
								}elseif ($kep == "TIDAK LAYAK" && $data3['KET'] == "tidak layak") {
									$tn+=1;
								}elseif ($kep == "LAYAK" && $data3['KET'] == "tidak layak") {
									$fp+=1;
								}elseif ($kep == "TIDAK LAYAK" && $data3['KET'] == "layak") {
									$fn+=1;
								}
								?>
								<tr>
									<td><?= $no++;  ?></td>
									<td><?= $data3['id']  ?></td>
									<td><?= $data3['jumlah_sks']  ?></td>
									<td><?= $data3['penghasilan']  ?></td>
									<td><?= $data3['jumlah_tanggungan']  ?></td>
									<td><?= $data3['ipk']  ?></td>
									<td><?= $data3['KET']  ?></td>
									<td><?= $kep ?></td>
								</tr>
							<?php endwhile; ?>
						</table>
						<p style="font-size: 18px"> Menghitung Akurasi Algoritma C4.5 Menggunakan Confusion Matriks</p>
						<img src="{{ asset('theme-assets/images/con-matriks.png') }}" alt="" width="300" height="70">
						<p>Dimana : </p>
						<p>TP : True Positive ( Kasus sebenarnya +, hasil klasifikasi + ) </p>
						<p>TN : True Negative ( Kasus sebenarnya -, hasil klasifikasi - ) </p>
						<p>FP : False Positive ( Kasus sebenarnya -, hasil klasifikasi + ) </p>
						<p>FN : False Negative ( Kasus sebenarnya +, hasil klasifikasi - ) </p>
						<hr>
						<?php 
						$akurasi = (($tp + $tn)/($tp + $fp + $tn + $fn)) * 100; 
						$precision = (($tp)/($tp + $fp)) * 100;
						$recall = (($tp)/($tp + $fn)) * 100;
						?>
						<p style="font-size: 18px"> Hasil Perhitungan dengan persentase split : 80% Data Training, 20% Data Testing</p>
						<p> Jumlah kasus TP : <?= $tp ?></p>
						<p> Jumlah kasus TN : <?= $tn ?></p>
						<p> Jumlah kasus FP : <?= $fp ?></p>
						<p> Jumlah kasus FN : <?= $fn ?></p>
						<p style="font-size: 24px"> Akurasi Yang Didapat : <?= $akurasi ?> %</p>
						<p style="font-size: 24px"> Precision : <?= $precision ?> %</p>
						<p style="font-size: 24px"> Recall : <?= $recall ?> %</p>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Basic Tables end -->
</div>


@endsection