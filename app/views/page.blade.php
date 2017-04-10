@if(count($thumbs)>0)
@foreach($thumbs as $thumb)
<script>
$(function(){
	$(".lazy").lazyload({
    	effect : "fadeIn"
    });
});
</script>
<div class="thumb">
	<div class="inner">
		<div class="cover">
			<img data-original="{{$base_url}}/art/{{$thumb->image}}" alt="{{$thumb->title}}" class="lazy"> 
		</div>
		<div class="overlay">
			<div class="innerlay">
				<ul>
					<li><a href=""><i class="fa fa-facebook-official"></i></a></li>
					<li><a href=""><i class="fa fa-twitter"></i></a></li>
					<li><a href=""><i class="fa fa-google-plus"></i></a></li>
				</ul>
				<div class="view">
					<a href="javascript:void(0)" onclick="displayArt({{$thumb->id}})" class="btn" data-id="{{$thumb->id}}">READ MORE</a>
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
@else
0
@endif