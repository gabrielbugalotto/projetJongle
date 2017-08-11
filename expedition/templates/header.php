<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>L'expédition</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $urlRoot; ?>/assets/img/header/logo.png" />
	<link rel="stylesheet" type="text/css" href="<?php echo $urlRoot; ?>/assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $urlRoot; ?>/assets/css/style_cel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $urlRoot; ?>/assets/css/style_nic.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $urlRoot; ?>/assets/css/style.css">
</head>
<body>
	<div>
	<!-- début header -->
		<header>
			<nav class="contain">
				<a id="btn-menu" href="#"> menu</a>
				<a id="btn-connexion" href="#">connexion</a>
			</nav>
			<!-- début menu -->
		<div id="menu">
			<a id="btn-close" href="#">fermer menu</a>
			<ul class="contain-col">
				<li><a href="<?php echo $app['url_generator']->generate('accueil')?>">accueil</a></li>
				<li><a href="<?php echo $app['url_generator']->generate('presentation')?>">présentation</a></li>
				<li><a href="<?php echo $app['url_generator']->generate('pedagogie')?>">pédagogie</a></li>
				<li><a href="<?php echo $app['url_generator']->generate('blog')?>">blog</a></li>
				<li><a href="<?php echo $app['url_generator']->generate('back-office/espace-membre')?>">espace membre</a></li>
				<li><a href="<?php echo $app['url_generator']->generate('galerie')?>">galerie</a></li>
				<li><a href="<?php echo $app['url_generator']->generate('evenements')?>">événements</a></li>
				<li><a href="<?php echo $app['url_generator']->generate('contact')?>">contact</a></li>
			</ul>
		</div>		
	<!-- début formulaire login -->	
		</header>
	
		<div id="login">
			<div>
				<a id="btn-close2" href="#">a</a>
				<h1>connexion</h1>
				<form action="" method="GET">
					<input type="email" name="email" required placeholder="adresse email">
					<input type="password" name="password" required placeholder="mot de passe">
					<a href="#">mot de passe oublié ?</a>
					<button type="submit">se connecter</button>	
					<input type="hidden" name="ClassTraitement" value="Login">
					<p>vous n'avez pas de compte?</p>
					<a id="btn-inscription" href="#">créer un compte</a>
				</form>
			</div>	
		</div>
	<!-- début formulaire inscription -->
		<div id="inscription">
			<div>
				<div>
					<a id="btn-close3" href="#">a</a>
					<h1>inscription</h1>
					<form action="" method="GET">
						<input type="text" name="nom" required placeholder="nom">
						<input type="text" name="prenom" required placeholder="prenom">
						<input type="text" name="pseudo" required placeholder="pseudo">
						<input type="email" name="email" required placeholder="adresse email">
						<input type="password" name="password" required placeholder="mot de passe">
						<input type="password" name="password_confirm" required placeholder="confirmation mot de passe">
						<input type="text" name="age" required placeholder="âge">
						<select name="genre">
		                    <option value="">genre</option>    
		                    <option value="femme">Femme</option>
		                    <option value="homme">Homme</option>
		                </select> 
		                <div class="g-recaptcha" data-sitekey="6LcdcywUAAAAAHxX-HN4FaW3zsw-L7KwwvcNl-Mh"></div>
						<button type="submit">valider inscription</button>	
						<input type="hidden" name="ClassTraitement" value="Inscription">
					</form>
				</div>
			</div>
		</div>		
	</div>
	<main>