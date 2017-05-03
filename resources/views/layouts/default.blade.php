<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{page_title($title ?? '')}}</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
	<style>
		body{
			font-family: Helvetica, Arial, sans-serif;
		}
		footer{
			margin: 4em 0;
		}
	</style>
</head>
<body>
	@include('layouts.partials._nav')
	@yield('content')
	
	@include('layouts.partials._footer')
	<script src="{{asset('/js/jquery.js')}}"></script>
	<script src="{{asset('/js/bootstrap.min.js')}}"></script>
</body>
</html>