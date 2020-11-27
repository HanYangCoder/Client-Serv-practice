<?php
    require ('db_connection.php');

    $id = $_GET['id'];

    $showUsersSql = $conn->prepare ("Select * from user where userId='$id'");
    $showUsersSql->execute();
    $showUsers = $showUsersSql->fetch();
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
                            <th><p> First Name </p></th><th>
                            <th><p> Last Name </p></th><th>
                            <th><p> Password </p></th><th>
                            <th><p> Contact Number </p></th><th>
                            <th><p> Address </p></th><th>
                            <th><p> Email </p></th><th></th>
                            <th><p> Actions </p></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td><p><?= $showUsers['userId']; ?> </p><td>
                            <td><p><?= $showUsers['username']; ?> </p><td>
                            <td><p><?= $showUsers['firstName']; ?> </p><td>
                            <td><p><?= $showUsers['lastName']; ?> </p><td>
                            <td><p><?= $showUsers['password']; ?> </p><td>
                            <td><p><?= $showUsers['contactNumber']; ?> </p><td>
                            <td><p><?= $showUsers['address']; ?> </p><td>
                            <td><p><?= $showUsers['email']; ?> </p><td>
                            <td><a href="update_form.php?id=<?= $showUsers['userId'] ?>">Update</a></td>
                        </tr>
                    </tbody>
    </table>
</body>

</html>