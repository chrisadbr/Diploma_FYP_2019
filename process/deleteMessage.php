<?php
    include '../db_connect.php';
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    
    if(empty($email)){
        echo "The field cannot be empty";
    }else{
        mysqli_query($conn, "DELETE FROM contact WHERE email = '$email'");
        if ( mysqli_affected_rows($conn) > 0 ) {
            echo "Successfully deleted the message";
        } else {
            echo "Sorry message could not be found";
        }
    }
?>