<?php
	require "cls/auth.php";
	require "cls/db.php";
	require "cls/Musicien.php";
	
	DB::connect();
	$all =  Musicien::all();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<dl class="menu">
		<?php foreach($all as $k=>$m): ?>
		<dt><h3><?= $m->prenom ?> <?= $m->nom ?></h3></dt>
		<?php $cls = $k==0 ? "open" : ""; ?>
		<dd class='<?= $cls ?>'>
			<figure><img src="assets/images/<?= $m->photo ?>"></figure>
			<figcaption><?= $m->style ?></figcaption>
		</dd>
		<?php endforeach; ?>
	</dl>
	
	<script src="assets/js/app.js"></script>
</body>
</html>