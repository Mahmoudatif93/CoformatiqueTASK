<?php
session_start();
include "classes.php";
if (isset($_POST['UserEmailLogin']) && isset($_POST['UserPasswordLogin'])) {
	$user=new user();
	$user->setuserEMail($_POST['UserEmailLogin']);
	$user->setuserPassword($_POST['UserPasswordLogin']);
	if ($user->userlogin()==true) {
		$_SESSION['userID']=$user->getuserId();
		$_SESSION['userName']=$user->getuserName();
		$_SESSION['userEmail']=$user->getuserEMail();

	}


}

 ?>