@extends('admin.layout')
@section('content')
<form method="POST" enctype="multipart/form-data">
	image : {{Form::file('image')}}<br>
	title : <input type="text" name="title"><br>
	description : <textarea name="description"></textarea><br>
	<button name="submit">Submit</button>
</form>
@stop