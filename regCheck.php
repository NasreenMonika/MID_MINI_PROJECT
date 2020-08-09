<?php

	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];
	

		if( empty($password) || empty($email) || empty($name) || empty($confirmPassword) || empty($id))
		{
			echo "null submission".'<a href="registrattion.html"><u></a>';
		}
		else 
		{

			if($password!=$confirmPassword)
			{
				echo "Match Password".'<a href="registrattion.html"><u></a>';
			}
			else
			{

			$conn = mysqli_connect('127.0.0.1', 'root', '', 'miniproject');
		$sql= 'select * from userinfo where Id="'.$_POST['id'].'"';
		$result = mysqli_query($conn,$sql);
		$data = mysqli_fetch_assoc($result);
		if (empty($data)) 
		{
			# code...
			if ($_POST['password'] == $_POST['confirmpassword'])
			{
				# code...

				$sql1="INSERT INTO userinfo (id,name,email,password,user) VALUES ('".$_POST['id']."', '".$_POST['name']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['user']."')";
				mysqli_query($conn,$sql1);
				echo "done";
			}
			mysqli_close($conn);
			header('location: login.html');
			}
		}

	}else{
		//header("location: login.html");
		echo "Not Set";
	}


?>

