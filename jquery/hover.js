$(document).ready(function(){
$("#logo").mouseover(function(){
   $("#logo").animate({padding:"5px"});
});
$("#logo").mouseout(function(){
   $("#logo").animate({padding:"0px"});
});
 $('#logo').click(function(){

         window.location = 'index.html';
    })   
});