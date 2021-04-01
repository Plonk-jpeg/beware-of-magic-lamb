<?php

if (array_key_exists('id', $_GET)) {
	include 'UserSession.php';
    include 'Database.php';

	
//verification des privileges utilisateur	
$usersession = new UserSession();//instancie la class UserSession

if ($usersession->getUserRole() != 'Morbette'){ //qui verifie si l'useur est un admin
	
	header('Location: /3WA/BOTML/vue-php-botml/index.php');
}	

	

$database = new Database();
	
	// var_dump($_GET['id']);
    //connection
$connect = $database->getConnect();
	
    $query = $connect->prepare('DELETE FROM Products WHERE productId = ?');
    $query->execute([
        $_GET['id'] 
    ]);
}


include "delete-product.phtml";
//header('Location: index-crud.php');
//exit();