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

			if(empty($this->errorArray) == true) {
				//Insert into db
				return true;
			} else {
				return false;
			}

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

			if(strlen($fn) > 25 || strlen($fn) < 2) {
    			array_push($this->errorArray, "Your first name must between 2 and 25 characters");
    			return;
    		}
		}

		private funtion validateLastName($ln) {

			if(strlen($ln) > 25 || strlen($ln) < 2) {
    			array_push($this->errorArray, "Your last name must between 2 and 25 characters");
    			return;
    		}
			
		}

		private funtion validateEmail($em, $em2) {
			
			if($em != $em2) {
				array_push($this->errorArray, "Your emails don't match");
				return;
			}

			if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
				array_push($this->errorArray, "Email is invalid");
				return;
			}

			//TODO: Check that username hasn't already been used
		}

		private funtion validatePassword($pw, $pw2) {
			
			if($pw != $pw2) {
				array_push($this->errorArray, "Your passwords don't match");
				return;
			}
			//^not within range
			if(preg_match('/[^A-Za-z0-9]/', $pw)) {
				array_push($this->errorArray, "Your passwords can only contain letters and numbers");
				return;
			}

			if(strlen($pw) > 30 || strlen($pw) < 5) {
    			array_push($this->errorArray, "Your password must be between 5 and 30 characters");
    			return;
    		}
		}
    }

?>