//Ouverture/fermenture du menu de navigation mobile

//Mobile Navigation
//Ouverture
document.getElementById("openNav").onclick = 
function() {					
	document.getElementById("myNav").style.height = "100%";
	
	document.body.classList.toggle('lock-scroll');
};

//Fermeture
document.getElementById("closeNav").onclick = 
function() {					
	document.getElementById("myNav").style.height = "0%";
	
	document.body.classList.toggle('lock-scroll');
};


//Ouverture/fermenture du login

//Ouverture
document.getElementById("openLogin").onclick = 
function() {
	document.getElementById("myLogin").style.height = 
	"100%";
	
	document.body.classList.toggle('lock-scroll');

};

//Fermeture
document.getElementById("closeLogin").onclick = function() {
	document.getElementById("myLogin").style.height = "0%";
	
	document.body.classList.toggle('lock-scroll');
};

/*Navigation Javasript*/
/*Navigation Javasript*/
/*Navigation Javasript*/

/*////////////////////////////////////////////*/

/*Barre de recherche Javascript*/
/*Barre de recherche Javascript*/
/*Barre de recherche Javascript*/
document.getElementById('searchIcon').onclick = function () {
	document.getElementById('search').classList.add("visible");
	document.getElementById('clear').classList.add("visible");
	document.getElementById('search').focus();
	document.getElementById('searchIcon').classList.add("hide");
};

document.getElementById('clear').onclick = function () {
	document.getElementById('searchIcon').classList.remove("hide");
	document.getElementById('search').classList.remove("visible");
	document.getElementById('clear').classList.remove("visible");
};
/*Barre de recherche Javascript*/
/*Barre de recherche Javascript*/
/*Barre de recherche Javascript*/
/*bloque le scroll vertical*/
