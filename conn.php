<?php

$db='mysql:host=localhost;dbname=chats';
$user='root';
$pass='';
	try{
		$con=new PDO($db,$user,$pass);
	
	//	echo "connect";


	}catch(Exception $e){die("filed to connect:".$e->getMessage());
}

 ?>

