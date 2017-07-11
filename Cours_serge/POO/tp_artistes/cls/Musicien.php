<?php

	// class static modele de données

	class Musicien extends DB {

			public static function all(){

				try{

					$query =  self::$pdo->query("SELECT * FROM musiciens");
					return $query->fetchAll(PDO::FETCH_OBJ);

				}catch(PDOException $e){
					die("Erreur requete");
				}

			}

	}