<?php

	// class static de connexion pdo

	class DB {

		protected static $pdo;

		public static function connect(){
			try{

				self::$pdo = new PDO( Auth::DNS,Auth::USER, Auth::PWD );
				self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$pdo->exec("SET CHARACTER SET utf8");
				
			}catch(PDOException $e){
				die("Erreur connexion serveur ".$e->getmessage());
			}
		}
	}