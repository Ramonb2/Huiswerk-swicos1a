$(document).ready(function(){
 $("#contactg").hide();
  $("#contact").hover(function(){
    $("#contact").css("background-color","gray");
    },function(){
    $("#contact").css("background-color","white");
  });
   $("#contact2").hover(function(){
    $("#contact2").css("background-color","gray");
    },function(){
    $("#contact2").css("background-color","white");
  });
  $("#contactmin").click(function(){
  $("#contactg").hide();
});

$("#contactmeer").click(function(){

  $("#contactg").show();
});


  $("#opmerk").focus(function(){
  
    $("#info").css("display","inline").fadeOut(2000);
	
  });

   $("input").blur(function(){
    $("#info").css("display","inline").fadeOut(2000);
  });
});