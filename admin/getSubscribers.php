<style>
    #subs{
        width: 300px;
        background-color: #F5F5F5;
        padding: 15px;
    }
    p{
        color: red;
        font-style: italic;
        font-size: 16px;
    }
</style>
<?php
    include '../db_connect.php';
    $sql = "SELECT * FROM subscribers";
    $result = $conn -> query($sql);
    $subs = mysqli_num_rows($result);
    echo "<p>There are ".$subs." subsriber(s)</p>";
    if($subs > 0){      
        while($row = $result -> fetch_assoc()){
            echo "<div id = 'subs'>";
            echo $row['email']."</div>";
        }
    }else{
        echo "No subscribers found";
    }
?>