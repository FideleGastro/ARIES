<?php

	class Personne {

		# attributs privés
		private $nom;
		private $prenom;


		# constructeur

		function __construct($_prenom, $_nom){
			$this->prenom = $_prenom;
			$this->nom = $_nom;
		}


		# méthodes publiques

		public function sePresente(){
			$p = $this->prenom ." ".$this->nom;
			return $p;
		}

		# accesseurs  --- getter/setter

		public function setPrenom($_prenom){
			$this->prenom = $_prenom;
		}

		public function getPrenom(){
			return $this->prenom;
		}


	} #end class