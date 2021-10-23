@extends('layouts.admin')

@section('content')

@include('pesan')
<div class="content-wrapper-before"></div>
<div class="content-header row">
	<div class="content-header-left col-md-5 col-12 mb-2">
		<h3 class="content-header-title" style="text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.8); font-size: 22px">Info Beasiswa</h3>
	</div>
	<div class="content-header-right col-md-7 col-12">
		<div class="breadcrumbs-top float-md-right">
			<div class="breadcrumb-wrapper mr-1">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a>
					</li>
					<li class="breadcrumb-item active">Info
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
					<h4 class="card-title">Kelola Info Beasiswa</h4>
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
						<button type="button" class="btn btn-link float-right" data-toggle="modal" data-target="#myModal1" style="font-size: 20px; font-weight: bold">
							<span class="la la-plus">Tambah Data</span>
						</button>

						<!-- Modal -->
						<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<form action="{{ route('info-beasiswa.store') }}" method="post">
									{{ csrf_field() }}
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Tambah Data Jurusan</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<fieldset class="form-group">
												<label for="basicInput">Nama Beasiswa</label>
												<input type="text" class="form-control" id="basicInput" name="nama" value="{{ old('nama') }}" >
												@if($errors->has('nama'))
												<div class="invalid-feedback" style="font-size: 12px; font-style: italic; font-family: arial">
													
													{{ $errors->first('nama') }}
													
												</div>
												@endif
											</fieldset>
											<fieldset class="form-group">
												<label for="basicInput">Tanggal Mulai</label>
												<input type="date" class="form-control" id="basicInput" name="tgl_mulai" value="{{ old('tgl_mulai') }}" required>
											</fieldset>
											<fieldset class="form-group">
												<label for="basicInput">Tanggal Berakhir</label>
												<input type="date" class="form-control" id="basicInput" name="tgl_akhir" value="{{ old('tgl_akhir') }}" required>
											</fieldset>
											<fieldset class="form-group">
												<label for="basicInput">Nama Beasiswa</label>
												<select name="status" id="" class="form-control">
													<option value="aktif">Aktif</option>
													<option value="tidak aktif">Tidak Aktif</option>
												</select>
											</fieldset>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><span class="la la-times"> Batal</span></button>
											<button type="submit" class="btn btn-primary btn-sm"><span class="la la-save"> Simpan</span></button>
										</div>
									</div>
								</form>
							</div>
						</div>


						<div class="table-responsive">
							<table class="table table-bordered table-striped table-hover data" style="color: black">
								<thead class="bg-gradient-x-blue-cyan" style="color: white; font-weight: 500;">
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Tanggal Mulai</th>
										<th>Tanggal Berakhir</th>
										<th>Status</th>
										
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									@foreach($info as $info_beasiswa)
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $info_beasiswa->nama_beasiswa }}</td>
										<td>{{ date('d F Y', strtotime($info_beasiswa->tgl_mulai)) }}</td>
										<td>{{ date('d F Y', strtotime($info_beasiswa->tgl_berakhir)) }}</td>

										<td style="margin-top: 5px; margin-left: 3px" class="{{ ($info_beasiswa->status == 'tidak aktif')  ? 'badge badge-pill badge-danger' : 'badge badge-pill badge-info' }}">{{ $info_beasiswa->status }}</td>
										<td>
											<form onsubmit="event.preventDefault()" id="myForm-{{ $info_beasiswa->id }}" action="{{ route('info-beasiswa.destroy',$info_beasiswa->id) }}" method="post">

												{{ csrf_field() }}
												{{ method_field('DELETE') }}

												<a id="myEmail" onclick="email()" href="{{ route('kirimemail.index',['tgl_mulai' => $info_beasiswa->tgl_mulai, 'tgl_akhir' => $info_beasiswa->tgl_berakhir]) }}" class="badge badge-info" style="box-shadow: 2px 2px 2px rgba(0,0,0,0.6);"><span class="la la-envelope-o" title="Send Mail"></span></a>

												<a href="{{ route('info-beasiswa.edit',$info_beasiswa->id) }}" class="badge badge-warning" style="box-shadow: 2px 2px 2px rgba(0,0,0,0.6);"><span class="la la-edit" title="EDIT"></span></a>
												<button onclick="hapus({{ $info_beasiswa->id }})" class="badge badge-danger" style="box-shadow: 2px 2px 2px rgba(0,0,0,0.6);"><span class="la la-trash-o" title="HAPUS"></span></button>
												<script>

													

													email.addEventListener('click', function(e) {
														e.preventDefault();
													});
													
													function hapus(id)
													{

														Swal.fire({
															title: 'DELETE',
															text: "Apakah anda ingin menghapus data ini ? ",
															type: 'warning',
															showCancelButton: true,
															confirmButtonColor: '#3085d6',
															cancelButtonColor: '#d33',
															confirmButtonText: 'Ya, Hapus!'
														}).then((result) => {
															if (result.value) {
																document.getElementById("myForm-"+id).submit();
															}
														})
													}

													function email()
													{
														var email = document.getElementById('myEmail');
														Swal.fire({
															title: 'EMAIL',
															text: "Apakah ingin mengirim email tentang beasiswa ini ? ",
															type: 'warning',
															showCancelButton: true,
															confirmButtonColor: '#3085d6',
															cancelButtonColor: '#d33',
															confirmButtonText: 'Ya, Kirim!'
														}).then((result) => {
															if (result.value) {
																document.getElementById("myEmail").submit();
															}
														})
													}
												</script>
												
											</form>
										</td>
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