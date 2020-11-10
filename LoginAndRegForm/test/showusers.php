<?php
    require ('db_connection.php');

    $showUsersSql = $conn->prepare ("Select * from user");
    $showUsersSql->execute();
    $showUsers = $showUsersSql->fetchAll();
?>

<!DOCTYPE html>
<html>

<head>
<style>
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
</head>

<body>
    <table>
            <thead>
                <tr> 
                    <th><p> User ID </p></th><th>
                    <th><p> User Name </p></th><th>
                    <th><p> Password </p></th><th>
                    <th><p> Email </p></th><th>
                    <th><p> User role </p></th><th>
                    <th><p> Actions </p></th><th></th>
                </tr>
            </thead>
            <?php foreach ($showUsers as $usersList): ?>
            <tbody>
                <tr>
                    <td><p><?= $usersList['userId']; ?> </p><td>
                    <td><p><?= $usersList['username']; ?> </p><td>
                    <td><p><?= $usersList['password']; ?> </p><td>
                    <td><p><?= $usersList['email']; ?> </p><td>
                    <td><p><?= $usersList['userrole'] ?></p></td>
                    <td><a href="update_form.php?id=<?= $usersList['userid'] ?>">Update</a></td>
                    <td><a href="delete.php?id=<?= $usersList['userid'] ?>">Delete</a></td>
                    <td><a href="set.php?id=<?= $usersList['userid'] ?>">Set as Admin</a></td>
                </tr>
            </tbody>
            <?php endforeach; ?>
    </table>
</body>

</html>