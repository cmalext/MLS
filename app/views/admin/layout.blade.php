<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link href="{{$base_url}}/css/base.css?rand={{rand(0,999)}}" rel="stylesheet">
	<link href="{{$base_url}}/css/style.css?rand={{rand(0,999)}}" rel="stylesheet">
	<link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<div style="background:#fff;padding:10px">
	<a href="{{$base_url}}/mls">Home</a> &nbsp;&nbsp;|&nbsp;&nbsp;
	<a href="{{$base_url}}/mls/add">Add Art</a>
	<a href="{{$base_url}}/mls/logout" style="float:right">logout</a>
	
</div>
<div class="container-fluid">
	@yield('content')
</div>
</body>
</html>