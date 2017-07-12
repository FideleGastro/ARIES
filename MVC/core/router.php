<<?php
	class Router{
		public static function run()
		{		
			if(empty($_GET['url'])){
				require BASE_APP."controller/acceuil.php";
				$controller = new Acceuil();
				$controller->index();
				exit;
			}
			$url = rtrim($_GET['url'], '/');
			$url = explode('/', $url);

			$controllerName = array_shift($url);
			$file = BASE_APP."controller/".$controllerName.".php";	
			echo $file;
			if(file_exists($file)){
				require $file;
				$controllerName = ucfirst($controllerName);
				$controller = new $controllerName();
				

			} else {
				require BASE_APP."controller/Myerror.php";
				$controller = new Myerror();
				$controller->index();
				exit;
			}
			if(!empty(!$url)){
				$methodName = array_shift($url);
				$method = method_exists($controller, $methodName) ? $methodName : 'index';
			}
			else{
				$method = 'index';
			}
			$params = !empty($url) ? array_values($url) : [];
			call_user_func_array([$controller, $method], $params);
		}
	}
?>