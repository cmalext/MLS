<div class="container">
	<div class="img-big">
		<img src="{{$base_url}}/art/{{$thumb->image}}" alt="{{$thumb->title}}">
	</div>
	<h1 class="modal-title">{{ucwords($thumb->title)}}</h1>
	<p class="modal-description">
		{{$thumb->description}}
	</p>
	<p class="modal-date">
		{{date('F d, Y', strtotime($thumb->created_at))}}
	</p>
</div>