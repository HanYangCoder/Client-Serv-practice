<?php
    require ('db_connection.php');
    $id = $_GET['id'];

    
    $usersql = $conn->prepare ("Select * from user where userId = '$id'");
    $usersql->execute();

    if($user = $usersql->fetch()) {

        if($user['userrole'] == 'admin'){
            
            $sqlstr = "UPDATE user SET userrole = 'user' WHERE userId = '$id'";
            $updateUser = $conn->prepare($sqlstr);

            $updateUser->execute();

            echo "
            <script>
                alert ('Sucessfully Updated');
            </script>
            ";

            header ("Location: showusers.php");
            
            //echo "Admin to user";
        }

        else{
            $sqlstr = "UPDATE user SET userrole = 'admin' WHERE userId = '$id'";
            $updateUser = $conn->prepare($sqlstr);

            $updateUser->execute();

            echo "
            <script>
                alert ('Sucessfully Updated');
            </script>
            ";

            header ("Location: showusers.php");
            
            //echo "User to admin";
        }
    }
?>