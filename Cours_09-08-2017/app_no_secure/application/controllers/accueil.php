<?php
	namespace app;
	use app\Accueil as Accueil;
	use \core\Controller;

	class Accueil extends Controller {

		private $modA;

		/**
		* Selectionne tous les articles
		*/
		public function __construct(){
			require BASE_APP."/models/article.php";
			$this->modA =  new md\Article();
			unset($_SESSION['auth']);
		}

		public function index($page=0){
            $js = 'test1.js;test2.js;test3.js';
            $total = $this->modA->count();
            $nb = 4;
            $lien = ceil($total / $nb);
            $article = $this->modA->limit($page*$nb, $nb);
            //var_dump($article);
            $this->data = [
	            "titre" => "Accueil",
	            "articles" => $article,
	            "lien" => $lien,
	            "nb" => $nb,
	            "js" => $js
            ];
            $this->view("public", "accueil_view", $this->data);	
		}
	}# end class