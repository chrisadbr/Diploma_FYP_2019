<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>
    <title>Document</title>
</head>
<body>
<?php
  /*include '../db_connect.php';
  $query = 'SELECT * FROM addbook';
  $display = $conn->query($query);
  if(mysqli_num_rows($display) > 0){
      while ($row = mysqli_fetch_array($display)){
       ?>
       <div>
        <embed src = "<?php echo $row['filename'];?>">
       </div>
       <?php
      }
  }*/
  ?>
  <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Booktittle</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'config.php';
                    $query = 'SELECT * FROM addbook';
                    $stm = $conn->prepare("select * from addbook");
                    $stm -> execute();
                    while($row = $stm->fetch()){
        
                ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['book_tittle'];?></td>
                    <td><a href="download.php?id=<?php echo $row['id'];?>">Download</a></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>