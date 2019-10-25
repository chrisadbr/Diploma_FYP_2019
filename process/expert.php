<?php
     require_once '../db_connect.php';
     session_start();
    if(isset($_POST['expert_login'])){
        $username = $_POST['expert'];
        $password = $_POST['pass'];
    }
    if(empty($username) || empty($password)){
        header("location: ../expert.php?logError= Please fill all the fields to login");
    }else{
        $pass = md5($password);
        $sql = "SELECT * FROM expert WHERE username = '$username' AND password = '$pass'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) == 1){

            $_SESSION['user'] = $username;
            header("location: ../courses.php");
        }else{
            header("location: ../expert.php?logError= Incorrect username or password ");
        }
     }
?>