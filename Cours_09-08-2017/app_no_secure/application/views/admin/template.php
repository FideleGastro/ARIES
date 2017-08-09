<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Projet - <?= $titre ?></title>
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= CSS ?>style.css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-6" aria-expanded="false"> 
                <span class="sr-only">Toggle navigation</span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                </button> 
                <a href="#" class="navbar-brand">Brand</a> 
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-6">
                <ul class="nav navbar-nav">
                    <li><?php ?></li>
                    <li><a href="<?php ?>">Accueil</a></li>
                    <li><a href="<?= BASE_URL ?>/authenticate/logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

	<div class="container">
		<?php require $page; ?>
	</div>

</body>
</html>