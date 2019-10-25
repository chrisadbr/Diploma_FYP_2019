<?php
    $conn = new mysqli('localhost', 'root', '');
    $conn -> select_db("mProject");

        $course_name = $_POST['name'];
        $code = $_POST['code'];
    
    if(empty($course_name) || empty($code)){
        echo "Please fill out all the fields";
    }else{
        $insert_query = $conn->query("INSERT INTO courses(title, code)VALUES('$course_name', '$code')");
        if($insert_query == true){
            echo "New Course has been added";
        }else{
            echo "Error adding a course";
        }
    }
