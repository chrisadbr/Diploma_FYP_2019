<style>
#message{
    background-color: #F5F5F5;
    width: 300px;
    height: 100px;
    padding: 20px;
}
p{
    font-style: italic;
    font-size: 15px;
}
</style>
<?php
    include '../db_connect.php';

    $sql = "SELECT * FROM contact";
    $result = $conn -> query($sql);
    if(mysqli_num_rows($result) > 0){  
        while($row = $result -> fetch_assoc()){
            echo "<p>From: ".$row['fullname']."</p>";
            echo "<p>Email: ".$row['email']."</p>";
            echo "<p>Subject: ".$row['subject']."</p>";
            echo "<div id = 'message'>".$row['message']."</div>";
        }
    }
?>