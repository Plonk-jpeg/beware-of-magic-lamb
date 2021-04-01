<?php
include "htmlspecialchars.php";
include "Database.php";

$database = new Database();

//connection
$connect = $database->getConnect();
/*Les Produits*/

//Requete des produits
$resultat = $connect->prepare("SELECT * FROM products WHERE productStyle LIKE ? AND categoryId = 1");

//variable du filtre defini vide si non appellée
$styleDeBiere = '';
//capture  de la variable
if (isset($_GET['styleDeBiere'])){
	$styleDeBiere = $_GET['styleDeBiere'];
}

$resultat->execute(['%'.$styleDeBiere.'%']);

$products = $resultat->fetchAll();
//var_dump($products);
//exit;

/*Les Styles*/
/*Requete des differents style de produduits*/
$resultatfilter = $connect->prepare("SELECT DISTINCT productStyle FROM products");

$resultatfilter->execute();

$filterstyles = $resultatfilter->fetchAll();
//var_dump($filterstyles);
//exit;

/*Les Packs*/
//requete des packs
$resultatPack = $connect->prepare("SELECT * FROM products WHERE categoryId = 2");

$resultatPack->execute();

$packs = $resultatPack->fetchAll();
//var_dump($packs);
//exit;

include "../vue-php-Botml/bieres-view.phtml";