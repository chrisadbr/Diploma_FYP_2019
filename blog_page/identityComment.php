<style>
    #identityComment{
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
   #_message{
     margin-left: 4%;
     padding-top: 2%;
   }
</style>
<?php
    function identityComment($conn){
        if(isset($_POST['identitySubmit'])){

            $username = $_POST['identity_user'];
            $message = $_POST['message'];
            $date = $_POST['identity_date'];

            $command = "INSERT INTO identity_theft(name, date, message)
            VALUES('$username', '$date', '$message')";
            $data = $conn->query($command);
        }
    }
    function displayIdenityComments($conn){

        $sql = "SELECT * FROM identity_theft ORDER BY date DESC";
        $data = $conn->query($sql);

        while($row = $data->fetch_assoc()){
            echo "<div id = 'identityComment'>";
            echo "<div id = 'name'>";
            echo $row['name'];
          echo "</div>";
          
          echo "<div id = 'date'>";
            echo $row['date'];
          echo "</div>";
          echo "<div id = '_message'>";
            echo $row['message'];
          echo "</div>";
        echo "</div>";
        }

    }
    function cryptoComment($conn){

        if(isset($_POST['cryptoSubmit'])){

            $name = $_POST['crypto-user'];
            $date = $_POST['crypto-date'];
            $message = $_POST['message'];

            $_command = "INSERT INTO cryptography(name, date, message)VALUES
            ('$name', '$date', '$message')";
            $process = $conn->query($_command);
        }
    }
    function getCryptoComments($conn){
        $sql = "SELECT * FROM cryptography ORDER BY date DESC";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()){
            echo "<div id = 'identityComment'>";
            echo "<div id = 'name'>";
            echo $row['name'];
          echo "</div>";
          
          echo "<div id = 'date'>";
            echo $row['date'];
          echo "</div>";
          echo "<div id = '_message'>";
            echo $row['message'];
          echo "</div>";
        echo "</div>";
        }
    }
?>