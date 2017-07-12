<?php

	 class Controller 
	{	
		public $data = [];

		function view($niveau, $page, $data)
		{
			extract($data);
			$page = BASE_APP."view/$niveau/$page.php";
			require BASE_APP."view/public/template.php";
		}
	}
?>