<?php
	namespace core;

	class Controller {

		public $data = [];
		public function view( $_niveau, $_page, $_data ){
			extract($_data); // transforme les clé d'un tableau en variable
			$page =  BASE_APP."views/$_niveau/$_page.php";
			require BASE_APP."views/$_niveau/template.php";
		}

	}