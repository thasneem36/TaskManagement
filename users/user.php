<?php

session_start();

if(!isset($_SESSION['username'])){
    header('location: ../loginPage/login.php');
    exit();
}

include("../db_connection.php");
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $task = $_POST['task'];
    $importance = $_POST['importance'];

    $sql = "INSERT INTO task(task,importance) VALUES ('$task','$importance')";

    if($conn->query($sql) === TRUE){
        echo "Task added";
    }else{
        echo "Error".$conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="user.css">
</head>
<body>

    <header>
        <nav>
            <p>Task Manegment</p>
            <ul>
                <li>Dashboard</li>
                <li>logout</li>
            </ul>
        </nav>
    </header>

    <div class="username">
        <p>Hello
            <span>
            <?php
            echo $_SESSION['username'];
            ?>
            </span>
        </p>
    </div>

    <div class="container">
        <h1>Task List</h1>
        <form action="./user.php" method="post">
            <label for="task">Add Task</label>
            <input type="text" name="task" placeholder="Add task">

            <label for="importance">importance level</label>
            <select name="importance" id="importance">
                <option value="low">Low</option>
                <option value="medium">medium</option>
                <option value="high">high</option>
            </select>

            <input type="submit" value="Add Task">
        </form>
    </div>
    
</body>
</html>