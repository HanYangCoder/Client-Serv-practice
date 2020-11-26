<?php
    require ("db_connection.php");

    $sqlstr = 'INSERT INTO user (username, firstName, lastName, password, contactNumber, address, email) 
        VALUES (:username, :firstName, :lastName, :password, :contactNumber, :address, :email)';

    $saveUser = $conn->prepare($sqlstr);

    $saveUser->bindparam(':username', $_POST['username']);
    $saveUser->bindparam(':firstName', $_POST['firstName']);
    $saveUser->bindparam(':lastName', $_POST['lastName']);
    $saveUser->bindparam(':password', $_POST['password']);
    $saveUser->bindparam(':contactNumber', $_POST['contactNumber']);
    $saveUser->bindparam(':address', $_POST['address']);
    $saveUser->bindparam(':email', $_POST['email']);
    
    $saveUser->execute();


	echo "
    	<script>
    		alert ('New User Added');
    		window.opener.location.replace('index.php');
    	</script>
		";
?>