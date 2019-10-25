<?php
    require_once '../db_connect.php'; 
    
        $course_name = $_POST['name'];
        $code = $_POST['code'];
    $insert_query = $conn->query("INSERT INTO courses(title, code)VALUES('$course_name', '$code')");
    if($insert_query == true){
        echo "New Course has been added";
    }else{
        echo "Error adding a course";
    }
?>