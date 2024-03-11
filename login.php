<?php require("login.class.php") ?>


<?php
if(isset($_POST['submit'])){
    $user = new LoginUser($_POST['username'], $_POST['password']);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="" method="post">
    <div class="wrapper">
        <div class="title">
            Login Form
        </div>
        <div class="form">
            <div class="inputfield">
                <label>Username</label>
                <input type="text" class="input" id="username" name="username">
            </div> 
            <div class="inputfield">
                <label>Password</label>
                <input type="password" class="input" id="password" name="password">
            </div>
            <div class="inputfield">
                <input type="submit" name="submit" class="btn">
            </div>
            <div class="inputfield">
                <p>Don't have an account? <a href="index.php" class="register-link">Register now</a></p>
            </div>
            <p class="error"> <?php echo @$user->error ?> </p>
    <p class="success"> <?php echo @$user->success ?> </p>
        </div>
    </div>
   

</form>
  
</body>
</html>
