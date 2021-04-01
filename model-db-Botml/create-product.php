<?php

include "UserSession.php";
include "Database.php";
include "htmlspecialchars.php";

//verification des privileges utilisateur
$usersession = new UserSession();//instancie la class UserSession

//qui verifie si l'utilisateur est un admin (morbette* = admin, pim's* = utilisateur)
//*c'est le nom de mes deux chats
if ($usersession->getUserRole() != 'Morbette'){ 
	
	header('Location: /3WA/BOTML/vue-php-botml/index.php');
}

//instancie la class Database
$database = new Database();

//deplace l'image selectionner pour la creation de produit dans le dossier ressources
if (isset($_FILES['productPicture']))
{
$productPicture = $_FILES['productPicture']['name'];
move_uploaded_file($_FILES['productPicture']['tmp_name'], '/3WA/BOTML/ressources-Botml/image/beers/' . $_FILES['productPicture']['name']);
}
else{
	$productPicture = null;
}

//connection
$connect = $database->getConnect();

// si le formulaire contient des informations on enregistre le nouvel article
//n.b ! veut dire n'est pas
if (! empty($_POST)) {
    
	//la requete SQL pour l'insertion des infos du produit dans la base de donnée
    $create = $connect->prepare('INSERT INTO products(productName, categoryId, productPicture, productPrice, productQuantity, productQuote, productDescription, productStyle, productAbv, productHops, productMalt, productYeast,
	productIngredient ) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

    // on exécute la requête et on renseigne les valeurs de nos champs tout en prenant soin de filtrer les caracteres renseigner afin d'eviter les attaques xss
    $create->execute([
        _escape($_POST['productName']),
        _escape($_POST['categoryId']),
        _escape($_FILES['productPicture']['name']),
        _escape($_POST['productPrice']),
		_escape($_POST['productQuantity']),
        _escape($_POST['productQuote']),
        _escape($_POST['productDescription']),
        _escape($_POST['productStyle']),
		_escape($_POST['productAbv']),
        _escape($_POST['productHops']),
        _escape($_POST['productMalt']),
		_escape($_POST['productYeast']),
        _escape($_POST['productIngredient'])
    ]);
	
	
    // récup le dernier id qui a été inséré
    $id = $connect->lastInsertId($productId);

    // on redirige vers l'accueil
	header('Location: index-crud.php');
    // exit();

} else {
	
    // affichage des donnees du formulaire
    //categories des bieres
    $query = $connect->prepare("SELECT DISTINCT categoryId FROM products ORDER BY categoryId");
    $query->execute();
    
    $productcategories = $query->fetchAll();
	
    //styles des bieres
    $query = $connect->prepare("SELECT DISTINCT productStyle FROM products");
    $query->execute();
    
    $productstyles = $query->fetchAll();	

    //hublons des bieres
    $query = $connect->prepare("SELECT DISTINCT productHops FROM products");
    $query->execute();
    
    $producthops = $query->fetchAll();
	
	//malt des bieres
	$query = $connect->prepare("SELECT DISTINCT productMalt FROM products");
    $query->execute();
    
    $productmalts = $query->fetchAll();
	
	//levures des bieres
	$query = $connect->prepare("SELECT DISTINCT productYeast FROM products");
    $query->execute();
    
    $productyeasts = $query->fetchAll();
}

//var_dump($_FILES);

include "create-product.phtml";	
