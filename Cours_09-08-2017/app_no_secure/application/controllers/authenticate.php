<?php
	namespace app;
	use app\Authenticate as Authenticate;
	use \core\Controller;
	use app\md\User; 

	class Authenticate extends Controller {
        
        
        function __construct(){
			require BASE_APP."models/user.php";
		}

		/**
		* charge la vue du formulaire de login
		*/
		public function index(){
			$this->data = [
				"titre"=> "page login",
			];
			$this->view('public', 'login_view', $this->data);
		}
        
               
        public function login(){
            echo 'test ici !';
            $user = new User();
            if ($user->getLogin() != false){
            	$_SESSION['auth'] = [
            		'pseudo' => $user->getLogin()->pseudo,
            		'profil' => $user->getLogin()->profil,
            		'id' => $user->getLogin()->id,
                    'token' => sha1(uniqid().rand(1000, 2000) + 1)
            	];
            	//vd($user->getLogin());
            	header("location:".BASE_URL."/admin");
            }
            else
            {
            	header("location:".BASE_URL."/authenticate");
            }
        }
           
        public function logout(){
        	unset($SESSION['auth']);
        	header("location:".BASE_URL."/authenticate");
        }

	}# end class