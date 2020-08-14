<?php
if(isset($_POST['submit']))
{
	session_start();
	if(!empty($_POST['currentPassword']))
	{
		
		$conn = mysqli_connect('127.0.0.1', 'root', '', 'midlabexam');
		$sql = "select * from user_info where Id= '".$_SESSION['id']."'" ;
		echo $sql;
		$result = $conn->query($sql);
		$userInfo 	= mysqli_fetch_assoc($result);
		var_dump($userInfo );
		var_dump($result);
		if(!empty($userInfo))
		{
			if($_POST['Password']==$_POST['newPassword'])
		
			{
				$conn = mysqli_connect('127.0.0.1', 'root', '', 'midlabexam');
	   			$sql ="UPDATE user_info SET password='".$_POST['Password']."' WHERE Id= '".$_SESSION['id']."'";
	   			$result = mysqli_query($conn,$sql);
	    		$sql2= "select * from user_info where Id='".$_SESSION['id']."'&& password ='".$_POST['Password']."'";
	    		$result = mysqli_query($conn,$sql2);
				$resultData = mysqli_fetch_assoc($result);
					if (!empty($resultData)) 
					{
						header('location: login.html');
			
					}
			}
		}

	}
	
}
?>