<?php

	class Admin implements IAuthentication {

		public function authenticate($_user){
			echo "authenticate $_user : ADMIN";
		}
	}