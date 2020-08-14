<?php

	$conn = mysqli_connect('127.0.0.1', 'root', '', 'midlabexam');
	$result = mysqli_query($conn, 'select * from user_info');
	
?>
<html>
<head>
	<title>Userlist</title>
</head>
<body>
	<h1>Userlist</h1>

	<table border=1>
		<tr>
			<td>ID</td>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>USER TYPE</td>
		</tr>

		<?php  while($data = mysqli_fetch_assoc($result)){ ?>
		<tr>
			<td><?php echo $data['Id'] ?></td>
			<td><?php echo $data['Name'] ?></td>
			<td><?php echo $data['Email'] ?></td>
			<td><?php echo $data['usertype'] ?></td>
		</tr>

		<?php } ?>

	</table>
</body>
</html>