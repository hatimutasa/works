$(function() {
	$(".service-inside li:not('.current')").each(function() {
		$(this).hide();
	});
	
	$(".service-inside ul").each(function() {
		$(this).css({
			left:$(this).position().left,
			top:$(this).position().top
		});
	});
	
	$(".service-inside li.current").mouseover(function() {
		var index = $(this).index();
		$(this).parent().css("top",-(index * 27));
		$(".service-inside ul").each(function() {
			$(this).css("position","absolute");
		});
	});
	
	$(".service-inside ul").mouseleave(function() {
		$(this).removeClass("active").css("top","0").parent().find("li:not('.current')").hide();
		$(".wrapper").remove();
	});
	
	$(".service-inside ul").mouseover(function() {
		if(!$(".wrapper").size())
			$(this).parent().append('<div class="wrapper" style="height:'+$(this).height()+'px;left:'+$(this).css("left")+';top:'+$(this).css("top")+';width:'+$(this).width()+'px;">');
	});
	
	$(".service-inside li").hover(function() {
		$(this).addClass("hovered").parent().addClass("active");
		$(this).parent().find("li").show();
	},function() {
		$(this).removeClass("hovered");
	});
	//Changed
	$(".services .service-menu > a").hover(function() {
		$(this).parents(".service").addClass("hovered").parent().css("zIndex","200");
	});
	$(".service").mouseleave(function() {
		$(this).removeClass("hovered").parent().css("zIndex","0");
	});
	//Changed
});