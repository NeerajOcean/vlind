<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{ HTML::style('assets/css/bootstrap/bootstrap.min.css') }}
    {{ HTML::style('assets/css/master_style.css') }}
    
	{{-- extra css part goes here --}}
	@yield('extra_css')
	<script type="text/javascript"> window.base_url = "/vlind/public/"; </script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	{{ HTML::script('assets/js/bootstrap/bootstrap.min.js') }}

	{{-- extra js part goes here --}}
	@yield('extra_js')

	<title>Vlind Date</title>
</head>

<body>