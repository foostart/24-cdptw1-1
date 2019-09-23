$(document).ready(function () {
	$(".type-1673-popup-contact").submit(function() {
  		alert("Subcribe Successfully !!!!")
  	});
	$("#type-1673-show-popup").css("display","none");
	setTimeout(function () {
    $("#type-1673-show-popup").show(); 
  	}, 1000);
  	$("#close-popup").click(function () {
  		$("#type-1673-show-popup").css("display","none");
  	});
});
