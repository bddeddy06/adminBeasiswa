<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Pendaftaran Beasiswa</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>
	<link href="{{ asset('theme-assets/sweetalert/sweetalert2.css') }}" rel="stylesheet">

</head>
<style>
html, body{
	font-family: century;
}
.card-header {
	
	font-size: 24px;
	font-weight: bold;
	border-bottom: 2px solid #6B6F80;
	text-shadow: 2px 2px 2px rgba(0,0,0,0.1);
}

.input {
	border-radius: 20px;
}

label {
	margin-left: 15px;
}

.jumbotron{
	background: linear-gradient(-135deg, #87CEFA, #483D8B);
}

.display-4 {
	color: white;
}
.syarat {
	font-size: 18px;
}

</style>
<body>
	@include('pesan')
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4 text-center" style="color: white">FORM PENDAFTARAN BEASISWA</h1>
			<h5 class="display-4 text-center" style="color: white">Tolong Isi Form yang Kosong dengan Data yang Sebenar - benarnya</h5>
		</div>
	</div>
	<form action="{{ route('daftarppa.store') }}" method="post">

		{{ csrf_field() }}

		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="card shadow-lg bg-white rounded">
						<div class="card-header text-center">
							Data Pribadi
						</div>
						<div class="card-body">
							<div class="form-group">
								<?php
								$connect = mysqli_connect("localhost","root","","db_beasiswa");
								$mahasiswa=mysqli_query($connect, "SELECT * FROM list_mahasiswa");
								$jsArray = "var mahasiswa = new Array();\n"; 

								?>
								<label for="">Nim</label>
								<select name="nim" onchange="changeValue(this.value)" class="form-control selectpicker" data-live-search="true" data-live-search-style="startWith">
									<option value="">--- Cari Nim Anda ---</option>
									<?php while($mhs = mysqli_fetch_array($mahasiswa)) { ?>
										<option data-tokens="<?= $mhs['nim'] ?>" value="<?= $mhs['nim']  ?>"><?= $mhs['nim'] ?></option>
										<?php $jsArray .= "mahasiswa['" . $mhs['nim'] . "'] = {nama:'" . addslashes($mhs['nama'])."',tempatlahir:'" . addslashes($mhs['tempat_lahir'])."',jeniskelamin:'" . addslashes($mhs['jenis_kelamin'])."',agama:'" . addslashes($mhs['agama_pendaftar'])."',notelp:'" . addslashes($mhs['telepon'])."',alamat:'" . addslashes($mhs['alamat'])."',prodi:'" . addslashes($mhs['jurusan'])."',namaayah:'" . addslashes($mhs['nama_ayah'])."',pekerjaanayah:'" . addslashes($mhs['pekerjaan_ayah'])."',namaibu:'" . addslashes($mhs['nama_ibu'])."'};\n"; ?>
									<?php } ?>
								</select>
								
							</div>
							<div class="form-group">
								<label for="">Tempat Lahir</label>
								<input type="text" class="form-control input" name="tempatlahir" id="tempatlahir" readonly>
							</div>
							<div class="form-group">
								<label for="">Tanggal Lahir</label>
								<input type="date" class="form-control input" name="tgllahir" id="tanggallahir">
							</div>
							<div class="form-group">
								<label for="" style="margin-left: -5px">Jenis Kelamin : </label>
								<input type="text" class="form-control input" id="jk" name="jenis_k" readonly>
								
							</div>
							<div class="form-group"  style="margin-top: -10px">
								<label for="">Agama</label>
								<input type="text" class="form-control input" name="agama"  id="agama" readonly>
							</div>
							<div class="form-group">
								<label for="">Nomor Telepon</label>
								<input type="text" class="form-control input" name="no_telp" id="notelp" readonly>
							</div>
							<div class="form-group">
								<label for="">Alamat</label>
								<textarea name="alamat" class="form-control input" id="alamat" rows="8" readonly></textarea>
							</div>

						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card shadow-lg bg-white rounded">
						<div class="card-header text-center">
							Data Pendidikan
						</div>
						<div class="card-body">
							<div class="form-group">
								<label for="">Nama</label>
								<input type="text" class="form-control input" name="nama" id="nama" readonly>
							</div>
							<div class="form-group">
								<label for="">Fakultas</label>
								<select name="fakultas" id="" class="form-control input">
									<option value="Teknik dan Kesehatan">Teknik dan Kesehatan</option>
									<option value="Ilmu Sosial dan Humaniora">Ilmu Sosial dan Humaniora</option>
								</select>
							</div>
							<div class="form-group">
								<label for="">Program Studi</label>
								<input type="text" class="form-control input" name="prodi" id="prodi" readonly>
							</div>
							<div class="form-group">
								<label for="">Jumlah SKS Semester ini</label>
								<input type="text" class="form-control input" name="jumlah_sks" id="prodi" placeholder="Masukkan jumlah sks" required>
							</div>
							<div class="form-group">
								<label for="">Semester</label>
								<input type="text" class="form-control input" name="semester" placeholder="Masukkan semester" required>
							</div>
							<div class="form-group">
								<label for="">IP Kumulatif</label>
								<input type="text" class="form-control input" name="ipk" placeholder="Masukkan IPK" required>
							</div>
							<div class="form-group">
								<label for="">Prestasi</label>
								<textarea name="prestasi" class="form-control input" rows="5" required></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card shadow-lg bg-white rounded">
						<div class="card-header text-center">
							Data Keluarga
						</div>
						<div class="card-body">
							<div class="form-group">
								<label for="">Nama Ayah</label>
								<input type="text" class="form-control input" name="nama_ayah" id="namaayah" readonly>
							</div>
							<div class="form-group">
								<label for="">Pekerjaan Ayah</label>
								<input type="text" class="form-control input" name="pekerjaan_ayah" id="pekerjaanayah" readonly>
							</div>
							<div class="form-group">
								<label for="">Nama Ibu</label>
								<input type="text" class="form-control input" name="nama_ibu" id="namaibu" readonly>
							</div>
							<div class="form-group">
								<label for="">Pekerjaan Ibu</label>
								<input type="text" class="form-control input" name="pekerjaan_ibu" placeholder="Masukkan pekerjaan_ibu" required>
							</div>
							<div class="form-group">
								<label for="">Jumlah Tanggungan</label>
								<input type="text" class="form-control input" name="jml_tanggung" placeholder="Masukkan jumlah tanggungan" required>
							</div>
							<div class="form-group">
								<label for="">Penghasilan rata - rata orang tua / bulan</label>
								<input type="text" class="form-control input" name="penghasilan_ortu" placeholder="Masukkan penghasilan orang tua" required>
							</div>
							<?php

							$connect = mysqli_connect("localhost","root","","db_beasiswa");
  								// mencari kode barang dengan nilai paling besar
							$query = "SELECT max(id) as maxKode FROM pendaftar";
							$hasil = mysqli_query($connect,$query);
							$data = mysqli_fetch_array($hasil);
							$no_reg = $data['maxKode'];

							$noUrut = (int) substr($no_reg, 3, 3);

							$noUrut++;

							$char = "DAF";
							$no_reg = $char . sprintf("%03s", $noUrut);

							?> 
							<div class="form-group">
								<label for="">Nomor Pendaftaran</label>
								<input type="text" class="form-control" style="font-weight: bold; color: black" name="no_daftar" value="<?= $no_reg ?>" readonly>
							</div>
							<div class="form-group">
								<label for="">Email</label>
								<input type="email" class="form-control" style="" name="email" required>
							</div>


							<button class="btn btn-primary" type="submit">Submit Form</button>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-2">
				<div class="col-lg-12">
					<div class="card shadow-lg bg-white rounded">
						<div class="card-body">
							<div class="container">

								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<script src="{{ asset('theme-assets/sweetalert/sweetalert2.js') }}"></script>
	<script>
		$(function() {
			$('.selectpicker').selectpicker();
		});
	</script>
	<script>
		<?php echo $jsArray; ?>
		function changeValue(nim) {
			document.getElementById("nama").value = mahasiswa[nim].nama;
			document.getElementById("tempatlahir").value = mahasiswa[nim].tempatlahir;
			document.getElementById("jk").value = mahasiswa[nim].jeniskelamin;
			document.getElementById("agama").value = mahasiswa[nim].agama;
			document.getElementById("notelp").value = mahasiswa[nim].notelp;
			document.getElementById("alamat").value = mahasiswa[nim].alamat;
			document.getElementById("prodi").value = mahasiswa[nim].prodi;
			document.getElementById("namaayah").value = mahasiswa[nim].namaayah;
			document.getElementById("pekerjaanayah").value = mahasiswa[nim].pekerjaanayah;
			document.getElementById("namaibu").value = mahasiswa[nim].namaibu;
		};
	</script>
</body>
</html>