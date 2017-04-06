@extends('layout')
@section('content')
<div class="slide" style="background:url('{{$base_url}}/img/{{$background or $default_bg}}')">
	<div class="context">
		<img src="{{$base_url}}/img/main.png" alt="{{$page_title}}">
		<h1>Concept Artist / Illustrator</h1>
		<div class="link"><a data-scroll data-options='{ "easing": "easeInOutQuint" }' href="#about" class="btn-circle">MEET ME</a></div>
		<div id="art">&nbsp;</div>
	</div>
</div>
<div class="content">
@if(isset($thumbs))
@foreach($thumbs as $thumb)
<div class="thumb">
	<div class="inner">
		<div class="cover">
			<img src="{{$base_url}}/art/{{$thumb->image}}" alt="{{$thumb->title}}"> 
		</div>
		<div class="overlay">
			<div class="innerlay">
				<ul>
					<li><a target="_blank" href="http://www.facebook.com/sharer.php?u={{urlencode($base_url.'/?art='.$thumb->id)}}"><i class="fa fa-facebook-official"></i></a></li>
					<li><a target="_blank" href="http://twitter.com/share?text={{urlencode($thumb->title)}}&url={{urlencode($base_url.'/?art='.$thumb->id)}}"><i class="fa fa-twitter"></i></a></li>
					<li><a target="_blank" href="https://plus.google.com/share?url={{urlencode($base_url.'/?art='.$thumb->id)}}"><i class="fa fa-google-plus"></i></a></li>
				</ul>
				<div class="view">
					<a href="javascript:void(0)" class="btn" data-id="{{$thumb->id}}">READ MORE</a>
				</div>
			</div>
		</div>
		<div class="info">
			<p class="title">{{$thumb->title}}</p>
			<p class="date">{{date('F d, Y', strtotime($thumb->created_at))}}</p>
		</div>
	</div>
</div>
@endforeach
<div class="load-art-mod">
	<input type="hidden" id="page" value="1">
	<div class="preloader">
		<i class="fa fa-spin fa-spinner"></i>
	</div>
	<a href="javascript:void(0)" id="pager">LOAD MORE</a>
</div>
@endif
</div>
<div id="about" class="aboutme clearfix">
	<div class="context">
		<div class="image">
			<img src="{{$base_url}}/img/profile.jpg" alt="{{$page_title}}">
		</div>
		<h1>Mark Louie Superales</h1>
		<div class="quote">
			<p>I am Mark, and welcome to my site!</p>
			<p>I started drawing since I was 6 my parents bought me a drawing board. I guess after several years then I became better and now, I am practicing digital arts. Hoping that someday I can work in the Comic Book and Video Game industry.</p>
			<p>I still have a lot of things to work with regarding my art style. And maybe eventually learn 3D and Animation but now, I want to focus on creating 2D illustrations and build up my foundation.</p>
			<p>I plan to spend the whole year improving my craft and maybe next year I'll be ready to explore more opportunities abroad.</p>
		</div>
	</div>
</div>
@stop