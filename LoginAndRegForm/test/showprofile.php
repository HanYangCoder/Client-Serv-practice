<?php
    require ('db_connection.php');

    $id = $_GET['id'];

    $showUsersSql = $conn->prepare ("Select * from user where userId='$id'");
    $showUsersSql->execute();
    $showUsers = $showUsersSql->fetch();
?>

<table border="0">
				<thead>
					<tr> 
						<th><p> User ID </p></th>
						<th><p> User Name </p></th>
						<th><p> Password </p></th>
						<th><p> Email </p></th>
						<th><p> Actions </p></th>
					</tr>
				</thead>

                <tbody>
                    <tr>
                        <td><p><?= $showUsers['userId']; ?> </p><td>
                        <td><p><?= $showUsers['username']; ?> </p><td>
                        <td><p><?= $showUsers['password']; ?> </p><td>
                        <td><p><?= $showUsers['email']; ?> </p><td>
                        <td><a href="update_form.php?id=<?= $usersList['userid'] ?>">Update</a></td>
						<td><a href="delete.php?id=<?= $usersList['userid'] ?>">Delete</a></td>
						<td><a href="set.php?id=<?= $usersList['userid'] ?>">Set as Admin</a></td>
                    </tr>
                </tbody>
</table>