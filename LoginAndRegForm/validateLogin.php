<?php

    require ("db_connection.php");
    $username = $_POST['username'];
    $password = $_POST['password'];

    $usersql = $conn->prepare ("Select * from user where username = '$username' AND password = '$password'");
    $usersql->execute();

    if($user = $usersql->fetch()) {
        echo"
            <script>
                alert ('WELCOME USER');
            </script>";
    }

    echo"
    <script>
        alert ('INVALID USER');
    </script>
    ";

    echo"
    <script>
        window.location.href = 'index.php';
    </script>
    ";
?>