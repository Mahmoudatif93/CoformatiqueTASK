<?php
include "classes.php";
$user =new user();
if (isset($_POST['Username']) && isset($_POST['UserEmail'])&& isset($_POST['Userpassword'])) {
	$user->setuserName($_POST['Username']);
	$user->setuserEMail($_POST['UserEmail']);
	$user->setuserPassword($_POST['Userpassword']);
	$user->InsertUser();
	header("Location:index.php?success=1");
}

 ?>