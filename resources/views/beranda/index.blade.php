@extends('layouts.admin')

@section('content')

@include('pesan')
<div class="content-wrapper-before"></div>
<div class="content-header row">
	<div class="content-header-left col-md-5 col-12 mb-2">
		<h3 class="content-header-title" style="text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.8); font-size: 22px">BERANDA</h3>
	</div>
	<div class="content-header-right col-md-7 col-12">
		<div class="breadcrumbs-top float-md-right">
			<div class="breadcrumb-wrapper mr-1">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/beranda" style="text-transform: uppercase;">Beranda</a>
					</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="content-body"><!-- Chart -->
	<div class="row">
		<div class="col-xl-4 col-lg-6 col-md-12">
			<div class="card pull-up ecom-card-1 bg-white">
				<div class="card-content ecom-card2 height-180">
					<h5 class="text-muted danger position-absolute p-1">Data Training Unclassified</h5>
					<div>
						<i class="ft-pie-chart danger font-large-1 float-right p-1"></i>
					</div>
					<div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
						<p class="text-center danger" style="font-weight: 500; font-size: 60px; text-shadow: 2px 2px 2px rgba(0,0,0,0.6); margin-top: 20px;">{{ $data }}</p>

					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-md-12">
			<div class="card pull-up ecom-card-1 bg-white">
				<div class="card-content ecom-card2 height-180">
					<h5 class="text-muted success position-absolute p-1">Data Training Classified</h5>
					<div>
						<i class="ft-pie-chart success font-large-1 float-right p-1"></i>
					</div>
					<div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
						<p class="text-center success" style="font-weight: 500; font-size: 60px; text-shadow: 2px 2px 2px rgba(0,0,0,0.6); margin-top: 20px;">{{ $data_c }}</p>

					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-md-12">
			<div class="card pull-up ecom-card-1 bg-white">
				<div class="card-content ecom-card2 height-180">
					<h5 class="text-muted info position-absolute p-1">Jurusan</h5>
					<div>
						<i class="ft-activity info font-large-1 float-right p-1"></i>
					</div>
					<div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
						<p class="text-center info" style="font-weight: 500; font-size: 60px; text-shadow: 2px 2px 2px rgba(0,0,0,0.6); margin-top: 20px;">{{ $jurusan }}</p>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection