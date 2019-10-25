<?php
    require_once '../db_connect.php';
    session_start();
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['pass'];
        if(empty($username) || empty($password)){
            header("location: ../login.php?logError= Please fill all the fields to login");
        }else{
            $password = md5($password);
            $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($conn, $query);
    
            if(mysqli_num_rows($result) == 1){
    
                $_SESSION['user'] = $_POST['username'];
                header("location: ../courses.php");
            }else{
                header("location: ../login.php?logError= Incorrect username or password ");
            }
         }
    }
?>