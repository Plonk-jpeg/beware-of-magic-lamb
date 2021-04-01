function checkAge() {

	// traitement de l'age
	event.preventDefault();
	
	// placement dans un variable des infos de la page
	let userbirthdate = getValue();
	// placement dans une variable de la soustraction du temps en ms et des infos de la page
	let quickmath = Date.now() - userbirthdate.getTime();
	//calcul pour convertir les millisecondes en année
	let age = Math.floor(quickmath / (1000 * 60 * 60 * 24 * 365.25))
	console.log(age);
	
	if (age > 18) {
		//on stock dans le localstorage la valeur true si la condition est rempli
		window.localStorage.setItem('ageCheck', true);
		
		//selectionne la classe block-body et retire la classe blocker
		//.blocker{ position: fixed; }
		document.querySelector(".block-body").classList.remove('blocker');
		
		//selectionne la classe age-check-content et ajoute la classe hidden
		//.hidden{ visibility:none }
		document.querySelector('.age-check-content').classList.add('hidden');
	}
}
		//vérification à chaque chargement de page
document.addEventListener('DOMContentLoaded', () => {
		//si l'élèment n'existe pas dans le localstorage
	if (!window.localStorage.getItem('ageCheck')) {
		
		//bloquage du scroll de la page
		document.querySelector('.block-body').classList.add('blocker');
		//apparition de la div du formulaire de la vérification d'âge
		document.querySelector('.age-check-content').classList.remove('hidden');

		//ajout de la fonction pour le formulaire de validation d'age
		document.querySelector('.age-check-forms').addEventListener('submit', checkAge);
		
		//parcour des années depuis 1904 à aujourd'hui
		let date = document.getElementById('year');
		let thisyear = new Date().getFullYear();
		let yearStart = 1904;

		while (thisyear >= yearStart) {
			let dateOption = document.createElement('option');
			dateOption.text = thisyear;
			dateOption.value = thisyear;
			date.add(dateOption);
			thisyear -= 1;
		}

	}
});

//fonction de recupereation des infos du formulaire
function getValue() {
	
	let day = document.querySelector('#day').value
	let month = document.querySelector('#month').value
	let year = document.querySelector('#year').value
	
	return new Date(year,month,day);
	
}

