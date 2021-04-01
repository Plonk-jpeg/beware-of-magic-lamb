<?php
//var_dump($_GET);
include "Database.php";
$database = new Database();

//test de vconnection

$connect = $database->getConnect();

/*la requete sql*/
$resultat = $connect->prepare("SELECT * FROM products WHERE productId = ?");
$resultat->execute([$_GET['id'] ]);
                
/*affiche en parcourant un tableau entrée par entrée*/
$product = $resultat->fetch();


$id = $product['productId'];
// si id est une unité (chaine de caractere de 1)
if (strlen($id) == 1) {
	//j'ajoute un zero en temps que chiffre des dizaine devant le chiffre des unités
	$unit = $id;
	$decade = '0';
	//que je separe en deux chaine de caractére
		
	//$unit = substr("$id", -2,1)
	
	//sinon l'id est (chaine de caractere de 2)
}else{
	$unit = substr($id, -1);
	$decade = substr($id, -2,1);
	//que je separe en deux chaine de caractére dont le chiffre des dizaine devient le contenu de la variable $decade
	
}

//var_dump($decade,$unit);



$resultatPack = $connect->prepare("SELECT * FROM products WHERE categoryId = 2");

$resultatPack->execute();

$packs = $resultatPack->fetchAll();

//function numbered
//$_GET['id'];


include "../vue-php-Botml/nos-bieres-focus.phtml";
//substr ( string $string , int $start [, int $length ] ) : string
