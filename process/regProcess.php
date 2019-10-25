<style>
        a{
            text-decoration: none;
            color: red;
        }
</style>
<?php include_once '../db_connect.php'; ?>
<?php

    if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email'])
    && isset($_POST['pass1']) && isset($_POST['pass2']) && isset($_POST['dob']) 
    && isset($_POST['pNumber']) && isset($_POST['user'])){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['pNumber'];
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];
        $username = $_POST['user'];
        $dob = $_POST['dob'];
    }
    $query = "SELECT username FROM users WHERE username = '$username'";
    $result = $conn->query($query);
    //$user = $result->fetch_assoc();    
        if(empty($fname) || empty($lname) || empty($email) || empty($phone) || empty($pass1)
        || empty($pass2) || empty($dob) || empty($username)){
            echo "Please fill out all the fields";
        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Please enter valid email address";
        }else if(mysqli_num_rows($result) > 0){
            echo "Sorry username already exists";
        }else if(str_word_count($phone) < 9){
            echo "Phone number must be at least nine digits long";
        } else if(str_word_count($pass1) < 8){
            echo "Password must be at least eight characters long";
        }else if($pass1 != $pass2){
            echo "Password entered do not match";
        }else{
            $password = md5($pass1);
            $sql = $conn->query("INSERT INTO users(firstname, lastname, email, phone_number, dob, username, password)
            VALUES('$fname', '$lname', '$email', '$phone', '$dob', '$username', '$password')");
            if($sql == true){
                echo "Thank you for registering please 
                <a href = 'login.php'>login<a>";
            }else{
                echo "Error registering";
            }
        }  
    
?>