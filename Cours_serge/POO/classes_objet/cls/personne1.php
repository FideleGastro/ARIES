<?php

	class Personne {

		# attributs
		public $nom;
		public $prenom;


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


	} #end class