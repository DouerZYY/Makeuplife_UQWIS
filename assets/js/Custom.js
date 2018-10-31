// JavaScript Document


jQuery(function($) {
	
	$('li.top_faq_question').click(function() {


		if ($(this).next().next().next().hasClass('SupportArrowOpen')) {
			//alert("1");
			$('div.top_faq_answer').slideUp('normal');	
			$(this).next().next().next().removeClass('SupportArrowOpen').addClass('SupportArrowClose');							
		} else {
			//alert("2");
			$('div.SupportArrowOpen').removeClass('SupportArrowOpen').addClass('SupportArrowClose');
			$(this).children().children().first().removeClass('SupportArrowClose').addClass('SupportArrowOpen');
			$('div.top_faq_answer').slideUp('normal');	
			$(this).next().slideDown('normal');
		}
		
				
	});  
});
		