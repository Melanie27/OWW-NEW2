/*Scroll to Request Apartment part of page*//*$('#military1').click(function() {
		//$("html").animate({ scrollTop: "5000px" }, 1000);
		console.log('yo');	 
	});*/$(".carousel").carousel({interval:!1});$(".collapse").collapse();$("#collapseOne").on("show.bs.collapse",function(){$("#btn-1").css("background-image","url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)")});$("#collapseOne").on("hidden.bs.collapse",function(){$("#btn-1").css("background-image","url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)")});$("#collapseTwo").on("show.bs.collapse",function(){$("#btn-2").css("background-image","url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)")});$("#collapseTwo").on("hidden.bs.collapse",function(){$("#btn-2").css("background-image","url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)")});$("#collapseThree").on("show.bs.collapse",function(){$("#btn-3").css("background-image","url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)")});$("#collapseThree").on("hidden.bs.collapse",function(){$("#btn-3").css("background-image","url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)")});$("#collapseFour").on("show.bs.collapse",function(){$("#btn-4").css("background-image","url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)")});$("#collapseFour").on("hidden.bs.collapse",function(){$("#btn-4").css("background-image","url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)")});$("#collapseFive").on("show.bs.collapse",function(){$("#btn-5").css("background-image","url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)")});$("#collapseFive").on("hidden.bs.collapse",function(){$("#btn-5").css("background-image","url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)")});$(".panel-heading a").each(function(e){var t=$(this).attr("href"),n=$(this).parent().parent().attr("id"),r=$("."+n),i=$(this).find("button"),s=$(i).attr("id"),o=s.substring(0,3);btnString=$("."+o);btnIDString=$("#"+s);var u=$(this).parent().attr("class");titleSub=u.substring(0,6);titleString=$("."+titleSub);$(t).on("show.bs.collapse",function(){$(r).css("border-bottom","none")});$(t).on("hidden.bs.collapse",function(){$(r).css("border-bottom","solid 1px #bbb")})});$("#home a:contains('Home')").parent().addClass("active");$("#our-brands a:contains('Our Brands')").parent().addClass("active");$("#global-corporate-housing a:contains('Global Corporate Housing')").parent().addClass("active");$("#business-solutions a:contains('Business Solutions')").parent().addClass("active");$("#vision-leadership a:contains('Vision and Leadership')").parent().addClass("active");$("#news a:contains('News')").parent().addClass("active");$("#marriott a:contains('Marriott')").parent().addClass("active");$("#careers a:contains('Careers')").parent().addClass("active");$("#overview1").click(function(){$("html").animate({scrollTop:"420px"},1e3);console.log("yo");$(".sub-nav").addClass("sub-move")});$("#military1").click(function(){$("html").animate({scrollTop:"2000px"},1e3);console.log("yo");$(".sub-nav").addClass("sub-move")});$("#federal-civilian1").click(function(){$("html").animate({scrollTop:"3200px"},1e3);console.log("yo");$(".sub-nav").addClass("sub-move")});$("#government-contractors1").click(function(){$("html").animate({scrollTop:"4000px"},1e3);console.log("yo");$(".sub-nav").addClass("sub-move")});$("#gsa1").click(function(){$("html").animate({scrollTop:"4900px"},1e3);console.log("yo");$(".sub-nav").addClass("sub-move")});