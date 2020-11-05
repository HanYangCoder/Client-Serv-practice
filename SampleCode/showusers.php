<?php
	require ('db_connection.php');

	$showUsersSql = $conn->prepare ("Select * from user");
	$showUsersSql->execute();
	$showUsers = $showUsersSql->fetchAll();	
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
				<?php foreach ($showUsers as $usersList): ?>
				<tbody>
					<tr>
						<td><p><?= $usersList['userid']; ?> </p></td>
						<td><p><?= $usersList['username']; ?> </p></td>
						<td><p><?= $usersList['password']; ?> </p></td>
						<td><p><?= $usersList['email']; ?> </p></td>
						<td><a href="update_form.php?id=<?= $usersList['userid'] ?>">Update</a></td>
						<td><a href="delete.php?id=<?= $usersList['userid'] ?>">Delete</a></td>
							<td><a href="set.php?id=<?= $usersList['userid'] ?>">Set as Admin</a></td>
					</tr>
				</tbody>
			<?php endforeach; ?>
		</table>
