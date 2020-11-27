<?php
    require ("db_connection.php");

    $sqlstr = 'UPDATE user SET username = :username, password = :password, email = :email WHERE userid = :userid';

    $updateUser = $conn->prepare($sqlstr);
    
    $updateUser->bindparam(':userid', $_POST['userid']);
    $updateUser->bindparam(':username', $_POST['username']);
    $updateUser->bindparam(':password', $_POST['password']);
    $updateUser->bindparam(':email', $_POST['email']);
    
    $updateUser->execute();


	echo "
    	<script>
    		alert ('Sucessfullly Updated');
    	</script>
		";

        header ("Location: showusers.php");

 ?>