<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pengumuman Beasiswa</title>
	<link rel="stylesheet" href="{{ asset('theme-assets/css/bootstrap.min.css') }}">
</head>
<style>
html, body {
	font-family: century;
}

.card-header {
	font-size: 24px;
	font-weight: bold;
	text-transform: uppercase;
}
</style>
<body>

	<div class="container">
		<div class="row mt-3">
			<div class="col-lg-8 offset-2">
				<div class="card mb-1 shadow-lg rounded">
					<div class="card-header text-center">
						Data Pendaftar
					</div>
					<div class="card-body">
						<table class="table table-striped table-hover">
							<tr>
								<td width="200">No. Pendaftaran</td>
								<td width="20">:</td>
								<td>{{ $data->pendaftar_id }}</td>
							</tr>
							<tr>
								<td>Nim</td>
								<td>:</td>
								<td>{{ $data->nim }}</td>
							</tr>
							<tr>
								<td>Nama</td>
								<td>:</td>
								<td>{{ $data->nama }}</td>
							</tr>
							<tr>
								<td>Tempat, Tanggal Lahir</td>
								<td>:</td>
								<td>{{ $data->tempat_lahir }}, {{ date("d F Y", strtotime($data->tanggal_lahir)) }}</td>
							</tr>
							<tr>
								<td>Fakultas</td>
								<td>:</td>
								<td>{{ $data->fakultas }}</td>
							</tr>
							<tr>
								<td>Program Studi</td>
								<td>:</td>
								<td>{{ $data->prodi }}</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="card text-white {{ ($data->daftar->keputusan == 'LAYAK') ? 'bg-success' : 'bg-danger' }} mb-3 shadow-lg rounded">
					<div class="card-header {{ ($data->daftar->keputusan == 'LAYAK') ? 'bg-success' : 'bg-danger' }} text-center">{{ ($data->daftar->keputusan == 'LAYAK') ? 'selamat' : 'mohon maaf' }}</div>
					<div class="card-body">
						<h5 class="card-title" style="color: white;">Anda dengan nomor pendaftaran <strong>{{ $data->pendaftar_id }}</strong></h5>
						<p class="card-text">Dinyatakan <strong>{{ $data->daftar->keputusan }}</strong> dalam proses seleksi penerimaan beasiswa PPA tahun anggaran 2019/2020</p>

						@if($data->daftar->keputusan == 'TIDAK LAYAK')
						<p>Mohon untuk tidak berkecil hati, dan silahkan coba lagi di tahun depan</p>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="{{ asset('theme-assets/js/core/libraries/bootstrap.min.js') }}"></script>
</body>
</html>