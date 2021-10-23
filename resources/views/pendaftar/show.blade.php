@extends('layouts.admin')

@section('content')

@include('pesan')
<div class="content-wrapper-before"></div>
<div class="content-header row">
	<div class="content-header-left col-md-5 col-12 mb-2">
		<h3 class="content-header-title" style="text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.8); font-size: 22px">Detail Pendaftar Beasiswa</h3>
	</div>
	<div class="content-header-right col-md-7 col-12">
		<div class="breadcrumbs-top float-md-right">
			<div class="breadcrumb-wrapper mr-1">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a>
					</li>
					<li class="breadcrumb-item active">detail pendaftar
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
					<h4 class="card-title">Detail Pendaftar Beasiswa</h4>
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
							<table class="table table-striped" style="color: black">
								<thead>
									<tr>
										<th colspan="2">Attribute</th>
										<th>Value</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td colspan="3" style="font-size: 20px; font-weight: bold">Data Pribadi</td>
									</tr>
									<tr>
										<td width="300">No. Pendaftaran</td>
										<td width="20">:</td>
										<td>{{ $data->pendaftar_id }}</td>
									</tr>
									<tr>
										<td width="300">Nama</td>
										<td>:</td>
										<td>{{ $data->nama }}</td>
									</tr>
									<tr>
										<td width="300">Tempat, Tanggal lahir</td>
										<td>:</td>
										<td>{{ $data->tempat_lahir}}, {{ date("d F Y", strtotime($data->tanggal_lahir)) }}</td>
									</tr>
									<tr>
										<td width="300">Jenis Kelamin</td>
										<td>:</td>
										<td>{{ $data->jenis_k }}</td>
									</tr>
									<tr>
										<td width="300">Agama</td>
										<td>:</td>
										<td>{{ $data->agama }}</td>
									</tr>
									<tr>
										<td width="300">No. Telepon</td>
										<td>:</td>
										<td>{{ $data->no_telp }}</td>
									</tr>
									<tr>
										<td width="300">Alamat</td>
										<td>:</td>
										<td>{{ $data->alamat }}</td>
									</tr>
									<tr>
										<td colspan="3" style="font-size: 20px; font-weight: bold">Data Pendidikan</td>
									</tr>
									<tr>
										<td width="300">Nim</td>
										<td>:</td>
										<td>{{ $data->nim }}</td>
									</tr>
									<tr>
										<td width="300">Fakultas</td>
										<td>:</td>
										<td>{{ $data->fakultas }}</td>
									</tr>
									<tr>
										<td width="300">Program Studi</td>
										<td>:</td>
										<td>{{ $data->prodi }}</td>
									</tr>
									<tr>
										<td width="300">Total SKS</td>
										<td>:</td>
										<td>{{ $data->total_sks }}</td>
									</tr>
									<tr>
										<td width="300">Semester</td>
										<td>:</td>
										<td>{{ $data->semester }}</td>
									</tr>
									<tr>
										<td width="300">IPK</td>
										<td>:</td>
										<td>{{ $data->ipk }}</td>
									</tr>
									<tr>
										<td width="300">Prestasi</td>
										<td>:</td>
										<td>{{ $data->prestasi }}</td>
									</tr>
									<tr>
										<td colspan="3" style="font-size: 20px; font-weight: bold">Data Keluarga</td>
									</tr>
									<tr>
										<td width="300">Nama Ayah</td>
										<td>:</td>
										<td>{{ $data->nama_ayah }}</td>
									</tr>
									<tr>
										<td width="300">Pekerjaan Ayah</td>
										<td>:</td>
										<td>{{ $data->pekerjaan_ayah }}</td>
									</tr>
									<tr>
										<td width="300">Nama Ibu</td>
										<td>:</td>
										<td>{{ $data->nama_ibu }}</td>
									</tr>
									<tr>
										<td width="300">Pekerjaan Ibu</td>
										<td>:</td>
										<td>{{ $data->pekerjaan_ibu }}</td>
									</tr>
									<tr>
										<td width="300">Jumlah Tanggungan</td>
										<td>:</td>
										<td>{{ $data->jumlah_tanggungan }}</td>
									</tr>
									<tr>
										<td width="300">Penghasilan Orang Tua</td>
										<td>:</td>
										<td>Rp. {{ number_format($data->penghasilan) }}</td>
									</tr>
									<tr>
										<td>Keputusan Beasiswa</td>
										<td>:</td>
										<?php ($data->daftar->keputusan == "LAYAK") ? $warna = 'green' : $warna = 'red' ?>
										<td style="color: <?= $warna ?>; font-weight: bold">{{ $data->daftar->keputusan }}</td>
									</tr>
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