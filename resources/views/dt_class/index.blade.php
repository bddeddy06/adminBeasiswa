@extends('layouts.admin')

@section('content')

@include('pesan')
<div class="content-wrapper-before"></div>
<div class="content-header row">
	<div class="content-header-left col-md-5 col-12 mb-2">
		<h3 class="content-header-title" style="text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.8); font-size: 22px">Data Training Beasiswa PPA Hasil Klasifikasi</h3>
	</div>
	<div class="content-header-right col-md-7 col-12">
		<div class="breadcrumbs-top float-md-right">
			<div class="breadcrumb-wrapper mr-1">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a>
					</li>
					<li class="breadcrumb-item active">Dataset PPA Hasil Klasifikasi
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
					<h4 class="card-title">Dataset Training</h4>
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
						@include('pesan')

						<div class="table-responsive">
							<table class="table table-bordered table-striped table-hover data" style="color: black">
								<thead class="bg-gradient-x-blue-cyan" style="color: white; font-weight: 500;">
									<tr>
										<th>No</th>
										<th>Jumlah Tanggungan</th>
										<th>Penghasilan Orang Tua</th>
										<th>Jumlah SKS</th>
										<th>IPK</th>
										<th>Keterangan</th>
									</tr>
								</thead>
								<tbody>
									@foreach($data as $dt)
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $dt->jumlah }}</td>
										<td>{{ $dt->penghasilan_ortu }}</td>
										<td>{{ $dt->jumlah_sks }}</td>
										<td>{{ $dt->ipk }}</td>
										<td>{{ $dt->keterangan }}</td>
									</tr>
									@endforeach

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Basic Tables end -->
</div>


@endsection