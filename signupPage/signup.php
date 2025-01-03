<?php

include("../db_connection.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];

    $password = $_POST['password'];

    $email = $_POST['email'];
    $ConformPassword = $_POST['ConformPassword'];

    if($password === $ConformPassword){
        $password_h = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(username,email,PASSWORD) VALUES('$username','$email','$password_h');";
        
        $result = mysqli_query($conn,$sql);

        if($result === TRUE){
            echo "successfully account creation";
            header("Location: ../loginPage/login.php");
            exit();
        }else{
            echo "account creation feild";
        }
    }

    
}

?>