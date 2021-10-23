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
		<h3 class="content-header-title" style="text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.8); font-size: 22px">Edit Data Jurusan</h3>
	</div>
	<div class="content-header-right col-md-6 col-12">
		<div class="breadcrumbs-top float-md-right">
			<div class="breadcrumb-wrapper mr-1">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a>
					</li>
					<li class="breadcrumb-item active">Edit_Jurusan
					</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="content-body"><!-- Basic Tables start -->
	<div class="row">
		<div class="col-7">
			<div class="card">
				<div class="card-header">

					<h4 class="card-title">Edit Data Jurusan</h4>
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
						
						<form action="{{ route('jurusan.update',[ 'id' => $data->id ]) }}" method="post">
							{{ csrf_field() }}
							{{ method_field('PUT') }}
							<div class="card-block">
								<div class="card-body">
									<div class="row">

										<div class="col-md-12">
											<fieldset class="form-group">
												<label for="basicInput">Nama Jurusan</label>
												<input type="text" class="form-control {{ ($errors->has('jurusan')) ? 'is-invalid' : '' }} " id="basicInput" name="jurusan" value="{{ $data->nama }}">
												@if($errors->has('jurusan'))
												<div class="invalid-feedback" style="font-size: 12px; font-style: italic; font-family: arial">
													
													{{ $errors->first('jurusan') }}
													
												</div>
												@endif
											</fieldset>

										</div>
									</div>
								</div>
							</div>
							<div align="right" style="margin-right: 20px">
								<button type="submit" class="btn btn-primary btn-sm" style="box-shadow: 2px 2px 2px rgba(0,0,0,0.7);"><span class="la la-edit"> Update</span></button>
								
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
