$(document).ready(function(){
  $("#main > img").mouseenter(function(){
      $("#main > img").animate({
		height:'640px',
		width:'560px'
	});
	});
});
$(document).ready(function(){
  $("#main > img").mouseleave(function(){
      $("#main > img").animate({
		height:'320px',
		width:'280px'
	});
	});
});