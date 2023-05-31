document.addEventListener("DOMContentLoaded", function(){
//	alert(1);

	var tabchangeEvent = function(){
		$('#review-box .nav-link').removeClass('active');
//		console.log(this.text);
		$(this).addClass('active')
	};

	$('#review-box .nav-link').on('click',tabchangeEvent);

	
});