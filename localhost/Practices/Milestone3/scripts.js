//var foo;	//var foo is at a local scope, although it is the parent of all because it is on the 
			//base scope.
//foo="this is foo"; //defines a global scope variable.  No var tag.  

//console.log(typeof foo);
//var foo = parseInt("23") + 2; //here is example of implicit vs explicit.  since the + is the concatenator and + sign,
								//if a string exists the + concatenates.
//console.log(foo);

// var name = "Russ";
// console.log ("Hello " + name + ', good to meet you!');


// var age1= 20;
// var age2= 9;
// var age3= 72;
// var age4= 50;

// 	if (age1 >= 10 && age1 <= 65){
// 		console.log("You are strong!");
// 	}
// 	else {
// 		console.log("you are weak!");
// 	}

// 	console.log("You are Strong");
// 	(var >= 10 && var <=65){
// function strength
// }


// var name ="Russ Wolf";

// console.log(name.substring(0, 4));

var els = document.getElementsByTagName('div');
	console.log(els.length);
	//counts amount of divs found, 
	console.log(els[0].innerHTML);
	console.log(els[1].innerHTML);
	console.log(els[2].innerHTML);
	//prints out array values from getElementsByTagName

var second_thing = document.getElementsByTagName('div')[2];
	console.log(second_thing.innerHTML);
	//we can call these items by their array value as well without defining the array first.
	//innerHTML strips the values from in between the HTML tags. without it in the above
	//the output would be <div>2</div>, with innerHTML it strips to 2.

var e = document.querySelector('div.foo');
	console.log(e.innerHTML);
	console.log(typeof e);
	//this uses css but gets only one thing, one value as an object not an array.  It would only
	//give you the first element of doc.

var elements = document.querySelectorAll('div.foo')[0];
	console.log(elements.innerHTML);
	console.log(typeof elements);
	//this gives all of the elements from a css selector.  This is helpful to get more than 1 element.
	//produces an array.
var setter = document.querySelectorAll('div.foo');      //this line makes an array from document.
setter[0].innerHTML = "REMAPPED OVER THE HTML yay!!!";	//this line selects one array element and
	//codes over it with the new text.


var highlighted = document.querySelectorAll('div')[0];
	highlighted.setAttribute('class', 'person, highlight');

var person = ["Mitch", "Noggle", 23];
	person.push("stinkbag");
	console.log(person);

	//this is a way to make an array and push onto it.  There is no way to make an associative array.

var person2 = {
	'name': 'Brad',
	'age': 12,
	'favnums': [2,24]
}

console.log(person2.favnums[0]);

	//this is an object literal, this object without methods is acting very similarly to an array.


var person3 = {
	'name': 'Brad',
	'age': 12,
	'favnums': [2,24],
	'dog':{
		'name':'ralf'
		'litterCount': [4,9]
	}
}

console.log(person3.dog.litterCount[1]);

//here is how we all items out of an array from a class.  