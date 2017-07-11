<?php
    class Etudiant extends Personne {
    
        private $filiere;
        private $utile;
        const TYPE = "Cycle supérieur"; // variable propre à la classe: SELF

         function __construct($prenom, $nom, $age, Utile $_u){
           parent::_construct($prenom, $nom, $age);
           $this->utile;
        }

        public function setFiliere($new_f){
            $this->filiere = $new_f;
        }
        
        public function getFiliere()
        {
            echo "filiere : $this->filiere";
        }

        public function getType()
        {
            return self::TYPE;
        }

        public function sePresente()
        {
             return parent::sePresente() ."".self::TYPE." Filière: ". $this->filiere();
        }

        public function getUtile()
        {
            return $this->utile->write($this->nom. 'nb.txt', uniquid()); 
        }
    }