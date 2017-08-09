<?php
	namespace app;
	use app\Admin as Admin;
	use \core\Controller;
    use \core\Flash;

	class Admin extends Controller {
        private $articles;

		public function __construct(){
                        require BASE_APP."/models/article.php";
                        $this->modA =  new md\Article();
                }

		/**
		 * [[Description]]
		 */
		public function index(){
            
                if(!isset($_SESSION['auth']))
                    header("location:" . BASE_URL . '/authenticate');
                $profil = $_SESSION['auth']['profil']; 
                $id = $_SESSION['auth']['id'];
                var_dump($_SESSION['auth']['token']);       
                $article = $this->modA->all($id);

                       
                         $this->data = [
                        "titre" => "Accueil Admin",
                        "articles" => $this->modA->allBy($id)
                        ];
                $this->view("admin", "index_view", $this->data); 
		}
        
        /**
        * [[Description]]
        */
        
        public function create(){
                if (empty($_POST)){    
                $this->data = [
                    "titre" => "Admin | create",
                ];
                $this->view("admin", "create_view", $this->data);
                } else {
                        $this->modA->insert();
                        Flash::setflash('update!');
                        header("location:" . BASE_URL . '/admin');
                }
        }
        
        /**
        * @param [[Type]] [[Description]]
        */
        
        public function edit($id){

                if (empty($_POST)){
                $this->data = [
                    "titre" => "Admin | edit",
                    "article" => $this->modA->one($id)
                ];
                $this->view("admin", "edit_view", $this->data);
                }               
        }
  
        /**
        * @param [[Type]] [[Description]]
        */

         public function update(){
                if (!empty($_POST)){
                
                $id = $_POST['id'];
                $this->modA->update();
                header("location:" . BASE_URL . '/admin/edit/'.$id);
            }              
        }

        public function delete($id){
                $this->modA->delete($id);
                header("location:" . BASE_URL . '/admin');
        }

        public function show($id){
                if (empty($_POST)){
                $this->data = [
                    "titre" => "Admin | show",
                    "article" => $this->modA->show($id)
                ];
                $this->view("admin", "show_view", $this->data);
                } 
                
        }
	}# end class