<?php
	namespace core;
/**
* 
*/
class Flash
{
	static function setflash($msg){
		$_SESSION['flash'] = $msg;
	}

	static function getflash(){
		if(isset($_SESSION['flash'])){
			$msg = $_SESSION['flash'];
			unset($_SESSION['flash']);
			return $msg;
		}
	}
}
?>