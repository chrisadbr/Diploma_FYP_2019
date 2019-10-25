<?php
    include '../db_connect.php';
    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }
    
    if(empty($id)){
        echo "The field cannot be empty";
    }else{
        $sql = "DELETE FROM courses WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
            echo "Successfully removed the course";
        } else {
            echo "Sorry course not found";
        }
    }
?>