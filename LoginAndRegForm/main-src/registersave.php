<?php
    require ("db_connection.php");

    $sqlstr = 'INSERT INTO user (username, password, email) VALUES (:username, :password, :email)';

    $saveUser = $conn->prepare($sqlstr);

    $saveUser->bindparam(':username', $_POST['username']);
    $saveUser->bindparam(':password', $_POST['password']);
    $saveUser->bindparam(':email', $_POST['email']);
    
    $saveUser->execute();


	echo "
    	<script>
    		alert ('New User Added');
    		window.opener.location.replace('index.php');
    	</script>
		";
?>