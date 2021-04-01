<?php
include 'UserSession.php';
include 'htmlspecialchars.php';
include 'Database.php';

//verification des privilege utilisateur
$usersession = new UserSession();//instancie la class UserSession

if ($usersession->getUserRole() != 'Morbette'){ //qui verifie si l'user est un admin
	
	header('Location: /3WA/BOTML/vue-php-botml/index.php');
}

//var_dump($usersession->getUserRole(), $_SESSION);
//exit;

$database = new Database();

//connection
$connect = $database->getConnect();

$query = $connect->prepare(
    'SELECT * FROM Products'
);

$query->execute();

$products = $query->fetchAll();

//var_dump($products);

include "index-crud.phtml";