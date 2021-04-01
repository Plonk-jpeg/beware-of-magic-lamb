<?php
include 'Database.php';
include 'UserSession.php';

$database = new Database();

//connection

$connect = $database->getConnect();
$query = $connect->prepare('SELECT * FROM users WHERE userPseudo = ?'); //?=l'entree de l'utilisateur puis compare avec le pseudo dans la bdd

$query->execute([$_POST['userPseudo'] ]); //entree de l'utilisateur
$user = $query->fetch();


$usersession = new UserSession();

if($user){
	
	if (password_verify($_POST['userPass'], $user['userPass'])) {
		
			$usersession->create($user['userId'], $user['userPseudo'], $user['userRole']);

	} else {
		$usersession->destroy();
	}
} else{
	$usersession->destroy();
}

if ($usersession->getUserRole() == 'Morbette'){
	
	header('Location: index-crud.php');
	
} else {
	
	header('Location: /3WA/BOTML/vue-php-botml/index.php');
}

//var_dump($_POST);
//exit;

//include '/3WA/BOTML/vue-php-Botml/header.inc.php';