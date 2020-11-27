<?php
	require('db_connection.php');
	$id = $_GET['id'];

	$usersql = $conn->prepare ("Select * from user where userid='$id'");
	$usersql->execute();
	$user = $usersql->fetch();

?>
<!DOCTYPE html>
<html>
	<head> 
			<title> Update Record </title>
	</head>
	<body>
		<form name="update" action="update_save.php" method="POST">
					<input type = "hidden" id = "userid" name = "userid" value="<?= $user['userid']; ?>" required/>
					<input type = "text" id = "username" name = "username" placeholder="Enter Username" value="<?= $user['username']; ?>" required/>
					<input type="email" id="email" name="email" placeholder="Enter E-mail" value="<?= $user['email']; ?>" required />
					<input type = "password" id="password" name = "password" placeholder="Enter password" value="<?= $user['password']; ?>" required/> 
					<br/>
					<input type="submit" value="Update" id="submit" name="update" />
		</form>	
	</body>
</html>