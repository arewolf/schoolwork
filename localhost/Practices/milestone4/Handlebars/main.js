$(document).ready (function (){
	$('button').on("click", function(){
	

	//GETS THE SOURCE CODE with HTML using JQUERY:
	var source = $('.product-template').html();
	//Handlebars can compile the source as a template, which is a function:
	var template = Handlebars.compile(source);
	//here we are making an object literal just to use for the values of our template.
	var product= {'title': 'Rex', 'description': 'Furry'};
	//here we are passing template an object literal.
	var compiled_product = template(product);
	//JQUERY outputs/appends the 
		$('body').append(compiled_product);

------------------------------------------------------------------


	var source = $('.threads-template').html();
	var template = Handlebars.compile(source);
	var product= {product: compiled_product};
	var output = template(thread);



	})



})