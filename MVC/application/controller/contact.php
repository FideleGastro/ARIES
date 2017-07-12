<?php

	class Contact extends Controller
	{	
		

		function __construct(){
			require BASE_APP. "model/contact_model.php";
		}
		
		function index()
		{

			$contact = new Contact_model();

			//vd($contact->all());
			$this->data = [
				"titre" => "Contact",
				"contacts" => $contact->all()
			];		
			$this->view('public', 'contact_view', $this->data);
		}
	}
?>