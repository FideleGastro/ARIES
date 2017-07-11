<?php

	require "iauthentication.php";
	require "admin.php";
	require "member.php";
	require "authmanager.php";


	$f =  new AuthManager( new Admin, "Serge");