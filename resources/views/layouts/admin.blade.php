<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
	<meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
	<meta name="author" content="ThemeSelect">
	<title>Beasiswa App</title>
	<link rel="apple-touch-icon" href="{{ asset('theme-assets/images/ico/ico_enjoy.jpg') }}">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('theme-assets/images/ico/ico_enjoy.jpg') }}">
	<link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
	<link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
	<!-- BEGIN VENDOR CSS-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/css/vendors.css') }}">
	<!-- END VENDOR CSS-->
	<!-- BEGIN CHAMELEON  CSS-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/css/app-lite.css') }}">
	<!-- END CHAMELEON  CSS-->
	<!-- BEGIN Page Level CSS-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/css/core/menu/menu-types/vertical-menu.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/css/core/colors/palette-gradient.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/datatables/datatables.css') }}">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"><!-- 
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
-->



<!-- END Page Level CSS-->
<!-- BEGIN Custom CSS-->
<!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-blue-cyan" data-col="2-columns">

	<!-- fixed-top-->
	<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
		<div class="navbar-wrapper">
			<div class="navbar-container content">
				<div class="collapse navbar-collapse show" id="navbar-mobile">
					<ul class="nav navbar-nav mr-auto float-left">
						
						
						<li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
							<ul class="dropdown-menu">
								<li class="arrow_box">
									<form>
										<div class="input-group search-box">
											<div class="position-relative has-icon-right full-width">
												<input class="form-control" id="search" type="text" placeholder="Search here...">
												<div class="form-control-position navbar-search-close"><i class="ft-x">   </i></div>
											</div>
										</div>
									</form>
								</li>
							</ul>
						</li>
					</ul>
					<!-- <ul class="nav navbar-nav float-right">         
						<li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language"></span></a>
							<div class="dropdown-menu" aria-labelledby="dropdown-flag">
								<div class="arrow_box"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-ru"></i> Russian</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a></div>
							</div>
						</li>
					</ul> -->
					<ul class="nav navbar-nav float-right">
						<!-- <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="arrow_box_right"><a class="dropdown-item" href="#"><i class="ft-book"></i> Read Mail</a><a class="dropdown-item" href="#"><i class="ft-bookmark"></i> Read Later</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Mark all Read       </a></div>
							</div>
						</li> -->
						<li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown" style="margin-top: 10px;"><span class="avatar avatar-online"><i class="ft-user-check" style="font-size: 30px;  margin-right: 30px; margin-bottom: 20px"></i></span>Admin</a>
							<div class="dropdown-menu dropdown-menu-right"  style="width: 200px;">
								<div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="{{ asset('theme-assets/images/portrait/small/avatar-s-19.png') }}" alt="avatar"><span class="user-name text-bold-700 ml-1">{{ Auth::user()->name }}</span></span></a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="{{ route('admin.edit',Auth::user()->id )}}"><i class="ft-edit"></i> Edit Profile</a>
									@if(Auth::user()->hak_akses == "superadmin" )
									<a class="dropdown-item" href="/admin"><i class="ft-plus-circle"></i> Add New Admin</a>
									@endif
									<div class="dropdown-divider"></div><a class="dropdown-item" href="#">
										<a class="dropdown-item" href="{{ route('logout') }}"
										onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
										<i class="ft-power" style="font-size: 18px"> {{ __('Logout') }}</i>
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>

<!-- ////////////////////////////////////////////////////////////////////////////-->


<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/04.jpg">
	<div class="navbar-header">
		<ul class="nav navbar-nav flex-row">       
			<li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="Chameleon admin logo" src="{{ asset('theme-assets/images/logo/enjoy.jpg') }}" width="100" />
				<h3 class="brand-text">Beasiswa App</h3></a></li>
				<li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
			</ul>
		</div>
		<div class="main-menu-content">
			<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
				<li class=" nav-item"><a href="/beranda"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
					
				</li>

				<li class=" nav-item"><a href="/jurusan"><i class="ft-list"></i><span class="menu-title" data-i18n="">Jurusan</span></a>
				</li>

				<li class=" nav-item"><a href="/info-beasiswa"><i class="ft-info"></i><span class="menu-title" data-i18n="">Info Beasiswa</span></a>
				</li>

				<li class=" nav-item"><a href="#"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Dataset<i class="la la-angle-double-down ml-3"></i></span></a>
					<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
						<li class="nav-item" style="margin-left: -25px"><a href="/dt_ppa"><span class="menu-title" data-i18n="" style="font-size: 15px">>> Dataset asli</span></a></li>
						<li class="nav-item" style="margin-left: -25px"><a href="/dt_class"><span class="menu-title" data-i18n="" style="font-size: 15px">>> Dataset Klasifikasi</span></a></li>
					</ul>
				</li>

				<li class=" nav-item"><a href="/pendaftar"><i class="ft-users"></i><span class="menu-title" data-i18n="">Pendaftar</span></a>
				</li>
				
				<li class=" nav-item"><a href="/rules"><i class="ft-command"></i><span class="menu-title" data-i18n="">C4.5 Rules</span></a>
				</li>

				<li class=" nav-item"><a href="/meansubs"><i class="ft-command"></i><span class="menu-title" data-i18n="">C4.5 Meansubs</span></a>
				</li>

				<li class=" nav-item"><a href="/laporan"><i class="ft-file"></i><span class="menu-title" data-i18n="">Laporan</span></a>
				</li>

				<li class=" nav-item"><a href="/"><i class="ft-globe"></i><span class="menu-title" data-i18n="">Users Page</span></a>
				</li>

			</ul>
		</div>
		<div class="navigation-background"></div>
	</div>

	<div class="app-content content">
		<div class="content-wrapper">
			@yield('content')

		</div>
	</div>
	<!-- ////////////////////////////////////////////////////////////////////////////-->


	<footer class="footer footer-static footer-light navbar-border navbar-shadow">
		<div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2019  &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://www.universitasbumigora.ac.id" target="_blank">Universitas Bumigora</a></span>
			<ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
				Design by Abdurraghib Segaf Suweleh
			</ul>
		</div>
	</footer>

	<!-- BEGIN VENDOR JS-->
	<script src="{{ asset('theme-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
	<!-- BEGIN VENDOR JS-->
	<!-- BEGIN PAGE VENDOR JS-->
	<!-- END PAGE VENDOR JS-->
	<!-- BEGIN CHAMELEON  JS-->
	<script src="{{ asset('theme-assets/js/core/app-menu-lite.js') }}" type="text/javascript"></script>
	<script src="{{ asset('theme-assets/js/core/app-lite.js') }}" type="text/javascript"></script>

	<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('theme-assets/datatables/datatables.js') }}"></script>


	<!-- END CHAMELEON  JS-->
	<!-- BEGIN PAGE LEVEL JS-->
	<!-- END PAGE LEVEL JS-->
<!-- 	<script type="text/javascript">
		$(document).ready(function(){
			$('.data').DataTable();
		});
	</script> -->
	<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('theme-assets/datatables/datatables.js') }}"></script>
	<!-- 	<script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>

	<script>

		$(document).ready(function() {
			$('.data').DataTable( {
				dom: 'Bfrtip',
				buttons: [
				'copy', 'csv', 'excel', 'pdf', 'print'
				]
			} );
		} );
	</script>
</body>
</html> 