<?php


	function vd($_data, $_continue = false) {
		echo '<pre>';
		var_dump($_data);
		if( !$_continue) exit;
	}