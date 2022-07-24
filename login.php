<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <div id="main">
        <h1>login</h>
        <form method="POST">
            Username <input type="text" name="username" class="text" outocomlete="off" required>
            Password <input type="password" name= "password" class="text" required>
            <input type="Submit" name="submit" id="sub">
        </form>
    </div>
    
</body>
</html>
 <?php
    if (insset($_POST['submit'])) {
        $un=$_POST['username'];
        $pw=$_POST['password'];

        if ($un=='username'&& $pw=='password'){
            header("location:home.html");
            exit
        }
        else
            echo _"Invalid Username/Password"_;
    }
    
?>

    