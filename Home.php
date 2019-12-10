<?php
	session_start();


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="home.css">
 	<title>welcomr to my chat</title>
 	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 	<script type="text/javascript">

 					 function ajax() {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
				document.getElementById("ChatMessages").innerHTML = this.responseText;
				}
			};
			xhttp.open("GET", "DisplayMessages.php", true);
			xhttp.send();
        }
	    
		setInterval(function(){ajax()} , 1000);
		
 	</script>
 </head>
 <body onload="ajax()">

 	<center><h2 style="color: orange;font-family: tahoma;font-size: 30px"> Weclome <span><?php echo $_SESSION['userName']; ?></span></h2></center>
 	<br><br>
 	<div id="ChatBig">
 		<div id="ChatMessages" class="scrollbar"></div>
 	</div>
	<form method="POST" >
 		<textarea onblur="checkinput()" id="ChatText"name="ChatText" placeholder="Type Message..."></textarea>
 		<input type="submit"  id="send" value="Send" class="btn btn-primary">
 		 <input type="submit" onclick="return confirm('are your sure to delete chat!')"  value="Delete Chat" name="delete" class="btn btn-danger">
 		 		<span id="msgs"></span>

 		
 	</form>

 </body>
 </html>



 <?php
 
	include "classes.php";
	include "conn.php";
 	if ($_SERVER['REQUEST_METHOD']=='POST') {
	 		if (isset($_POST['ChatText'])&&!empty($_POST['ChatText'])) {


			 	$req=$con->prepare("INSERT INTO chats(chatuserid,chatText) VALUES(:chatuserid,:chatText) ");
			 	$req->execute(array(
			 			'chatuserid'=> $_SESSION['userName'],
			 			'chatText'=>$_POST['ChatText']

			 	));
	 		
	 	}
 }


?>

 <?php
 include "conn.php";
 		if (isset($_POST['delete'])) {
 			$id=$_GET['id'];
 			
 			$del=$con->prepare("DELETE FROM chats WHERE chatuserid=:chatuserid ");
 			$resdel=$del->execute(array(
			 			'chatuserid'=> $_SESSION['userName'],
			 			

			 	));
 			print_r($resdel);
 			die();
 			if ($resdel) {
 				echo "deleted";
 			}

 		}

?>





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript">
		function checkinput(){
			var input=$('#ChatText').val();
			
			if (input !==null && input!=='') {
				document.getElementById("send").disabled = false;
				$('#msgs').html(' ').css('color', 'green');

				//alert('yes');
			}else  {
				document.getElementById("send").disabled = true;
				$('#msgs').html('Message cannot be empty!').css('color', 'red');

			}
		}




</script>