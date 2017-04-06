$(function(){
	$('.modal-close').click(function(){
		modal_out();
	});
	$('#pager').click(function(){
		var page = parseInt($('#page').val());
		$.ajax({
			url: base_url+'/page?page='+page,
			type: 'GET',
			beforeSend : function(){
				$('#pager').hide();
				$('.preloader').show();
			},
			success:function(data){
				$('.preloader').hide();
				if(data != 0){
					$('#page').val(page +1);
					$('#pager').show();
					$('.load-art-mod').before(data);
				}
			}
		});
	});
	if(art > 0)
		displayArt(art);

});

function displayArt(id){
	modal_in();
	$.ajax({
		url: base_url+'/art/'+id,
		type: 'GET',
		beforeSend : function(){
			$('.modal-body').html('<div class="spinner"><i class="fa fa-spin fa-circle-o-notch"></i></div>');
		},
		success:function(data){
			$('.modal-body').html(data);
		}
	});
}
function modal_in(){
	$('.modal').show();
	$('body').css('overflow','hidden');
}
function modal_out(){
	$('.modal-body').html('');
	$('.modal').hide();
	$('body').css('overflow','auto');
}