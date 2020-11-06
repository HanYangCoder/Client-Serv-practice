<?php
    require (db_connection.php);
    $id = $_GET['id'];

    $showUsersSql = $conn->prepare ("Select * from user where 'userId' == '$id'");
    $showUsersSql->execute();
    $showUsers = $showUsersSql->fetch();
?>