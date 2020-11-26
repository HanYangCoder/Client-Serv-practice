<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Sign Up Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>


</head>
<body>
<div class="login-form">

    <form name= "sign_up" action="registersave.php" method="POST">
        <h2 class="text-center">Sign Up</h2>

        <!--Username-->
        <div class="form-group">
            <input type="text" id="username" name="username" class="form-control" placeholder="Enter Username" required="required">
        </div>

        <!--first and last name insert here-->
        <div class="form-group">
            <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Enter First Name" required="required">
        </div>
        <div class="form-group">
            <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Enter Last Name" required="required">
        </div>

        <!--Password and re-type password-->
        <div class="form-group">
            <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required="required">
        </div>
        <div class="form-group">
            <input type="password" id="retypepassword" name="retypepassword" class="form-control" placeholder="Re-type Password" required="required">
        </div>

        <!--Contact num, address, and email-->
        <div class="form-group">
            <input type="text" id="contactNumber" name="contactNumber" class="form-control" placeholder="Enter Contact number" required="required">
        </div>
        <div class="form-group">
            <input type="text" id="address" name="address" class="form-control" placeholder="Enter Address" required="required">
        </div>
        <div class="form-group">
            <input type="text" id="email" name="email" class="form-control" placeholder="Enter Email" required="required">
        </div>

        <!--Create Account-->
        <div class="form-group">
            <input type="submit" value="SIGN UP" class="btn btn-primary btn-block"/>
        </div>       
    </form>
    <p class="text-center"><a href="index.php">Sign in to an account instead</a></p>
</div>
</body>
</html>