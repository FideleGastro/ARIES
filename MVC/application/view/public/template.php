<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $titre ?></title>
	<link rel="stylesheet" type="text/css" href="<?= CSS ?>/style.css">	
</head>
<body>
	<nav class="navbar">
		<h3><?= $titre ?></h3>
		<ul>
			<li><a href="<?= BASE_URL ?>/acceuil"> acceuil </a></li>//
			<li><a href="<?= BASE_URL ?>/contact"> contact </a></li> //
			<li><a href=""> users </a></li>
		</ul>
	</nav>
	<div class="container">
		<?php require $page; ?>
	</div>
</body>
</html>