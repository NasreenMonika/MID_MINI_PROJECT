<?php
	session_start();

	if(isset($_POST['LogIn'])){

		$uid		= $_POST['id'];
		$password 		= $_POST['password'];

		if(empty($uid) || empty($password)){
			echo "null submission";

		}else{
			
			$conn = mysqli_connect('127.0.0.1', 'root', '', 'midlabexam');
			$sql = "select * from user_info where id='".$uid."'&& password='".$password."'";
			$result = mysqli_query($conn, $sql);
			$user 	= mysqli_fetch_assoc($result);
			
			if(!empty($user))
			{
				
				$_SESSION['id']  = $uid;
				$_SESSION['name']  = $user['Name'];
				if($user['usertype']=='admin')
				{
					header('location: adminHome.php');

				}
				else
				{
				header('location: userHome.php');
				}
			
				
			}
			else
			{
				echo "Invalid information";
			}
		}

	}else{
		header("location: login.html");
	}

?>