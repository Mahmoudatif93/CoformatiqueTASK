<?php

	class user{
		private $userID,$userName,$userEmail,$userPassword;
		public function getuserId(){
			return $this->userID;
		}
		public function setuserId($userID){
			$this->userID=$userID;
		}

		public function getuserName(){
			return $this->userName;
		}
		public function setuserName($userName){
			$this->userName=$userName;
		}

		public function getuserEMail(){
			return $this->userEmail;
		}
		public function setuserEMail($userEmail){
			$this->userEmail=$userEmail;
		}
		public function getuserPassword(){
			return $this->userPassword;
		}
		public function setuserPassword($userPassword){
			$this->userPassword=$userPassword;
		}
		 
		 public function InsertUser(){
		 	include "conn.php";
		 	$req=$con->prepare("INSERT INTO users(userName,userEmail,userPassword) VALUES(:userName,:userEmail,:userPassword) ");
		 	$query=$req->execute(array(
		 			'userName'=>$this->getuserName(),
		 			'userEmail'=>$this->getuserEMail(),
		 			'userPassword'=>$this->getuserPassword()

		 	));
		 	
								
		 }

		 public function userlogin(){
		 	include "conn.php";
		 	$req=$con->prepare("SELECT * FROM users WHERE userEmail=:userEmail AND userPassword=:userPassword");
		 	$req->execute(array(
		 		'userEmail'=>$this->getuserEMail(),
		 		'userPassword'=>$this->getuserPassword()
		 	));
		 	$data=$req->fetch();
		 	$count=$req->rowCount();
		 	
		 	if ($count==0) {
		 			header("Location:index.php?error=1");
		 		echo "error";
		 			return false;

		 	}else{
				while ($data) {
					$this->setuserId($data['userID']);
					$this->setuserName($data['userName']);
					$this->setuserPassword($data['userPassword']);
					$this->setuserEMail($data['userEmail']);
					header("Location:Home.php");
					return true;
				}

		 	}
		 	


		 }
		 


	}





 ?>
