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
}
</style>
<body>

	<div class="container">
		<div class="row mt-3">
			<div class="col-lg-6 offset-3">
				<div class="card shadow-lg bg-white rounded">
					<div class="card-header">
						<p class="text-center">Pengumuman</p>
					</div>
					<div class="card-body">
						<form action="{{ route('pengumuman.store') }}" method="post">
							
							{{ csrf_field() }}
							<div class="form-group">
								<label for="">No Pendaftaran</label>
								<input type="text" name="no_daftar" class="form-control" placeholder="Masukkan nomor pendaftaran anda">
							</div>

							<button type="submit" class="btn btn-primary btn-sm">Lihat Hasil</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="{{ asset('theme-assets/js/core/libraries/bootstrap.min.js') }}"></script>
</body>
</html>