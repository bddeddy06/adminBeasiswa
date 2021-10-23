<link href="{{ asset('theme-assets/sweetalert/sweetalert2.css') }}" rel="stylesheet">



@if ($message = Session::get('success'))
<script>

	Swal.fire({
		position: 'center',
		type: 'success',
		title: '<?= $message ?>',
		showConfirmButton: false,
		timer: 2000
	})
	
</script>
@endif

@if ($message = Session::get('berhasil'))
<script>

	Swal.fire({
		position: 'center',
		type: 'success',
		title: '<?= $message ?>',
		text: 'Silahkan Cek Email Anda Untuk Detail Pendaftaran',
		showConfirmButton: true,
	})
	
</script>
@endif

@if ($message = Session::get('gagal'))
<script>

	Swal.fire({
		position: 'center',
		type: 'success',
		title: '<?= $message ?>',
		text: 'Email Gagal Dikirim. Cek Koneksi Internet Anda',
		showConfirmButton: true,
	})
	
</script>
@endif

@if ($message = Session::get('daftar'))
<script>

	Swal.fire({
		position: 'center',
		type: 'error',
		title: '<?= $message ?>',
		text: 'Silahkan Daftar Kembali Pada Semester Selanjutnya',
		showConfirmButton: true,
	})
	
</script>
@endif


<script src="{{ asset('theme-assets/sweetalert/sweetalert2.js') }}"></script>