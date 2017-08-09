<?php
	namespace app\md;
	use app\md\User as User;
	use \PDO;
	use \auth\Auth;

	class User extends \core\Model {

		/**
		* Select login et pwd et control table
		* @return Array or Boolean
		*/

		public function getLogin(){
			// datas postées
			$login = $_POST['inputlogin'];
			$pwd =  Auth::PJSALT.hash('sha512', $_POST['inputpwd']);
			$sql = "
					SELECT pseudo, profil, id
					FROM user
					WHERE pseudo = :pseudo AND pwd = :pwd
					LIMIT 1;
			";
			$pre = $this->pdo->prepare($sql);
			$pre->execute(array(':pseudo' => $login, ':pwd' => $pwd));
			return $pre->rowCount() > 0 ?
					$pre->fetch(PDO::FETCH_OBJ) :
					false;
		}
	}


