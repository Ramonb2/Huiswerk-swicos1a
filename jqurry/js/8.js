$(document).ready(function(){
		$("input").blur(function(){
    alert("Deze input heeft geen focus meer.");
  });
});
$(document).ready(function(){
		$("input").focus(function(){
    alert("Deze input heeft weer focus");
  });
});