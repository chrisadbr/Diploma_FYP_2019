<style>
   #comment_Container{
     background-color: white;
     width: 64%;
     margin-left: 17%;
     margin-top: 0.7px;
     padding-bottom: 1%;
   }
   #name, #_date{
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
  
    function setComment($conn){
        
        if(isset($_POST['commentSubmit'])){
          $name = $_POST['userName'];
          $date = $_POST['date'];
          $message = $_POST['ujumbe'];

        $sql = "INSERT INTO cryptocurrency(name, date, message)VALUES('$name', '$date', '$message')";
        $result = $conn -> query($sql);
    }
 
  }
  function getComment($conn){

    $sql = "SELECT * FROM cryptocurrency ORDER BY date DESC";
    $result = $conn->query($sql);
    while($row = $result -> fetch_assoc()){
      echo "<div id = 'comment_Container'>";
          echo "<div id = 'name'>";
            echo $row['name'];
          echo "</div>";
          
          echo "<div id = '_date'>";
            echo $row['date'];
          echo "</div>";
          echo "<div id = 'message'>";
            echo $row['message'];
          echo "</div>";
      echo "</div>";
    }
    
  }
?>