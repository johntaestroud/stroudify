<?php
    class Account {

    	private $con;
    	private $errorArray;

    	public function __construct($con) {
    		$this->con = $con;
    		$this->errorArray = array();
    	}

    	public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
    		$this->validateUsername($un);
			$this->validateFirstName($fn);
			$this->validateLastName($ln);
			$this->validateEmails($em, $em2);
			$this->validatePasswords($pw, $pw2);

			if(empty($this->errorArray) == true) {
				//Insert into db/refers to this class instance
				return $this->insertUserDetails($un, $fn, $ln, $em, $pw);
			} else {
				return false;
			}

    	}

    	public function getError($error) {
    		if(!in_array($error, $this->errorArray)){
    		   $error = "";
    		}
    		return "<span class='errorMessage'>$error</span";
    	}
    	
    	private function insertUserDetails($un, $fn, $ln, $em, $pw) {
    		$encryptedPw = md5($pw);//Password encryption
    		$profilePic = "assets/images/profile-pics/lady.jpg";
    		$date = date("Y-m-d");
    		echo "INSERT INTO users VALUES ('','$un', '$fn', '$ln', '$em', $encryptedPw', '$date', '$profilePic')";
    		$result = mysqli_query($this->con, "INSERT INTO users VALUES ('','$un', '$fn', '$ln', '$em', $encryptedPw', '$date', '$profilePic')");

    		return $result;
    	}


    	//can only be called within this class
    	private function validateUsername($un) {
    		
    		if(strlen($un) > 25 || strlen($un) < 5) {
    			array_push($this->errorArray, Constants::$usernameCharacters);
    			return;
    		}

    		//TODO: check if username exists
		}

		private function validateFirstName($fn) {

			if(strlen($fn) > 25 || strlen($fn) < 2) {
    			array_push($this->errorArray, Constants::$firstNameCharacters);
    			return;
    		}
		}

		private function validateLastName($ln) {

			if(strlen($ln) > 25 || strlen($ln) < 2) {
    			array_push($this->errorArray, Constants::$lastNameCharacters);
    			return;
    		}
			
		}

		private function validateEmails($em, $em2) {
			
			if($em != $em2) {
				array_push($this->errorArray, Constants::$emailsDoNotMatch);
				return;
			}

			if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
				array_push($this->errorArray, Constants::$emailInvalid);
				return;
			}

			//TODO: Check that username hasn't already been used
		}

		private function validatePasswords($pw, $pw2) {
			
			if($pw != $pw2) {
				array_push($this->errorArray, Constants::$passwordDoNotMatch);
				return;
			}
			//^not within range
			if(preg_match('/[^A-Za-z0-9]/', $pw)) {
				array_push($this->errorArray, Constants::$passwordNotAlphanumeric);
				return;
			}

			if(strlen($pw) > 30 || strlen($pw) < 5) {
    			array_push($this->errorArray, Constants::$passwordCharacters);
    			return;
    		}
		}
    }

?>