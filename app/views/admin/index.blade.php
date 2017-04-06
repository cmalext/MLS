@extends('admin.layout')
@section('content')
<table class="table">
<tr><th>Image<th>Title<th>Description<th>Option
@if(isset($thumbs))
@foreach($thumbs as $thumb)
<tr>
	<td><img src="{{$base_url}}/art/{{$thumb->image}}">
	<td>{{$thumb->title}}
	<td style="max-width:200px;">{{$thumb->description}}
	<td><a href="{{$base_url}}/mls/edit/{{$thumb->id}}"><i class="fa fa-edit"></i></a>
		<a href="{{$base_url}}/mls/delete/{{$thumb->id}}"><i class="fa fa-trash"></i></a>
@endforeach
@endif

@stop