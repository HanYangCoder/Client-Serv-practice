<?php
    require ('db_connection.php');
    $id = $_GET['id'];

    $deleteUserSql = $conn->prepare ("Delete from user where userId='$id'");
    $deleteUserSql->execute();

    echo"
        <script>
            alert ('Successful user deletion');
        </script> ";

    header ("Location: showusers.php");
?>