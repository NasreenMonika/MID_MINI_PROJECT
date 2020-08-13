<html>
<head>
    <title> HOME</title>
</head>
<body>

<fieldset>
<center><b>
WELCOME <?php
session_start();

echo $_SESSION['name'];


?>
 </center></br>
  <center>
        <a href="profile.php"><u><b>Profile</a><br>
        <a href="changePassword.php"><u><b>Change Password</a><br>
        <a href="viewUser.php"><u><b>View Users</a></br>
        <a href="logout.php"><u><b>LOG OUT</a></br>
    </center>
 </fieldset>
</body>
</html>