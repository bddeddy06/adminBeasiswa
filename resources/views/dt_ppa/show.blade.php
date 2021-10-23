@extends('layouts.admin')

@section('content')

<div class="content-wrapper-before"></div>
<div class="content-header row">
	<div class="content-header-left col-md-5 col-12 mb-2">
		<h3 class="content-header-title" style="text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.8); font-size: 22px">Data Mahasiswa {{ $data_mhs->nim }}</h3>
	</div>
	<div class="content-header-right col-md-7 col-12">
		<div class="breadcrumbs-top float-md-right">
			<div class="breadcrumb-wrapper mr-1">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Home</a>
					</li>
					<li class="breadcrumb-item active">Tables
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
					<h4 class="card-title">Detail Data Mahasiswa</h4>
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

						<div class="table-responsive">
							<table class="table table-striped table-hover" style="color: black">
								<thead>
									<tr>
										<th width="350">Atribute</th>
										<th>Value</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Nim</td>
										<td>{{ $data_mhs->nim }}</td>
									</tr>
									<tr>
										<td>Nama</td>
										<td>{{ $data_mhs->nama }}</td>
									</tr>
									<tr>
										<td>Program Studi</td>
										<td>{{ $data_mhs->prodi }}</td>
									</tr>
									<tr>
										<td>Nim</td>
										<td>{{ $data_mhs->nim }}</td>
									</tr>
									<tr>
										<td>Jumlah Tanggungan</td>
										<td>{{ $data_mhs->jml_tanggungan }}</td>
									</tr>
									<tr>
										<td>Penghasilan Orang Tua</td>
										<td>Rp. {{ number_format($data_mhs->penghasilan_ortu)  }},-</td>
									</tr>
									<tr>
										<td>Pekerjaan Orang Tua</td>
										<td>{{ $data_mhs->pekerjaan_ortu }}</td>
									</tr>
									<tr>
										<td>Jumlah SKS yang Diambil</td>
										<td>{{ $data_mhs->jml_sks }}</td>
									</tr>
									<tr>
										<td>IPK</td>
										<td>{{ $data_mhs->ipk }}</td>
									</tr>
									<tr>
										<td>Aktif UKM / Sertifikat</td>
										<td>{{ $data_mhs->sertifikat }}</td>
									</tr>
									<tr>
										<td>Keterangan Beasiswa</td>
										<td>{{ $data_mhs->keterangan }}</td>
									</tr>
								</tbody>
							</table>
							<a href="/dt_ppa" class="badge badge-primary" style="margin-left: 20px; "><span class="la la-arrow-circle-left" style="font-size: 16px"> Kembali</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Basic Tables end -->
</div>

@endsection