// // var animals = Array("dog", "cat", "monkey");
// // for (var animal in animals) {
// // 	console.log(animals[animal]);
// // }


// // var monsters = ["zombie", "vampire", "werewolf"];
// // for (var monster in monsters) {
// // 	console.log(monsters(monster));
// // }

// var person = {name: "Russ", age: 29, favoriteColor: "blue"};
// 	console.log(person.favoriteColor);
// 	console.log(person.age);
// 	console.log(person.name);

// var dog = {breed: "german-shepherd", color: "brown", hairLength: "short"};
// 	console.log(dog.breed);

// var classroom = {
// 	class: "coding",
// 	time: "noon",
// 	temperature: "cool",
// 	light: "dim"
// }

// console.log(classroom.light);
// console.log(classroom['light']);

// //this is a MAJOR deal: understanding that these two above are the same way of accessing an OBJECT LITERAL => associative array;

// classroom.addthisway = "turkey";
// classroom['addthatway'] = "smurkey";
// console.log(classroom);

// //you have to use square brackets when the key is dynamic and a variable, if we used classrooom.key 
// //below the program would look for classroom => key as a key in the object literal that doesn't exist.


// //var key = prompt('what key do you want?');
// //console.log('you typed: ' + key);
// //console.log(classroom[key]);


// function getNames() {
// 	return ['brad', 'mike','dave'];
// }

// var second_person = getNames()[1];
// console.log(second_person);


// ////////////////////////////////////////////////////////////////
// var RockitClass = {
// 	subject: 'math',
// 	students: ['Russ', 'Matt', 'Mitch']
// }

// console.log(RockitClass.students[1]);

// var ASUClass = {
// 	subject: 'gym',
// 	students: ['Claire', 'Sancho', 'Perry']
// }

// var classes = [RockitClass, ASUClass];

// console.log("HERE");
// console.log(classes[0].students[1]);
// console.log("THERE");


// var FoodTruck = {
// 	trucks: '4 Wheels',
// 	foods: ['tacos', 'burgers', 'gyros','shitbread']
// }

// console.log(FoodTruck.foods[3]);


// //objects vs arrays: 
// //objects include functionality arrays are lists of common attributes.
// //objects are bundles of common attributes.

// // function bar() {
// // 	return "hello";
// // }

// // function foo() {
// // 	return bar();
// // }

// // console.log(foo());


// // var doCoolStuff = function(callback) {
// //  return callback();
// // }

// // doCoolStuff(foo());

// //functions being passed into other functions, because they are variables when written 
// //in function expression form, this form is 19 out of 20 cases.


// // var x = function() {
// // 	console.log('x was called');
// // }

// // setTimeout(x, 2000);

// // setInterval(x,1);


// var foops = function(v){
// 	console.log (v);
// }

// var x = "hello";
// foops(x);
// foops('world');

// //one is a variable is 


// //anonymous functions: used in one instances and dont use variables.
// setInterval(function(){
// 	console.log('x was called');}, )
// }


// var element = jQuery('div');
// element.remove();

// could be:

// $('div').remove();

// var doThisWhenReady = function() {
// 	console.log('were ready');
// 	$('div').remove();
// }

// $(document).ready(doThisWhenReady);

// //the above corrects the flow problem of javascript loading before the page data.  

// // compressed into an anonymous function:

// var doThisWhenReady = 
// }

// $(document).ready(function() {
// 	console.log('were ready');
// 	$('div').remove();
// });


//jQuery syntax is always $(---).doSomething


//  $(document).ready(function(){
// 	//  	console.log($('div').html());
//  // 	console.log($('div').text());

// // $('ul li').addClass('foo'); //this is working like css, ul >li

// // $('ul').find('li').addClass('foo'); //find ul's find li's under, class 'foo';
// 	$('.c').parents().addClass('foo');
// 	// $('.selected').parents('ul').addClass('foo');
// 	// $('.selected').parents('ul').addClass('foo');
// 	// $('.selected').parents('ul').addClass('foo');

// 	//adds .selected to parent 'ul's that are found.
	


//  });


// $()

// //these are the same:

// $(function(){

// });

// //this .css plays with the inline style of an element

// $(function(){

// 	$('div').css('color', 'red');

// //methods can be chained together: Method chaining:

// 	$('div').foo().bar().whatever();
// });

//$(function(){

// 	$('div').html('Foo'); //replaces  an item's text but doesn't destroy html entities
// 	$('div').append('Foo').addClass('Bar'); //adds onto an items text, works like .html adds html entitites
// 	$('div').text('Foo').addClass('Bar'); //treats html inside text as text
// 	$('div').append('<button>button</button>');
// 	$('div').append(e);//append function
// 	e.appendTo('div');
//var message = $('div').append();

//});






































