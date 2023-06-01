document.addEventListener("DOMContentLoaded", function(){
//	alert(1);

	var tabchangeEvent = function(){
		$('#review-box .nav-link.active').removeClass('active');
//		console.log(this.text);
		$(this).addClass('active');
		var index = $(this).data('index');

		$('#review-body .rv-body-tab').hide();
		$('#review-body .rv-body-tab:eq('+index+')').show();

		return false; //href='#' 무시하게
	};

	$('#review-box .nav-link').on('click',tabchangeEvent);

	
});