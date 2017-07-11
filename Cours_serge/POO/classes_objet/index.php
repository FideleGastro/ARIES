<?php

	require "cls/personne.php";

	# fabriquer un objet  ==> Instancier
	$p1 =  new Personne('Serge','Argiolas');
	$p1->setPrenom('Vincent');
	echo $p1->getPrenom();
	
	// erreur car prenom est encapsulé et non visible depuis ce programme
	//echo $p1->prenom;
	//echo $p1->sePresente();


