 <?php
 
	include "conn.php";

	 			$id=$_GET['id'];

 				$del=$con->prepare("DELETE FROM chats WHERE id=:id ");
 			
	 			$res=$del->execute(['id'=>$id]);
	 			if ($res) {
	 				header('Location: home.php');
	 			}
	 			
	 	
 
