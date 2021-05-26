<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Blank Page | Porto Admin - Responsive HTML5 Template</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600,800,900|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('admin/vendor/bootstrap/css/bootstrap.css')}}" />
		<link rel="stylesheet" href="{{asset('admin/vendor/animate/animate.css')}}">

		<link rel="stylesheet" href="{{asset('admin/vendor/font-awesome/css/all.min.css')}}" />
		<link rel="stylesheet" href="{{asset('admin/vendor/magnific-popup/magnific-popup.css')}}" />
		<link rel="stylesheet" href="{{asset('admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />
		<link rel="stylesheet" href="{{asset('admin/vendor/summernote/summernote-bs4.css')}}" />
		<link rel="stylesheet" href="{{asset('admin/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css')}}" />
		<link rel="stylesheet" href="{{asset('admin/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css')}}" />

		<!--(remove-empty-lines-end)-->

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('admin/css/theme.css')}}" />


		<!--(remove-empty-lines-end)-->



		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('admin/css/skins/default.css')}}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('admin/vendor/modernizr/modernizr.js')}}"></script>

	</head>
	<body>
		<section class="body">
			@include('admin.layouts.header')
			<div class="inner-wrapper">
				@include('admin.layouts.sidebar')
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>ADMIN</h2>
					</header>
					@yield('content')
				</section>
			</div>
		</section>

		<!-- Vendor -->
		<script src="{{asset('admin/vendor/jquery/jquery.js')}}"></script>
		<script src="{{asset('admin/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
		<script src="{{asset('admin/vendor/popper/umd/popper.min.js')}}"></script>
		<script src="{{asset('admin/vendor/bootstrap/js/bootstrap.js')}}"></script>
		<script src="{{asset('admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
		<script src="{{asset('admin/vendor/common/common.js')}}"></script>
		<script src="{{asset('admin/vendor/nanoscroller/nanoscroller.js')}}"></script>
		<script src="{{asset('admin/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
		<script src="{{asset('admin/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
		<script src="{{asset('admin/vendor/summernote/summernote-bs4.js')}}"></script>
		<script src="{{asset('admin/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js')}}"></script>
		
		<!-- Specific Page Vendor -->


		<!--(remove-empty-lines-end)-->
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('admin/js/theme.js')}}"></script>
		
		<!-- Theme Custom -->
		<script src="{{asset('admin/js/custom.js')}}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{asset('admin/js/theme.init.js')}}"></script>
		@stack('scripts')

	</body>
</html>