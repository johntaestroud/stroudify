<?php
    class Account {

    	private $errorArray;

    	public function __construct() {
    		$this->errorArray = array();
    	}

    	public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
    		$this->validateUsername($un);
			$this->validateFirstName($fn);
			$this->validateLastName($ln);
			$this->validateEmail($em, $em2);
			$this->validatePassword($pw, $pw2);



    	}

    	//can only be called within this class
    	private funtion validateUsername($un) {
    		
    		if(strlen($un) > 25 || strlen($un) < 5) {
    			array_push($this->errorArray, "Your username must between 5 and 25 characters");
    			return;
    		}

    		//TODO: check if username exists
		}

		private funtion validateFirstName($fn) {
			
		}

		private funtion validateLastName($ln) {
			
		}

		private funtion validateEmail($em, $em2) {
			
		}

		private funtion validatePassword($pw, $pw2) {
			
		}
    }

?>