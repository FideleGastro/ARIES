<?php
	header( 'content-type: text/html; charset=utf-8' );
	require "cls/personne.php";
	require "cls/etudiant.php";

	
	$e1 =  new Etudiant('Serge','Argiolas');
	$e1->setFiliere('informatique');
	//echo $e1->sePresente()." filière ".$e1->getFiliere()." Niveau : ".$e1->getType();
	echo $e1->sePresente();


