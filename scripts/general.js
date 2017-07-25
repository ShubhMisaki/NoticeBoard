$(document).ready(function(){
	$("a.mobile").click(function(){
		$(".sidebar").slideToggle('fast');
	});

	window.onresize = function(event) {
		if($(window).width() > 320) {
			$(".sidebar").show();
		}
	};

	var myTimer = setInterval(setClock,1000);
	function setClock(){	
	   document.getElementById("clock").innerHTML=new Date().toLocaleTimeString();}

});