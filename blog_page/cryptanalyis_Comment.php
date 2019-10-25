<style>
    #form_container{
     background-color: white;
     width: 64%;
     margin-left: 17%;
     margin-top: 0.7px;
     padding-bottom: 1%;
   }
   #user, #time{
     margin-left: 4%;
     padding-top: 2%;
     color: 00BFFF;
     font-weight: bold;
   }
   #comment{
     margin-left: 4%;
     padding-top: 2%;
   }
</style>
<?php
    function comment($conn){
        if(isset($_POST['cyrpComment'])){

            $userName = $_POST['user_name'];
            $date = $_POST['date_time'];
            $message = $_POST['comment'];

            $sql = "INSERT INTO cryptanalysis(name, date, message)VALUES('$userName', '$date', '$message')";
            $result = $conn -> query($sql);
        }
    }
    function getComment($conn){

        $data = "SELECT * FROM cryptanalysis ORDER BY date DESC";
        $result = $conn->query($data);  
        while($row = $result -> fetch_assoc()){
            echo "<div id = 'form_container'>";
                echo "<div id = 'user'>";
                    echo $row['name'];
                echo "</div>";
                echo "<div id = 'time'>";
                    echo $row['date'];
                echo "</div>";
                echo "<div id = 'comment'>";
                    echo $row['message'];
                echo "</div>";
            echo "</div>";
        }
    }
?>