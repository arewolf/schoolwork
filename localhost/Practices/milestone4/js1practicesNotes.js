function add() {
	var text = document.getElementById('text').value;
	document.getElementById('text').value = '';
	document.querySelector('ul').innerHTML += '<li>'+text+'</li>'; 
}






