//Ecouteur du bouton via l'element onclick de l'id
//incremente
document.getElementById("increase").onclick =
function increaseValue() {
	
  let value = parseInt(document.getElementById('number').value, 10);
	
  value = isNaN(value) ? 0 : value;
  value++;
	
  document.getElementById('number').value = value;
}

//decremente
document.getElementById("decrease").onclick =
function decreaseValue() {
	
  let value = parseInt(document.getElementById('number').value, 10);
	
  value = isNaN(value) ? 0 : value;
	
  value < 1 ? value = 1 : '';
	
  value--;
	
  document.getElementById('number').value = value;
}