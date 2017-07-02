<?php
include_once('dbcon.php');

$error = false;
if(isset($_POST['btn-register'])){
    //clean user input to prevent sql injection
    $username = $_POST['username'];
    $username = strip_tags($username);
    $username = htmlspecialchars($username);

    $email = $_POST['email'];
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $password = $_POST['password'];
    $password = strip_tags($password);
    $password = htmlspecialchars($password);
	
	$confirm_password = $_POST['confirm_password'];
    $confirm_password = strip_tags($confirm_password);
    $confirm_password = htmlspecialchars($confirm_password);

    //validate
    if(empty($username)){
        $error = true;
        $errorUsername = 'Please input username';
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = true;
        $errorEmail = 'Please a valid input email';
    }

    if(empty($password)){
        $error = true;
        $errorPassword = 'Please password';
    }elseif(strlen($password) < 6){
        $error = true;
        $errorPassword = 'Password must at least 6 characters';
    }
	/* Password Matching Validation */
	if(empty($confirm_password)){
        $error = true;
        $errorConfirm_password = 'Please confirm password';
    }elseif(strlen($password) != strlen($confirm_password)){
        $error = true;
        $errorConfirm_password = 'Passwords must match';
    }
	


    //encrypt password with md5
    $password = md5($password);

    //insert data if no error
    if(!$error){
        $sql = "insert into tbl_users(username, email ,password)
                values('$username', '$email', '$password')";
        if(mysqli_query($conn, $sql)){
            $successMsg = 'Register successfully. <a href="index.php">click here to login</a>';
        }else{
            echo 'Error '.mysqli_error($conn);
        }
    }

}

?>

<html>
<head>
<title>Register</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
    </div>

	<div class="jumbotron" style="text-align: center;">
	<div class="appName">
	<h1 class="h2Inline">BASKETBALL SHOT PREDICTION</h1>
	<img src="nba.png" class="img-rounded images" width="100" height="100">
  </div>
</div>
    <div class="container">
        <div style="width: 500px; margin: 50px auto;">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                
				<center><h2>Register</h2></center>
                <hr/>
                <?php
                    if(isset($successMsg)){
                 ?>
                        <div class="alert alert-success">
                            <span class="glyphicon glyphicon-info-sign"></span>
                            <?php echo $successMsg; ?>
                        </div>
                <?php
                    }
                ?>
                <div class="form-group">
                    <label for="username" class="control-label">Username</label>
                    <input type="text" name="username" class="form-control">
                    <span class="text-danger"><?php if(isset($errorUsername)) echo $errorUsername; ?></span>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" name="email" class="form-control" autocomplete="off">
                    <span class="text-danger"><?php if(isset($errorEmail)) echo $errorEmail; ?></span>
                </div>
                <div class="form-group">
                    <label for="password" class="control-label">Password</label>
                    <input type="password" name="password" class="form-control" autocomplete="off">
                    <span class="text-danger"><?php if(isset($errorPassword)) echo $errorPassword; ?></span>
                </div>
				<div>
					<label for="confirm_password" class="control-label">Confirm password</label>
					<input type="password" class="form-control" name="confirm_password" value="">
					<span class="text-danger"><?php if(isset($errorConfirm_password)) echo $errorConfirm_password; ?></span>
				</div>
                <div class="form-group">
				<br>
                    <center><input type="submit" name="btn-register" value="Register" class="btn btn-primary"></center>
                </div>
                <hr/>
                <a href="index.php">Login</a>
            </form>
        </div>
    </div>
</body>
</html>