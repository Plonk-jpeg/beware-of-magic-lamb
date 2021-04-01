<?php

include 'UserSession.php';
include 'Database.php';
include 'htmlspecialchars.php';

//verification des privileges utilisateur
$usersession = new UserSession();//instancie la class UserSession

//verifie si l'utilisateur est un admin
if ($usersession->getUserRole() != 'Morbette'){ 
	//redirection vers l'index
	header('Location: /3WA/BOTML/vue-php-botml/index.php');
}

$database = new Database();


if (! empty($_POST)) {
//connection a la base de donnée
$connect = $database->getConnect();

//variable pour le hachage du mot de passe du formulaire ?
$passHash = password_hash(($_POST)['userPass'], PASSWORD_DEFAULT);

// insertion du nouvel utilisateur dans la base de donnée
    $req = $connect->prepare('INSERT INTO users (userPseudo, userPass) VALUES(?, ?)');

    // on exécute la requête et on hash le mot de passe afin qu'il n'apparaissent pas en clair dans la base de donnée
    $req->execute([
        _escape($_POST['userPseudo']),
        $passHash
    ]);
	
}

// inclusion du formulaire de creation de profil
include "create-login.phtml";
