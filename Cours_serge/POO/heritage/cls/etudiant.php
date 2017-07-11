<?php

	class Etudiant extends Personne{

		# constante de classe
		const TYPE = "Cycle supérieur";

		# attributs privés
		private $filiere;

		public function setFiliere($_f){
			$this->filiere =  $_f;
		}

		public function getFiliere(){
			return $this->filiere;
		}

		public function getType(){
			return self::TYPE;
		}

		# méthode surcharge la méthode de la classe parent
		public function sePresente(){
			return parent::sePresente() ." . ". self::TYPE ." Filière ".$this->getFiliere();
		}

	} #end class