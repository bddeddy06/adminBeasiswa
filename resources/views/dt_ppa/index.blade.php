@extends('layouts.admin')

@section('content')

@include('pesan')
<div class="content-wrapper-before"></div>
<div class="content-header row">
	<div class="content-header-left col-md-5 col-12 mb-2">
		<h3 class="content-header-title" style="text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.8); font-size: 22px">Data Training Beasiswa PPA</h3>
	</div>
	<div class="content-header-right col-md-7 col-12">
		<div class="breadcrumbs-top float-md-right">
			<div class="breadcrumb-wrapper mr-1">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a>
					</li>
					<li class="breadcrumb-item active">Dataset PPA
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
						<a href="{{ route(
						'dt_ppa.create') }}" class="btn btn-link" style="font-size: 20px; font-weight: bold; float: right;"><span class="la la-plus">Tambah Data</span></a>


						<div class="table-responsive">
							<table class="table table-bordered table-striped table-hover data" style="color: black">
								<thead class="bg-gradient-x-blue-cyan" style="color: white; font-weight: 500;">
									<tr>
										<th>No</th>
										<th width="130">Nim</th>
										<th width="25">Jumlah Tanggungan</th>
										<th width="70">Penghasilan Orang Tua</th>
										<th width="70">Pekerjaan Orang Tua</th>
										<th>IPK</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									@foreach($dt_ppa as $dt)
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td width="130">{{ $dt->nim }}</td>
										<td width="25">{{ $dt->jml_tanggungan }}</td>
										<td width="70">Rp. {{ number_format($dt->penghasilan_ortu) }}</td>
										<td width="70">{{ $dt->pekerjaan_ortu }}</td>
										<td>{{ $dt->ipk }}</td>
										<td>
											<form action="{{ route('dt_ppa.destroy',$dt->id) }}" method="post">

												{{ csrf_field() }}
												{{ method_field('DELETE') }}

												<a href="{{ route('dt_ppa.show',$dt->id) }}" class="badge badge-info" style="box-shadow: 2px 2px 2px rgba(0,0,0,0.6);"><span class="la la-info" title="INFO"></span></a>
												<a href="{{ route('dt_ppa.edit',$dt->id) }}" class="badge badge-warning" style="box-shadow: 2px 2px 2px rgba(0,0,0,0.6);"><span class="la la-edit" title="EDIT"></span></a>
												<button type="submit" class="badge badge-danger" style="box-shadow: 2px 2px 2px rgba(0,0,0,0.6);" onclick="return confirm('Apa anda yakin ?')"><span class="la la-trash-o" title="HAPUS"></span></button>

												
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