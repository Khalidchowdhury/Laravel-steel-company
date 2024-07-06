<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Stell Company Admin Panel</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<link rel="stylesheet" href="dashboard/plugins/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="{{ url('dashboard/css/adminlte.min.css') }}">
		<link rel="stylesheet" href="{{ url('dashboard/css/custom.css') }}">
		<style>
			.addTopBTN{
				float: right;
			}
		</style>
	</head>
	<body class="hold-transition sidebar-mini">



        @section('content')
        @show


        
        {{-- script file linking --}}
		<script src="{{ url('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ url('dashboard/plugins/jquery/jquery.min.js') }}"></script>
		<script src="{{ url('dashboard/js/adminlte.min.js') }}"></script>
		<script src="{{ url('dashboard/js/demo.js') }}"></script>
	</body>
</html>