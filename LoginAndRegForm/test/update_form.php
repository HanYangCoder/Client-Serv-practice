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
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			
			<title> Update Record </title>
			
			<style>
				.update-form{
					height: 500px;
					width: 350px;
					margin-left: auto;
					margin-right: auto;
				}

				.update-form form{
					text-align: center;
					background: #f7f7f7;
					font-size: 15px;
					margin-top: 50px;
					padding: 30px;
					box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
				}

				.update-form h2 {
					margin: 0 0 15px;
				}

				.btn {
					min-height: 38px;
					border-radius: 2px;
					font-size: 18px;
					font-weight: bold;
				}

			</style>
	</head>
	<body>
		<div class="update-form">
			<form name="update" action="update_save.php" method="POST">
				<h2 class="text-center">Update Information</h2>

				<div class="form-group">
					<input type = "hidden" id = "userId" name = "userId" value="<?= $user['userId']; ?>" required/>
				</div>
				<div class="form-group">
					<input class="form-control" type = "text" id = "username" name = "username" placeholder="Enter Username" value="<?= $user['username']; ?>" required/>
				</div>
				<div class="form-group">
					<input class="form-control" type = "text" id = "firstName" name = "firstName" placeholder="Enter First Name" value="<?= $user['firstName']; ?>" required/>
				</div>
				<div class="form-group">
					<input class="form-control" type = "text" id = "lastName" name = "lastName" placeholder="Enter Last Name" value="<?= $user['lastName']; ?>" required/>
				</div>
				<div class="form-group">
					<input class="form-control" type = "password" id="password" name = "password" placeholder="Enter password" value="<?= $user['password']; ?>" required/> 
				</div>
				<div class="form-group">
					<input class="form-control" type="text" id="contactNumber" name="contactNumber" placeholder="Enter Contact Number" value="<?= $user['contactNumber']; ?>" required />
				</div>
				<div class="form-group">
					<input class="form-control" type="text" id="address" name="address" placeholder="Enter Address" value="<?= $user['address']; ?>" required />
				</div>
				<div class="form-group">
					<input class="form-control" type="email" id="email" name="email" placeholder="Enter E-mail" value="<?= $user['email']; ?>" required />
				</div>
				<br/>
				<input type="submit" class="btn btn-primary btn-block" value="UPDATE" id="submit" name="update" />
			</form>	
		</div>
	</body>
</html>