<?php 

	class Contact_model extends Model
	{
		public function all(){
			$res = $this->bdd->query("SELECT * FROM contact");
			return $res->fetchAll(PDO::FETCH_OBJ);
		}
	}
?>