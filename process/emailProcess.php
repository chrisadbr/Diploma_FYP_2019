<?php include '../db_connect.php';?>
<?php
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Enter valid email address";
    }else{
        $insert_query = $conn->query("INSERT INTO subscribers(email)VALUES('$email')");

        if($insert_query == true){
            echo "Thank you for subscribing with us";
        }else{
            echo "Error";
        }
    }
?>