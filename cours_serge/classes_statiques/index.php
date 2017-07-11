<?php

	require "cls/session.php";
	# les classes ne sont instanciées
	Session::start();
	Session::set('auth',['pseudo'=>'serge', 'profil'=>'admin']);
	if(isset($_GET['destroy'])) {
		if(Session::destroy('auth')){
			$msg =  "Session détruite";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

	<?php if(Session::existe('auth')): ?>
		<h1>Salut <?= Session::get('auth','pseudo') ?></h1>
		<a href="?destroy=true">destroy session</a>
	<?php else: ?>
		<p><?= $msg ?></p>
	<?php endif; ?>
</body>
</html>
