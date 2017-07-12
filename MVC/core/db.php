<?php
	class DB {

        private static $bdd;

        public static function connexion(){
        	if (!self::$bdd){
		           try {
		            self::$bdd = new PDO('mysql:host='.Auth::DNS.';dbname='.Auth::BASE, Auth::NAME, Auth::PWD, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
		            self::$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
		           }catch(PDOException $e){
		            die("ERREUR connexion");
		          }
        	}
        	return self::$bdd; 
        }
    }

?>