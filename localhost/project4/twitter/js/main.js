

$(document).ready (function(){

//1 the object literal, User:
	var User = {
		handle: '@thatguy',
		img: 'images/person.jpg'
	}
	
//2 the State management JQuery for expand:
//For .compose form:
	$('body').on('click','textarea', function(event){
		
		$(this).parent().addClass('expand');
	})
//For tweet expand:
	$('main').on('click', '.tweet', function(){
		$(this).parent().toggleClass('expand');
	})



//3//Handlbars template creation:

	var renderTweet = function(User, message){

		var source = $('#template-tweet').html();
		var template = Handlebars.compile(source);
		var tweet= {"User": User.handle, "img":User.img, "message" : message};
		var compiled_tweet = template(tweet);
		return compiled_tweet;
	
	}
	


	function renderCompose(){
		var source = $('#template-compose').html();
		var template = Handlebars.compile(source);
		var compiled_product = template();
		return compiled_product;
		

	}


	function renderThread(User, message){
		var source = $('#template-thread').html();
		var template = Handlebars.compile(source);
		var product= {"template-tweet": renderTweet(User, message), "template-compose":renderCompose()};
		var compiled_product = template(product);
		return compiled_product;

	}	 	


//4 This final function ties the templates into the html dependant on if replies is 0 or not.
	$('body').on('submit', 'form', function(event){
		(event).preventDefault();
		
		//gets message:
		var message = $(this).find('textarea').val();
		
		if($(this).parents('.replies').length){
			
			//replies exist, add another reply:
			$(this, '.replies').parent().append(renderTweet(User, message));

		}else{
			
			//no replies, so add a new thread:
			$('.tweets').append(renderThread(User, message));

		}
		//resets the form:
		$(this).trigger('reset');

		//collapses the form after submit
		$(this).parent().find('form').toggleClass('expand');
		
		//counter not yet working....
		// var count = $(this).parent().find('.count').text();
		// $('textarea').keydown(function(){
		// 	console.log(count);
		// })
	});


	




	


});
