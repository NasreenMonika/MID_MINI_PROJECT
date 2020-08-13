<?php
session_start();
$conn = mysqli_connect('127.0.0.1', 'root', '', 'midlabexam');
			$sql = "select * from user_info where id='".$_SESSION['id']."'";
			$result = mysqli_query($conn, $sql);
			$user 	= mysqli_fetch_assoc($result);
			?>
<html>
<head>
	<title>Profile</title>
</head>
<body>
<table border="1" width="100%" cellpadding="0" cellspacing="0">
	 		<tr>
				<td colspan="2">
					PROFILE
				</td>		
			</tr>
			<tr>
				<td>ID<br>
				</td>
				<td><?php
				echo $user['Id'];
				?><br>
				</td>
			</tr>
			<tr>
				<td>NAME<br>
				</td>
				<td><?php
				echo $user['Name'];
				?><br>
				</td>
			</tr>	
			<tr>
				<td>EMAIL<br>
				</td>
				<td><?php
				echo $user['Email'];
				?><br>
				</td>
			</tr>
			<tr>
				<td>USER TYPE<br>
				</td>
				<td><?php
				echo $user['usertype'];
				?><br>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<a href="adminHome.php"><u><b>GO BACK</a>
				</td>		
			</tr>	
				
			
			
</html>