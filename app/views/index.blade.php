@extends('layout')
@section('content')
<div class="slide" style="background:url('{{$base_url}}/img/{{$background or $default_bg}}')">
	<img src="{{$base_url}}/img/main.png" alt="" style="width:400px;">
	<h1>Concept Artist / Illustrator</h1>
	<div class=""><a href="">MEET ME</a></div>
</div>
<div class="content">
	<div class="container">
		@if(isset($thumbs))
			@foreach($thumbs as $thumb)
				<div class="thumb">
					<div class="inner">
						<img src="{{$base_url}}/art/{{$thumb->image}}" alt="{{$thumb->title}}"> 
						<div class="overlay">
							<div class="innerlay">
								<ul>
									<li><a href=""><i class="fa fa-facebook-official"></i></a></li>
									<li><a href=""><i class="fa fa-twitter"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus"></i></a></li>
								</ul>
								<div class="view">
									<a href="javascript:void(0)" class="btn" data-id="{{$thumb->id}}">READ MORE</a>
								</div>
							</div>
						</div>
						<div class="info">
							<p class="title">{{$thumb->title}}</p>
							<p class="description">{{$thumb->description}}</p>
							<p class="date">{{date('F d, Y', strtotime($thumb->created_at))}}</p>
						</div>
					</div>
				</div>
			@endforeach
		@else

		@endif
	</div>
</div>
@stop