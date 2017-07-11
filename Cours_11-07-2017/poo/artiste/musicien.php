<?php

    class Auth{
        const BASE = "db_musiciens";
        const NAME = "root";
        const PWD = "KyfXONuqmUcQ";
        const DNS = "localhost";
    }

    class DB {
        protected static $bdd;

        public static function connexion(){
           try {
            self::$bdd = new PDO('mysql:host='.Auth::DNS.';dbname='.Auth::BASE, Auth::NAME, Auth::PWD, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            self::$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
           }catch(PDOException $e){
            die("ERREUR connexion");
          }
        }
    }

    class Musicien extends DB {
        
        public static function all()
        { 
          try{
            $query = self::$bdd->query("SELECT * FROM Musiciens");
            return $query->fetchAll(PDO::FETCH_OBJ);
          }
          catch(PDOException $e){
            die("ERREUR all");
          }
        }
    }
