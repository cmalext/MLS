<!DOCTYPE html>
<html>
<head>
	<title>{{$page_title}}</title>
	<link href="{{$base_url}}/css/base.css?rand={{rand(0,1000)}}" rel="stylesheet">
	<link href="{{$base_url}}/css/style.css?rand={{rand(0,1000)}}" rel="stylesheet">
	<link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
</head>
<body>
@include('header')
<div class="push main">
@yield('content')
</div>
@include('footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="{{$base_url}}/js/bigslide.js"></script>
<script src="{{$base_url}}/js/script.js"></script>
<script>
	$(document).ready(function() {
		$('.menu-link').bigSlide({
	    	'side' : 'right',
	    });
	    $('.btn').click(function(){
	    	var id = $(this).attr('data-id');
	    	displayArt(id);
	    });
	});
</script>
</body>
</html>