<?php 
require("register.class.php");
?>

<?php
if(isset($_POST['submit'])){
    $user = new RegisterUser($_POST['username'], $_POST['password']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="" method="post">
    <div class="wrapper">
        <div class="title">
            Registration Form
        </div>
        <div class="form">
            <div class="inputfield">
                <label>User Name</label>
                <input type="text" class="input" name="username">
            </div>
            <div class="inputfield">
                <label>Password</label>
                <input type="password" class="input" name="password">
            </div>
            <div class="inputfield">
                <input type="submit" name="submit" class="btn" value="Register">
            </div>
            <div class="inputfield">
                <p>Already have an account? <a href="login.php" class="login-link">Login</a></p>
            </div>
            <p class="error"><?php echo @$user->error ?></p>
            <p class="success"><?php echo @$user->success ?></p>
        </div>
    </div>
</form>

</body>
</html>
