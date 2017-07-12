<?php

	/**
	* 
	*/
	class Acceuil extends Controller
	{
		
		public function index()
		{
			$this->data = [
				"titre" => "Acceuil"
			];
			$this->view('public', 'acceuil_view', $this->data);
		}

		public function affiche($num=null)
		{
			echo "methode affiche $num";
		}
	}
?>