<?php  require_once '../db_connect.php'; ?>
<?php
    if(isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['subject'])
    && isset($_POST['msg'])){

        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['msg'];
    }
    if(empty($fullname) || empty($email) || empty($subject) || empty($message)){
        echo "All fields must be filled";
    }
    else if(filter_var($fullname, FILTER_VALIDATE_INT)){
        echo "Name must be in text format";
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Please enter valid email address";
    }
    else if(filter_var($subject, FILTER_VALIDATE_INT)){
        echo "Subject must be in text format";
    }else{

        $insert_query = $conn->query("INSERT INTO contact(fullname, email, subject, message)
        VALUES('$fullname', '$email', '$subject', '$message')");

        if($insert_query == true){
            echo "Your message has been received";
        }else{
            echo "Error sending a message";
        }
    }
?>