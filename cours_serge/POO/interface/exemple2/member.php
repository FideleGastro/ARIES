<?php

	class Member implements IAuthentication {

		public function authenticate($_user){
			echo "authenticate $_user : MEMBER";
		}
	}