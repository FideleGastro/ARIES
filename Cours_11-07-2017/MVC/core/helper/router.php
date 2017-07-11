<?php
	class Router{
		public static function run()
		{		
			if(empty($_GET['url'])){
				require BASE_APP."controller/acceuil.php";
				$controller = new Acceuil();
				$controller->index();
				exit;
			}
			$url = trim($_GET['url'], '/');
			$url = explode('/', $url);

			$controllerName = array_shift($url);
			$file = BASE_APP."controller/".$controllerName.".php";	
			echo $file;
			if(file_exists($file)){
				require $file;
				$controllerName = ucfirst($controllerName);
				$controller = new $controllerName();
				$controller->index();

			} else {
				require BASE_APP."controller/Myerror.php";
				$controller = new Myerror();
				$controller->index();
				exit;
			}
			if(!empty(!$url)){
				$methidName = array_shift($url);
				$method = method_exists($controller, $methodName) ? $methodName : 'index.php';
			}
			else{
				$method = 'index';
			}

			$param = !empty($url) ? array_values($url) : [];
			call_user_func_array([$controller, $method], $params);
		}
	}
?>