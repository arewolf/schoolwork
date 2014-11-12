

	// // $(...);
	// // $('.selector');
	// // $(function(){});
	// // $('<div>');
	// // $(document);
	// $('div.a').click(function(){
	// 	$(this).find('a.foo').append('foo');		
	// });

	// $('button').click(function(){
	// 	$this.addClass('foo');


$(function(){

	$('button').click(function(){
		$(this).parent().toggleClass('highlight');
	})
	$('button').click(function(){
		$(this).toggleClass('red');
	})

});
























