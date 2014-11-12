$(function(){

	$('button').click(function(){

		$.ajax( {
			url: "data.php",
			type: "POST",
		//use post or get, if the intention is to database, POST is better, if just getitng info back, GET maybe better,
		//howerever, keep in mind that AJAX will NOT save GET's or POST's to browser history.  If you want to just get it done,
		//Use POST for everything.
			dataType: "json",
			cache: false,
			data: {foo:123},
			success: function(data){
				console.log(data);
			//data is the object of what json passed back to us;
			}
		})

		var user_id = $(this).attr('href').substr('1');
			console.log(user_id);

		})	
	})

//this is how ajax looks, the thing we pass is going to be an object literal, usually when we pass multiple things, 
//its usually in an object literal.  This is reasonably unique to jscript.

})

