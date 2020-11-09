<?php

    require ("db_connection.php");
    $username = $_POST['username'];
    $password = $_POST['password'];

    $usersql = $conn->prepare ("Select * from user where username = '$username' AND password = '$password'");
    $usersql->execute();

    if($user = $usersql->fetch()) { // fetched the data from the DB and transferred it into the variable $user 

        if($user['userrole'] == 'admin'){
            echo"
            <script>
                alert ('WELCOME USER');
            </script>";
        
            header ("Location: showusers.php");
        }
        
        else{
            $id = $user['userId'];
            echo"
            <script>
                alert ('WELCOME USER');
            </script>";
        
            header ("Location: showprofile.php?id=$id");
        }
    }

    else{
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
    }
?>