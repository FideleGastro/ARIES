<?php
    require "personne.php";
    require "etudiant.php";
    
    echo "<strong>Personne: </strong><br>";
    $p1 = new Personne("bob", "morane", 42);
    $p1->nom  = "le bricoleur"; // à éviter !! ( ne marche pas si la variable est en private)
    echo $p1->sePresente();
    echo "<br>";
    echo $p1->getPrenom();
    echo "<br>";
    echo "<br>";
    //print_r($p1);

    $e1 = new Etudiant();
    echo "<strong>Etudiant: <br></strong>";
    $e1->setFiliere("blague");
    $e1->getFiliere();
    echo "<br>";
    echo $e1->getType();
    echo "<br>";
    //echo $e1->sePresente();
    
    echo "<br>";
    echo "<strong>Utile: Dépendance<br></strong>";

    $e2 = new Etudiant("bob", "morane", 42, );



