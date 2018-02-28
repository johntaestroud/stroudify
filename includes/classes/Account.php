<?php
    class Account {

    	public function __construct() {

    	}

    	public function register() {
    		$this->validateUsername($username);
			$this->validateFirstName($firstName);
			$this->validateLastName($lastName);
			$this->validateEmail($email, $email2);
			$this->validatePassword($password, $password2);



    	}

    	//can only be called within this class
    	private funtion validateUsername($un) {
    		echo "username"
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