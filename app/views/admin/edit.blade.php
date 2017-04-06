@extends('admin.layout')
@section('content')
<form method="POST">
<table style="width:100%">
<tr><td><td><img src="{{$base_url}}/art/{{$thumb->image}}" style="width:150px;">
<tr><td style="width:150px;">Title : <td><input type="text" name="title" value="{{$thumb->title}}">
<tr><td>Description :<td> <textarea name="description">{{$thumb->description}}</textarea>
<tr><td><td><button name="submit">Submit</button>
</table>
</form>
@stop