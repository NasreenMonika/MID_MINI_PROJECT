<?php

	if (isset($_POST['submit'])) 
	{
		# code...
		$conn = mysqli_connect('127.0.0.1', 'root', '', 'midlabexam');
		$sql= 'select * from user_info where id="'.$_POST['id'].'"';
		$result = mysqli_query($conn,$sql);
		$data = mysqli_fetch_assoc($result);
		if (empty($data)) 
		{
			if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['id']) && !empty($_POST['password']) && !empty($_POST['userType']))
			{
				if ($_POST['password'] == $_POST['confirmPassword'])
				{
					$sql1="INSERT INTO user_info (id,name,email,password,usertype) VALUES ('".$_POST['id']."', '".$_POST['name']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['userType']."')";
					mysqli_query($conn,$sql1);
					header("location: login.html");
				}
			}
			mysqli_close($conn);
		}
	}
	else
	{
		echo "invalid";
	}
	

?>

