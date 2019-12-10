<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit page</title>
	 	<link rel="stylesheet" type="text/css" href="home.css">
	 	 	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>
	<div class="container">
		<h1 style="color: red;  text-align: center;">Edit comment</h1>
		<div class="col-md-auto">

	<form method="POST"  >
					<?php
					include "conn.php";
$id=$_GET['id'];
$req=$con->prepare("SELECT * FROM chats WHERE id=:id   ");
			 	$req->execute([':id'=>$id]);
				$rows=$req->fetchall();
				$count=$req->rowCount(); 
				if ($count>0) {
					foreach ($rows as $row) {
					?>
<div id="form">
 
 		<textarea class="text" onblur="checkinput()" id="ChatText"name="ChatText"  data-validation="required" placeholder="Edit Message..." ><?=$row['chatText']?> </textarea>
 		 	<?php }}?>

 		<input type="submit" name="update" id="send" value="Update" class="update btn btn-primary">
 		<span id="msgs" ></span>


 	</div>
 	</form>


 </div>
 </div>

</body>
</html>
 <?php
 
	include "classes.php";
	include "conn.php";
 	if ($_SERVER['REQUEST_METHOD']=='POST') {
	 	if (isset($_POST['update'])) {
	 			$chatText=$_POST['ChatText'];
	 			$id=$_GET['id'];
	 			//print_r($id);
	 			//die();
	 			$query=$con->prepare("UPDATE chats SET chatText=:chatText WHERE id=:id");
	 			$res=$query->execute(array(
	 				":chatText"=>$chatText,
	 				":id"=>$id
	 			));
	 			if ($res) {
	 				header('Location: home.php');
	 				
	 			}else {
	 				
	 			}
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