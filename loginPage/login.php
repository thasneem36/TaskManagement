<?php

include ("../db_connection.php");

// if($_SERVER['REQUEST_METHOD'] == "POST")
if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' and PASSWORD = '$password';";

    // mysqli_query($conn,$sql)
    $result = $conn->query($sql);

    if($result->num_rows>0){

        session_start();
        $_SESSION['username'] = $username;

        header("Location: ../users/user.php");
    }else{
        echo "Invalid username or password";
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    
    <div class="container">
        <h1>login page</h1>
        
        <div class="signupFrom">
            <form action="./login.php" method="post">

                <label for="username">UserName</label>
                <input type="text" name="username" placeholder="Enter Your Username" required>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="enter your password" required>

                <input type="submit" value="Login" name="login">

            </form>
            <div class="loginBtn">
                <p>if you dont have an account</p>
                <button><a href="../signupPage/signupPage.html">Signup</a></button>
            </div>
        </div>
    </div>
</body>
</html>