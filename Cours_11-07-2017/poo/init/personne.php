<?php
    class Personne {
        protected $nom;
        protected $prenom;

        function __construct($prenom, $nom, $age){
            $this->prenom = $prenom;
            $this->nom = $nom;
            $this->age = $age;
        }

        public function sePresente()
        {
            $p = $this->prenom ." ".$this->nom;
            return $p;
        }

        public function setPrenom($new_prenom){
            $this->pernom = $new_prenom;

        }
        
        public function getPrenom()
        {
            return $this->prenom;
        }
    }
