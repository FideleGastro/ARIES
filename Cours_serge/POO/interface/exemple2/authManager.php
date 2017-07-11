<?php
	 class AuthManager {

	 	public function __construct( IAuthentication $_auth, $_user){
	 		return $_auth->authenticate($_user);
	 	}
	 }