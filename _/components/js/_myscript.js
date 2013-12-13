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
$("#global-expertise a:contains('Global Expertise')").parent().addClass('active');
$("#global-reach a:contains('Global Expertise')").parent().addClass('active');
$("#united-states-canada a:contains('Global Expertise')").parent().addClass('active');
$("#south-america a:contains('Global Expertise')").parent().addClass('active');
$("#emea a:contains('Global Expertise')").parent().addClass('active');
$("#apac a:contains('Global Expertise')").parent().addClass('active');
$("#safety-security a:contains('Global Expertise')").parent().addClass('active');
$("#technologies a:contains('Global Expertise')").parent().addClass('active');
$("#client-services a:contains('Global Expertise')").parent().addClass('active');

$("#business-solutions a:contains('Business Solutions')").parent().addClass('active');
$("#government a:contains('Business Solutions')").parent().addClass('active');
$("#entertainment a:contains('Business Solutions')").parent().addClass('active');
$("#relocation a:contains('Business Solutions')").parent().addClass('active');
$("#consulting a:contains('Business Solutions')").parent().addClass('active');
$("#industry-insights-government a:contains('Business Solutions')").parent().addClass('active');
$("#industry-insights-relocation a:contains('Business Solutions')").parent().addClass('active');
$("#industry-insights-consulting a:contains('Business Solutions')").parent().addClass('active');
$("#industry-insights-insurance a:contains('Business Solutions')").parent().addClass('active');


$("#vision-leadership a:contains('Vision and Leadership')").parent().addClass('active');
$("#executive-leadership a:contains('Vision and Leadership')").parent().addClass('active');
$("#industry-affiliations a:contains('Vision and Leadership')").parent().addClass('active');
$("#news a:contains('News')").parent().addClass('active');
$("#press-releases a:contains('News')").parent().addClass('active');
$("#press-releases-single a:contains('News')").parent().addClass('active');
$("#in-the-news a:contains('News')").parent().addClass('active');
$("#in-the-news-single a:contains('News')").parent().addClass('active');
$("#awards a:contains('News')").parent().addClass('active');
$("#upcoming-events a:contains('News')").parent().addClass('active');
$("#upcoming-events a:contains('News')").parent().addClass('active');


$("#marriott a:contains('Marriott')").parent().addClass('active');
$("#careers a:contains('Careers')").parent().addClass('active');




if ( $("#industry-insights-government a:contains('Business Solutions')") ) {
	
	$('.solutions-industry #government').addClass('active');
	$('.solutions-industry #relocation').removeClass('active');
} 

if ( $("#industry-insights-relocation a:contains('Business Solutions')") ) {
	
	$('.solutions-industry #relocation').addClass('active');
	$('.solutions-industry #government').removeClass('active');
}


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
		$("html").animate({ scrollTop: "435px" }, 1000);	 
		$('.sub-navigation').addClass("sub-move");
		$('#government-contractors1, #military1, #federal-civilian1, #gsa1').removeClass("active");
		$('#overview1').addClass("active");
	});
	
	$('#military1').click(function() {
		$("html").animate({ scrollTop: "1955px" }, 1000);
		$('.sub-navigation').addClass("sub-move");
		$('#overview1, #government-contractors1, #federal-civilian1, #gsa1').removeClass("active");
		$('#military1').addClass("active");
	});
	
	$('#federal-civilian1').click(function() {
		$("html").animate({ scrollTop: "3190px" }, 1000);	
		$('.sub-navigation').addClass("sub-move");
		$('#overview1, #military1, #government-contractors1, #gsa1').removeClass("active"); 
		$('#federal-civilian1').addClass("active");
	});
	
	$('#government-contractors1').click(function() {
		$('.sub-navigation').addClass("sub-move");
		$("html").animate({ scrollTop: "3900px" }, 1000);
		$('#government-contractors1').addClass("active");
		$('#military1, #overview1, #federal-civilian1, #gsa1').removeClass("active");
				
	});
	
	$('#gsa1').click(function() {
		$("html").animate({ scrollTop: "4610px" }, 1000);	 
		$('.sub-navigation').addClass("sub-move");
		$('#overview1, #military1, #federal-civilian1, #government-contractors1').removeClass("active");	 
		$('#gsa1').addClass("active"); 
	});

