<div class="contact clearfix" id="contact">
	<div class="col-50 emailarea">
		<p class="title">Don't hesitate to have a chat with me </p>
		<p class="email"><a href="mailto:marksuperales123@yahoo.com.ph"><i class="fa fa-envelope-o"></i> marksuperales123@yahoo.com.ph</p>
		<p class="email"><a href="javascript:void(0)"><i class="fa fa-skype"></i> mark.bizkit@yahoo.com</p>
	</div>
	<div class="col-50 socialarea">
		<div class="socials">
			<div class="social-media"><a href="https://www.facebook.com/artofmarklouiesuperales/"><i class="fa fa-facebook-official"></i></a></div>
			<div class="social-media"><a target="_blank" href="https://twitter.com/Mbizkit143"><i class="fa fa-twitter"></i></a></div>
			<div class="social-media"><a target="_blank" href=https://www.pinterest.com/markbizkit/""><i class="fa fa-pinterest"></i></a></div>
			<div class="social-media"><a target="_blank" href="http://markbizkit.deviantart.com/"><i class="fa fa-deviantart"></i></a></div>
			<div class="social-media"><a target="_blank" href="https://www.linkedin.com/in/mark-louie-superales-1a258a67/"><i class="fa fa-linkedin"></i></a></div>
			<div class="social-media"><a target="_blank" href="#"><i class="fa fa-instagram"></i></a></div>
			<div class="social-media"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></div>

		</div>
	</div>
	<div class="footer">
		{{$page_title}} - All Rights Reserved {{date('Y')}}
	</div>
</div>

<div class="modal">
	<div class="modal-header">
		@if(Input::has('art'))
		<a href="{{$base_url}}" class="modal-close">
		@else
		<a href="javascript:void(0)" class="modal-close">
		@endif
		<svg style="width:80px">
		    <line x1="0" y1="70" x2="70" y2="0"  stroke="rgba(255,255,255,0.4)" stroke-width="1"/>
		    <line x1="0" y1="0"  x2="70" y2="70" stroke="rgba(255,255,255,0.4)" stroke-width="1"/>
		</svg>
		</a>
	</div>
	<div class="modal-body">
	</div>
</div>
