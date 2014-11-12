//practice for class, jquery's getters for getting data and strings and changing it;

$(document).ready(function(){
//make the li's
	$('.submit').click(function(){
		var text = $('input').val();
		$('ul').append("<li>" + text + "<button class='x'>x</button></li>");
	});
	

//Clear One line
	$('div').on('click', '.x', function(){
		console.log("removed");
		$(this).parent().remove();
	});



//Clear everything:
	$(".clear").on("click", function(){
		$("ul").empty();	
	});
	


	$('p').blur(function(){
		$('p').css("background-color","black");
		$('p').css("color", "white");
	})


	//$(".delete").remove('ul');


});
	