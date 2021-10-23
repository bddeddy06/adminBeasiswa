@extends('layouts.admin')

@section('content')

@include('pesan')
<style>
	input {
		box-shadow: 0.5px 0.5px 0.5px rgba(0,0,0,0.5);
	}
	select {
		box-shadow: 0.5px 0.5px 0.5px rgba(0,0,0,0.5);
	}
	label {
		text-shadow: 1px 1px 1px rgba(0,0,0,0.5);
	}
</style>
<div class="content-wrapper-before"></div>
<div class="content-header row">
	<div class="content-header-left col-md-6 col-12 mb-2">
		<h3 class="content-header-title" style="text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.8); font-size: 22px">Tambah Data Training Beasiswa PPA</h3>
	</div>
	<div class="content-header-right col-md-6 col-12">
		<div class="breadcrumbs-top float-md-right">
			<div class="breadcrumb-wrapper mr-1">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a>
					</li>
					<li class="breadcrumb-item active">Tambah Dataset PPA
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

					<h4 class="card-title">Tambah Data</h4>
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
						
						<form action="{{ route('dt_ppa.store') }}" method="post">
							{{ csrf_field() }}
							<div class="card-block">
								<div class="card-body">
									<div class="row">

										<div class="col-md-6">
											<fieldset class="form-group">
												<label for="basicInput">Nim</label>
												<input type="number" class="form-control {{ ($errors->has('nim')) ? 'is-invalid' : '' }} " id="basicInput" name="nim" value="{{ old('nim') }}">
												@if($errors->has('nim'))
												<div class="invalid-feedback" style="font-size: 12px; font-style: italic; font-family: arial">
													
													{{ $errors->first('nim') }}
													
												</div>
												@endif
											</fieldset>
											<fieldset class="form-group">
												<label for="basicInput">Nama</label>
												<input type="text" class="form-control {{ ($errors->has('nama') ? 'is-invalid' : '' ) }}" id="basicInput" name="nama" value="{{ old('nama') }}">
												@if($errors->has('nama'))
												<div class="invalid-feedback" style="font-size: 12px; font-style: italic; font-family: arial">
													
													{{ $errors->first('nama') }}
													
												</div>
												@endif
											</fieldset>
											<fieldset class="form-group">
												<label for="basicInput">Prodi</label>
												<select name="prodi" id="basicInput" class="form-control">
													
													@foreach($jurusan as $jur)
													<option value="{{ $jur->nama }}">{{ $jur->nama }}</option>
													@endforeach
												</select>
											</fieldset>
											<fieldset class="form-group">
												<label for="basicInput">Jumlah Tanggungan</label>
												<input type="number" class="form-control {{ ($errors->has('jml_tanggungan')) ? 'is-invalid' : '' }}" id="basicInput" name="jml_tanggungan" value="{{ old('jml_tanggungan') }}">
												@if($errors->has('jml_tanggungan'))
												<div class="invalid-feedback" style="font-size: 12px; font-style: italic; font-family: arial">
													
													{{ $errors->first('jml_tanggungan') }}
													
												</div>
												@endif
											</fieldset>
										</div>
										<div class="col-md-6">
											<fieldset class="form-group">
												<label for="basicInput">Penghasilan Orang Tua</label>
												<input type="number" class="form-control {{ ($errors->has('penghasilan_ortu')) ? 'is-invalid' : '' }}" id="basicInput" name="penghasilan_ortu" value="{{ old('penghasilan_ortu') }}">
												@if($errors->has('penghasilan_ortu'))
												<div class="invalid-feedback" style="font-size: 12px; font-style: italic; font-family: arial">
													
													{{ $errors->first('penghasilan_ortu') }}
													
												</div>
												@endif
											</fieldset>
											<fieldset class="form-group">
												<label for="basicInput">Pekerjaan Orang Tua</label>
												<input type="text" class="form-control {{ ($errors->has('pekerjaan_ortu')) ? 'is-invalid' : '' }}" id="basicInput" name="pekerjaan_ortu"  value="{{ old('pekerjaan_ortu') }}">
												@if($errors->has('pekerjaan_ortu'))
												<div class="invalid-feedback" style="font-size: 12px; font-style: italic; font-family: arial">
													
													{{ $errors->first('pekerjaan_ortu') }}
													
												</div>
												@endif
											</fieldset>
											<div class="row">
												<div class="col-md-6">
													<fieldset class="form-group">
														<label for="basicInput">Jumlah SKS</label>
														<input type="number" class="form-control {{ ($errors->has('jml_sks')) ? 'is-invalid' : '' }}" id="basicInput" name="jml_sks"  value="{{ old('jml_sks') }}" max="24" min="0">
														@if($errors->has('jml_sks'))
														<div class="invalid-feedback" style="font-size: 12px; font-style: italic; font-family: arial">

															{{ $errors->first('jml_sks') }}

														</div>
														@endif
													</fieldset>
												</div>
												<div class="col-md-6">
													<fieldset class="form-group">
														<label for="basicInput">IPK</label>
														<input type="text" class="form-control {{ ($errors->has('ipk')) ? 'is-invalid' : '' }}" id="basicInput" name="ipk"  value="{{ old('ipk') }}">
														@if($errors->has('ipk'))
														<div class="invalid-feedback" style="font-size: 12px; font-style: italic; font-family: arial">

															{{ $errors->first('ipk') }}

														</div>
														@endif
													</fieldset>
												</div>
											</div>
											<fieldset class="form-group">
												<label for="basicInput">Sertifikat</label>
												<input type="text" class="form-control {{ ($errors->has('sertifikat')) ? 'is-invalid' : '' }}" id="basicInput" name="sertifikat"  value="{{ old('sertifikat') }}">
												@if($errors->has('sertifikat'))
												<div class="invalid-feedback" style="font-size: 12px; font-style: italic; font-family: arial">
													
													{{ $errors->first('sertifikat') }}
													
												</div>
												@endif
											</fieldset>
										</div>
									</div>
								</div>
							</div>
							<div align="right" style="margin-right: 30px">
								<button type="submit" class="btn btn-primary btn-sm" style="box-shadow: 2px 2px 2px rgba(0,0,0,0.7);"><span class="la la-plus-square"> Tambah</span></button>
								<button type="reset" class="btn btn-danger btn-sm" style="box-shadow: 2px 2px 2px rgba(0,0,0,0.7);"><span class="la la-refresh"> Reset</span></button>
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Basic Tables end -->
</div>


@endsection