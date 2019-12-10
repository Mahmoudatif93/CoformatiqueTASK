<?php
session_start();

	include "conn.php";

			 	$req=$con->prepare("SELECT * FROM chats  ");
			 	$req->execute();
				$rows=$req->fetchall();
				$count=$req->rowCount(); 
				if ($count>0) {
					foreach ($rows as $row) {
					?>
				<div>
					<form method="POST">
						<table>

					<td><span style="font-style: italic;color:#5199FF"><?php echo $row['chatuserid'].' said..' ;?></span>&nbsp&nbsp&nbsp&nbsp</td>
					<td><span style="color: white"  ><?php echo $row['chatText'].'<br>'?></span></td>
						<td><a href="edit.php?id=<?php echo $row['id'];?> "  class="btn btn-success">Edit Sms</a>
					 		
					 	<a onclick="return confirm('are your sure to delete sms!')"href="delete.php?id=<?php echo $row['id'];?>" name="delete" class="btn btn-danger">DeleteMsg</a>
					 </td>
						</table>
					</form>


 						

				</div>
					<?php


				}
			}	

 ?>




