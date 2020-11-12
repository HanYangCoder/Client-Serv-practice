<?php
    require ('db_connection.php');

    $showUsersSql = $conn->prepare ("Select * from user");
    $showUsersSql->execute();
    $showUsers = $showUsersSql->fetchAll();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        table, th, td{
            border-collapse: collapse;
            padding: 5px;
        }

        th{
            text-align: center;
            background: #0070e8;
            font-size: 17px;
            color: #ffffff;
        }

        td{
            background: #f7f7f7;
            font-size: 15px;
        }

        .center{
            margin-top: 100px;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

<body>
    <table class="center">
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