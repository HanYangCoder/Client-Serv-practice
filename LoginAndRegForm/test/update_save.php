<?php
    require ("db_connection.php");

    $sqlstr = 'UPDATE user SET username = :username, firstName = :firstName, lastName = :lastName,
     password = :password, contactNumber  = :contactNumber, address = :address, email = :email WHERE userId = :userId';

    $updateUser = $conn->prepare($sqlstr);
    
    $updateUser->bindparam(':userId', $_POST['userId']);
    $updateUser->bindparam(':username', $_POST['username']);
    $updateUser->bindparam(':firstName', $_POST['firstName']);
    $updateUser->bindparam(':lastName', $_POST['lastName']);
    $updateUser->bindparam(':password', $_POST['password']);
    $updateUser->bindparam(':contactNumber', $_POST['contactNumber']);
    $updateUser->bindparam(':address', $_POST['address']);
    $updateUser->bindparam(':email', $_POST['email']);
    
    $updateUser->execute();


	echo "
    	<script>
    		alert ('Sucessfully Updated');
    	</script>
		";

        header ("Location: showusers.php");

 ?>