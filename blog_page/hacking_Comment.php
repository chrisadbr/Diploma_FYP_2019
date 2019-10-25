<style>
    #comment_Container{
     background-color: white;
     width: 64%;
     margin-left: 17%;
     margin-top: 0.7px;
     padding-bottom: 1%;
   }
   #name, #date{
     margin-left: 4%;
     padding-top: 2%;
     color: 00BFFF;
     font-weight: bold;
   }
   #message{
     margin-left: 4%;
     padding-top: 2%;
   }
</style>
<?php
    function hackerComment($conn){

        if (isset($_POST['hackingSubmit'])){

            $name = $_POST['userName'];
            $date = $_POST['date'];
            $message = $_POST['message'];

            $sql = "INSERT INTO hacking(name, date, coment)
            VALUES('$name', '$date', '$message')";
            $data = $conn->query($sql);
        }
    }
    function  getHacker_Comment($conn){
        $data = "SELECT * FROM hacking ORDER BY date DESC";
        $result = $conn->query($data);
        while($row = $result->fetch_assoc()){
            echo "<div id = 'comment_Container'>";
            echo "<div id = 'name'>";
              echo $row['name'];
            echo "</div>";
            
            echo "<div id = 'date'>";
              echo $row['date'];
            echo "</div>";
            echo "<div id = 'message'>";
              echo $row['coment'];
            echo "</div>";
        echo "</div>";
      }
    }
?>