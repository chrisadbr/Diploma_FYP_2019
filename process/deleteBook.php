<?php
    include '../db_connect.php';
    if(isset($_POST['book'])){
        $book = $_POST['book'];
    }
    
    if(empty($book)){
        echo "The field cannot be empty";
    }else{
        mysqli_query($conn, "DELETE FROM addbook WHERE id = '$book'");
        if ( mysqli_affected_rows($conn) > 0 ) {
            echo "Successfully removed the book";
        } else {
            echo "Sorry the book could not be found";
        }
    }
?>