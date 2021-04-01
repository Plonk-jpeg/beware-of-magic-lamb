<?php

include 'UserSession.php';
include 'Database.php';
include "htmlspecialchars.php";

//verification des privilege utilisateur
$usersession = new UserSession();//instancie la class UserSession

if ($usersession->getUserRole() != 'Morbette'){ //qui verifie si l'user est un admin
	
	header('Location: /3WA/BOTML/vue-php-botml/index.php');
}

$database = new Database();


//connection
$connect = $database->getConnect();
if (empty($_POST)) {

    // Récupération des informations de l'article à modifier

    $query = $connect->prepare("SELECT productName, productPicture, productPrice, productQuote, productQuantity, productDescription, productStyle, productAbv, productHops, productMalt, productYeast, productIngredient, categoryId, productId FROM products WHERE productId = ?");
	$query->execute([$_GET['id'] ]);
              
/*affiche en parcourant un tableau entrée par entrée*/
$info = $query->fetch();

$query = $connect->prepare("SELECT DISTINCT productStyle, productHops, productMalt, productYeast, categoryId FROM products");
$query->execute();
    
$fields = $query->fetchAll();

//Liste 	
$query = $connect->prepare("SELECT DISTINCT productStyle FROM products");
$query->execute();
    
$liststyles = $query->fetchAll();
	
$query = $connect->prepare("SELECT DISTINCT productHops FROM products");
$query->execute();
    
$listhops = $query->fetchAll();	
	
$query = $connect->prepare("SELECT DISTINCT productMalt FROM products");
$query->execute();
    
$listmalts = $query->fetchAll();	
	
$query = $connect->prepare("SELECT DISTINCT  productYeast FROM products");
$query->execute();
    
$listyeasts = $query->fetchAll();	

$query = $connect->prepare("SELECT DISTINCT categoryId FROM products");
$query->execute();
    
$listcatgories = $query->fetchAll();

//var_dump($info);	
include 'edit-product.phtml';
//var_dump($product);  
} else {
// Modification de l'article
	if (isset($_FILES['productPicture']))
	{
		$productPicture = $_FILES['productPicture'];

		move_uploaded_file($_FILES['productPicture']['tmp_name'], '../ressources-Botml/image/beers/' . $_FILES['productPicture']['name']);
		
		$update = $connect->prepare('UPDATE products SET productName = ?, categoryId = ?, productPicture = ?, productPrice = ?, productQuantity = ?, productQuote = ?, productDescription = ?, productStyle = ?, productAbv = ?, productHops = ?, productMalt = ?, productYeast = ? ,productIngredient = ? WHERE productId = ?');
    $update->execute([
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
        _escape($_POST['productIngredient']),
		_escape($_POST['productId'])
    ]);

	}
    
    header('Location: index-crud.php?id=' . $_POST['productId']);
    exit();
}