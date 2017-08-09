<?php

	namespace core;
	use \PDO;
	use \auth\Auth;
	
	class SPDO {

		public static $pdo;

		public static function init(){

			if(!self::$pdo){
				self::$pdo = new PDO(Auth::DNS, Auth::USER, Auth::PWD);
				self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$pdo->exec("SET CHARACTER SET utf8");
			}

			return self::$pdo;

		}
	}