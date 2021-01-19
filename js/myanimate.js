$(window).on('load', function () {
    $preloader = $('.preloader'),
      $loader = $preloader.find('.cssload-loader');
    $loader.fadeOut();
    $preloader.delay(350).fadeOut('slow');
  });

$(document).ready(function(){
    $('#sq').on("click", function(){
        $('#filter-nav').toggle('slow');
    });
});

$(function() {

	var newSelection = "";
	
	$("#filter-nav a").click(function(){
	
	    $("#all-filter").show(500);
	
		$("#filter-nav a").removeClass("current");
		$(this).addClass("current");
		
		newSelection = $(this).attr("rel");
		
		$(".filter").not("."+newSelection).hide(700);
		$("."+newSelection).show(800);
		
	    $("#all-filter").fadeTo(600);
		
	});
	
}); 


