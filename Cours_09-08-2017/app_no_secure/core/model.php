<?php

	namespace core;

	class Model {

		public $pdo; // pour instance de pdo

		function __construct(){
			$this->pdo =  SPDO::init();
		}
	}