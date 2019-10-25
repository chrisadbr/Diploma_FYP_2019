<?php
     require_once '../db_connect.php';
     session_start();
    if(isset($_POST['admin_login'])){
        $username = $_POST['admin'];
        $password = $_POST['pass'];
    }
    if(empty($username) || empty($password)){
        header("location: ../admin_login.php?logError= Please fill all the fields to login");
    }else{
        $pass = md5($password);
        $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$pass'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) == 1){

            $_SESSION['admin'] = $username;
            header("location: ../admin_page.php");
        }else{
            header("location: ../admin_login.php?logError= Incorrect username or password ");
        }
     }
?>