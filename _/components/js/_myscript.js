/*Scroll to Request Apartment part of page*/
	/*$('#military1').click(function() {
		//$("html").animate({ scrollTop: "5000px" }, 1000);
		console.log('yo');	 
	});*/


$('.carousel').carousel({
  interval: false
});



$(".collapse").collapse();


$('#collapseOne').on('show.bs.collapse', function () {
		$('#btn-1').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)");
});

$('#collapseOne').on('hidden.bs.collapse', function () {
		$('#btn-1').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)");
});



$('#collapseTwo').on('show.bs.collapse', function () {
		$('#btn-2').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)");
});

$('#collapseTwo').on('hidden.bs.collapse', function () {
		$('#btn-2').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)");
});


$('#collapseThree').on('show.bs.collapse', function () {
		$('#btn-3').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)");
});

$('#collapseThree').on('hidden.bs.collapse', function () {
		$('#btn-3').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)");
});


$('#collapseFour').on('show.bs.collapse', function () {
		$('#btn-4').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)");
});

$('#collapseFour').on('hidden.bs.collapse', function () {
		$('#btn-4').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)");
});



$('#collapseFive').on('show.bs.collapse', function () {
		$('#btn-5').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)");
});

$('#collapseFive').on('hidden.bs.collapse', function () {
		$('#btn-5').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)");
});



$('.panel-heading a').each(function (index) {
			
			
			
			var hashCol = $(this).attr('href');
			
			var grandParent = $(this).parent().parent().attr('id');
			var gString = $('.' + grandParent);
			var btn = $(this).find("button");
			var btnID = $(btn).attr("id");
			
			var subString2 = btnID.substring(0, 3);	
			btnString = $('.' + subString2);
			btnIDString = $('#' + btnID);
			
			
			var panelTitle  = $(this).parent().attr('class');
			titleSub = panelTitle.substring(0, 6);
			titleString = $('.' + titleSub);
			
								
			/*Add and remove the bottom border from the header when collapsing and expanding the accordion*/
			
			$(hashCol).on('show.bs.collapse', function () {
				
				$(gString).css("border-bottom", "none");
				/*$(btnIDString).css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)");*/				
			});
		
		
			$(hashCol).on('hidden.bs.collapse', function () {
				
				$(gString).css("border-bottom", "solid 1px #bbb");
				/*$(btnIDString).css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)");*/
						
		});


});



/*Navigation*/
$("#home a:contains('Home')").parent().addClass('active');
$("#our-brands a:contains('Our Brands')").parent().addClass('active');
$("#global-corporate-housing a:contains('Global Corporate Housing')").parent().addClass('active');
$("#business-solutions a:contains('Business Solutions')").parent().addClass('active');
$("#vision-leadership a:contains('Vision and Leadership')").parent().addClass('active');
$("#news a:contains('News')").parent().addClass('active');
$("#marriott a:contains('Marriott')").parent().addClass('active');
$("#careers a:contains('Careers')").parent().addClass('active');


/*if ( $(window).width() < 992) {
	
	$('nav').removeClass("navbar-fixed-top");

}

if ( $(window).width() > 992) {
	
	$('nav').addClass("navbar-fixed-top");

}*/


/*sub-nav*/

/*$('#military1').click(function () {
	$('.sub-nav').addClass("military-position");
	console.log('military');
	
})*/

/*Scroll to Request Apartment part of page*/
	$('#overview1').click(function() {
		$("html").animate({ scrollTop: "420px" }, 1000);
		console.log('yo');	 
		$('.sub-nav').addClass("sub-move");
	});
	
	$('#military1').click(function() {
		$("html").animate({ scrollTop: "2000px" }, 1000);
		console.log('yo');
		$('.sub-nav').addClass("sub-move"); 
	});
	
	$('#federal-civilian1').click(function() {
		$("html").animate({ scrollTop: "3200px" }, 1000);
		console.log('yo');	
		$('.sub-nav').addClass("sub-move"); 
	});
	
	$('#government-contractors1').click(function() {
		$("html").animate({ scrollTop: "4000px" }, 1000);
		console.log('yo');	 
		$('.sub-nav').addClass("sub-move"); 
	});
	
	$('#gsa1').click(function() {
		$("html").animate({ scrollTop: "4900px" }, 1000);
		console.log('yo');	 
		$('.sub-nav').addClass("sub-move");	  
	});

