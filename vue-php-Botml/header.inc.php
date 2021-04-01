<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>Beware of the Magic Lamb</title>
	<meta name="author" content="Your Name">
	<meta name="description" content="Example description">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css-botml/normalize.css">
	<link rel="stylesheet" href="../css-botml/stylesheet-botml.css">
	<link href="../css-botml/fontawesome-free-5.14.0-web/css/all.css" rel="stylesheet">

</head>

<body class="block-body">
	<header>
	<!--Age validator-->
		<div class="age-check-content hidden">

			<div class="age-check-title">

			</div>
				<form class="age-check-forms" method="post">
				<img class="logo-form-age-check" src="../ressources-Botml/image/logo/BOTML-logo.gif" alt="logo">

				<h1>Veuillez renseignez votre age.</h1>

					<div class="select-content">
					<label for="day">Jour: </label>
					<select name="jour" id="day">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="13">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					</select>

					<label for="month">Mois: </label>
					<select name="mois" id="month">
						<option value="0">Janvier</option>
						<option value="1">Fevrier</option>
						<option value="2">Mars</option>
						<option value="3">Avril</option>
						<option value="4">Mai</option>
						<option value="5">Juin</option>
						<option value="6">Juillet</option>
						<option value="7">Aout</option>
						<option value="8">Septembre</option>
						<option value="9">Octobre</option>
						<option value="10">Novembre</option>
						<option value="11">Decembre</option>
					</select>

					<label for=year>Année: </label>
					<select name="annee" id="year">
					<!--fais en JS-->
					</select>

					<input type="submit" name="submit" value="Entrer">
					</div>
				</form>
			</div>

		<!--Menu-->
		<div class="header-menu">

			<div class="header-menu-banner">
				<img src="../ressources-Botml/image/pics/header-banner-animated-website-banner.gif" alt="header banner">

				<a href="../vue-php-Botml/index.php">
					<img src="../ressources-Botml/image/pics/header-banner-animated-website-name.gif" alt="title site">
				</a>

				<div>
					<!--Image de fond-->
				</div>

				<img src="../ressources-Botml/image/logo/Botml-logo-stroke.png" alt="brewery-logo">

			</div>

			<div class="header-menu-mobile-first">
				<!--Mobile menu-->
				<nav>

					<div>
						<span id="openNav">
							<i class="fas fa-bars fonts-icon bars"></i>
						</span>

						<div id="myNav" class="overlay">

							<span id="closeNav">
								<i class="fas fa-times closebtn"></i>
							</span>

							<div class="overlay-content">
								<a href="../model-db-Botml/product-db.php">Nos bieres</a>
								<a href="../vue-php-Botml/brasserie.php">Brasserie</a>
								<a href="../vue-php-Botml/shop.php">Shop</a>
								<a href="../vue-php-Botml/nous-trouver.php">Nous trouver</a>
							</div>
						</div>
					</div>

					<div>

						<span>
							<i id="searchIcon" class="fas fa-search fonts-icon searchs"></i>
						</span>

						<input type="text" id="search" placeholder="Exemple: Lager">

						<span>
							<i id="clear" class="fas fa-times"></i>
						</span>

					</div>

					<div class="icon-nav">
						<a href="../model-db-Botml/panier.php"><i class="fas fa-shopping-bag fonts-icon icon-nav"></i></a>
					</div>

					<div class="icon-nav ">

						<span id="openLogin">

							<i id="lock" class="fas fa-user fonts-icon icon-nav"></i>

						</span>

						<div id="myLogin" class="overlay">

							<span>
								<i id="closeLogin" class=" fas fa-times closebtn"></i>
							</span>


							<div class="overlay-login">

								<img class="postit" src="../ressources-Botml/image/pics/postit.png" alt="post">

								<form class="login-form" action="../model-db-Botml/verification.php" method="post">

									<label for=login></label>

									<input type="text" id="login" placeholder="Compte" name="userPseudo">

									<label for=password></label>

									<input type="text" id="password" placeholder="Mot de passe" name="userPass">
									<div class="login-form-button">
										<a href="../model-db-Botml/create-login.php">Creer un compte</a>

										<button class="connect-crud">Connexion</button>
									</div>
								</form>

							</div>
						</div>
					</div>
				</nav>
			</div>
			<!--Desktop et Tablette menu-->
			<div class="header-menu-tablet-desktop">

				<nav>
					<a href="../model-db-Botml/product-db.php">Nos bieres</a>
					<a href="../vue-php-Botml/brasserie.php">Brasserie</a>
					<a href="../vue-php-Botml/shop.php">Shop</a>

					<a href="../vue-php-Botml/nous-trouver.php">Nous trouver</a>
				</nav>

			</div>
		</div>

	<script src="../JS-BOTML/age-check.js"></script>
	<script src="../JS-BOTML/header-nav.js"></script>
	</header>
