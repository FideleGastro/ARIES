<?php


	class Model 
	{
		public $bdd; 		

		function __construct()
		{
			$this->bdd = DB::connexion();
		}
	}
?>