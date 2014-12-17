$(document).ready(function(){
  $("#main > img").click(function(){
    $("#main > img").animate({
      height:'640px',
      width:'560px'
    });
  });
});
$(document).ready(function(){
  $("#main > img").dblclick(function(){
    $("#main > img").animate({
      height:'320px',
      width:'280px'
    });
  });
});